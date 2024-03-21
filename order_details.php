<?php
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_id = $_POST['order_id'];

    // Retrieve customer details
    $customer_sql = "SELECT c.cname, c.phone, c.caddress, c.email FROM customer c, order_status o WHERE c.cid = o.cid AND o.order_id = $order_id";
    $customer_result = mysqli_query($conn, $customer_sql);
    $customer_info = $customer_result->fetch_assoc();

    // Retrieve order details
    $order_sql = "SELECT m.itemname, o.qty, o.price FROM orders o, menu m WHERE o.item_id = m.item_id AND o.order_id = $order_id";
    $order_result = mysqli_query($conn, $order_sql);

    // Calculate total
    $total_sql = "SELECT sum(price) as total_price from orders WHERE order_id = $order_id";
    $total_result = mysqli_query($conn, $total_sql);
    $total_info = mysqli_fetch_assoc($total_result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Print</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="bill_style.css">

    <?php include 'boostrapcdnlink.php';?>
</head>
<body>
<?php include 'nav_bar.php';?>
<div class="home_distance">
        <div style="height: 40px; background-color:#C69B7B;"></div>

        <div style="padding-top: 10px;">
        <div class="head">

            <center>BILL DETAILS</center>
        </div>
            
            <div class="cutomer">
                <h3 style="font-weight: bold;">Customer Details</h3>
                <p>Name: <?php echo $customer_info['cname']; ?></p>
                <p>Phone: <?php echo $customer_info['phone']; ?></p>
                <p>Email: <?php echo $customer_info['email']; ?></p>
                <p>Address: <?php echo $customer_info['caddress']; ?></p>
            </div>
    
            <div class="detai">
                <div class="detai_head">
                    <h3 style="font-weight: bold;">Order Details</h3>

                </div>
                <table border="1px">
                    <tr>
                        <th style="padding: 20px; font-size: 15px;">ITEM NAME</th>
                        <th style="padding: 20px; font-size: 15px;">QTY</th>
                        <th style="padding: 20px; font-size: 15px;">PRICE</th>
                    </tr>
                    <?php while ($info_order = $order_result->fetch_assoc()) { ?>
                        <tr>
                            <td><center><?php echo $info_order['itemname']; ?>  </center></td>
                            <td><center><?php echo $info_order['qty']; ?>  </center></td>
                            <td><center><?php echo $info_order['price']; ?>  </center></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
    
            <div class="tot">
                <p>TOTAL: <?php echo $total_info['total_price']; ?></p>
            </div>
        </div>
    </div>


</body>
</html>