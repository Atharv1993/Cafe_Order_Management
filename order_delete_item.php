<?php
    include 'dbconnect.php'; 

    $order_item_id = $_POST['order_item_id'];
    $order_id = $_POST['order_id'];

    $sql="DELETE from orders where order_item_id = $order_item_id";
    $result=mysqli_query($conn,$sql);

    if($result){
        header("location:orders.php?order_id=$order_id");
    }
    

?>
