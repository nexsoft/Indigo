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
customer.type_id = type.id";
echo "<tr><th>Name</th><th>Type</th></tr>";
foreach ($db->query($sql )as $row ){
   echo "<tr><td onClick='setid(".$row['id'].",".$row['type_id'].")'>".$row['name']."</td><td>".$row['type']."</td><td ><input type='button' value='Delete' onClick='del(".$row['id'].")'></td></tr>";
    
    
}



