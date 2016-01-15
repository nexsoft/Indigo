<?php
header("Content-type: text/xml");


include './config.php';


$id = $_POST['id'];

$sql = "SELECT
cashinout.id,
customer.`id` as cusid,
customer.`name`,
cashinout.paymentype,
cashinout.amount,
cashinout.description
FROM
cashinout
INNER JOIN customer ON cashinout.customer_id = customer.id
WHERE
cashinout.id =".$id;
$xml;
foreach ($db->query($sql )as $row ){
  $xml = "<cashinout>";
  $xml .= "<name>".$row['cusid'].":".$row['name']."</name>";
  $xml .= "<type>".$row['paymentype']."</type>";
  $xml .= "<amount>".$row['amount']."</amount>";
  $xml .= "<description>".$row['description']."</description>";
  $xml .= "</cashinout>";
    
}
echo $xml;



