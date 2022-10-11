<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$message = $_POST['message'];





$conn = new mysqli('localhost','root','','database');
if($conn->connect_error){
    die('connection Failed : '.$conn->connect_error);



}else{
$stmt = $conn->prepare("insert into data(name, email, phone, address, message) 
values(?, ?, ?, ?, ?)");

$stmt->bind_param("ssssi",$name, $email, $phone, $address, $message);
$stmt->execute();
echo "<script>alert('Details submitted sucessfully.')</script>";

$stmt->close();
$conn->close();




}







?>