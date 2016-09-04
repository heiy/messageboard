<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<body bgcolor="#E8FFE8" text="#000000"  topmargin="240">
	<div align="center">
		<form>
	<fieldset style="width:400px;height: 200px"  align="center">
	<legend>Register</legend>
	<br> <br>    
	Username:
	<input type="text" name="Username"  placeholder="Username"  required/>
	<br> <br>
	Password:
	<input type="password" name="Password" placeholder="Password" required/>
	<br> <br>
	Repassword:
	<input type="password" name="Repassword" placeholder="Repassword" required/>
	<br> <br>
	<input type="submit" id="submit"  value="submit">
	</fieldset>
	</form>
	</div>  
	</body>
</html>