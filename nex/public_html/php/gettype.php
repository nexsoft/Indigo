<?php

include './config.php';




$sql = "SELECT * from type";
echo "<option value='0'>--Select--</option>";
foreach ($db->query($sql )as $row ){
   echo "<option value='".$row['id'].":".$row['type']."'>".$row['type']."</option>";
    
    
}



