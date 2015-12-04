<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>personal home</title>
    <link rel="stylesheet" type="text/css" href="/Public/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>
    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
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
          <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php echo ($user["user_nickname"]); ?><i class="caret"></i></a>
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
            <li class="active"><a href="#">表盘</a></li>
            <li class="dropdown"><a href="#" data-toggle='dropdown' class="dropdowm-toggle">Settings<b class='caret'></b></a>
                    <ul class="dropdown-menu" id="menu1">
                            <li><a href="#">Tools<i class='icon-arrow-right'></i></a>
                                    <ul class="dropdown-menu sub-menu">
                                            <li><a href="#">Reports</a></li>
                                            <li><a href="#">Logs</a></li>
                <li><a href="#">Errors</a></li>
                                    </ul>
                            </li>
                            <li><a href="#">SEO Settings</a></li>
            <li><a href="#">Other Link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Other Link</a></li>
            <li><a href="#">Other Link</a></li>
                    </ul>
            </li>
            <li class="dropdown">
                    <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">内容 <i class="caret"></i></a>
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
          <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">用户 <i class="caret"></i></a>
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
                    <!--span12 -->
                    <div class="span12" id="content">
                            <!--row-fluid-->
                            <div class="row-fluid">
                                    <div class="alert alert-success">
                                            <button class="close" type="button" data-dismiss='alert'>&times;</button>
                                            <h4>欢迎光临&nbsp;&nbsp;<?php echo ($user["user_name"]); ?>&nbsp;&nbsp;的小屋</h4>
                                    </div>
                            </div>
                            <!--row-fluid-->

                            <!--row-fluid-->
                            <div class="row-fluid">
                                    <!--block-->
                                    <div class="block">
                                            <div class="navbar navbar-inner block-header">
                                                    <div class="muted pull-left">留言</div>
                                                    <div class="pull-right"><span class='badge badge-warning'>12</span></div>
                                            </div>
                                            <div class="block-content collapse in">
                                                <?php if(is_array($rs)): $i = 0; $__LIST__ = $rs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["comment_from"] == $user[user_id]): ?><div class="row-fluid padd-botttom">
                                                            <div class="span12">
                                                                    <h5><?php echo ($vo["comment_title"]); ?></h5>
                                                                    <div><?php echo ($vo["comment_content"]); ?></div>
                                                                    <a href="person?user_id=<?php echo ($vo["user_id"]); ?>">
                                                                            <div class="pull-right"><?php echo ($vo["user_name"]); ?></div>
                                                                    </a>
                                                                    <hr>
                                                            </div>
                                                    </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                            </div>
                                    </div>
                                    <!--block-->
                            </div>
                            <!--row-fluid-->

                            <!--row-fluid-->
                            <div class="row-fluid">
                                    <!--block-->
                                    <div class="block">
                                            <div class="navbar navbar-inner block-header">
                                                    <div class="muted pull-left">留言板</div>
                                            </div>
                                            <div class="block-content collapse in">
                                                <form method="POST">
                                                <input type="hidden" value="<?php echo (session('user_id')); ?>" name="user_id">
                                                <input type="hidden" value="<?php echo ($user["user_id"]); ?>" name="comment_from">
                                                <span>Title</span><input type="text" placeholder='title' name="comment_title">
                                                <textarea id="bootstrap-editor" placeholder='enter your message...' style="width:98%; height:100px" name="comment_content"></textarea>
                                                <input type="submit" class="btn btn-primary" value="提交">
                                            </form>
                                            </div>
                                    </div>
                                    <!--block-->
                            </div>
                            <!--row-fluid-->
                    </div>
                    <!--span12-->	
            </div>
    </div>
	
      
</body>
</html>