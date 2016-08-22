<?php
date_default_timezone_set('Asia/Chongqing');
 $id=$_GET["id"];
 $con = mysql_connect("127.0.0.1","root","");
        mysql_select_db("my_lyb");
 $sql = "select * from ly where id='".$_GET['id']."'";
 $result = mysql_query($sql,$con);
  while($row=mysql_fetch_array($result)){
?>
        <form>
              <fieldset  align="center">
          <input type="hidden" name="id" value="<?=$row[id]?>">
          <p><input type="text" name="Username" value="<?=$row[Username]?>"></p>
          <p><input type="text" name="Title" value="<?=$row[Title]?>"></p>
          <p><input type="text" name="Content" value="<?=$row[Content]?>"></p>
          <p><input type="submit" value="submit" value="Edit" formaction="edit.php?id='$_GET[id]'"></p>
              </fieldset>
          </form>
 <?php
    $id=$_POST["id"];
    $con = mysql_connect("127.0.0.1","root","");
           mysql_select_db("my_lyb");
    $message_time = date('Y-m-d H:i:s',time());
    $sql="update ly set Username='$_POST[Username]',Title='$_POST[Title]',Content='$_POST[Content]',Date='$message_time' where id='$_POST[id]'";
    mysql_query($sql,$con);
    if(mysql_query($sql)){ 
      echo "<a href='liuyanban.php'>Return Message Board</a>";
    }else{
      echo "<a href='liuyanban.php'>Return Message Board</a>";
    }
  }
 ?>
