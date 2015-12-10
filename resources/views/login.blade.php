<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Login</title>
		<link href="css/login.css" rel="stylesheet" type="text/css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/jquery.validate.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
			
			    $('#myform').validate({ // initialize the plugin
			        rules: {
			        	username: {
			                required: true
			            },
			            password: {
			                required: true
			            }
			        }
			    });
			
			});
		</script>
		<style type="text/css">
			.error{
				color: red;
			}
		
		</style>
	</head>
	<body>
		<div class="navpanel"><h1><a href="#"><img src="images/logo.png" alt="img" /></a></h1></div>
		<div class="login">
			<form action="{{ url('login') }}" method="post" name="myform" id="myform">
				<ul>
			    	<li class="log-left">User Name:</li>
			        <li class="log-right"><input name="username" id="username" type="text" /></li>
			    	<li class="log-left">Password:</li>
			        <li class="log-right"><input name="password" id="password" type="password" /></li>
			    	<li class="log-left">&nbsp;</li>
			        <li class="log-right"><input name="" type="submit" value="Submit" /></li>
			        <li class="log-left">&nbsp;</li>
			        <li class="log-right"><a href="#">Forget Password?</a></li>
			    </ul>
			</form>
		</div>
		<div class="shadow"></div>
		<div class="copyright">Powered by: Xentric Technologies Pvt Ltd</div>
	</body>
</html>
