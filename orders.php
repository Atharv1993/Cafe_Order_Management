<?php
    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['message'])
    {
        $message=$_SESSION['message'];
        echo "<script type='text/javascript'> alert('$message'); </script>";
    }
    $order_id = $_GET['order_id'];

    include 'dbconnect.php';
    $sql="select * from menu";
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
    <link rel="stylesheet" href="orders_buttons.css">
    <?php include 'boostrapcdnlink.php';?>
</head>
<body>
    <?php include 'nav_bar.php';?>
    <div style="padding-top: 100px;">
    <center><h2>MENU</h2>
    <table border="1px">
        <tr>
            <th style="padding: 20px; font-size: 15px;">ITEM_NAME</th>
            <th style="padding: 20px; font-size: 15px;">PRICE</th>
            <th style="padding: 20px; font-size: 15px;">DESCRIPTION</th>
            <th style="padding: 20px; font-size: 15px;">QTY</th>
            <th style="padding: 20px; font-size: 15px;">ADD ITEM</th>
        </tr>

        <?php
        while($info=$result->fetch_assoc())
        {
        ?>
 
        <tr>
            <td class="dets"><?php echo "{$info['itemname']}"; ?></td>
            <td class="dets"><?php echo "{$info['price']}"; ?></td>
            <td class="dets"><?php echo "{$info['descp']}"; ?></td>
            <td class="dets">
                <form action="orders_add.php" method="get">
                    <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
                    <input type="hidden" name="item_id" value="<?php echo $info['item_id']; ?>">
                    <input type="hidden" name="price" value="<?php echo $info['price']; ?>">
                    <center><input type="number" step="any" name="quantity" class="qnty"></center>
            </td>
            <td class="dets butto">
                    <input type="submit" value="ADD" class="add_b" id="butt1">
                </form>
            </td>

        </tr>

        <?php } ?>
    </table>
    </center>
    </div>
    



    <?php
$sql1 = "SELECT  m.itemname, o.qty, o.price ,o.order_item_id FROM orders AS o, menu AS m WHERE o.item_id = m.item_id AND order_id = $order_id";
$result1 = mysqli_query($conn, $sql1);
?>

<div style="padding-top: 100px;">
    <center><h2>YOUR ORDER</h2>
    <table border="1px" class="your_order">
        <tr>
            <th style="padding: 20px; font-size: 15px;">ITEM NAME</th>
            <th style="padding: 20px; font-size: 15px;">QTY</th>
            <th style="padding: 20px; font-size: 15px;">PRICE</th>
            <th style="padding: 20px; font-size: 15px;">REMOVE</th>
        </tr>

        <?php
        while ($info_order = $result1->fetch_assoc()) {
        ?>
            <tr>
                <td class="dets"><?php echo "{$info_order['itemname']}"; ?></td>
                <td class="dets"><?php echo "{$info_order['qty']}"; ?></td>
                <td class="dets"><?php echo "{$info_order['price']}"; ?></td>
                <td class="dets det_div">
                    <form action="order_delete_item.php" method="post">
                        <input type="hidden" name="order_item_id" value="<?php echo $info_order['order_item_id']; ?>">
                        <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
                        <button type="submit" class="del_b">DELETE</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
    
    <div style="padding: 40px;">
        <form action="bill_print.php" method="post">
            <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
            <input type="submit" value="CONFIRM ORDER" id="sub12">
        </form>
    </div>
    </center>
</div>
</body>
</html>

