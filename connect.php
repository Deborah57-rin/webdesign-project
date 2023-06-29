<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$conn = new mysqli('localhost', 'root', '', 'contactinfo');

if($conn->connect_error){
    die('connection failed : ');
}else{
    $query = "INSERT INTO 'contactdetails' ('name', 'email', 'message') VALUES ('$name', '$email', '$message')";
    $result = $conn->query($query);
    if($result == 1){
        echo "successfully inserted";
        }else{
            echo "failed to insert";
        }
    }
    exit();
?>