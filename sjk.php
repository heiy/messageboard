<?php
$con = mysql_connect("127.0.0.1","root","");
//if (!$con)
//  {
//  die('Could not connect: ' . mysql_error());
//  }
//
//if (mysql_query("CREATE DATABASE my_lyb",$con))
//  {
//  echo "Database created";
//  }
//else
//  {
//  echo "Error creating database: " . mysql_error();
//  }

//mysql_close($con);
//mysql_select_db("my_lyb", $con);
//$sql = "CREATE TABLE User  
//(
//Usersname varchar(15),
//Password varchar(15),
//Id int
//)";
//mysql_query($sql,$con);
//mysql_close($con);

mysql_select_db("my_lyb", $con);
$sql = "CREATE TABLE Ly 
(
Username varchar(15),
Title text(15),
Content text(100),
Date date
)";
mysql_query($sql,$con);

mysql_close($con);
?>

