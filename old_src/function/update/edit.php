<?php
	$id=$_GET["id"];
	$con = mysql_connect("127.0.0.1","root","");
	mysql_select_db("my_lyb");
	$sql = "select * from msg where id='$id'";
	$result = mysql_query($sql,$con);
	while($row=mysql_fetch_array($result)) {
?>
	<form action="/messageboard/old_src/function/modify.php" method="post">
	<fieldset  align="center">
	<input type="hidden" name="id" value="<?=$row[id]?>">
	<p><input type="text" name="Username" value="<?=$row[Username]?>"></p>
	<p><input type="text" name="Title" value="<?=$row[Title]?>"></p>
	<p><input type="text" name="Content" value="<?=$row[Content]?>"></p>
	<p><input type="submit" value="submit" value="Edit" formaction="/messageboard/old_src/function/update/modify.php?id=<?php echo $id; ?>"</p>
	</fieldset>
	</form>
<?php } ?>

