<?php
header("Content-type: text/xml");


include './config.php';


$id = $_POST['id'];

$sql = "SELECT
bank.id,
bank.account_name,
bank.account_type,
bank.opening_balance,
bank.amount,
bank.description,
bank.date
FROM
bank
WHERE
bank.id = ".$id;
$xml;
foreach ($db->query($sql )as $row ){
  $xml = "<bank>";
  $xml .= "<account_name>".$row['account_name']."</account_name>";
  $xml .= "<account_type>".$row['account_type']."</account_type>";
  $xml .= "<opening_balance>".$row['opening_balance']."</opening_balance>";
  $xml .= "<amount>".$row['amount']."</amount>";
  $xml .= "<description>".$row['description']."</description>";
  
  $xml .= "</bank>";
    
}
echo $xml;



