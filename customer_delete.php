<?php
    include 'dbconnect.php';

    if($_GET['cid'])
    {
        $id=$_GET['cid'];
        $sql="delete from customer where cid='$id'";

        $result=mysqli_query($conn,$sql);

    }

    if($result)
    {
        header("location:customer.php");
    }

?>