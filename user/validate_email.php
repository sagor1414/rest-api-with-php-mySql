<?php
include '../connection.php';


$userEmail = $_POST['user_email'];

$sqlQuery = "SELECT * FROM users_table WHERE user_email='$userEmail'";

$resultOfQuery = $connectNow->query($sqlQuery);

if ($resultOfQuery->num_rows > 0) {
    //email already exists
    echo json_encode(array("emailFound"=>true));
}else{
    //email not exists create account
    echo json_encode(array("emailFound"=>false));
}