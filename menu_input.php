<?php

    session_start();
    include 'dbconnect.php';
    
    if(isset($_POST['apply']))
    {
        $name=$_POST['iname'];
        $price=$_POST['price'];
        $descp=$_POST['descp'];

        $sql="INSERT into menu(itemname,price,descp)
        values('$name','$price','$descp')";

        $result=mysqli_query($conn,$sql);

        if($result){
           $_SESSION['message']="Item Added to Menu";
           header("location:menu.php");
        }

        else{
            $_SESSION['message']="Some Error Occured!!!";
            header("location:menu.php");
        }
    }
?>