<html>
    <body>
        <form>
            <fieldset style="width:400px;height: 150px"  align="center">
                <legend>Register</legend>
            Username:
            <input type="test" id="username"  placeholder="Username"  required/>
            <br> <br>
            Password:
            <input type="password" id="password" placeholder="Password" required/>
            <br> <br>
            Enter again:
            <input type="password" id="password" placeholder="Password" required/>
            <br> <br>
            <input type="submit" id="submit"  value="submit">
        </fieldset>
        </form>
    </body>
</html>
<?php 
$username=$_POST['username'];
$password=$_POST['password'];
    if(!empty($_POST['submit']))
        { 
        $sql = "insert into User(Usersname,Password),values($Username,$Password)";
    }
?>
