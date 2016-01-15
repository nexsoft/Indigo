<?php

include './config.php';

$typeid = $_POST['typeid'];
$name = $_POST['name'];
$type = $_POST['type'];
$contacinfo = $_POST['contactinfo'];
$id=$_POST['id'];

$sql ="DELETE from customer where id=$id";
if (!mysqli_query($db, $sql)) {
    die('Query failed ERROR: ' . mysqli_error($db));
    echo mysqli_error($db);
} else {
   // header("location:branch.php");
}


    




