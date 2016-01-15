<?php

include './config.php';

$id = $_POST['id'];
//$id = 4;

$sql = "SELECT
cashinout.id as cashid,
cashinout.customer_id,
customer.`name`,
cashinout.paymentype,
cashinout.amount,
cashinout.description,
cashinout.date
FROM
cashinout ,
customer
WHERE
cashinout.customer_id = customer.id AND
customer.`id` = $id";


echo "<tr><th>ID</th><th>Date</th><th>Payment Type</th><th>Amount</th><th>Description</th></tr>";
foreach ($db->query($sql )as $row ){
   echo "<tr><td> ".$row['cashid']."</td><td>".$row['date']."</td><td>".$row['paymentype']."</td><td>".$row['amount']."</td><td>".$row['description']."</td><td ></td></tr>";
    
    
}




