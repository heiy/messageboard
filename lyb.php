<?php
$Username=$_POST['Username'];
$Title=$_POST['Title'];
$Content=$_POST['Content'];

        $con = mysql_connect("127.0.0.1","root","");
        mysql_select_db("my_lyb");
        $sql = "insert into Ly(Username,Title,Content) values('$Username','$Title','$Content')";
        mysql_query($sql,$con);
        
        echo"success!";
        echo "<a href='liuyanban.php'>返回</a>";
     
?> 