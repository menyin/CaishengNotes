/**
 * 融云IM配置文件
 * Created by lll on 2017/11/20.
 * lll
 */
/*--------------------------js/CSIM.js begin-------------------------------------------------*/
/**
 * Created by Administrator on 2017/10/25.
 */
var CSIM = angular.module("CSIM", ["RongWebIMWidget","CSIM_Config"]);
//console.log(CSIM);
CSIM.controller("main", ["$scope", "WebIMWidget", "$http","setting", function($scope, WebIMWidget, $http,setting) {
    $scope.targetType = 1; //1：私聊 更多会话类型查看http://www.rongcloud.cn/docs/api/js/global.html#ConversationType
    $scope.targetId = setting._targetId;

    //是否显示“房源链接”选项
    try{
        if(fangLinkCon !='' ){
            fangLinkCon = JSON.parse(fangLinkCon);
            // $scope.houseLink = true;
              $scope.houseLink = false;//暂不显示
           $scope.houseTip = false;
           $scope.sessUid = setting._u;
        }
    }catch(e){
        console.log(e);
    }

    //注意实际应用中 appkey 、 token 使用自己从融云服务器注册的。
    var config = {
        appkey: setting.appkey,
        token: setting.token,
        displayConversationList: true,
        style:{
            right:3,
            bottom:3,
            width:430,
            positionFixed:true,
            conversationListPosition:WebIMWidget.EnumConversationListPosition.left
        },
        onSuccess: function(id) {
            $scope.user = id;
            //document.title = '用户：' + id;
            //console.log('连接成功：' + id);
        },
        onError: function(error) {
            if( error.code == 0 ){
                //token无效时强制刷新token
                $http({
                    method:'post',
                    url:'/api/user.do',
                    params:{
                        'act':'getImUserInfo',
                        'u':setting._u,
                        't':2
                    }
                }).then(function(data){
                    // location.reload();
                });
                console.log('连接失败：'+error.info);
            }else{
                console.log('连接失败');
            }

        }
    };
    config = angular.extend(config, setting);
    //console.log(WebIMWidget);
    if( setting.token ){
        RongDemo.common(WebIMWidget, config, $http, $scope);
    }

}]);
(function () {
    /*将相同代码拆出来方便维护*/
    window.RongDemo = {
        common: function (WebIMWidget, config, $http, $scope) {
            WebIMWidget.init(config);
            WebIMWidget.setUserInfoProvider(function (targetId, obj) {
                //获取用户信息
                getTargetIdUserName( targetId, $http, obj, $scope, WebIMWidget, 0)
                //console.log(targetId,ret);
                //if( ret ){
                //    obj.onSuccess({name:  ret});
                //}else{
                //    console.log(targetId+' is get user error',ret);
                //}
            });

            //WebIMWidget.setGroupInfoProvider(function (targetId, obj) {
            //    obj.onSuccess({
            //        name: '群组：' + targetId
            //    });
            //})

            $scope.setconversation = function () {
                //console.log($scope.targetId);
                if (!!$scope.targetId) {
                    getTargetIdUserName( $scope.targetId, $http, '', $scope,WebIMWidget, 1);
                    //if( ret ){
                    //    WebIMWidget.setConversation(Number($scope.targetType), $scope.targetId, ret);
                    //    WebIMWidget.show();
                    //    //obj.onSuccess({name: "" + ret});
                    //}else{
                    //    console.log($scope.targetId+' is get user error');
                    //}
                }
            };

            $scope.customerserviceId = "KEFU145914839332836";
            $scope.setcustomerservice = function () {
                WebIMWidget.setConversation(Number(RongIMLib.ConversationType.CUSTOMER_SERVICE), $scope.customerserviceId);
                WebIMWidget.show();
            }

            $scope.show = function () {
                WebIMWidget.show();
            };

            $scope.hidden = function () {
                WebIMWidget.hidden();
            };
            WebIMWidget.hidden();
        }
    }
})();
/**
 * 获取用户信息，本地存储用户信息；节省api读取次数
 * @param targetId
 * @param $http
 * @param retType
 * @returns {*}
 */
function getTargetIdUserName( targetId, $http, obj, $scope, WebIMWidget, retType ){
    var _imUser = getCookie('imUser'+targetId);
    var t = 0;//用户类型，0为个人，1为经纪人
    retType = !retType ? 0 : 1 ;
   // 如果cookie，没有用户头像，重新请求数据(cookie没有设置过期，为了更新cookie)
    var reGetFlag = 0;
    if(_imUser){
       var _imUserTemp = JSON.parse(_imUser);
        if(_imUserTemp.photo==''){
            reGetFlag = 1;
        }
    }
    if( !_imUser || reGetFlag){
        try{
            $http({
                method:'post',
                url:'/api/user.do',
                params:{
                    'act':'getImUserInfo',
                    'u':targetId
                }
            }).then(function(data){
                data.data.msg.mobile = mobileDeal(data.data.msg);
                setCookie('imUser'+targetId, JSON.stringify(data.data.msg), null, _domain);
                _xingming = data.data.msg.xingming;
                _mobile = data.data.msg.mobile;
                _portraitUri = !data.data.msg.photo ? '' : 'https://pic01.917.com'+data.data.msg.photo;
                t = data.data.msg.type;
                _imUser = !_xingming ? _mobile : _xingming ;
                _imUser = !_imUser ? '已注销用户' : _imUser ;
                if(retType){
                    _imUser = !t  ?  '用户：'+_imUser : '经纪人：'+_imUser ;
                }
                //console.log(t,_imUser,retType);
                //console.log(obj);
                if( !obj ){
                    WebIMWidget.setConversation(Number($scope.targetType), $scope.targetId, _imUser);
                    WebIMWidget.show();
                }else{
                    obj.onSuccess({userId:targetId,name: _imUser, portraitUri:_portraitUri});
                }
                //return _imUser;
            });
            /*$.ajax({
                method:'post',
                url:'/api/user.do',
                data: "act=getImUserInfo&u="+targetId,
                async: false,
                success:function(data){
                    console.log(11,data);
                    //setCookie('imUser'+targetId, JSON.stringify(data.data.msg), null, _domain);
                    _xingming = data.msg.xingming;
                    _mobile = data.msg.mobile;
                    t = data.msg.type;
                    _imUser = !_xingming ? _mobile : _xingming ;
                    _imUser = !_imUser ? '已注销用户' : _imUser ;
                    if(retType){
                        _imUser = !t  ?  '用户：'+_imUser : '经纪人：'+_imUser ;
                    }
                    //obj.onSuccess({name:  _imUser});
                    return _imUser;
                }
            });*/
        }catch(error){
            return false;
            console.log('error:get im user', error);
        }
    }else{
        try{
            _imUser = JSON.parse(_imUser);
            _imUser.mobile = mobileDeal(_imUser);
            t = _imUser.type;
            _portraitUri = !_imUser.photo ? '' : 'https://pic01.917.com'+_imUser.photo;
            _imUser = !_imUser.xingming ? _imUser.mobile : _imUser.xingming ;
            _imUser = !_imUser ? '已注销用户' : _imUser ;
            if(retType){
                _imUser = !t  ?  '用户：'+_imUser : '经纪人：'+_imUser ;
            }
            if( !obj ){
                WebIMWidget.setConversation(Number($scope.targetType), $scope.targetId, _imUser);
                WebIMWidget.show();
            }else{
                obj.onSuccess({userId:targetId,name:  _imUser,portraitUri:_portraitUri});
            }
            //console.log(t,_imUser,retType);
            //return _imUser;
        }catch(error){
            return false;
        }

    }
}

function mobileDeal(obj) {
    var mobile = obj.mobile;
    if (obj.type == 0) {
        var mark;
        var mobile = obj.mobile;
        if (mobile) {
            mark = mobile.indexOf("****");
            if (mark == -1) {
                var mb1 = mobile.substr(0, 3);
                var mb2 = mobile.substr(-4);
                mobile = mb1 + '****' + mb2;
            }
        }
    }
    return mobile;
}

/**
 * 开始聊天，通知服务器
 * @param hid 房源id
 * @param type 房源类型，1为二手房，2为租房
 */
function sendStart(hid,type){
    $.post('/api/user.do',{act:'isLogin'},
        function(json) {
            if( json.status == 200 ){
                type == !type ? 1 : type ;
                //发送服务器端，做提醒和推送
                //$.post('/api/user.do',{act:'sendImData',msgType:'1',hid:''+hid+'',type:''+type+''},function(){
                //
                //});
            }else{
                layer.open({
                    type : 2,
                    title : false,
                    area: ['560px','426px'],
                    closeBtn : false,
                    skin: 'layui-layer-nobg', //无背景色
                    content :  '/my/login.htm?refresh'
                });
            }
        }, 'json');
}

/*--------------------------js/CSIM.js end-------------------------------------------------*/

/*初始化配置*/
//angular.module('CSIM_Config', ['RongWebIMWidget'])
//    .factory('setting', ['WebIMWidget', function () {
//        return {
//            appkey: '3argexb6r934e',//后端写入appkey
//            token: "b/jvjEFD41TIVT0nsf9+L3ryPPkHsvRwWZV8SVI5ICcZ2I5Nl4OdNO01OjZxjjmVlD2dmk4RZ90=",//后端写入token
//            _targetId:'bb'
//            //appkey: __appKey,//后端写入appkey
//            //token: __token,//后端写入token
//            //_targetId:__targetId
//        }
//}]);
