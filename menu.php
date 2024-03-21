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
    <?php include 'boostrapcdnlink.php';?>
</head>
<body>
    <?php include 'nav_bar.php';?>
    <div class="home_distance">

    
            <div class="tab_div">
            <link rel="stylesheet" href="history.css">
            <div class="his">

                <button class="history"><a href="menu_history.php" style="color: #f4f4f4;">History</a></button>
            </div>
            <center><h2>MENU</h2> 
            <table border="1px">
                <tr>
                    <th style="padding: 20px; font-size: 15px;">ITEM_NAME</th>
                    <th style="padding: 20px; font-size: 15px;">PRICE</th>
                    <th style="padding: 20px; font-size: 15px;">DESCRIPTION</th>
                    <th style="padding: 20px; font-size: 15px;">DELETE</th>
                    <th style="padding: 20px; font-size: 15px;">EDIT</th>
                </tr>
        
                <?php
                while($info=$result->fetch_assoc())
                {
                ?>
         
                <tr class="tab_tr">
                    <td class="dets" style="padding: 10px;"><?php echo "{$info['itemname']}"; ?></td>
                    <td class="dets"><?php echo "{$info['price']}"; ?></td>
                    <td class="dets"><?php echo "{$info['descp']}"; ?></td>
                    <td class="dets">  <?php echo "<a onClick=\" javascript:return confirm('Are you sure to delete?');\" href='menu_delete.php?item_id={$info['item_id']}' >Delete</a>"; ?>  </td>
                    <td class="dets">  <?php echo "<a href='menu_edit.php?item_id={$info['item_id']}'>Edit</a>"; ?>  </td>
        
                </tr>
        
                <?php } ?>
            </table>
            </center>
            </div>
        
            <div style="padding-top: 40px;">
            <center>
                <h3>ADD ITEM</h3>
                <form action="menu_input.php" method="post">
                    <div class="adm">
                        <label class="form_label">Item Name: </label>
                        <input class="form_input" type="text" name="iname">
                    </div>
                    <div class="adm">
                        <label class="form_label">Item Price: </label>
                        <input class="form_input" type="number" step="any" name="price">
                    </div>
                    <div class="adm">
                        <label class="form_label">Description </label>
                        <input class="form_input" type="text" name="descp">
                    </div>
                    <div class="adm" style="padding-bottom: 20px;">
                        <input  id="sub" type="submit" value="ADD" name="apply">
                    </div>
                </form>
            </center>
            </div>

    </div>
</body>
</html>