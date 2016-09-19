<html>
	<head>Welcome to the Message Board</head>
	<hr />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<body bgcolor="#E8FFE8" text="#000000"  topmargin="0">
	<div align="center">
	<form action='' m>
	<fieldset style="width:570px;height: 240px"  align="center">
	<legend>Message record</legend>
<?php
	echo "<table border='1' align='center'><tr>";
	echo "<tr>";	
    echo "<td>Username</td>";
    echo "<td>Title</td>";
    echo "<td>Content</td>";
	echo "<td>Date</td>";
	echo"<td>操作</td>";
	echo"<td>操作</td>";
	$query = $this->db->query('SELECT Username, Title, Content,Date FROM msg');
	foreach ($query->result() as $row)
{
	echo "<tr>";	
    echo "<td>$row->Username</td>";
    echo "<td>$row->Title</td>";
    echo "<td>$row->Content</td>";
	echo "<td>$row->Date</td>";
	echo"<td><button type='submit' >modify</button></td>";
	echo"<td><button type='submit' >delete</button></td>";
}
	echo "</tr></table>";    
?>
	</fieldset>
	</form>
	<form>
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