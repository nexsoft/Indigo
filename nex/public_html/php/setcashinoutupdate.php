<?php
header("Content-type: text/xml");


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


$id = $_POST['id'];

$sql = "SELECT
cashinout.id,
customer.`id` as cusid,
customer.`name`,
cashinout.paymentype,
cashinout.amount,
cashinout.description
FROM
cashinout
INNER JOIN customer ON cashinout.customer_id = customer.id
WHERE
cashinout.id =".$id;
$xml;
foreach ($db->query($sql )as $row ){
  $xml = "<cashinout>";
  $xml .= "<name>".$row['cusid'].":".$row['name']."</name>";
  $xml .= "<type>".$row['paymentype']."</type>";
  $xml .= "<amount>".$row['amount']."</amount>";
  $xml .= "<description>".$row['description']."</description>";
  $xml .= "</cashinout>";
    
}
echo $xml;



