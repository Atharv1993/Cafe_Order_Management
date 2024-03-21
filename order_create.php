<?php
    if(isset($_GET['cid'])){
        $cid =$_GET['cid'];

    include 'dbconnect.php';
    $sql = "INSERT into order_status(cid) values ($cid)";
    mysqli_query($conn,$sql);

    $order_id = mysqli_insert_id($conn);
    header("location:orders.php?order_id=$order_id");
    }
?>