<?php
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$Repassword=$_POST['Repassword'];
if($Password!==$Repassword){
    echo"<script>alert('两次密码输入不一致，请重新输入');</script>";
  }
  else
      {  
        $con = mysql_connect("127.0.0.1","root","");
        mysql_select_db("my_lyb");
        $sql = "insert into User(Usersname,Password) values('$Username','$Password')";
        mysql_query($sql,$con);
         echo"<script>alert('log in success');</script>";
      }
      echo"success!";
      echo "<a href='denglu.php'>返回</a>";
     
?> 