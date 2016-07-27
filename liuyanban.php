<html>
    <head>Welcome to the Message Board</head>
    <hr />
    <body>
        <form>
            <fieldset style="width:570px;height: 180px"  align="center">
                <legend>Message record</legend>
                <?php
        $con = mysql_connect("127.0.0.1","root","");
        mysql_select_db("my_lyb");
        $sql="select * from ly";
        $result =mysql_query($sql,$con);
echo "<table border=1><tr>";
while($field = mysql_fetch_field($result))
{
    echo "<td>&nbsp;".$field->name."&nbsp;</td>";
}
echo"</tr>";
while($rows = mysql_fetch_row($result))
{
    echo "<tr>";
    for($i = 0; $i < count($rows); $i++)
        echo "<td>&nbsp;".$rows[$i]."</td>";
}
echo "</tr></table>";
?>
        </fieldset>
        </form>
        <form action="lyb.php" method="post">
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
             <button type="button"> Reset</button>
    </body>
</html>
            
            
            
    