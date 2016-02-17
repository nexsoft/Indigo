<?php

include './config.php';

$acc_name = $_POST['account_name'];
$acc_type = $_POST['account_type'];
$acc_opening_balance = $_POST['opening_balance'];
$acc_ammount = $_POST['amount'];
$acc_description = $_POST['description'];




        $sql = "INSERT INTO bank(account_name,account_type,opening_balance,amount,description,date) VALUES"
                . "('" . $acc_name . "','" . $acc_type . "','" . $acc_opening_balance . "','" . $acc_ammount . "','".$acc_description."',NOW())";
        if (!mysqli_query($db, $sql)) {
            die('Query failed ERROR: ' . mysqli_error($db));
            echo mysqli_error($db);
        } else {
            // header("location:branch.php");
        }
        echo '1';
    
//    






    




