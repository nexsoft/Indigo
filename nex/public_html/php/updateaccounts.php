<?php
include './config.php';

$id=$_POST['account_id'];
$account_name = $_POST['account_name'];
$account_type = $_POST['account_type'];
$opening_balance = $_POST['opening_balance'];

$amount=$_POST['amount'];
$description=$_POST['description'];
$sql = "UPDATE  bank SET account_name='$account_name',account_type='$account_type' ,opening_balance=$opening_balance,amount=$amount,description='$description' where id=$id";
echo $sql;
if (!mysqli_query($db, $sql)) {
    die('Query failed ERROR: ' . mysqli_error($db));
    echo mysqli_error($db);
} else {
   // header("location:branch.php");
}



