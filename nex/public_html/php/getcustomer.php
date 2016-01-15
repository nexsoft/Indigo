<?php

include './config.php';

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
echo "<tr><th>Name</th><th>Type</th><th></th></tr>";
foreach ($db->query($sql )as $row ){
   echo "<tr><td onClick='setid(".$row['id'].",".$row['type_id'].")'>".$row['name']."</td><td>".$row['type']."</td><td ><input type='button' value='Delete' onClick='del(".$row['id'].")'></td></tr>";
    
    
}



