<?php

include './config.php';


$contact= $_POST['contact'];

$sql = "SELECT COUNT(contactinfo) as count FROM customer where contactinfo='".$contact."'";

foreach ($db->query($sql )as $row ){
    echo $row['count'];
//    if($row['count'] == 0){
//      
//        return TRUE;
//        
//        
//    }else{
//        
//        return FALSE;
//    }
//  
//  
    
    
}



