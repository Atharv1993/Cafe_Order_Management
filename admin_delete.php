<?php
    include 'dbconnect.php';

    if($_GET['username'])
    {
        $id=$_GET['username'];
        $sql="delete from admins where username='$id'";

        $result=mysqli_query($conn,$sql);

    }

    if($result)
    {
        header("location:admins.php");
    }

?>