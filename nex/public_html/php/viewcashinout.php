<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123');
define('DB_DATABASE', 'nextest');

//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'makemywe_root');
//define('DB_PASSWORD', 'E00,Fe{E)B2-');
//define('DB_DATABASE', 'makemywe_nextest1');

//$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
//echo "Connected successfully";


$id = $_POST['id'];
//$id = 4;

$sql = "SELECT
cashinout.id as cashid,
cashinout.customer_id,
customer.`name`,
cashinout.paymentype,
cashinout.amount,
cashinout.description,
cashinout.date
FROM
cashinout ,
customer
WHERE
cashinout.customer_id = customer.id AND
customer.`id` = $id";


echo "<tr><th>ID</th><th>Date</th><th>Payment Type</th><th>Amount</th><th>Description</th></tr>";
foreach ($db->query($sql )as $row ){
   echo "<tr><td> ".$row['cashid']."</td><td>".$row['date']."</td><td>".$row['paymentype']."</td><td>".$row['amount']."</td><td>".$row['description']."</td><td ></td></tr>";
    
    
}




