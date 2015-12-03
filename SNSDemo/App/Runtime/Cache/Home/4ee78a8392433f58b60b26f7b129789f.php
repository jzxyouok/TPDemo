<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class='no-js'>
<head>
	<title>Edit page</title>
	<meta charset='utf-8'>
  <!--Bootstrap -->
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
              <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> 昵称<i class="caret"></i></a>
              <ul class="dropdown-menu">
                <li>
                    <a tabindex="-1" href="#">简介</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a tabindex="-1" href="login.html">登出</a>
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
    <!--/span3-->
      <div class="span3" id="sidebar">
        <ul class="nav nav-list bs-docs-sidenav nav-collaps">
          <li class="active">
            <a href="index.html">
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
			<!--/span9-->
			<div class="span9" id="content">
        <!-- morris stacked chart -->
				<div class="row-fluid">
          <!-- block-->
          <div class="block">
            <div class="navbar navbar-inner block-header">
              <div class="muted pull-left">编 辑</div>
            </div>
            <div class="block-content collapse in">
              <div class="span12">
                <form class="form-horizontal" method="POST">
                    <fieldset>
                      <legend>Hello <?php echo ($user["user_name"]); ?></legend>
                      <div class="control-group">
                        <label class="control-label" for="focusedInput">姓名</label>
                        <div class="controls">
                          <input name='user_name' class="input-xlarge focused" id="focusedInput" type="text" placeholder='username'>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="focusedInput">昵称</label>
                        <div class="controls">
                            <input name="user_nickname" class="input-xlarge focused" id="focusedInput" type="text" placeholder='Nickname'>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="optionsCheckbox2">爱好</label>
                        <div class="controls">
                            <input type="checkbox" id="optionsCheckbox2" value="音乐" name="user_hoby[]">音乐
                            <input type="checkbox" id="optionsCheckbox2" value="运动" name="user_hoby[]">运动
                            <input type="checkbox" id="optionsCheckbox2" value="艺术" name="user_hoby[]">艺术
                            <input type="checkbox" id="optionsCheckbox2" value="看书" name="user_hoby[]">看书
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="focusedInput">年龄</label>
                        <div class="controls">
                            <input name="user_age" class="input-xlarge focused" id="focusedInput" type="text" placeholder='age'>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="selectError">性别</label>
                        <div class="controls">
                            <select id="selectError" name="user_sex">
                              <option value="男">男</option>
                              <option value="女">女</option>
                              <option value="其它" selected>其它</option>
                          </select>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="selectError">婚姻</label>
                        <div class="controls">
                            <select id="selectError" name="user_marrige">
                              <option value="已婚">已婚</option>
                              <option value="未婚">未婚</option>
                              <option value="其它" selected>其它</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-actions">
                          <input type="submit" class="btn btn-primary" value="保&nbsp;&nbsp;存">
                          <input type="reset" class="btn" value="取&nbsp;&nbsp;消">
                      </div>
                    </fieldset>
                  </form>
              </div>
            </div>
          </div>
          <!--block-->
        </div>
      </div>
    </div>
  </div>
 <!--/.fluid-container-->
        <link href="/Public/vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="/Public/vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="/Public/vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="/Public/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="/Public/vendors/jquery-1.9.1.js"></script>
        <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
        <script src="/Public/vendors/jquery.uniform.min.js"></script>
        <script src="/Public/vendors/chosen.jquery.min.js"></script>
        <script src="/Public/vendors/bootstrap-datepicker.js"></script>

        <script src="/Public/vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="/Public/vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="/Public/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

  <script type="text/javascript" src="/Public/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="/Public/assets/form-validation.js"></script>
        
  <script src="/Public/assets/scripts.js"></script>
        <script>

  jQuery(document).ready(function() {   
     FormValidation.init();
  });
  

        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
</body>
</html>