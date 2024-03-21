<?php
include 'dbconnect.php';

$sql = "INSERT into orders(item_id,cid,qty,price)
values (3,4,2,342)";

if (mysqli_query($conn, $sql)) {
    echo "<br>New record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>