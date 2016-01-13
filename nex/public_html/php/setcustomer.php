<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123');
define('DB_DATABASE', 'nextest');

//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'makemywe_root');
//define('DB_PASSWORD', 'E00,Fe{E)B2-');
//define('DB_DATABASE', 'makemywe_nextest1');

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
//echo "Connected successfully";

$typeid = $_POST['typeid'];
$name = $_POST['name'];
$type = $_POST['type'];
$contacinfo = $_POST['contactinfo'];

$sql = "SELECT COUNT(contactinfo) as count FROM customer where contactinfo='" . $contacinfo . "'";

foreach ($db->query($sql)as $row) {
   // echo $row['count'];
    if ($row['count'] == 0) {

        $sql = "INSERT INTO customer(type_id,name,type,contactinfo) VALUES(" . $typeid . ",'" . $name . "','" . $type . "','" . $contacinfo . "')";
        if (!mysqli_query($db, $sql)) {
            die('Query failed ERROR: ' . mysqli_error($db));
            echo mysqli_error($db);
        } else {
            // header("location:branch.php");
        }
        echo '1';
    } else {

        echo '0';
    }
//    
}





    




