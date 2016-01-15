<?php
include './config.php';

$typeid = $_POST['typeid'];
$name = $_POST['name'];
$type = $_POST['type'];
$contacinfo = $_POST['contactinfo'];
$id=$_POST['id'];
$sql = "UPDATE  customer SET name='$name',type_id=$typeid,type='$type',contactinfo='$contacinfo' where id=$id";
echo $sql;
if (!mysqli_query($db, $sql)) {
    die('Query failed ERROR: ' . mysqli_error($db));
    echo mysqli_error($db);
} else {
   // header("location:branch.php");
}



