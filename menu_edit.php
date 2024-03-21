<?php
    include 'dbconnect.php';
    $id=$_GET['item_id'];
    $sql="select * from menu where item_id='$id'";

    $result=mysqli_query($conn,$sql);
    $info= $result->fetch_assoc();

    if(isset($_POST['apply'])){
        $name=$_POST['iname'];
        $price=$_POST['price'];
        $descp=$_POST['descp'];

        $query ="update menu set itemname='$name',price='$price',descp='$descp' where item_id='$id'";
        $ans=mysqli_query($conn,$query);
        if($ans)
        {
            header("location:menu.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU EDIT</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="menu_deg.css">
    <?php include 'boostrapcdnlink.php';?>
</head>
<body>
    <?php include 'nav_bar.php';?>
    <div class="home_distance">
    <center>
    <h2 >EDIT MENU ITEM</h2>
        <form action="#" method="post">
            <div class="adm">
                <label class="form_label">Item Name: </label>
                <input class="form_input" type="text" name="iname" value="<?php echo "{$info['itemname']}"; ?>">
            </div>
            <div class="adm">
                <label class="form_label">Item Price: </label>
                <input class="form_input" type="number" step="any" name="price" value="<?php echo "{$info['price']}"; ?>">
            </div>
            <div class="adm">
                <label class="form_label">Description </label>
                <input class="form_input" type="text" name="descp"  value="<?php echo "{$info['descp']}"; ?>"> 
            </div>
            <div class="adm" >
                <input  id="sub" type="submit" value="UPDATE" name="apply">
            </div>
            
        </form>
        </center>
    </div>
</body>
</html>