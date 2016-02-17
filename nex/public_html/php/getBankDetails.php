<?php

include './config.php';




$sql = "SELECT
bank.id,
bank.account_name,
bank.account_type,
bank.opening_balance,
bank.amount,
bank.description,
bank.date
FROM
bank ";
echo "<tr><th>Account Name</th><th>Type</th><th>Amount</th></tr>";
foreach ($db->query($sql)as $row) {
    echo "<tr><td onClick='setBankId(" . $row['id'] . ")'>" . $row['account_name'] . "</td><td>" . $row['account_type'] . "</td><td>".$row['amount']."</td><td><input type='button' value='Delete' onClick='delBankId(" . $row['id'] . ")'  ></td></tr>";
}



