<?php
	date_default_timezone_set('Asia/Chongqing');
	$Username=$_POST['Username'];
	$Title=$_POST['Title'];
	$Content=$_POST['Content'];
	$con = mysql_connect("127.0.0.1","root","");
	mysql_select_db("my_lyb");
	$message_time = date('Y-m-d H:i:s',time());
	$sql = "insert into Ly (Username,Title,Content,Date) values('$Username','$Title','$Content','$message_time')";
	mysql_query($sql,$con); 
	echo"success!";
	echo "<a href='/page/messageboard.php'>返回</a>";     
?>