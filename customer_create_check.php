<?php

    session_start();
    include 'dbconnect.php';
    
    if(isset($_POST['apply']))
    {
        $name=$_POST['cname'];
        $ph=$_POST['cph'];
        $email=$_POST['cemail'];
        $address=$_POST['cadd'];

        $sql="INSERT into customer(cname,phone,email,caddress)
        values('$name','$ph','$email','$address')";

        $result=mysqli_query($conn,$sql);

        if($result){
           $_SESSION['message']="Customer Id created sucessfully.";
           header("location:customer.php");
        }

        else{
            $_SESSION['message']="Some Error Occured!!!";
            header("location:customer.php");
        }
    }
?>