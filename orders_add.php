<?php
include 'dbconnect.php';
    $order_id =$_GET['order_id'];
    $item_id=$_GET['item_id'];
    $qty= (float)$_GET['quantity'];
    $price = (float)$_GET['price'];
    $new_price =$qty*$price;
    $sql ="INSERT into orders (order_id,item_id,qty,price) values ('$order_id','$item_id','$qty','$new_price')";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:orders.php?order_id=$order_id");
    }

?>