<?php

include './config.php';

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





    




