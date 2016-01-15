<?php

include './config.php';



$sql = "SELECT customer.name,customer.id FROM customer WHERE customer.name LIKE '" .$_POST['word']."%'  ORDER BY customer.name ASC LIMIT 10";
echo '<table class="table-hover">';
foreach ($db->query($sql)as $row) {
    echo "<tr ><td onClick='setcustomerid(" . $row['id'] . ")' class='selectword' >" . $row['name'] . " </td></tr>";
}
echo '</table>';



