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
    $sql="SELECT * from order_status as o,customer as c where o.cid=c.cid";
    $result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="order_status.css">
    <?php include 'boostrapcdnlink.php';?>
</head>
<body>
<?php include 'nav_bar.php';?>
    <div class="home_distance">
    <center><h2>ORDERS</h2>
    <table border="1px">
        <tr>
            <th style="padding: 20px; font-size: 15px;">ORDER ID</th>
            <th style="padding: 20px; font-size: 15px;">CUSTOMER NAME</th>
            <th style="padding: 20px; font-size: 15px;">TOTAL</th>
            <th style="padding: 20px; font-size: 15px;">DETAILS</th>
        </tr>

        <?php
        while($info=$result->fetch_assoc())
        {
        ?>
 
        <tr>
            <td class="dets"><?php echo "{$info['order_id']}"; ?></td>
            <td class="dets"><?php echo "{$info['cname']}"; ?></td>
            <td class="dets"><?php echo "{$info['total']}"; ?></td>
            <td class="dets"> <form action="order_details.php" method="post">
            <input type="hidden" name="order_id" value="<?php echo $info['order_id']; ?>">
            <input type="submit" value="Details" class="details_but">
        </form></td>
        </tr>

        <?php } ?>
    </table>
    </center>
    </div>
</body>
</html>