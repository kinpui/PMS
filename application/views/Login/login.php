<!--
 Author: smaij 
 URL: http://www.smaij.com
 Created in: 2016-01-21 20:01
 This file used for : 用户登录 
 --> 
<!DOCTYPE html>
<html>	
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../user_guide/_static/css/login.css" rel='stylesheet' type='text/css' />
</head>
<body>
 <!--SIGN UP-->
 <h1 class='form_title'>创宇人事管理系统</h1>
<form name='login_form' action=''>
<div class="login-form">
		<div class="head-info">
			<label class="lbl-1"> </label>
			<label class="lbl-2"> </label>
			<label class="lbl-3"> </label>
		</div>
	<div class="avtar">
		<img src="../user_guide/_images/login/avtar.png" />
	</div>
					<input type="text" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" >
						<div class="key">
					<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
						</div>
	<div class="signin">
		<input for='login_form' type="submit" value="Login" >
	</div>
</div>
</form>
</body>
</html>
