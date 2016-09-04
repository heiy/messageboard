<?php
	$id=$_GET["id"];
	$con = mysql_connect("127.0.0.1","root","");
	mysql_select_db("my_lyb");
	$sql="delete from msg where id='$id'";
	$result =mysql_query($sql,$con);
	if(mysql_query($sql)){ 
		echo "Delete success!<a href='/messageboard/old_src/page/messageboard.php'>返回留言板</a>";
	}else{
		echo "Delete failed!<a href='/messageboard/old_src/page/messageboard.php'>返回留言板</a>";
	}
?>