<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="cust.css">
    <link rel="stylesheet" href="cust_add.css">
    <?php include 'boostrapcdnlink.php';?> 
</head>
<body>
<?php include 'nav_bar.php';?>
    <div class="home_distance">
        <center><h3>ADD CUSTOMER</h3>
        <form action="customer_create_check.php" method="post">
            <div class="adm">
                <label class="form_label">Customer Name: </label>
                <input class="form_input" type="text" name="cname">
            </div>
            <div class="adm">
                <label class="form_label">Phone Number: </label>
                <input class="form_input" type="number" name="cph">
            </div>
            <div class="adm">
                <label class="form_label">Email: </label>
                <input class="form_input" type="text" name="cemail">
            </div>
            <div class="adm">
                <label class="form_label">Address: </label>
                <input class="form_input" type="text" name="cadd">
            </div>
            <div class="adm" >
                <input  id="sub" type="submit" value="Create" name="apply">
            </div>
        </form>
    </center>
    </div>
</body>
</html>