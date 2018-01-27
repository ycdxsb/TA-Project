<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0,  user-scalable=no">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Student Login</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
	<link rel="stylesheet" type="text/css" href="css/chinese_font.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https:
      //cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <ul>
        <b><li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li></b>
        <b><li><a class="orange" href="register.html">注册</a></li></b>
        <b><li><a href="about_us.html">关于我们</a></li></b>  
        <b><li><a>帮助</a></li></b>
        <b><li><a>建议与反馈</a></li></b>
    </ul>
    <br><br><br>
    
    <div id="header">
    <h1><big><strong>L O G I N</strong></big></h1>
    <h2>登 录</h2>
    </div>
    
    <br>
       <div class="container">
     <div class="col-lg-offset-4 col-lg-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
      <form role="form" style="margin:5%;">
	         <div class="form-group">
				 <label for="学号" style="font-size: 20px;">学号</label>
				 <input  type="text" class="form-control" id="学号" placeholder="学号">
			 </div> 

			 <div class="form-group">
				 <label for="密码" style="font-size: 20px;">密码</label>
				 <input  type="password" class="form-control" id="密码"
				 placeholder="请输入密码">
			 </div>
             <div align="center">
             <label class="radio-inline">
                 <input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="option1" checked>我是助教
             </label>
             <label class="radio-inline">
                 <input type="radio" name="optionsRadiosinline" id="optionsRadios4"  value="option2"> 我是学生
             </label>
		     </div>
             <br>
             <button type="submit" class="btn btn-default center-block" style="width:160px;">注&nbsp;册</button>
		 </form>    
	  </div>
	  </div>
   
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="bootstrap/js/jquery-1.11.2.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>