<html>
	<head>Welcome to the Message Board</head>
	<hr />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<body bgcolor="#E8FFE8" text="#000000"  topmargin="0">
	<div align="center">
	<form action="/messageboard/old_src/function/edit.php" method="post">
	<fieldset style="width:570px;height: 240px"  align="center">
	<legend>Message record</legend>
<?php
	include "../common.php";
	$con = mysql_connect("127.0.0.1","root","");
	mysql_select_db("my_lyb");
	$sql="select * from msg";
	$result =mysql_query($sql,$con);
	echo "<table border='1' align='center'><tr>";
		while($field = mysql_fetch_field($result)){
		echo "<td>&nbsp;".$field->name."&nbsp;</td>";
    }
	echo"<td>&nbsp;".'operation'."&nbsp;</td>";
	echo"<td>&nbsp;".'operation'."&nbsp;</td>";
	while($rows = mysql_fetch_row($result)){
		echo "<tr>";
		for($i = 0; $i < count($rows); $i++){
			echo "<td>&nbsp;".$rows[$i]."</td>";
		}
		echo"<td><button type='submit' formaction='/messageboard/old_src/function/update/edit.php?id=$rows[0]'>modify</button></td>";
		echo"<td><button type='submit' formaction='/messageboard/old_src/function/delete/delete.php?id=$rows[0]'>delete</button></td>";
	}
	echo "</tr></table>";    
?>
	</fieldset>
	</form>
	<form action="/messageboard/old_src/function/insert/messageboard.php" method="post" >
	<fieldset style="width:570px;height: 240px"  align="center">
	<legend>Message Board</legend>
	Username
	<input type="text" name="Username" >
	<br><br>
	Title
	<input type="text" name="Title" style="width:510px">
	<br><br>
	Content
	<input type="text"  name="Content" style="width:510px;height:80px" >
	<br><br>
	<input type="submit" id="submit"  value="submit">
	</form>
	</div>
	</body>
</html>
            
            
            
    