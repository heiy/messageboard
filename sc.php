<?php
$id=$_POST["id"];
 $con = mysql_connect("127.0.0.1","root","");
        mysql_select_db("my_lyb");
        $sql="delete from ly where id='$id'";
        $result =mysql_query($sql,$con);
        if(mysql_query($sql)){ 
echo "Delete success";
}
else
{
echo "Delete failed";
}
?>
