<?php
    session_start();
    include 'dbconnect.php';

    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $sql="select * from admins where username = '$username' and pass= '$password'";
    $result= mysqli_query($conn,$sql);
    $count= mysqli_num_rows($result);
    if($count>0){
        header("location:home.php");
    }
    else{
        $_SESSION['message']="Invalid username or password!!!";
        header("location:login.php");
    }

?>