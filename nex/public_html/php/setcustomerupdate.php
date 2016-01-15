<?php
header("Content-type: text/xml");


include './config.php';


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



