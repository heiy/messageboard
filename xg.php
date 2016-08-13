<?php
$id=$_POST["id"];
 $con = mysql_connect("127.0.0.1","root","");
        mysql_select_db("my_lyb");
         $sql = "select * from ly where id='".$_POST['id']."'";
        $result = mysql_query($sql,$con);
        if($row = mysql_fetch_array($result))
        {
        $Username=$_POST["Username"];
        $Title=$_POST["Title"];
        $Content=$_POST["Content"];
        $sql="update ly set Username='$Username',Title='$Title',Content='$Content'where id ='$id'";
        mysql_query($sql,$con);  
        }
?>