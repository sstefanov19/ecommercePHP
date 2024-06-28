<?php

$db_server = "localhost";
$db_user = "root";
$db_name = "ecommerce";
$db_pass = "";

$conn = new mysqli($_db_server , $db_user , $db_name , $db_pass);
if($conn->connect_error) {
    echo"Connection error";
}
