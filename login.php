<?php
    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['message'])
    {
        $message=$_SESSION['message'];
        echo "<script type='text/javascript'> alert('$message'); </script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body >
    <center >
       
        <div class="main">
            <center><h3>LOGIN FORM</h3></center>
            <form action="login_check.php" method="post">
                <div class="in">
                    <label class="label_log">Username: </label>
                    <input type="text" name="uname" class="inp">
                </div>
                <div class="in">
                    <label class="label_log">Password: </label>
                    <input type="password"  name="pass" class="inp">
                </div>
                <div class="in">
                    <input type="submit" value="LOG-IN" class="inp">
                </div>
            
            </form>
        </div>
    </center>
</body>
</html>