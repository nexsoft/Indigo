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




$sql = "SELECT customer.name,customer.id FROM customer WHERE customer.name LIKE '" .$_POST['word']."%'  ORDER BY customer.name ASC LIMIT 10";
echo '<table class="table-hover">';
foreach ($db->query($sql)as $row) {
    echo "<tr ><td onClick='setcustomerid(" . $row['id'] . ")' class='selectword' >" . $row['name'] . " </td></tr>";
}
echo '</table>';



