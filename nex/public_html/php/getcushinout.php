<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123');
define('DB_DATABASE', 'nextest');

//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'makemywe_root');
//define('DB_PASSWORD', 'E00,Fe{E)B2-');
//define('DB_DATABASE', 'makemywe_nextest1');
//$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
//echo "Connected successfully";




$sql = "SELECT
cashinout.id,
cashinout.paymentype,
cashinout.amount,
customer.`name`,
cashinout.customer_id
FROM
cashinout ,
customer
WHERE
cashinout.customer_id = customer.id";
echo "<tr><th>Name</th><th>Type</th><th>Amount</th></tr>";
foreach ($db->query($sql)as $row) {
    echo "<tr><td onClick='setcashid(" . $row['id'] . ",".$row['customer_id'].")'>" . $row['name'] . "</td><td>" . $row['paymentype'] . "</td><td>".$row['amount']."</td><td><input type='button' value='Delete' onClick='delcashid(" . $row['id'] . ")'  ></td></tr>";
}



