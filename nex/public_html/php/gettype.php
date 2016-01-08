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
echo "Connected successfully";




$sql = "SELECT * from type";
echo "<option value='0'>--Select--</option>";
foreach ($db->query($sql )as $row ){
   echo "<option value='".$row['id'].":".$row['type']."'>".$row['type']."</option>";
    
    
}



