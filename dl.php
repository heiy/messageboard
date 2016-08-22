<?php 
$Username=$_POST['Username'];
 $Password=$_POST['Password'];
 $con=mysql_connect("127.0.0.1","root","");
 if (!$con)
 {
   die('Could not connect: ' . mysql_error());
 }
 mysql_select_db("my_lyb");
 $sql="select * from User where Usersname='$Username'and Password='$Password'";
 $result=mysql_query($sql,$con);
 $news=mysql_fetch_assoc($result);
 if ($news['Usersname']==$_POST['Username'] and $news['Parsword']==$_POST['Parsword']) {
    echo "log in success ";
    echo "<a href='liuyanban.php'>登陆</a>";
 }else{
    echo "Username is wrong or Password is worng ";
    echo "<a href='denglu.php'>返回</a>";
 }
?>