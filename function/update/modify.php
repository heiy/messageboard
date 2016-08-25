 <?php
	date_default_timezone_set('Asia/Chongqing');
	$id=$_GET["id"];
	$Username=$_POST["Username"];
	$Title=$_POST["Title"];
	$Content=$_POST["Content"];
	$con = mysql_connect("127.0.0.1","root","");
	mysql_select_db("my_lyb");
	$message_time = date('Y-m-d H:i:s',time());
	$sql="update ly set Username='$Username',Title='$Title',Content='$Content',Date='$message_time' where id='$id'";
	$result=mysql_query($sql,$con);
	if($result){ 
		echo "modify is success<a href='/page/messageboard.php'>Return Message Board</a>";
	}else{
		echo "modify is failed <a href='/page/messageboard.php'>Return Message Board</a>";
	}
 ?>