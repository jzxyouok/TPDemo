<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class='no-js'>
<head>
    <title>Home page</title>
    <meta charset='utf-8'>
    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/Public/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="/Public/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
    <link href="/Public/assets/styles.css" rel="stylesheet" media="screen">
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <script src="/Public/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
				<a href="#" class="brand">首 页</a>
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><?php echo ($user["user_nickname"]); ?><i class="caret"></i>

                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="#">简介</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="logout">登出</a>
                                </li>
                            </ul>
                        </li>
	                </ul>
	                <ul class="nav">
	                	<li class="active">
	                		<a href="#">表盘</a>
	                	</li>
	                	<li class="dropdown">
	                		<a href="#" data-toggle='dropdown' class="dropdowm-toggle">Settings<b class='caret'></b>
	                		</a>
	                		<ul class="dropdown-menu" id="menu1">
	                			<li>
	                				<a href="#">Tools<i class='icon-arrow-right'></i></a>
	                				<ul class="dropdown-menu sub-menu">
	                					<li>
	                						<a href="#">Reports</a>
	                					</li>
	                					<li>
                                            <a href="#">Logs</a>
                                        </li>
                                        <li>
                                            <a href="#">Errors</a>
                                        </li>
	                				</ul>
	                			</li>
	                			<li>
                                    <a href="#">SEO Settings</a>
                                </li>
                                <li>
                                    <a href="#">Other Link</a>
                                </li>
	                			<li class="divider"></li>
	                			<li>
                                    <a href="#">Other Link</a>
                                </li>
                                <li>
                                    <a href="#">Other Link</a>
                                </li>
	                		</ul>
	                	</li>
	                	<li class="dropdown">
	                		<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">内容 <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="#">留言</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="#">News</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="#">Custom Pages</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="#">Calendar</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="#">FAQ</a>
                                </li>
                            </ul>
	                	</li>
	                	<li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">用户 <i class="caret"></i>

                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="#">用户 列表</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="#">寻找</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="#">Permissions</a>
                                </li>
                            </ul>
                        </li>
	                </ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>	
	</div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span3" id="sidebar">
				<ul class="nav nav-list bs-docs-sidenav nav-collaps">
					<li class="active">
						<a href="index">
							<i class='icon-chevron-right'></i>表盘
						</a>
					</li>
					<li>
                        <a href="#"><span class="badge badge-info pull-right">2,221</span> 留言</a>
                    </li>
					<li>
                        <a href="calendar.html"><i class="icon-chevron-right"></i> Calendar</a>
                    </li>
                    <li>
                        <a href="stats.html"><i class="icon-chevron-right"></i> Statistics (Charts)</a>
                    </li>
                    <li>
                        <a href="form.html"><i class="icon-chevron-right"></i> Forms</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="icon-chevron-right"></i> Tables</a>
                    </li>
                    <li>
                        <a href="buttons.html"><i class="icon-chevron-right"></i> Buttons & Icons</a>
                    </li>
                    <li>
                        <a href="editors.html"><i class="icon-chevron-right"></i> WYSIWYG Editors</a>
                    </li>
                    <li>
                        <a href="interface.html"><i class="icon-chevron-right"></i> UI & Interface</a>
                    </li>
                    <li>
                        <a href="#"><span class="badge badge-success pull-right">731</span> Orders</a>
                    </li>
                    <li>
                        <a href="#"><span class="badge badge-success pull-right">812</span> Invoices</a>
                    </li>
                    <li>
                        <a href="#"><span class="badge badge-info pull-right">27</span> Clients</a>
                    </li>
                    <li>
                        <a href="#"><span class="badge badge-info pull-right">1,234</span> Users</a>
                    </li>
                   
                    <li>
                        <a href="#"><span class="badge badge-info pull-right">11</span> Reports</a>
                    </li>
                    <li>
                        <a href="#"><span class="badge badge-important pull-right">83</span> Errors</a>
                    </li>
                    <li>
                        <a href="#"><span class="badge badge-warning pull-right">4,231</span> Logs</a>
                    </li>
				</ul>
			</div>

			<!--/span-->
			<div class="span9" id="content">
				<div class="row-fluid">
					<div class="alert alert-success">
						<button class="close" type="button" data-dismiss='alert'>&times;</button>
                                                <h4>登录成功</h4><?php echo ($user["user_name"]); ?>&nbsp;&nbsp;欢迎光临
                                                <?php if($user["user_name"] == null): ?><div>请尽快
                                                     <a href="edit" class="button">编辑</a>个人信息
                                                </div><?php endif; ?>
                                                        
                                               
					</div>

				</div>

				<div class="row-fluid">
		            <!-- block -->
		            <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">留言</div>
                            <div class="pull-right"><span class="badge badge-warning">12</span>
                            </div>
                        </div>
                                
                            <div class="block-content collapse in"> 
                            <?php if(is_array($rs)): $i = 0; $__LIST__ = $rs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["comment_from"] == $user[user_id]): ?><div class="row-fluid padd-bottom">
                                        <div class="span12">
                                                <h5><?php echo ($vo["comment_title"]); ?></h5>
                                                <div><?php echo ($vo["comment_content"]); ?></div>
                                                <a href="person?user_id=<?php echo ($vo["user_id"]); ?>">
                                                    <div class="pull-right"><?php echo ($vo["user_name"]); ?>
                                                    </div>
                                                </a>
                                            <hr>
                                        </div>
                                    </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                        <!-- /block -->
				</div>
			</div>	
    	</div>
    </div>
	 <!--/.fluid-container-->
        <script src="/Public/vendors/jquery-1.9.1.min.js"></script>
        <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
        <script src="/Public/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="/Public/assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
</body>
</html>