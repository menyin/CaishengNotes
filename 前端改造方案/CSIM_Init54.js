/*根据用户状态初始化聊天窗口*/
(function ($) {

    var cookie = $.cookie;
    var cookieDomain = document.location.href.indexOf('.cs') > -1 ? '.597.cs' : '.597.com';

    console.log("如果cookie报错，则说明原本jQuery.cookie插件和现有cookie有冲突，需要整合");
    console.log("企业后台需要修改footer和header里都有jQuery.cookie插件引用");

    if (cookie.get && cookie.set) {
        var nickName = cookie.get('nickname', {isDecode: true, domain: cookieDomain});
        if (!nickName || !localStorage) {
            return false;
        }

        /*获取当前用户的融云信息并执行im初始化*/
        var rongyunInfo = JSON.parse(($.cookie.get('rongyunInfo', {isDecode: true, domain: cookieDomain}) || null));
        if (rongyunInfo) {
            initCSIM(rongyunInfo);
        } else {
            $.post("/api/web/user.api", {act: 'getRongyunToken'}, function (data) {
                (data.constructor.name == 'String') && (data = JSON.parse(data));
                var dataObj = data;
                if (dataObj && dataObj.status == 1) {
                    $.cookie.set('rongyunInfo', JSON.stringify(data), {isEncode: true, domain: cookieDomain});
                    nickName && initCSIM(dataObj);//执行初始化

                }
            });

        }
    } else {//兼容jQuery.cookie插件，等后台代码整合后可以去掉
        var nickName = cookie('nickname');
        if (!nickName || !localStorage) {
            console.log("msg:此浏览器不兼容localStorage或nickName不可用；")
            return false;
        };

        /*获取当前用户的融云信息并执行im初始化*/
        var rongyunInfo = JSON.parse(($.cookie('rongyunInfo') || null));
        if (rongyunInfo) {
            initCSIM(rongyunInfo);
        } else {
            $.post("/api/web/user.api", {act: 'getRongyunToken'}, function (data) {
                (data.constructor.name == 'String') && (data = JSON.parse(data));
                var dataObj = data;
                if (dataObj && dataObj.status == 1) {
                    $.cookie('rongyunInfo', JSON.stringify(data), {domain: cookieDomain});
                    nickName && initCSIM(dataObj);
                }
            });

        }
    }

    /**
     *初始化聊天界面
     *@param rongyunInfo {Object} 包含当前用户的融云信息
     */
    function initCSIM(rongyunInfo) {
        /*测试用例*/
        //先测试这两个账号 个人 13328770863 / zxc123  企业 hk59777 / cs597110
        if (!(rongyunInfo.uid == 'f198693618958' || rongyunInfo.uid == '7a0a51823265')) {
            return false;
        }

        /*im初始化配置*/
        angular.module('CSIM_Config', ['RongWebIMWidget'])
            .factory('setting', ['WebIMWidget', function () {
                return {
                    display: false,//默认最小化
                    // appkey: '3argexb6r934e',//后端写入appkey
                    appkey: '0vnjpoadn08qz',
                    // token: '2eg8Ji6h+yogIydGYyAZgHryPPkHsvRwWZV8SVI5ICdaNPahtVMiWMCJhI1JMB9njzkH9uHxCkg='//后端写入token
                    token: rongyunInfo.rongyunToken,
                    rongyunInfo: rongyunInfo,
                    userInfoProvider: userInfoProvider
                }
            }]);
        angular.bootstrap(document, ['CSIM']);


        /**
         * 用户信息供应商
         * @param targetIds 目标用户id或id列表
         * @param obj 请求客户的回调对象
         * @remark
         * 1.当首次登陆加载im时，多个会话列表，进行多次初始化，而api回调会有时间差，导致获取的imUserInfos为空！！
         * 2.请求用户信息列表时传递的用户uid必须按时间排序，后端根据顺序进行筛选过滤并返回一定数量的数组
         * 3.本地缓存使用localstorage存储，格式和api返回数据格式保持一致，如下
         *  {
         *       status: 1,
         *       rows: [{
         *           "uid": "dc525c3",
         *           "name": "厦门才盛人才服务有限公司（内测）",
         *           "portrait": "\/\/pic.597.cs\/logo\/2017\/12\/25\/17122503172149907.jpeg"
         *       }, {
         *           "uid": "c086cb3230911",
         *           "name": "厦门想补习科技有限公司",
         *           "portrait": "\/\/pic.597.cs\/logo\/2017\/11\/07\/17110706085451722.jpeg"
         *       }],
         *       expires:'Wed, 17 Jan 2018 09:43:24 GMT'
         *
         *   };
         */
        function userInfoProvider(targetIds, obj) {

            //如果是当前用户的targetId则直接从rongyunInfo里面取，否则去api获取
            var rongyunInfo = null;
            if($.cookie.get){
                rongyunInfo =JSON.parse(($.cookie.get('rongyunInfo', {isDecode: true, domain: cookieDomain}) || null));
            }else{
                rongyunInfo =JSON.parse(($.cookie('rongyunInfo') || null));

            }
            if (targetIds == rongyunInfo.uid) {
                sendData2Client([rongyunInfo]);
                return false;
            }

            //获取本地缓存用户信息
            var imUserInfos = JSON.parse(localStorage.getItem('imUserInfos'));//当首次登陆加载im时，多个会话列表，进行多次初始化，而api回调会有时间差，导致获取的imUserInfos为空！！

            //超过过期时间则imUserInfos清空处理，暂时注释掉
            /*if(imUserInfos&&new Data().getTime()>imUserInfos.expires.getTime()){
                imUserInfos=null;
            }*/

            /*console.log('88888888888888')
            console.log(imUserInfos);
            console.log('9999999999999')*/

            /*主要处理逻辑*/
            if (imUserInfos&& imUserInfos.rongyunInfo && rongyunInfo.uid==imUserInfos.rongyunInfo.uid &&imUserInfos.rows.length > 0) {
                var targetIdArr = targetIds.split(',');
                //查找缓存中不存在的目标用户的id
                var notExistTargetArr = targetIdArr.minus(imUserInfos.rows, function (arr1Item, arr2Item) {
                    return [null, arr2Item.uid];
                });
                //查找缓存中已存在的目标用户的信息，即交集
                var intersectData = imUserInfos.rows.intersect(targetIdArr, function (arr1Item, arr2Item) {
                    return [arr1Item.uid, null];
                });
                //有未缓存的目标用户id则请求api获取数据
                if (notExistTargetArr.length > 0) {
                    getUserInfosByApi(notExistTargetArr.join(','), function (data) {
                        //对imUserInfos新增数据，并将imUserInfos重新进行缓存
                        imUserInfos.rows=imUserInfos.rows.concat(data.rows);
                        date = new Date();
                        date.setDate(date.getDate() + 30);
                        data.expires = date.toUTCString();//设置过期时间30天，大于该时间则在初始化时清空。暂时不加
                        localStorage.setItem('imUserInfos', angular.toJson(imUserInfos));

                        //将合并的数据返回给供应商请求者
                        var unionData = data.rows.concat(intersectData);
                        sendData2Client(unionData);
                    });
                } else {
                    //直接将交集返回给供应商请求者
                    sendData2Client(intersectData);
                }

            } else {
                //直接targetIds调用请求方法
                getUserInfosByApi(targetIds, function (data) {
                    console.log('测试请求的imUserInfos的rows里有null');
                    console.log(data);
                    //对数据进行缓存
                    date = new Date();
                    date.setDate(date.getDate() + 30);
                    data.expires = date.toUTCString();//设置过期时间30天，大于该时间则在初始化时清空。暂时不加
                    data.rongyunInfo = rongyunInfo;//设置过期时间30天，大于该时间则在初始化时清空。暂时不加
                    localStorage.setItem('imUserInfos', angular.toJson(data));
                    //发送最终处理的数据给供应商的请求者
                    sendData2Client(data.rows);
                });
            }


            /**
             * 请求api获取用户信息
             * 并进行将最终数据发送给供应商的请求者
             * @param _targetIds 用户的融云id 或 其逗号隔开的列表
             * @param callback 请求成功回调（进行数据过滤处理）
             */
            function getUserInfosByApi(_targetIds, callback) {
                var _this = this;
                callback.dd = _targetIds;//test  f198693618958
                $.post('/api/web/user.api', {act: 'getRongyunInfo', uid: _targetIds}, function (data) {
                    (data.constructor.name == 'String') && (data = JSON.parse(data));
                    callback&&callback(data);
                })
            }

            /**
             * 发送最终处理的数据给供应商的请求者
             * @param finalData 数据格式和api返回的data.rows一致
             */
            function sendData2Client(finalData) {
                if (finalData && finalData.length > 0) {
                    if (finalData.length == 1) {//请求单个用户信息
                        obj.onSuccess({
                            userId: finalData[0].uid,
                            name: finalData[0].name,
                            // portraitUri: finalData[0].portrait
                            portraitUri: 'http:'+finalData[0].portrait
                        });
                    } else {//请求多个用户信息，及用户信息列表
                        var teamArr = [];
                        for (var i = 0; i < finalData.length; i++) {
                            teamArr.push({
                                userId: finalData[i].uid,
                                name: finalData[i].name,
                                // portraitUri: finalData[i].portrait
                                portraitUri: 'http:'+finalData[i].portrait
                            });
                        }
                        obj.onSuccess(teamArr);
                    }

                } else {
                    obj.onSuccess({
                        userId: targetIds,
                        name: '匿名用户：' + targetIds,
                    });
                }
            }
        }
    }

    /**
     * 注册会话按钮单击事件
     */
    $(function () {
        var csim_target_btn = $('.csim_target_btn');
        if (csim_target_btn.length > 0) {
            csim_target_btn.get(0).onclick = function () {
                if (CSIM && CSIM.setConversation) {
                    var targetId = $(this).attr('data-target-id');
                    var targetName = $(this).attr('data-target-name');
                    CSIM.setConversation(Number(1), targetId, targetName);
                } else {
                    showTalk();
                }
                return false;
            };
        }
    });

})($);


/**
 * 求两个数组交集
 * @param arr 被交集的数组
 * @param cmdFun 返回两个数组项对比的属性的函数，详见示例2
 * @param flag 交集获取是哪个数组的元素项，默认是被交集数组
 * @returns {any[]} 交集后的数组项，默认以第一个数组为准
 * @remark
 * 如果操作的数组里有重复的元素则会出错，此扩展则无用
 * @example
 * var a1 = [1, 2, 3, 4];
 var a2 = [3, 5, 6, 4];
 var a3 = a1.intersect(a2);
 console.log('示例1'+a3);
 a1 = [{name:1},{name:2},{name:3},{name:4}];
 var a2 = [{age:1},{age:4},{age:5},{age:6}];
 var a3 = a1.intersect(a2,function (a1,a2) {
            return [a1.name,a2.age];
        },false);
 console.log('示例2'+a3);
 */
Array.prototype.intersect = function (arr, cmdFun, flag) {
    var result = new Array();
    var obj = {};
    for (var i = 0; i < arr.length; i++) {
        var atr2 = arr[i];
        if (cmdFun) {
            atr2 = cmdFun({}, arr[i])[1] || arr[i];
        }
        obj[atr2] = {};
        obj[atr2].art2 = arr[i];
    }
    for (var j = 0; j < this.length; j++) {
        var atr1 = this[j];
        if (cmdFun) {
            atr1 = cmdFun(this[j], {})[0] || this[j];
        }
        if (obj[atr1]) {
            if (flag) {
                result.push(obj[atr1].art2)
            } else {
                result.push(this[j]);//结果数组默认填充第一个数组的元素
            }
        }
    }
    return result;
}

/**
 * 求两个数组差集,即属于当前数组A但不属于目标数组B的集合 即A-B
 * @param arr 减数的数组
 * @param cmdFun 返回两个数组项对比的属性的函数，详见示例2
 * @returns {any[]} 相减之后的集合 即A-B
 * @remark
 * 该方法注意顺序  谁是A 谁是B  顺序不同则结果不同
 * @example
 console.log('示例1：');
 var a1 = [1, 2, 3, 4];
 var a2 = [3, 5, 6, 4];
 var a3 = a2.minus(a1);
 console.log(a3);

 console.log('示例2：');
 a1 = [{name:1},{name:2},{name:3},{name:4}];
 var a2 = [{age:1},{age:4},{age:5},{age:6}];
 var a3 = a1.minus(a2,function (a1,a2) {
            return [a1.name,a2.age];
        },false);
 // var a3 = a2.minus(a1,function (a2,a1) {
        //     return [a2.age,a1.name];
        // },false);
 console.log(a3);
 */
Array.prototype.minus = function (arr, cmdFun) {
    var result = new Array();
    var obj = {};
    for (var i = 0; i < arr.length; i++) {
        var atr1 = arr[i];
        if (cmdFun) {
            atr1 = cmdFun({}, arr[i])[1] || arr[i];
        }
        obj[atr1] = {};
        obj[atr1].art1 = arr[i];
    }
    for (var j = 0; j < this.length; j++) {
        var atr2 = this[j];
        if (cmdFun) {
            atr2 = cmdFun(this[j], {})[0] || this[j];
        }
        if (!obj[atr2]) {
            result.push(this[j]);
        }
    }
    return result;
}