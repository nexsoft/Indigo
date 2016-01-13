<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123');
define('DB_DATABASE', 'nextest');

//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'makemywe_root');
//define('DB_PASSWORD', 'E00,Fe{E)B2-');
//define('DB_DATABASE', 'makemywe_nextest1');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
//echo "Connected successfully";

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


    




