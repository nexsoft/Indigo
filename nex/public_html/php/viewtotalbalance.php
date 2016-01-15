<?php

include './config.php';


$id = $_POST['id'];
//$id = 4;


$sql="SELECT credit,debit,debit - credit as balance  FROM (SELECT
SUM(cashinout.amount) as credit
FROM
cashinout
WHERE
cashinout.paymentype = 'Credit' AND
cashinout.customer_id = ".$id.") FIRST,(SELECT
SUM(cashinout.amount) as debit
FROM
cashinout
WHERE
cashinout.paymentype = 'Debit' AND
cashinout.customer_id =".$id.") SECOND";


foreach ($db->query($sql)as $row ){
    $st="";
    if($row['credit']!=NULL)
    {
        $st=$st.$row['credit'].":";
    }
    else {
        $st=$st."0:";
    }
    if($row['debit']!=NULL)
    {
        $st=$st.$row['debit'].":";
    }
    else {
        $st=$st."0:";
    }
    if($row['balance']!=NULL)
    {
        $st=$st.$row['balance'].":";
    }
    else {
        $st=$st."0:";
    }

   // echo $row['credit'].":".$row['debit'].":".$row['balance'];
   echo $st;
    

    
    
    
}







