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
    $sql="select itemname,price,descp from menu_history";
    $result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="menu_deg.css">
    <?php include 'boostrapcdnlink.php';?>
</head>
<body>
<?php include 'nav_bar.php';?>
    <div class="home_distance">

            <center><h2>HISTORY</h2> 
            <table border="1px">
                <tr>
                    <th style="padding: 20px; font-size: 15px;">ITEM_NAME</th>
                    <th style="padding: 20px; font-size: 15px;">PRICE</th>
                    <th style="padding: 20px; font-size: 15px;">DESCRIPTION</th>
                </tr>
        
                <?php
                while($info=$result->fetch_assoc())
                {
                ?>
         
                <tr class="tab_tr">
                    <td class="dets" style="padding: 10px;"><?php echo "{$info['itemname']}"; ?></td>
                    <td class="dets"><?php echo "{$info['price']}"; ?></td>
                    <td class="dets"><?php echo "{$info['descp']}"; ?></td>
                   
                </tr>
        
                <?php } ?>
            </table>
            </center>
            </div>
    </div>
</body>
</html>