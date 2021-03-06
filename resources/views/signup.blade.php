 <!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0,  user-scalable=no ">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Sign Up</title>
    <!-- Bootstrap -->
	  <link rel="stylesheet" type="text/css" href="css/register.css" />
	  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	  <script src="bootstrap/js/jquery-1.11.2.min.js"></script>
	  <script src="bootstrap/js/bootstrap.min.js"></script>

	  <link href="bootstrapvalidator/dist/css/bootstrapValidator.min.css" rel="stylesheet">
	  <script src="bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script>
	  <script src="bootstrapvalidator/dist/js/language/zh_CN.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https:
      //cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	  <script type="text/javascript">
          $(document).ready(function(){
              $("#registform").bootstrapValidator({
                  message:"未验证",
                  feedbackIcons: {
                      valid: 'glyphicon glyphicon-ok',
                      invalid: 'glyphicon glyphicon-remove',
                      validating: 'glyphicon glyphicon-refresh'
                  },
                  fields:{
                      username:{
                          message:"用户名还未验证",
                          validators:{
                              notEmpty:{
                                  message:"用户名不可为空"
                              },
                              stringLength:{
                                  min:6,
                                  max:16,
                                  message:"用户名长度在6-16之间"
                              }
                          }
                      },
                      email:{
                          validators:{
                              notEmpty:{
                                  message:"邮箱不可为空"
                              },
							 regexp: {
							  regexp: /^[A-Za-z\d]+([-_.][A-Za-z\d]+)*@([A-Za-z\d]+[-.])+[A-Za-z\d]{2,4}$/,
							  message: '邮箱格式不正确'
							},
                              stringLength:{
                                  max:50,
                                  message:"邮箱长度不可超过60"
                              }
                          }
                      },
                      password:{
                          message:"密码还未验证",
                          validators:{
                              notEmpty:"密码不能为空",
                              stringLength:{
                                  min:6,
                                  max:16,
                                  message:"密码长度在6到16之间"
                              },
                              identical:{
                                  field:"password_confirmation",
                                  message:"两次密码不同，请重新输入"
                              }
                          }
                      },
                      password_confirmation:{
                          message:"密码重复还未验证",
                          validators:{
                              notEmpty:{
                                  message:"密码验证不可为空"
                              },
                              stringLength:{
                                  min:6,
                                  max:16,
                                  message:"密码长度在6到16之间"
                              },
                              identical:{
                                  field:"password",
                                  message:"两次密码不同，请重新输入"
                              }
                          }
                      }
                  }
              });
          });
	  </script>
  </head>
  <body>
	  <!--顶导航栏-->
	<div class="nav nav-pills navbar-fixed-top" style="z-index:1;background-color:#222222">
	  <div class="container-fluid" style="padding-left:5%;padding-right:5%">
		<!-- Brand and toggle get grouped for better mobile display --> 
		
	    <a class="navbar-brand" style="color:aliceblue;font-size:40px;" href="{{route('homepage')}}">TAT</a>	
			   
	    <a class="signupbtn " style="position:relative;top:10px;float:right" href="{{route('homepage')}}">注册</a>
		  
	  </div>
	</div> 
	@include('share._errors')
    <br>
	 <br>
	<br>
	<br><br>
	<br>
    <div class="container">
		<div class="row">
		 <div class="col-lg-offset-3 col-lg-6 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">

		 <div class="jumbotron">
		   <div id="header">
             <h2>注 册</h2>
           </div>
		  <form id="registform" method="POST" action="{{route('users.store')}}" role="form" style="margin:5%;">
              {{ csrf_field() }}

				 <div class="form-group">
					 <label for="用户名">用户名</label>
					 <input  name="username" type="text" class="form-control" id="用户名" placeholder="用户名" maxlength="16" minlength="6" value="{{old('username')}}">
				 </div> 
 

				 <div class="form-group">
					 <label for="邮箱">邮箱</label>
					 <input  name="email" type="text" class="form-control" id="邮箱"
					 placeholder="邮箱" maxlength="60" value="{{old('email')}}">
				 </div>

				 <div class="form-group">
					 <label for="密码">密码</label>
					 <input  name="password" type="password" class="form-control" id="密码"
					 placeholder="请输入密码" maxlength="16" minlength="6">
				 </div>

				 <div class="form-group">
					 <label for="确认密码">确认密码</label>
					 <input  name="password_confirmation" type="password" class="form-control" id="确认密码"
					 placeholder="请再次输入密码" maxlength="16" minlength="6">
				 </div>

                 <div class="form-group">
                     <label for="captcha">验证码</label>
                         <input id="captcha" class="form-control" name="captcha" placeholder="请输入验证码">

                         <img class="thumbnail captcha" src="{{ captcha_src('flat') }}"
                              onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">
                 </div>
				 <br>
				 <button type="submit" class="btn btn-default center-block" style="width:200px;">注&nbsp;册</button>
			 </form>    
		  </div>
		</div>
		</div>
	</div>

  </body>
</html>