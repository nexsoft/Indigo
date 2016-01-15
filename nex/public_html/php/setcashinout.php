<?php

include './config.php';

$customeridd = $_POST['customerid'];
$paytype = $_POST['cashinouttype'];
$amount = $_POST['amount'];
$description = $_POST['description'];
$date= "2015-01-01";




$sql = "INSERT INTO cashinout(customer_id,paymentype,amount,description,date) VALUES(" . $customeridd . ",'" . $paytype . "','" . $amount . "','" . $description . "',NOW())";
if (!mysqli_query($db, $sql)) {
    die('Query failed ERROR: ' . mysqli_error($db));
    echo mysqli_error($db);
} else {
   // header("location:branch.php");
}


    




