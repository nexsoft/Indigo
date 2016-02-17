<?php

include './config.php';




$sql = "SELECT
cashinout.id,
cashinout.paymentype,
cashinout.amount,
customer.`name`,
cashinout.customer_id,
cashinout.openingbalance

FROM
cashinout ,
customer
WHERE
cashinout.customer_id = customer.id";
echo "<tr><th>Name</th><th>Type</th><th>Amount</th></tr>";
foreach ($db->query($sql)as $row) {
    echo "<tr><td onClick='setcashid(" . $row['id'] . ",".$row['customer_id'].")'>" . $row['name'] . "</td><td>" . $row['paymentype'] . "</td><td>".$row['amount']."</td><td><input type='button' value='Delete' onClick='delcashid(" . $row['id'] . ")'  ></td></tr>";
}



