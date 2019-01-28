<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Language" content="zh-CN" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="renderer" content="webkit">
	<meta name="mobile-agent" content="format=xhtml; url=//m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<meta name="mobile-agent" content="format=html5; url=//m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<meta name="mobile-agent" content="format=wml; url=//m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<title>{$job['jname']}_{$com['cname']}最新招聘信息 - {$domainInfo['region_name_short']}597人才网</title>
	<meta name="description" content="{$description}" />
	<!--[if lt IE 9]>
	<script src="//cdn.597.com/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/base.css?v=20141009" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/www/css/v2/v2-reset.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/www/css/v2/default/v2-header.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/www/css/v2/default/v2-widge.css?v=20141122" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/www/css/v2/default/v2-resume.css?v=20150321" />

	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/front.css?v=20140312" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/job.css?v=20140925" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/jobnew.css?v=201604" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/prettyPhoto.css?v=20150227" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/login.css?v=20140416" />
	<link rel="stylesheet" type="text/css" href="//cdn.{ROOT_DOMAIN}/css/icons.css?v=20140312" />
	<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js?v=20140312"></script>
    <!--cny_note_begin-->
	<!--<script type="text/javascript" src="//cdn1.597.com/min/js/v2/version.js?v=20141117"></script>
	<script type="text/javascript">
	window.CONFIG = {
		HOST: '//cdn1.597.com/min/??',
		COMBOPATH: '/js/v2/'
	}
	</script>
	<script type="text/javascript" src="//cdn1.597.com/min/??/js/v2/jpjs.js,/js/v2/jquery.min.js,/js/v2/base/util.js,/js/v2/base/class.js,/js/v2/base/shape.js,/js/v2/base/event.js,/js/v2/base/aspect.js,/js/v2/base/attribute.js,/js/v2/tools/cookie.js"></script>
	<script type="text/javascript" src="//cdn1.597.com/min/js/v2/global.js?v=20150116"></script>
	<script type="text/javascript">
	jpjs.loadJS('//cdn1.597.com/min/js/v2/common.js');
	</script>-->
	<!--cny_note_end-->

	<style>
		.person_dialog {padding:0;border-radius:4px;border:0;}
		.person_dialog .ui_dialog_container {padding:0;}
		.person_dialog .ui_dialog_close{
			position: absolute;overflow:hidden;border-radius: 0 4px 0 0;
			display: block;width: 37px;height: 37px;line-height:200px;right:0;top:0;
			background: url(//cdn.{ROOT_DOMAIN}/img/job/newjob/steel05.png) center 9px no-repeat;cursor: pointer;
		}
		.validate_dialog {border:6px solid #9e9e9e;}
		.newTytit a {color: #666;cursor: text;}
		footer{padding-bottom:85px;}
		textarea{font-color:#000;}
		.newJDutyList{width:100%; height:40px; border-bottom:1px solid #ccc; margin-top:20px;}
		.newJDutyList li{ float:left;}
		.newJDutyList li a{ display:block; padding:0px 30px; height:40px; line-height:40px; text-align:center; color:#666; font-size:16px;}
		.newJDutyList li.cut a{ height:39px; border-bottom:2px solid #2abbb4; color:#149c95; font-weight:bold;}
		.hide{display:none;}
		.tips {background: #FFFFCC; border: 1px solid #FFCC99; padding: 10px 15px; font-size: 12px; margin: 10px 30px; text-align: left;  }
		.tipClose {font-size: 20px; cursor: pointer; position: absolute; right: 10px; top: 2px;}
		footer{padding-bottom:40px;}
		.tips2{width: 208px; font-size: 12px; border: 1px solid #ffca08;padding: 10px 15px;background-color: #ffffe5;z-index: 1000;position: fixed;left: 50%;margin-left: 253px;bottom: 10px; text-align: left;}
		#announcement {background: #fff; padding:5px 20px;width: 960px;margin:0 auto; margin-bottom: 10px;}
		#announcement div {
		  overflow-y: hidden;
		  line-height: 20px;
		  height: 20px;
		  border:none;
		}
		.grayline {
		  border-right-width: 1px;
		  border-left-width: 1px;
		  border-right-style: solid;
		  border-left-style: solid;
		  border-right-color: #c8c8c8;
		  border-left-color: #c8c8c8;
		}
		#announcement li {
		  font-size: 12px;
		  float: left;
		  list-style-type: none;
		  margin-right: 11px;
		  margin-left: 5px;
		  white-space: nowrap;
		}
		#announcementbody ul {
		  margin: 0px;
		  padding: 0px;
		  clear: both;
		}
		#btns span:hover p {display: block;}
		.newJobtop {position: relative;}
		.imgEwm {position: absolute; width: 80px;  right:0px; top:12px;color:#999;height: 80px; margin-right:37px;}
		.imgEwm tr td{width: 2px!important;height: 2px!important;}
		/*.shareTitle {position: relative; top:-30px!important; font-size: 12px; text-align: right;color: #999;}*/
		.shareTitle {width: 100px;left: 540px;position: relative; top:-30px!important; font-size: 12px; text-align: right;color: #999;}
		.newJobEct {margin-right: 130px;}

		#pp_full_res img{ display:block; margin:0 auto;}
		.pp_hoverContainer{ top:30px;}
		div.pp_default .pp_content_container .pp_details{ margin:0;}
		div.pp_default .pp_close{ margin:0px 0px 0 0;}
		div.pp_default .pp_nav .currentTextHolder{ left:0px;}
		.pp_gallery{ margin-top:40px;}
		div.pp_default .pp_gallery ul li a{ border:1px solid #fff;}
		div.pp_default .pp_gallery ul li a:hover,div.pp_default .pp_gallery ul li.selected a{ border:1px solid #0f0;}
		#pp_full_res{ clear:both;}

		.pp_pic_holder.pp_default{ cursor:pointer;}
		div.ppt,div.pp_default .pp_top,div.pp_default .pp_bottom,div.pp_default .pp_expand{ display:none;}
		div.pp_default .pp_content_container .pp_left,div.pp_default .pp_content_container .pp_right{ background:none;}
		.pp_pic_holder.pp_default,div.pp_default .pp_content, div.light_rounded .pp_content{ background:none;}
		div.pp_default .pp_nav .currentTextHolder{ color:#fff; padding-left:0px; left:inherit; right:0px;}
		.pp_nav{ margin-top:0px; margin-right:30px;}
		div.pp_default .pp_close{ position:fixed; top:150px; right:50%; margin-right:-500px;}
		.wx_tip {position: fixed;  top:200px;  display: none;}
		.wx_close {position: absolute; right:2px; top:0; width: 20px; height: 20px; cursor: pointer; background: #fff; opacity:0; filter:alpha(opacity=0);}
		.apart{padding: 10px 15px; font-size: 12px; margin: 10px 30px;background: white; border: 1px solid #FFCC99;}
		.apart p{font-size: 14px;text-align: center;line-height: 30px;font-weight: bold;}
		.aparta{width: 304px;float: left;font-size: 14px;line-height: 30px}
		.appartAddr{color: #3d84b8;font-size: 12px;background: url(//cdn.{ROOT_DOMAIN}/img/job/newjob/newjob_25.png) left center no-repeat;padding-left: 17px;display:inline-block;vertical-align: middle;line-height: 30px}
		.zw_group {
		    /*float: left;*/
		    width: 640px;
		    border: solid 1px #CCCCCC;
		    border-radius: 0;
		    margin: 20px auto;
		}

		.zw_group dt {background: #eee;text-align: center;line-height: 40px;}
		.zw_group dt span {font-size: 16px;}
		.zw_group dt em {color: #1368a9;font-size: 16px;}
		.zw_group dd {line-height: 30px;position: relative;padding-left: 110px;margin: 5px auto;text-align: left;}
		.zw_group dd i {background: #f3f3f3;width: 80px;display: block;position: absolute;left: 10px;top: 0px;text-align: right;padding-right: 8px;}
		/*地图相关*/
		#mapinfo{width: 640px;overflow: hidden;}
		#dtjt_title{width: 640px!important;}
		#baidu_map{width: 638px!important;overflow: hidden;}
		#dtjt_wrap{width: 640px!important;}
		#map_route{text-align: left;}
		#map{left:0;}
		#map_search_result {width: 638px!important;}
		.msg {position:absolute;width: 98px;height: 42px;display: block;border: 1px solid #0092db;font-size: 19px;color: #0092db;background: url(//cdn.{ROOT_DOMAIN}/img/job/newjob/icon-msg.png) 10px center no-repeat;padding-left: 40px;line-height: 42px;}
		.msg2 {display: block;width: 118px;height: 42px;background: url(//cdn.{ROOT_DOMAIN}/img/job/newjob/icon-msg.png) 10px center no-repeat;color: #0092db;
		    /*background-color: white;*/
		     border: 1px solid #0092db;
		    line-height: 44px;
		    text-indent: 2em;
		    font-size: 18px;
		    /*font-weight: bold;*/
		    position: absolute;
		    bottom: 17px;
		    right: 29px;
		}
		.wxGroup{text-align: center; color: #666!important;margin-top: 10px; border-top:1px #e7e7e7 solid; }
		.wxGroup div{font-weight: bold; font-size: 16px; padding:20px 10px; text-align: left;}
		.ellipsis {
			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
		}
	</style>
</head>
<body id="body" class="minBody" >
<!--{template top}-->
	<div class="bread">
		<a href="/">首页</a>&gt;<a href="/zhaopin/">所有职位</a>&gt;{$jobClassUrl}&gt;<a class="cu">{$job[jname]}</a>
	</div>
	<div class="newJobBg">
		<div class="newJobLf">
			<div class="newJobtop">
				<p class="newtop1">
					<span>
						<a href="/com-{$com['_cid']}/" target="_blank">{$com['cname']}</a>
						<!--{if $job['cuname']}--> - {$job['cuname']}<!--{/if}-->
					</span>
				</p>
				<div class="newtopTit">
					<h2>{$job[jname]}<!--{if $job['urgency']==1}--><i></i><!--{/if}--><!--{if $job['jobType']==2}--><em>兼职</em><!--{/if}--></h2>
				</div>
				<!--
				<ul class="newtopLit">
				</ul>
				-->
				<div class="newJobEctBg"> <em class="newDateEct">刷新于：{$job['freshTime']}</em>
					<div class="newJobEct" >
						<!--<a href="javascript:;" class="newJect1" id="message">咨询</a>-->
						<!--{if !$favorites}-->
							<a href="javascript:;" class="newJect4" id="btnFav_bf">收藏</a>
						<!--{else}-->
							<a href="javascript:;" class="newJect4 Unclick" id="btnFav_bf">已收藏</a>
						<!--{/if}-->
						<div class="newJshare">
							<a href="#" class="newJect2">分享</a>
							<div class="newJsbg"> <em class="njsImg"></em>
								<div class="newJsbd">
									<a href="javascript:;" title="新浪微博" onclick="return shareTO('sina');">
										<i class="shareIcon01"></i>
									</a>
									<a href="javascript:;" title="腾讯微博" onclick="return shareTO('qqwb');">
										<i class="shareIcon02"></i>
									</a>
									<a href="javascript:;" title="QQ空间" onclick="return shareTO('qq');">
										<i class="shareIcon03"></i>
									</a>
									<a href="javascript:;" title="人人网" onclick="return shareTO('renren');">
										<i class="shareIcon04"></i>
									</a>
								</div>
							</div>
						</div>
						<a href="javascript:;" class="newJect3" id="report_bf">举报</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="imgEwm" id="imgEwm">
				</div>
				<p class="shareTitle">请用微信扫描分享</p>

		</div>
		<div class="newJobCot">
			<div class="newJobDtl">
			<!--{if $job['jobSalary']}-->
				<p>
					<i class="iconNew01"></i>
					<em class="gary">薪资：</em>
					<span class="f60">
						￥{$job['jobSalary']}
					</span>
					<!--
					<span class="gary">
						（普通员工
					）
					</span>
					-->
				</p>
			<!--{/if}-->
				<!--{if $job['rewardStr']}-->
				<div class="newWelfare">
					<img src="//cdn.{ROOT_DOMAIN}/img/job/newjob/welfare.png" width="24" height="24">
					<span class="gary" style="width:50px; float:left;">福利：</span>
					<ul class="newtopLit">
					<!--{loop $job['rewardStr'] $l}-->
						<li>{$l}</li>
					<!--{/loop}-->
					</ul>
				</div>
				<!--{/if}-->
				<p>
					<i class="iconNew02"></i>
					<em class="gary">要求：</em>
					<span>{$job['jobDegree']} <em class="gap">|</em> 工作经验{$job['jobWorkYear']} <em class="gap">|</em> 语言{$job['jobLanguage']} <em class="gap">|</em>{$job['jobGender']} <em class="gap">|</em> 年龄<!--{if $job['jobAge']}-->{$job['jobAge']}<!--{/if}--></span>
					<!--{if $job['jobNewGraduate']}--><span class="gary">（可接收应届生）</span><!--{/if}-->
				</p>
				<p>
					<i class="iconNew03"></i>
					<em class="gary">地址：</em>
					<span class="ellipsis" style="max-width:150px;">{$job[jobArea]}</span>
					<!--{if $job['jobAddInfo']}-->
					<span style="max-width:280px;" class="iconAddr" title="{$job['jobAddInfo']}">（{$job['jobAddInfo']}）</span>
					<!--{if !$unitList['longitude']}--><a target="_blank" href="/com-{$com['_cid']}/#mapinfo">查看公司地图</a><!--{/if}-->
					<!--<a target="_blank" href="//api.map.baidu.com/geocoder?address={$job['jobAddInfo']}&output=html">查看地图</a>-->
					<!--{/if}-->
				</p>
				<p>
					<i class="iconNew04"></i>
					<em class="gary">人数：</em>
					<span>招聘{$job['jobNumber']}<!--{if $job['worktimeLimit']}--><em class="gap">|</em> 一天工作{$job['worktimeLimit']}小时<!--{/if}--> <!--{if $job['workdayLimit']}--><em class="gap">|</em> 一周工作{$job['workdayLimit']}天<!--{/if}--></span>
					<!--
					<span class="gary">（47天后结束招聘）</span>
					-->
				</p>
				<div class="jobNewPhone" id="contactWayContainer">
					<!--{if $job['linkWay']=='0'}-->
						<div class="subPhonex">
							<i class="iconNew05"></i>
							<span class="iconTel">电话：</span>
							<span>企业未公开，请通过597人才网投递简历</span>
						</div>
					<!--{else}-->
						<div class="subPhonex">
								<i class="iconNew05"></i>
								<span class="iconTel">电话：</span>
								<em>{$linkWayStr}</em>
								<a href="javascript:void(0)" id="btnShowcontactWay">查看</a>
						</div>

						<div class="subPhonez subPhonezN" id="phonetip">
							<img src="//cdn.{ROOT_DOMAIN}/img/job/newjob/newJob_83.png" width="14" height="7" />
							<p>打电话前先投个简历，获得面试的成功率增加30%</p>
						</div>
					<!--{/if}-->
				</div>
				<div style="position: relative;height: 50px;width: 100%;">
					 <!--<a href="javascript:;" class="msg2" style="right: 200px;top: 5px;" onclick="showTalk();">和TA聊聊</a>-->
					 <!--<a href="javascript:;" class="csim_target_btn msg2" data-target-id="{$com['_cid']}" data-target-name="{$com['cname']}" style="right: 200px;top: 5px;" ng-click="setconversation()">和TA聊聊</a>-->
					 <a href="javascript:;" class="csim_target_btn msg2" data-target-id="{$com['_cid']}" data-target-name="{$com['cname']}" onclick="showTalk();" style="right: 200px;top: 5px;">和TA聊聊</a>
					<!--<input type="hidden" ng-model="targetId" ng-init="targetId='aa'">-->
				<a href="javascript:;" class="newJect5" style="top: 5px;" id="btnApplyJob">投个简历</a>
				</div>

			</div>
			<p class="tips">597人才网提示您：用人单位以任何名义向应聘者收取费用都属违法行为（如押金、资料费、代收体检费、代收淘宝信誉等），请提高警惕并注意保护个人信息！</p>
			<!--{if $unitList['isshow']==1}-->
			<dl class="zw_group">   <!--所属分账号-->

                        <dt><span>该职位隶属于部门：</span><em>{$unitList['cuName']}</em></dt>
                        <dd><i>联系人：</i>{$unitList['linker']}&nbsp;</dd>
                        <!--{if $unitList['linktel']}-->
                        <dd><i>部门电话：</i><u style="color: #DE3502;font-size: 18px;font-family: Tahoma, Geneva, sans-serif;text-decoration-line: none;">{$unitList['linktel']}</u>&nbsp;</dd>
                        <!--{/if}-->
                        <dd><i>部门邮箱：</i>{$unitList['email']}</dd>
                         <dd class="njmTit2"><i>部门地址：</i>{$unitList['address']} <!--{if $unitList['longitude']}--><a id="unitMap" href="javascript:;">上班路线查询</a><!--{/if}--></dd>
            </dl>
            <!--{/if}-->
		</div>
		<div class="newJDuty" >

			<ul class="newJDutyList">
				<li class="cut"><a href="javascript:void(0)" class="index-1">职位描述</a></li>
				<li><a href="javascript:void(0)" class="index-2">公司简介</a></li>
			</ul>


			<div class="newTytit hide">
				<h2>公司简介</h2>
				<div id="info" class="njmTit" style="line-height:30px;">{$com['comInfo']}</div>
			</div>


			<div class="newTytit">
				<!--<h2>职位描述</h2>-->
				<div style="line-height:30px;">{$job['jobContent']}</div>
			</div>
		</div>
	<div class="clear"></div>
</div>
<div class="newJobRt">
	<div class="nrtTop">
		<dl>
			<dt>
				<a href="/com-{$com['_cid']}/" target="_blank">
					<!--{if $com[logoUrl]}--><img src="//pic.{ROOT_DOMAIN}/logo/{$com[logoUrl]}" width="78" height="78" /><!--{else}--><img src="//cdn.{ROOT_DOMAIN}/img/job/newjob/default_logo.png" width="78" height="78" /><!--{/if}-->
				</a>
			</dt>
			<dd>
				<div>
					<p class="nrtTopt" >
						<a href="/com-{$com['_cid']}/" style="padding-right:0px;" target="_blank">
							<!--{if $com['csName']}-->{$com['csName']}<!--{else}-->{$com['cname']}<!--{/if}-->
							<!--{if $com['licenceCheck']>0}-->
							<img title="企业认证" src="//cdn.{ROOT_DOMAIN}/img/job/newjob/newjob_10.png" width="15" height="18" />
							<!--{/if}-->
						</a>
					</p>
					<p>
						<span><!--{if $com['csName']}-->{$com['cname']}<!--{else}-->{$com['csName']}<!--{/if}--></span>
					</p>
				</div>
			</dd>
		</dl>
		<!--{if $com['comStr']}-->
		<div class="nrtTopt">
			<img style="margin-right:8px;" src="//cdn.{ROOT_DOMAIN}/img/job/newjob/newjob_58.png" width="11" height="10" />
			{$com['comStr']}
			<img style="margin-left:8px;" src="//cdn.{ROOT_DOMAIN}/img/job/newjob/newjob_59.png" width="11" height="10" />
		</div>
		<!--{/if}-->
	</div>
	<div class="nrtTopLit">
		<ul class="nrtLit">
			<li>
				<span>行业</span><em title='{$industryName}'>{$industryName}</em>
			</li>
			<li>
				<span>性质</span><em>{$com['comType']}</em>
			</li>
			<li>
				<span>规模</span><em>{$com['comWorkers']}</em>
			</li>
			<!--{if $com[comUrl]}-->
			<li>
				<span>网址</span><a rel="nofollow" href="//{$com[comUrl]}" target="_blank">{$com[comSite]}</a>
			</li>
			<!--{/if}-->
		</ul>
		<!--{if $resPic}-->
		<div class="nrtBanner">
			<div class="infopicBg">
				<div class="infopic">
					<div class="picbox">
						<ul class="gallery piclist">
						<!--{loop $resPic $l}-->
							<li>
								<a class="prettyPhoto" href="//pic.{ROOT_DOMAIN}/com/{$l[picPath]}" rel="prettyPhoto[]">
									<img src="//pic.{ROOT_DOMAIN}/com/{$l[picPath]}" />
								</a>
							</li>
						<!--{/loop}-->
						</ul>
					</div>
				</div>
				<div class="pic_prev"></div>
				<div class="pic_next"></div>
			</div>

		</div>
		<!--{/if}-->
		<div class="newJobPdt">
			<ul class="nPdtLit">
				<li>
					<a class="cur" href="javascript:;">相似职位</a>
				</li>
				<li>
					<a href="javascript:;">该公司其他职位</a>
				</li>
			</ul>
			<div class="nPdtbg">
				<div class="nPdtL" style="display:block;">
				<!--{loop $jobInfoArr $l}-->
					<ul class="nPdt1">
						<li class="subNpd01">
							<!--{if $l[logoUrl]}--><a href='/com-{$l['_cid']}/'><img src="//pic.{ROOT_DOMAIN}/logo/{$l[logoUrl]}" width="60" height="60" /></a><!--{else}--><a href='/com-{$l['_cid']}/'><img src="//pic.{ROOT_DOMAIN}/logo/jobdefaultlogo.png" width="60" height="60" /></a><!--{/if}-->
						</li>
						<li class="subNpd02">
							<a href="/job-{$l['_jid']}.html" clss='station' target='_blank'>
								<span>{$l['jname']}</span>
							</a> <b>{$l['jobSalary']}</b>
							<a href="/com-{$l['_cid']}/" target="_blank">
								<em>{$l['cname']}</em>
							</a>
						</li>
					</ul>
				<!--{/loop}-->
					<a href="/zhaopin/?q={$job['jname']}" target='_blank' class="newJobBtn">搜索更多相似职位</a>
				</div>
				<div class="nPdtL">
				<!--{loop $jobListAll $l}-->
					<ul class="nPdt1">
						<li class="subNpd01">
							<!--{if $com[logoUrl]}--><a href='/com-{$com['_cid']}/'><img src="//pic.{ROOT_DOMAIN}/logo/{$com[logoUrl]}" width="60" height="60" /></a><!--{else}--><a href='/com-{$com['_cid']}/'><img src="//pic.{ROOT_DOMAIN}/logo/jobdefaultlogo.png" width="60" height="60" /></a><!--{/if}-->
						</li>
						<li class="subNpd02">
							<a class='station' href="{$l['jobUrl']}/job-{$l['_jid']}.html" target='_blank'>
								<span>{$l['jname']}</span>
							</a>
							<b>{$l['jobSalary']}</b>
						</li>
					</ul>
				<!--{/loop}-->
				</div>
			</div>
			<!--{if $wxJobGroup[$domainInfo['region_id']]}-->
			<div class="wxGroup">
				<div>加入职场圈子</div>
				<p><img src="//cdn.{ROOT_DOMAIN}/images/{$domainInfo['region_domain']}-wx.png"></p>
				<p>{$wxJobGroup[$domainInfo['region_id']]['content']}</p>
				<p>（微信号: {$wxJobGroup[$domainInfo['region_id']]['wxNumber']}）</p>
			</div>
			<!--{/if}-->
		</div>
	</div>
</div>
</div>
<div id="announcement">
	<div class="grayline" id="announcementbody">
		<ul>
			 <li class="st_one"><a target="_blank" href="//bj.{ROOT_DOMAIN}">北京招聘</a></li>
			 <li class="st_one"><a target="_blank" href="//xm.{ROOT_DOMAIN}">厦门招聘</a></li>
			 <li class="st_one"><a target="_blank" href="//qz.{ROOT_DOMAIN}">泉州招聘</a></li>
			 <li class="st_one"><a target="_blank" href="//np.{ROOT_DOMAIN}">南平招聘</a></li>
			 <li class="st_one"><a target="_blank" href="//fz.{ROOT_DOMAIN}">福州招聘</a></li>
			 <li class="st_one"><a target="_blank" href="//zz.{ROOT_DOMAIN}">漳州招聘</a></li>
			 <li class="st_one"><a target="_blank" href="//pt.{ROOT_DOMAIN}">莆田招聘</a></li>
		 </ul>
		 <ul>
			 <li style="font-weight: bold; font-size: 14px; color: rgb(102, 102, 102);">地区人才网招聘</li>
			 <li class="st_one"><a target="_blank" href="//longyan.{ROOT_DOMAIN}">龙岩招聘</a></li>
			 <li class="st_one"><a target="_blank" href="//xiangyang.{ROOT_DOMAIN}">襄阳招聘</a></li>
			 <li class="st_one"><a target="_blank" href="//sm.{ROOT_DOMAIN}">三明招聘</a></li>
			 <li class="st_one"><a target="_blank" href="//nd.{ROOT_DOMAIN}">宁德招聘</a></li>
			<li class="st_one"><a target="_blank" href="//jh.{ROOT_DOMAIN}">金华招聘</a></li>
			<li class="st_one"><a target="_blank" href="//yw.{ROOT_DOMAIN}">义乌招聘</a></li>
		 </ul>
	</div>
</div>


<div class="tips2" style="display:none;">
	<p class="mgb5"><span class="tipClose">&times;</span>防诈骗提示</p>
	597人才网提示您：用人单位以任何名义向应聘者收取费用都属违法行为<span style="color:red;">（如押金、资料费、代收体检费、代收淘宝信誉等）</span>，请提高警惕并注意保护个人信息！
</div>
<div class="wx_tip">
	<img src="//cdn.{ROOT_DOMAIN}/www/img/v2/resume/wx_tip.gif" alt="" />
	<span class="wx_close" onclick="this.parentNode.style.display = 'none';"></span>
</div>

<div id="myfixedMessage" style="display: none;position: fixed; top: 0px; left: 0px; width: 100%; z-index: 999; padding: 10px; border-bottom: 1px solid rgb(225, 225, 225); background: rgb(250, 250, 250); ">
    <div style="margin: 0 auto;width:1000px;color:#295266;position: relative;">
    	<span style="font-size: 18px; font-weight: bold; float: left; display: inline-block; width: 498px;">{$job[jname]}
            <font style="color:#ff8685; display: block; font-weight: normal; font-size: 16px;font-weight: bold;margin-top: 5px">
                <span class="f60">
                                ￥{$job['jobSalary']}
                </span>
                <!--<span class="gary">（普通员工
                                ，底薪：1500~3000元/月+提成
                ）
                </span>-->
            </font>
        </span>
         <a href="javascript:;" class="msg" style="bottom: -50px;right: 480px;" onclick="showTalk();">和TA聊聊</a>
        <a href="javascript:;" class="newJect5" style="bottom: -50px;right: 300px;" id="btnApplyJob">投个简历</a>
    </div>
</div>
<div id="talkContent" style="display: none;background-color: white;z-index: 9999999999999;position: fixed;left: 50%;top: 50%;width: 500px;height: 420px;margin-left: -250px;margin-top: -210px;box-shadow:  0 10px 10px 20px #888888">
	<div style="position: relative;">
		<img src="//cdn.{ROOT_DOMAIN}/www/img/brus/QRCode.PNG">
		<!-- 关闭按钮 -->
		<div style=";width: 30px;height: 30px;position: absolute;right: 10px;top: 10px;cursor: pointer;" onclick="closeTalk();"></div>
		<!-- iPhone下载 -->
		<div style=";width: 200px;height: 50px;position: absolute;left: 25px;bottom: 155px;cursor: pointer;" onclick="openurl('https://itunes.apple.com/cn/app/597%E4%BA%BA%E6%89%8D%E7%BD%91-%E4%B8%AA%E4%BA%BA%E7%89%88/id1205381118?mt=8');"></div>
		<!-- Android下载 -->
		<div style=";width: 200px;height: 50px;position: absolute;left: 25px;bottom: 65px;cursor: pointer;" onclick="openurl('{$versionsConfig[0]['androidUrl']}');"></div>
	</div>
</div>
<!--{template footer}-->
</body>


<!--右边公司小相册轮播图 begin-->
<!--{if $resPic}-->
<script src="//cdn.{ROOT_DOMAIN}/www/js/jquery.jobPrettyPhoto.js" language="javascript"></script> <!--cny_add-->
<script type="text/javascript">
    // jpjs.use('@jobPrettyPhoto', function(m){
    (function(){
        // var $ = m['jpjob.jobPrettyPhoto'];//cny_note
        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:3000, hideflash: true});
        var liw = 0, ml, r, s;
        $('.piclist li').each(function(){
            liw += $(this).width()+0;
            $(this).css('width',$(this).width()+'px');
        })
        $('.piclist').width( liw + 'px');

        $('.pic_next').click(function(){

            if($('.piclist').is(':animated')){
                $('.piclist').stop(true,true);
            }/* 避免点击事件重复 */

            ml = parseInt($('.piclist').css('left'));
            r = liw - (208 - ml);  /* 700为外部区块.infopic的宽度，15为li之间的距离，即.piclist li的margin-right的值 */
            if(r<208){
                s = r - 0;
            }else{
                s = 208;
            }
            $('.piclist').animate({left: ml - s + 'px'},'slow');
        })

        $('.pic_prev').click(function(){

            if($('.piclist').is(':animated')){
                $('.piclist').stop(true,true);
            }/* 避免点击事件重复 */

            ml = parseInt($('.piclist').css('left'));
            if(ml>-208){
                s = ml;
            } else {
                s = -208;
            }
            $('.piclist').animate({left: ml - s + 'px'},'slow');
        });

    })();
</script>
<!--{/if}-->
<!--右边公司小相册轮播图 end-->

<!--其它效果 begin-->
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/ScrollText.js" ></script>
<script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/qrcode.min.js?v=20150226"></script>
<script>
    $(document).ready(function(){
        // 公司简介、职位描述为空清标签
        $('.newJobRt').html().replace('php','asp');
        removeNullTag("info","p");
        checkAll("info","p",5);

       /*
       //已无 .checkAllContent 元素，此代码注释掉 cny_note
       $(document).on('click','.checkAllContent',function(){
            if($(this).attr('id') == 'gather'){
                $("#info").find("p").eq(5).nextAll("p").hide();
                $('.checkAllContent').attr("id","check").html("[查看全部]");
            }else{
                $("#info").find("p").show();
                $('.checkAllContent').attr("id","gather").html("[收起]");
            }
        })*/

        // 微信应用二维码
        $('.wx_tip').css({
            top : $('.newJobBg').offset().top,
            left : ($(window).width()  - 1000) / 2 - 117,
            display : 'block'
        });
        //微信分享二维码
        var qrcode = new QRCode('imgEwm', {
                text: '{$mUrl}',
                width: 80,
                height: 80,
                colorDark : '#000000',
                colorLight : '#ffffff',
                correctLevel : QRCode.CorrectLevel.H
            }
        );

        //公司简介的标签切换
        $(".newJDutyList li a").click(function(){
            if($(this).parent().hasClass('cut')){
                return false;
            }else{
                $(this).parent().addClass('cut').siblings().removeClass('cut');
                if($(this).attr('class') == 'index-1'){
                    $('.newTytit').first().addClass('hide');
                    $('.newTytit').not(":first").removeClass('hide');
                }else{
                    $('.newTytit').first().removeClass('hide');
                    $('.newTytit').not(":first").addClass('hide');
                }
            }
        });

        //地区人才网招聘上下轮播图
        if(document.getElementById("announcementbody")){
            var scrollup = new ScrollText("announcementbody");
            scrollup.Amount = 1;
            scrollup.Delay = 20;
            scrollup.Start();
        }
    });

    /**
	 * 关闭聊天弹出框
     */
    function closeTalk(){
        $("#talkContent").hide();
    }
    /**
     * 打开聊天弹出框
     */
    function showTalk(){
        $("#talkContent").show();
    }

    function openurl(url){
        window.open(url);
    }

    /**
	 * 移除指定父容器中某些空内容的子元素
     * @param id  父容器id
     * @param tag 自容器selector
     */
    function removeNullTag(id,tag){
        var obj = $("#"+id);
        for(var i=0;i<obj.find(tag).length;i++){
            if(obj.find(tag).eq(i).html().replace(/^\s*$/g,'')  == ''){
                obj.find(tag).eq(i).remove();
            }
        }
    }

    /**
	 *
     * @param id
     * @param tag
     * @param num
     */
    function checkAll(id,tag,num){
        var obj = $("#"+id);
        if(obj.find(tag).length>num){
            obj.find(tag).eq(num-1).nextAll().hide();
            obj.append("<span class='checkAllContent' id='check' style='cursor:pointer;color:#149c95; position:relative;left:570px;'>[查看全部]</span>");
        }
    }

</script>
<!--其它效果 end-->

<!--与用户登录状态相关功能 begin-->
<script>
    // jpjs.use('@checkLogin, @confirmBox', function(m){//cny_note
    $(function(){
         /*checkLogin = m['product.checkLogin'],
            cookie = m['tools.cookie'],
            confirmBox = m['widge.overlay.confirmBox'],
            $ = m['jquery'], cny_note*/
        var cookie = $.cookie,
            pWidth = 70,
            fontWidth = 18,
            isLogin =  false;
        /*检测营业执照审核状态 begin*/
        var licence = '{$com['licenceCheck']}';
        if(licence<1){
            /*checkLogin.dialog.setContent({
                title: '系统提示',
                content: '<p>&nbsp;</p><p>&nbsp;&nbsp;该公司暂时还没通过营业执照审核,<a href="/company/account/licence.html" target="_blank">查看执照情况</a></p><p>&nbsp;</p>',
                isOverflow: true
            }).resetSize(350, 'auto').show().off('loadComplete').on('loadComplete', function(){
					this.oneCloseEvent('#btnComplaint');
            });*/

           $.dialog({
                width:'350',
                hasMask: true,
                zIndex: 9999,
                align: {selfXY: ['50%', '50%'], baseXY: ['50%', '50%']},
                close: 'x',
                title: '系统提示',
                content: '<p>&nbsp;</p><p>&nbsp;&nbsp;该公司暂时还没通过营业执照审核,<a href="/company/account/licence.html" target="_blank">查看执照情况</a></p><p>&nbsp;</p>',
            }).show();
        }
        /*检测营业执照审核状态 end*/

        /*显示联系方式判断处理 begin*/
        var btnShowcontactWay = $('#btnShowcontactWay'),
            contactWayContainer = $('#contactWayContainer');
        btnShowcontactWay.on('click', function(){
            $.getJSON('/api/web/job.api?act=getContentWay&jid={$job[_jid]}','',function(result){
                if(result.status==0){
                   /* checkLogin.dialog.set('title', null);
                    checkLogin.dialog._updateHeader();
                    checkLogin.isPersonLogin(null, 'person_dialog', '/person/applyRegResume.html?jid={$job[_jid]}&type=linkWay');*/
                    $.checkLogin.isPersonLogin(null, 'person_dialog', '/person/applyRegResume.html?jid={$job[_jid]}&type=linkWay');
                }
                if(result.status>0){
                    var data = result.data;
                    contactWayContainer.empty();
                    for(var i = 0, len = data.length; i < len; i++){
                        if(i == 0){
                            contactWayContainer.append('<div class="subPhonex"><i class="iconNew05"></i><em>'+data[i].t+'</em><span style="color:black">'+data[i].n+'</span><span style="color:black">(联系我时请说明是在597人才网上看到的)</span></div>');
                            continue;
                        }
                        contactWayContainer.append('<div class="subPhonex"><em class="PhonexLf">'+data[i].t+'</em><span style="color:black">'+ data[i].n+'</span></div>');
                    }
                    if(data.length > 0) {
                        contactWayContainer.append('<div class="subPhonez subPhonezN"><img src="//cdn.{ROOT_DOMAIN}/img/job/newjob/newJob_83.png" width="14" height="7" /><p>打电话前先投个简历，获得面试的成功率增加30%</p></div>')
                    }
                }else{

                }

            });
            return;
            var isshowed = cookie.get('showcontactway');
            if( isLogin) {
                showcontactway();
                //$('#phonetip').show();
                return;
            }
            if(!isshowed){
                showcontactway();
                //$('#phonetip').show();
                cookie.set('showcontactway', true);
                $(this).hide();
            } else {
                /*checkLogin.dialog.set('title', null);
                checkLogin.dialog._updateHeader();
                checkLogin.isPersonLogin('ajaxLoginCallback-jobflag-jobqv27t07', 'person_dialog');*/
                $.checkLogin.isPersonLogin('ajaxLoginCallback-jobflag-jobqv27t07', 'person_dialog');
            }
        });
        /*显示联系方式判断处理 end*/

        /*投递简历按钮 begin*/
        //滚动效果
        var applyLeft = $('#btnApplyJob').offset().left;
        var applyTop = $('#btnApplyJob').offset().top - 10;
        $(window).scroll(function(){
            if($(window).scrollTop() > applyTop){
                $("#myfixedMessage").show();
            } else {
                $("#myfixedMessage").hide();
            }
        });
        //单击事件
        $('#posRum,#btnApplyJob').click(function() {
           /* checkLogin.dialog.set('title', null);
            checkLogin.dialog._updateHeader(); //cny_note*/
            $.getJSON('/api/web/job.api?act=join&jid={$job[_jid]}', '' , function(data) {
                if (data && data.status) {
                    if (data.status==-1){
                        //var islogin =  checkLogin.isPersonLogin(null, 'person_dialog', '/person/applyRegResume.html?jid={$job[_jid]}');
                        //return;
                       /* checkLogin.isLogin('ajaxLoginCallback');
                        checkLogin.dialog.resetSize(498); //cny_note*/
                        $.checkLogin.isLogin('ajaxLoginCallback');
                        return false;

                    }
                    if (data.status<1){
                        var msgLength=data.msg.length;

                       /* confirmBox.timeBomb(data.msg, {
                            name: 'fail',
                            width: pWidth + msgLength * fontWidth,
                            timeout:6000
                        });//cny_note */
                        $.timeBomb(data.msg, {
                            name: 'fail',
                            width: pWidth + msgLength * fontWidth,
                            timeout:6000
                        });
                        if(data.status==-100||data.status==-101){
                            setTimeout(function() {window.location.href = "/person/resume.html"}, 6000);
                        }
                    }
                    if (data.status>=1){
                        /*confirmBox.timeBomb(data.msg, {
                            name: 'success',
                            width: pWidth + data.msg.length * fontWidth
                        }); //cny_note */
                        $.timeBomb(data.msg, {
                            name: 'success',
                            width: pWidth + data.msg.length * fontWidth
                        });
                        //window.setContent.close();
                    }
                }
            });

        });
        /*投递简历按钮 end*/

        /*防诈骗提示 begin*/
        var istipshowed = cookie.get('tipshowed');
        if(!istipshowed){
            $('.tips2').show();
        }
        $('.tips2 .tipClose').click(function(){
            cookie.set('tipshowed', true,{expires:3});
            $('.tips2').hide();
        });
        /*防诈骗提示 end*/

        /*#open2 #open3 已无此dom，可删除 begin*/
        $('#open2').click(function() {
            // var islogin = checkLogin.isPersonLogin('ajaxLoginCallback', 'person_dialog');//cny_note
            var islogin = $.checkLogin.isPersonLogin('ajaxLoginCallback', 'person_dialog');
            if(islogin){
                /*checkLogin.dialog.clearClass().setContent({
                    content: '//www.abc.com/personregister/modifylogin/jobflag-jobi4isf55-flag-eaf6351c65b16bcef0f83e89df6526c5-personid-230005246-v-0.8650199427735047',
                    isOverflow: true
                }).resetSize(586).show(); //cny_note*/
                $.dialog({
                    isOverflow: true,
                    width:'586',
                    close: 'x',
                    hasMask: true,
                    zIndex: 9999,
                    align: {selfXY: ['50%', '50%'], baseXY: ['50%', '50%']},
                    content: '//www.abc.com/personregister/modifylogin/jobflag-jobi4isf55-flag-eaf6351c65b16bcef0f83e89df6526c5-personid-230005246-v-0.8650199427735047'
                }).show();

            }
        });
        $('#open3').click(function() {
            // var islogin = checkLogin.isPersonLogin('ajaxLoginCallback', 'person_dialog');//cny_note
            var islogin = $.checkLogin.isPersonLogin('ajaxLoginCallback', 'person_dialog');
            if(islogin){
                /*checkLogin.dialog.clearClass().setContent({
                    content: '//www.abc.com/personregister/registersuccess/jobflag-jobi4isf55-v-0.6399117458989251',
                    isOverflow: true
                }).resetSize(1000).show();//cny_note*/
                $.dialog({
                    isOverflow: true,
                    width:'1000',
                    close: 'x',
                    hasMask: true,
                    zIndex: 9999,
                    align: {selfXY: ['50%', '50%'], baseXY: ['50%', '50%']},
                    content: '//www.abc.com/personregister/registersuccess/jobflag-jobi4isf55-v-0.6399117458989251'
                }).show();
            }
        });
        /*#open2 #open3 已无此dom，可删除 end*/

        /**
         * 联系方式
         $('#contact').click(function() {
		checkLogin.dialog.setContent({
			title: '联系方式',
			content: '/job/ContactWay/jobflag-jobqv27t07'+'-v-'+Math.random(),
			isOverflow: true
		}).resetSize(586).show();
	});


         */
        /**
         * 联系方式
         $('#contact').click(function() {
		checkLogin.dialog.setContent({
			title: '联系方式',
			content: '/job/ContactWay/jobflag-jobqv27t07'+'-v-'+Math.random(),
			isOverflow: true
		}).resetSize(586).show();
	});
         */
        /*举报按钮*/
        $('#report,#report_bf').click(function() {
            $.getJSON('/api/web/job.api?act=loginStatus' , '' , function(result) {
                if(result.error){
                    /*checkLogin.isLogin();
                    checkLogin.dialog.resetSize(498); //cny_note*/
                    $.checkLogin.isLogin();

                    return;
                } else {
                    /*checkLogin.dialog.setContent({
                        title: '举报',
                        content: '/person/report.html?jid={$job[_jid]}',
                        isOverflow: true
                    }).resetSize(610, 'auto').show().off('loadComplete').on('loadComplete', function(){
                        this.oneCloseEvent('#btnComplaint');
                    }); //cny_note*/
                    $.dialog({
                        title: '举报',
						width:'610',
                        close: 'x',
                        isOverflow: true,
                        hasMask: true,
                        zIndex: 9999,
                        align: {selfXY: ['50%', '50%'], baseXY: ['50%', '50%']},
                        content: '/person/report.html?jid={$job[_jid]}',
                    }).show();
                }
            });
        });

        /*收藏按钮*/
        var btnFav = $('#btnFav,#btnFav_bf');
        btnFav.click(function(){
            $.getJSON('/api/web/job.api?act=favorites&jid={$job[_jid]}' , '' , function(result) {
                if(result.error){
                    if(result.status==-1){
                        /*checkLogin.isLogin();
                        checkLogin.dialog.resetSize(498); //cny_note*/
                        $.checkLogin.isLogin();
                        return;
                    }
                    var msgLength=result.error.length;
                    if(result.status==-100) msgLength=17;

                    /*confirmBox.timeBomb(result.error, {
                        name: 'fail',
                        width: pWidth + msgLength * fontWidth
                    }); //cny_note*/
                    $.timeBomb(result.error, {
                        name: 'fail',
                        width: pWidth + msgLength * fontWidth
                    });

                } else if(result.success){
                    /*confirmBox.timeBomb(result.success, {
                        name: 'success',
                        width: pWidth + result.success.length * fontWidth
                    });//cny_note*/
                    $.timeBomb(result.success, {
                        name: 'success',
                        width: pWidth + result.success.length * fontWidth
                    });
                    btnFav.addClass('Unclick').html('已收藏').unbind();
                }
            });

        });

        /*留言按钮 已无此dom 可删除*/
        $('#message').click(function() {
            /*var islogin = checkLogin.isLogin('ajaxLoginCallback-jobflag-jobqv27t07');
            checkLogin.dialog.resetSize(498); //cny_note*/
            var islogin = $.checkLogin.isLogin('ajaxLoginCallback-jobflag-jobqv27t07');

            if(islogin){
                /*  checkLogin.dialog.setContent({
                      title: '有疑问？给TA留言',
                      content: '/job/GuestBook/jobflag-jobqv27t07'+'-v-'+Math.random(),
                      isOverflow: true
                  }).resetSize(610, 'auto').show().off('loadComplete').on('loadComplete', function(){
                      this.oneCloseEvent('#btnCloseGuestBook');
                  });//cny_note */
                $.dialog({
                    title: '有疑问？给TA留言',
                    width:'610',
                    close: 'x',
                    isOverflow: true,
                    hasMask: true,
                    zIndex: 9999,
                    align: {selfXY: ['50%', '50%'], baseXY: ['50%', '50%']},
                    content: '/job/GuestBook/jobflag-jobqv27t07'+'-v-'+Math.random()
                }).show();
            }

        });

        /*部门地图按钮  已无此dom 可删除*/
        $('#unitMap').click(function() {
            /*checkLogin.dialog.setContent({
                title: '地图',
                content: "/file/map.html?longitude={$unitList['longitude']}&latitude={$unitList['latitude']}&address="+encodeURIComponent("{$unitList['address']}"),
                isOverflow: true
            }).resetSize(660, 'auto').show().off('loadComplete').on('loadComplete', function(){
                $(".hb_ui_dialog").css({
                    // position:'fixed',
                    'margin-top':'-200px'
                })
            }); //cny_note*/
            $.dialog({
                title: '地图',
                width:'660',
                close: 'x',
                isOverflow: true,
                hasMask: true,
                zIndex: 9999,
                align: {selfXY: ['50%', '50%'], baseXY: ['50%', '50%']},
                content: "/file/map.html?longitude={$unitList['longitude']}&latitude={$unitList['latitude']}&address="+encodeURIComponent("{$unitList['address']}"),
            }).show();
        });

        /*更多 按钮  已无此dom 可删除*/
        $('#btnMore').mouseover(function() {
            $('#companyDesc').show();
            var height = $('#companyDesc').find('.detTipTxt').height(),
                tipheight = $('#companyDesc').find('.detTipArr').find('span').height();
            var top = (height - tipheight)/2;
            $('#companyDesc').find('.detTipBd').css('top',-top);
        }).mouseout(function(){
            $('#companyDesc').hide();
        });

		/**
		 * 显示联系方式处理
		 **/
        function showcontactway(){
            $.getJSON('/job/getcontactway/jobflag-jobqv27t07'+'-v-'+Math.random(),function(result) {
                if(result.status){
                    var data = result.data;
                    contactWayContainer.empty();
                    for(var i = 0, len = data.length; i < len; i++){
                        if(i == 0){
                            contactWayContainer.append('<div class="subPhonex"><i class="iconNew05"></i><em>'+data[i].linktel+'</em><span>'+data[i].linkman+'</span><span>(联系我时请说明是在汇博人才网上看到的)</span></div>');
                            continue;
                        }
                        contactWayContainer.append('<div class="subPhonex"><em class="PhonexLf">'+data[i].linktel+'</em><span>'+ data[i].linkman+'</span></div>');
                    }
                    if(data.length > 0) {
                        contactWayContainer.append('<div class="subPhonez subPhonezN"><img src="//cdn.{ROOT_DOMAIN}/img/job/newjob/newob_83.png" width="14" height="7" /><p>打电话前先投个简历，获得面试的成功率增加30%</p></div>')
                    }
                }
            });
        }
        //$.getJSON('/job/JobVisit/jobflag-jobqv27t07');

        /*分享按钮*/
        $('.newJshare').hover(function(){
            $('.newJect2').toggleClass('newJectCur');
            $('.newJsbg').toggle();
        });


        /**
         * 右侧边栏页签（相似职位+该公司其它职位）
         **/
        function tabs(callback){
            var tab = $(callback),tab_t=tab.find(".nPdtLit a"),
                tab_c = tab.find(".nPdtbg .nPdtL");
            tab_t.hover(function(){
                var _this = $(this);
                var lis = tab_t.index(this);
                tab_t.removeClass("cur");
                _this.addClass("cur");
                tab_c.hide();
                tab_c.eq(lis).show();
            });
        }
        tabs('.newJobPdt');

    });
    function ajaxLoginCallback() {
        window.location.href = window.location.href;
    }

    /**
	 * 分享功能
	 * @param type {String} 分享的类型枚举，详见代码
	 **/
    function shareTO(type){
        var acttitle = "{$com['cname']}-{$job[jname]}";
        var tip =  createTips(),
            info = '找好工作，上{$domainInfo['region_name_short']}597人才网！' + '“'+ acttitle + '”'+ '（来自597.com -> 职位详情)，'
        switch(type){
            case 'qq':
                var href = '//sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?title=' + encodeURIComponent(info + tip) + '&summary=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href);
                break;
            case 'sina':
                var href = '//service.weibo.com/share/share.php?title=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href) + '&source=bookmark';
                break;
            case 'qqwb':
                var href = '//v.t.qq.com/share/share.php?title=' + encodeURIComponent(info + tip) + '&url=' + encodeURIComponent(window.location.href);
                break;
            case 'renren':
                var href = '//share.renren.com/share/buttonshare.do?link=' + encodeURIComponent(window.location.href) + '&title==' + encodeURIComponent(info + tip);
                break;
        }
        window.open(href);
    }
    /**
	 * 随机生成分享提示信息
	 **/
    function createTips(){
        var strArray = ['赶紧推荐给您的朋友吧。', '分享一下，推荐工作。'];
        return strArray[Math.round(Math.random())];
    }

    /*
    // 已无相关dom，暂时删除 cny_note
    jpjs.use('@jobFlexSlider, @fancybox', function(m){
        var $ = m['jpjob.jobFlexSlider'].extend(m['jpjob.fancybox']);
        $('#lst').find('tr').hover(function(){
            $(this).addClass('hov');},function(){
            $(this).removeClass('hov');
        });

        $('.flexBanner').flexslider({
            animation:"slide",
            itemWidth:263,
            itemMargin:0,
            prevText:'&#xf053;',
            nextText:'&#xf054;',
            pauseOnAction:false,
            pauseOnHover:true,
            move:5,
            controlNav:false
        });

        $('.fancybox-thumbs').fancybox({
            closeBtn  : true,
            arrows	: true,
            helpers : {
                thumbs : {
                    width  : 100,
                    height : 100
                }
            },
            beforeShow:function(){
                $('.flexBanner').flexslider('pause');
            },
            afterClose:function(){
                $('.flexBanner').flexslider('play');
            }
        });

        $('.fancybox-media').attr('rel', 'media-gallery')
            .fancybox({
                openEffect : 'none',
                closeEffect : 'none',
                prevEffect : 'none',
                nextEffect : 'none',

                arrows : false,
                helpers : {
                    media : {},
                    buttons : {}
                },
                beforeShow:function(){
                    $('.flexBanner').flexslider('pause');
                },
                afterClose:function(){
                    $('.flexBanner').flexslider('play');
                }
            });

    });*/

    /*
    jQuery.fn.extend({
        keepfixed:function() {
            var $w = $(window);
            var controly =$w.height()-$(this).height()+$w.scrollTop();
            $(this).css({top:controly});
        },
        scrollTip: function() {
            var _self = this;
            if ($.browser.msie&&$.browser.version<=6.0){
                 $(this).css({position:"absolute"});
                _self.keepfixed();
                $(window).bind('scroll resize',function(e) {
                    _self.keepfixed();
                });
            }
        }
    });
    $('#scrollFun').scrollTip();
    */
</script>
<!--与用户登录状态相关功能 end-->

<!--个人用户访问记录-->
<!--{if $_SESSION['uid']}-->
<script>
    function perVisit(_jid,sDate){
        var _jid=_jid;
        var sDate="597_per_visit_"+sDate;
        if(window.localStorage){
            //使用localStorage
            var sJobs=localStorage.getItem(sDate);
            if (sJobs){
                var jobs=sJobs.split(",");
                if (jobs.indexOf(_jid)==-1){
                    sJobs=sJobs+","+_jid;
                    localStorage.setItem(sDate,sJobs);
                    document.write('<script src="//api.{ROOT_DOMAIN}/web/visit.api?act=per&jid='+_jid+'">');
                }
            }else{
                sJobs=_jid;
                localStorage.setItem(sDate,sJobs);
                document.write('<script src="//api.{ROOT_DOMAIN}/web/visit.api?act=per&jid='+_jid+'">');
            }
        }else{
            //使用cookies
            var sJobs=getcookie(sDate);
            document.write('<script src="//api.{ROOT_DOMAIN}/web/visit.api?act=per&jid='+_jid+'">');
        }
    }
    perVisit("{$_GET['id']}","{$sDate}");
</script>
<!--{/if}-->
</html>