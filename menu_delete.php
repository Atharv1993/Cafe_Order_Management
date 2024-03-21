<?php
    include 'dbconnect.php';

    if($_GET['item_id'])
    {
        $id=$_GET['item_id'];
        $sql="delete from menu where item_id='$id'";

        $result=mysqli_query($conn,$sql);

    }

    if($result)
    {
        header("location:menu.php");
    }

?>