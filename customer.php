<?php
    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['message'])
    {
        $message=$_SESSION['message'];
        echo "<script type='text/javascript'> alert('$message'); </script>";
    }
    include 'dbconnect.php';
    $sql="select * from customer";
    $result = mysqli_query($conn,$sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="cust.css">
    <?php include 'boostrapcdnlink.php';?>  
</head>


<body>
 
    <?php include 'nav_bar.php';?>

    <div class="home_distance">
        <div class="cust_div">

            <form action="#" method="post">
                <div class="div1">
                <center><h2>CUSTOMERS </h2>
                    <input type="text" name="search_name" class="search">
                    <input type="submit" value="SEARCH" name="search1" class="search_but">
                </center>
                </div>
            </form>
        
        
            <?php
        
                if(isset($_POST['search1'])){
                if($_POST['search_name']!=""){
        
                    $search_name = $_POST['search_name'];
                    $sql="select * from customer where cname= '$search_name'";
                    $result = mysqli_query($conn,$sql);
            
                }
                else{
        
                    $sql="select * from customer";
                    $result = mysqli_query($conn,$sql);
                }
            }
            ?>
        
            <div class="table_div">
            
            <table border="1px" class="table">
                <tr>
                    <th style="padding: 20px; font-size: 15px;">NAME</th>
                    <th style="padding: 20px; font-size: 15px;">PHONE</th>
                    <th style="padding: 20px; font-size: 15px;">EMAIL</th>
                    <th style="padding: 20px; font-size: 15px;">ADDRESS</th>
                    <th style="padding: 20px; font-size: 15px;">ADD ORDER</th>
                    <th style="padding: 20px; font-size: 15px;">DELETE</th>
                </tr>
        
                <?php
                while($info=$result->fetch_assoc())
                {
                ?>
         
                <tr>
                    <td class="dets"><center><?php echo "{$info['cname']}"; ?></center></td>
                    <td class="dets"><center><?php echo "{$info['phone']}"; ?></center></td>
                    <td class="dets"><center><?php echo "{$info['email']}"; ?></center></td>
                    <td class="dets"><center><?php echo "{$info['caddress']}"; ?></center></td>
                    <td class="dets lins"> <center> <?php echo "<a href='order_create.php?cid={$info['cid']}' class='rem cuts'>ADD</a>"; ?>  </center></td>
                    <td class="dets lins" ><center>  <?php echo "<a onClick=\" javascript:return confirm('Are you sure to delete?');\" href='customer_delete.php?cid={$info['cid']}' class='rem cuts'>Remove</a>"; ?>  </td>
        
                </tr>
        
                <?php } ?>
            </table>
            </center>
            </div>
        
            <div style="padding-top: 40px;">
                <center>
                    <button><a href="customer_add.php">ADD CUSTOMER</a></button>
                </center>
            </div>
        </div>
    </div>


</body>
</html>