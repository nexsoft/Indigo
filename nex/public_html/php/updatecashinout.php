<?php
include './config.php';


$type = $_POST['type'];
$amount = $_POST['amount'];
$description = $_POST['description'];
$id=$_POST['cashinout_idd'];
$cusid=$_POST['cusid'];
$sql = "UPDATE  cashinout SET customer_id=$cusid,paymentype='$type' ,amount=$amount,description='$description' where id=$id";
echo $sql;
if (!mysqli_query($db, $sql)) {
    die('Query failed ERROR: ' . mysqli_error($db));
    echo mysqli_error($db);
} else {
   // header("location:branch.php");
}



