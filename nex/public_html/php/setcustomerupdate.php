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

//$sql = "SELECT * from customer where id=".$id;
$sql = "SELECT
customer.id,
type.id as type_id,
type.type,
customer.`name`,
customer.contactinfo
FROM
customer ,
type
WHERE
customer.type_id = type.id AND
customer.id =".$id;
$xml;
foreach ($db->query($sql )as $row ){
  $xml = "<customer>";
  $xml .= "<name>".$row['name']."</name>";
  $xml .= "<type>".$row['type_id'].":".$row['type']."</type>";
  $xml .= "<contactinfo>".$row['contactinfo']."</contactinfo>";
  $xml .= "</customer>";
    
}
echo $xml;



