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


$contact= $_POST['contact'];

$sql = "SELECT COUNT(contactinfo) as count FROM customer where contactinfo='".$contact."'";

foreach ($db->query($sql )as $row ){
    echo $row['count'];
//    if($row['count'] == 0){
//      
//        return TRUE;
//        
//        
//    }else{
//        
//        return FALSE;
//    }
//    
    
    
}



