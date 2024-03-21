<html>
<body>

<?php

include 'dbconnect.php';

 // sql to create table
 $sql = "CREATE TABLE orders(order_item_id int primary key,order_id int,item_id int,foreign key(item_id) references menu(item_id),qty int,price float)";


 if (mysqli_query($conn, $sql)) {
    echo "<br>Table created successfully";
 } else{
    echo "Error creating table: " . mysqli_error($conn);
 }


 mysqli_close($conn);
?>

</body>
</html>