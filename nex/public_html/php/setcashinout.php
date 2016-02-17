<?php

include './config.php';

$customeridd = $_POST['customerid'];
$paytype = $_POST['cashinouttype'];
$amount = $_POST['amount'];
$description = $_POST['description'];
$openingbalance=$_POST['openingbalance'];
$date= "2015-01-01";




$sql = "INSERT INTO cashinout(customer_id,paymentype,amount,description,date,openingbalance) VALUES"
        . "(" . $customeridd . ",'" . $paytype . "','" . $amount . "','" . $description . "',NOW(),'".$openingbalance."')";
if (!mysqli_query($db, $sql)) {
    die('Query failed ERROR: ' . mysqli_error($db));
    echo mysqli_error($db);
} else {
   // header("location:branch.php");
}


    




