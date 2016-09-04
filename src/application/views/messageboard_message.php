<html>
	<head>Welcome to the Message Board</head>
	<hr />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<body bgcolor="#E8FFE8" text="#000000"  topmargin="0">
	<div align="center">
	<form>
	<fieldset style="width:570px;height: 240px"  align="center">
	<legend>Message record</legend>
	<?php echo $title; ?>
	<?php foreach ($msg as $msg_item): ?>
	<?php echo $msg_item['title']; ?>
    <div class="main">
	<?php echo $msg_item['text']; ?>
    </div>
    <p><a href="<?php echo site_url('msg/'.$msg_item['id']); ?>">View article</a></p>
	<?php endforeach; ?>
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
            
            
            
    