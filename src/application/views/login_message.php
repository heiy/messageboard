<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<body bgcolor="#E8FFE8" text="#000000"  topmargin="260">
	<div align="center">
	<form action='/messageboard/src/application/controllers/judge.php' method='post'>
	<fieldset style="width:300px;height: 150px"  align="center">
	<legend>LOG IN</legend>
	<br> <br>    
	Username:
	<input type="text" name="Username"  placeholder="Username"  required/>
	<br> <br>
	Password:
	<input type="password" name="Password" placeholder="Password" required/>
	<br> <br> 
	<input type="submit" id="submit"  value="login">
	<input type="button"  value="register" onclick="window.location.href='register'">
	</fieldset>
	</form>
	</div>
	</body>
</html>	