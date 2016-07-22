<html>
    <body>
        <form>
            <fieldset style="width:400px;height: 100px"  align="center">
                <legend>LOG IN</legend>
            Username:
            <input type="test" id="username"  placeholder="Username"  required/>
            <br> <br>
            Password:
            <input type="password" id="password" placeholder="Password" required/>
            <br> <br>
            <input type="submit" id="submit"  value="login">
            <input type="button" id="button" value="register">
            
<input type="button" onclick="window.location.href='zhuce.php'" value="register">
        </fieldset>
        </form>
    </body>
</html>
<?php 
if(!empty($_POST['submit']))
$username=$_POST['username'];
$password=$_POST['password'];
$connection=mysql_connect("localhost","root","");
$db="lyb";
mysql_select_db($db,$connection) or die ("Could not open $db.");
$query="select * from user where username='$username'";
$result=mysql_query($query,$connection);

if ($res=mysql_fetch_array($result))
    {
      if($password==$res[password])
        {echo "Welcome!"; mysql_close($connection);}

        else
        {echo "The password is wrong!";mysql_close($connection);}
    }
else
{ echo "The username hasn't has!";mysql_close($connection);}

?>
