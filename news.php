<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>mu新闻公告</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--引入reset.css-->
    <link rel="stylesheet" href="css/reset.css">
    <!-- 引入common.css -->
    <link type="text/css" rel="stylesheet" href="css/common.css">
    <!-- 引入swiper.css -->
    <link rel="stylesheet" type="text/css" href="css/swiper-3.3.1.min.css">
</head>
<body>
	<div class="wrap">
		<div class="wp">
			<div class="layout">
				<div class="nav">
					<a class="logo" href="#"><img src="img/logo.png" alt="logo"></a>
					<ul class="clearfix">
			            <li>
			                <a href="sy_index.php">
			                    <h4>MU奇迹</h4>
			                </a> 
			            </li>
			            <li>
			                <a href="manage.php">
			                    <h4>账号管理</h4>
			                </a> 
			            </li>
			            <li style="margin-right:125px;">
			                <a href="news.php">
			                    <h4>游戏公告</h4>
			                </a> 
			            </li>
			            <li>
			                <a href="rank.php">
			                    <h4>玩家排名</h4>
			                </a> 
			            </li>
			            <li>
			                <a href="login.php">
			                    <h4>幸运抽奖</h4>
			                </a> 
			            </li>
			            <li>
			                <a href="shop.php">
			                    <h4>装备商城</h4>
			                </a> 
			            </li>
			        </ul>
				</div>
				<div class="main clearfix">
					<div class="side">
						<div class="bengin">
							<!-- <object type="application/x-shockwave-flash" width="246" height="136">
				                <param name="movie" value="img/begin.swf">
				                <param name="allowScriptAccess" value="always">
				                <param name="wmode" value="transparent">
				                <embed src="img/begin.swf" type="application/x-shockwave-flash" wmode="transparent" allowscriptaccess="always" style="width:246px;height:136px;">
				            </object> -->
				            <a href="#" class="beginimg"></a>
						</div>
						<!-- login begin -->
						<div class="userwrap side_box bg_type_1">
							<div class="input_area" id="account_login_before">
								<form action="" class="form_login">
									<p class="in_box_cite color_red errorplacement" style="display:block;" id="al_warn"></p>
									<div class="container clearfix">
										<div class="in_box_container">
										<div class="in_box">
											<input type="text" value="" class="in_txt" id="al_u" name="username" maxlength="20" placeholder="账号">
										</div>
										<div class="in_box password">
											<input type="password" value="" class="in_txt" id="al_p" name="password" maxlength="6" placeholder="密码">
										</div>
									</div>
									<div class="pay_btn">
										<input type="submit" id="al_submit" class="" value="登录" href="javascript:void(0)">
									</div>
									</div>
									
									<div class=" in_boxa code" style="display:none;" id="al_c_div">
										<div class="in_box in_box2">
											<input type="text"  class="in_txt" id="al_c" placeholder="验证码">
										</div>
										<div href="javascript:void(0)" title="验证码" class="verify_img">
											<img id="al_c_img" height="30" width="60" src="" alt="">
										</div>
									</div>
									<div class="in_boxa autologin clearfix" style="display:block;">
										<label id="al_remember_div" for="al_remember" class="cbox">
											<input type="checkbox" id="al_remember" name="" class="chk" checked="checked">下次自动登录
										</label>
										<a href="#" title="忘记密码？" target="_blank" class="text_cite">忘记密码？</a>
									</div>
								</form>
							</div>
							<div id="acount_login_after" style="display:none">
								<p class="account_name">
									<span>当前账号</span>
									<span class="account_name_txt">青青</span>
								</p>
								<p class="state">
									<span>当前状态：</span>
									<span class="state_txt">账号正常</span>
								</p>
								<p class="point">
									<span>积分：</span>
									<span class="point_txt">0</span>
								</p>
								<p class="rechange">
									<span>累计充值：</span>
									<span class="rechange_txt">0</span>
								</p>
							</div>
							<div class="btnwrap">
								<a href="#" title="" target="_blank" class="btn_register niuxReportLink" rdata="g3_side:reg">
									<span class="icon-gavel"></span>
									注册帐号
								</a>
							</div>
							<div class="btnwrap">
								<a href="#" title="" target="_blank" class="btn_register niuxReportLink" rdata="g3_side:reg">
									<span class="icon-gavel"></span>
									游戏充值
								</a>
							</div>
							<div class="btnwrap">
								<a href="#" title="" target="_blank" class="btn_register niuxReportLink" rdata="g3_side:reg">
									<span class="icon-gavel"></span>
									账号管理
								</a>
							</div>
						</div>
						<!-- login end -->
						<!-- side_box1 begin-->
						<div class="side_box bg_type_2">
							<div class="side_com_hd">
								<span class="icon-flag2"></span>
								<h6>网站功能</h6>
							</div>
							<div class="quick clear">
								<a href="/Pwd" class="btn_quick fastEnterGameLink" tid="side">修改密码</a>
								<a href="/top" class="btn_quick fastEnterGameLink" tid="side">等级排行</a>
								<a href="/top/zm.asp" class="btn_quick fastEnterGameLink" tid="side">战盟排行</a>
							</div>
						</div>
						<!-- side_box1 end-->
						<!-- side_box2 begin-->
						<div class="side_box bg_type_2">
							<div class="side_com_hd">
								<span class="icon-flag2"></span>
								<h6>活动时间</h6>
							</div>
							<div class="quick clear">
								<p class="part">
									<span class="part_name">距离血色城堡开放时间还有：</span>
									<span id="time1"></span>
								</p>
								<p class="part">
									<span class="part_name">距离血色城堡开放时间还有：</span>
									<span id="time2"></span>
								</p>
							</div>
						</div>
						<!-- side_box2 end-->
						<!-- side_box3 begin-->
						<div class="side_box bg_type_2">
							<div class="side_com_hd">
								<span class="icon-flag2"></span>
								<h6>网站评分</h6>
							</div>
							<div class="game_score">
								<div class="total">
									<strong id="wypf-total">9.7</strong>
									<p>不同凡响</p>
								</div>
								<div class="info">
									<li>
										<input class="fl" type="hidden" style="margin-top:2px;" name="InterviewCommentInfoSub[appReact]" value="0" />  
										<span>画面</span>
										<div class="starwp" id="part1">
											<span class="star" star=""></span>
											<span class="star" star=""></span>
											<span class="star" star=""></span>
											<span class="star" star=""></span>
											<span class="star" star=""></span>
										</div>
									</li>
									<li>
										<input class="fl" type="hidden" style="margin-top:2px;" name="InterviewCommentInfoSub[appReact]" value="0" />  
										<span>角色</span>
										<div class="starwp" id="part2">
											<span class="star" star=""></span>
											<span class="star" star=""></span>
											<span class="star" star=""></span>
											<span class="star" star=""></span>
											<span class="star" star=""></span>
										</div>
									</li>
									<li>
										<input class="fl" type="hidden" style="margin-top:2px;" name="InterviewCommentInfoSub[appReact]" value="0" />  
										<span>特色</span>
										<div class="starwp" id="part3">
											<span class="star" star=""></span>
											<span class="star" star=""></span>
											<span class="star" star=""></span>
											<span class="star" star=""></span>
											<span class="star" star=""></span>
										</div>
									</li>
									<li>
										<input class="fl" type="hidden" style="margin-top:2px;" name="InterviewCommentInfoSub[appReact]" value="0" />  
										<span>音效</span>
										<div class="starwp" id="part4">
											<span class="star" star=""></span>
											<span class="star" star=""></span>
											<span class="star" star=""></span>
											<span class="star" star=""></span>
											<span class="star" star=""></span>
										</div>
									</li>
									<li>
										<input class="fl" type="hidden" style="margin-top:2px;" name="InterviewCommentInfoSub[appReact]" value="0" />  
										<span>任务</span>
										<div class="starwp" id="part5">
											<span class="star" star=""></span>
											<span class="star" star=""></span>
											<span class="star" star=""></span>
											<span class="star" star=""></span>
											<span class="star" star=""></span>
										</div>
									</li>
									<li>
										<input class="fl" type="hidden" style="margin-top:2px;" name="InterviewCommentInfoSub[appReact]" value="0" />  
										<span>操作</span>
										<div class="starwp">
											<span class="star" star=""></span>
											<span class="star" star=""></span>
											<span class="star" star=""></span>
											<span class="star" star=""></span>
											<span class="star" star=""></span>
										</div>
									</li>
								</div>
							</div>
							<div class="btnwrap">
								<a href="#" title="" target="_blank" class="btn_register niuxReportLink" rdata="g3_side:reg">
									<span class="icon-gavel"></span>
									参与讨论，支持游戏
								</a>
							</div>
						</div>
						<!-- side_box3 end-->
						<!-- side_box4 begin-->
						<div class="side_box bg_type_2">
							<div class="side_com_hd">
								<span class="icon-flag2"></span>
								<h6>客服功能</h6>
							</div>
							<div class="quick clear">
								<div class="custom_server">
									<img src="./img/kefu.png" alt="" width="75" height="75">
									<div class="info">
									<h4>
										<a style="float:none" target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=123456789&amp;site=qq&amp;menu=yes">客服QQ:123456789</a>
									</h4>
									<p>早10点~晚11点在线</p>
									<p>咨询问题请直奔主题</p></div>			
								</div>
							</div>
							<div class="btnwrap">
								<a href="#" title="" target="_blank" class="btn_register niuxReportLink" rdata="g3_side:reg">
									<span class="icon-gavel"></span>
									在线客服
								</a>
							</div>
						</div>
						<!-- side_box4 end-->
					</div>
					<div class="content">
						<div class="page_news_wrap">
							<div class="tab_type_2 tab_page">
							    <h3 class="tab cur"><a href="#">综合</a></h3>
							    <h3 class="tab"><a href="#">公告</a></h3>
							    <h3 class="tab"><a href="#">活动</a></h3>
							    <div class="cur_pos">
							      当前位置：<a href="#">奇迹归来</a> &gt; <span class="cur">综合</span>
							    </div>
							</div>
							<div class="page_news_list_wrap">
								<ul class="page_news_list">
									<li>
									    <span class="com_arrow icon-play_arrow"></span>
									    <div class="news_con">
									      <a href="#" title="通知通知通知通知通知" target="_blank" class="fcy fb">[公告] 通知通知通知通知通知通知通知通知通知通知通知</a>
									    </div>
									    <span class="date">2015-11-18</span>
									</li>
									<li>
									    <span class="com_arrow icon-play_arrow"></span>
									    <div class="news_con">
									      <a href="#" title="通知通知通知通知通知" target="_blank" class="fcy fb">[公告] 通知通知通知通知通知通知通知通知通知通知通知</a>
									    </div>
									    <span class="date">2015-11-18</span>
									</li>
									<li>
									    <span class="com_arrow icon-play_arrow"></span>
									    <div class="news_con">
									      <a href="#" title="通知通知通知通知通知" target="_blank" class="fcy fb">[公告] 通知通知通知通知通知通知通知通知通知通知通知</a>
									    </div>
									    <span class="date">2015-11-18</span>
									</li>
								</ul>
							</div>
							<div class="page">
							    <p>
							        <a class="txtlink dis">&lt;&lt;上一页</a>
							        <a class="cur">1</a><a href="#">2</a>
							        <a href="#">3</a>
							        <a href="#">4</a>
							        <a href="#" title="" class="txtlink">下一页&gt;&gt;</a>
							    </p>
							</div>
						</div>
					</div>
			</div>
		</div>
		<footer>
		    <div class="footer_container">
		        <p><b>抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防受骗上当 适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</b></p>
		    <p>
		        <a href="#" style="text-decoration: underline ;color: #666" target="_blank">遊戲簡介</a>
		        |
		        <a href="#" style="text-decoration: underline ;color: #666" target="_blank">商務合作</a>
		        |
		        <a href="#" style="text-decoration: underline ;color: #666" target="_blank">加入我們</a>
		    </p>
		    <p>
		        <font style="font-size: 14px;">友情鏈接：</font>
		        <a href="#" style="text-decoration: underline ;color: #666" target="_blank">遊戲簡介</a>
		        |
		        <a href="#" style="text-decoration: underline ;color: #666" target="_blank">商務合作</a>
		        |
		        <a href="#" style="text-decoration: underline ;color: #666" target="_blank">加入我們</a>
		    </p>
		    <p>客服QQ：1135309032(周一至周五10:00-23:00 周六周日14:00-23:00)　　客服投诉邮箱：ts@ss911.com.cn</p>
		    <p>渝ICP备14009259号-4　　渝网文 [2015]1150-011号</p>
		    </div>
		</footer>
	</div>
	<!-- 引入jQuery -->
    <script type="text/javascript" src="scripts/jquery-1.11.1.min.js"></script>
    <!-- 引入jquery.validate -->
    <script type="text/javascript" src="scripts/jquery.validate.js"></script>
    <!-- 引入common.js -->
    <script type="text/javascript" src="scripts/common.js"></script>
    <!-- 引入jquery.validate.min.js -->
    <script type="text/javascript" src="scripts/jquery.validate.min.js"></script>
    <script type="text/javascript">
    	$(function(){
    		$(".form_login").validate({
    			rules:{
					username: {
			        	required: true,
			        	maxlength: 20
			        },
				    password: {
				        required: true,
				        maxlength: 6
				    }
    			},
    			messages:{
					username: {
				        required: "请输入用户名",
				        minlength: "用户名必需由两个字母组成"
		      		},
				    password: {
				        required: "请输入密码",
				        minlength: "密码长度不能小于 5 个字母"
				    }
    			},
    			errorPlacement: function(error, element) {  
    				/*错误信息位置*/
				    error.appendTo(element.parents(".form_login").children('.errorplacement'));  
				},
				submitHandler: function(form) {

			      $(form).ajaxSubmit();     
			    }  
    		})
    	})
    </script>
</body>
</html>