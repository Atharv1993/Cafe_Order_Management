<?php
    include 'dbconnect.php';
    $sql="select * from admins";
    $result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
<?php include 'nav_bar.php';?>
<div style="padding: 100px;">
    
            <button><a href="customer_add.php">ADD NEW ADMIN</a></button>
        
    </div>
    <div style="padding-top: 10px;">
    <center><h2>ADMINS</h2>
    <table border="1px">
        <tr>
            <th style="padding: 20px; font-size: 15px;">USERNAME</th>
            <th style="padding: 20px; font-size: 15px;">DELETE</th>
        </tr>

        <?php
        while($info=$result->fetch_assoc())
        {
        ?>
 
        <tr>
            <td class="dets"><?php echo "{$info['username']}"; ?></td>
            <td class="dets">  <?php echo "<a onClick=\" javascript:return confirm('Are you sure to delete the user?');\" href='admin_delete.php?item_id={$info['username']}'>Delete</a>"; ?>  </td>
        </tr>

        <?php } ?>
    </table>
    </center>
    </div>

    
</body>
</html>
