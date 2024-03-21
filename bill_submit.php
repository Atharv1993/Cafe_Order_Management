<?php
    include 'dbconnect.php';
    session_start();
    $order_id = $_POST['order_id'];
    $total = $_POST['total'];

    $sql= "UPDATE order_status set total= $total where order_id=$order_id";
    $result = mysqli_query($conn,$sql);
    
    if($result){
        $_SESSION['message']="Order Confirmed";
        header("location:home.php");
     }

?>
