<?php

session_start();



$mysqli = new mysqli('localhost', 'root', '', 'compel') or die(mysqli_error($mysqli));

$id= 0;
$update = false;
$busname="";
$bustype="";
$reg_dt="";
$addr="";
$phone="";
$email="";
$services="";









if (isset($_POST['save'])){

$busname = $_POST['busname'];
$bustype= $_POST['bustype'];
$reg_dt = $_POST['reg_dt'];
$addr = $_POST['addr'];
$phone  = $_POST['phone'];
$email = $_POST['email'];
$services  = $_POST['services'];









$mysqli->query("INSERT INTO com(busname, bustype, reg_dt, addr, phone, email, services) VALUES('$busname', '$bustype', '$reg_dt', '$addr', '$phone', '$email', '$services')") or
    die($mysqli->error());   


    $_SESSION['message'] = "Record has been saved";
    $_SESSION['msg_type'] = "success";



    header('location: bus.php');
}


if (isset($_GET['delete'])){
 $id = $_GET['delete'];
  $mysqli->query("DELETE FROM COM WHERE id=$id") or die($mysqli->error());


  $_SESSION['message'] = "Record has been deleted";
  $_SESSION['msg_type'] = "danger";
  
  header('location: bus.php');



}



if (isset($_GET['edit'])){


$id = $_GET['edit'];

$update = true;

$result = $mysqli->query("SELECT * FROM com WHERE id=$id") or die($mysqli->error());
if (count($result)==1){

$row = $result->fetch_array();
$busname = $row['busname'];
$bustype = $row['bustype'];
$reg_dt = $row['reg_dt'];
$addr =   $row['addr'];
$phone =  $row['phone'];
$email =  $row['email'];
$services = $row['services'];









}

}









if (isset($_POST['update'])){

  $id = $_POST['id'];
  $busname = $_POST['busname'];
  $bustype = $_POST['bustype'];
  $reg_dt  = $_POST['reg_dt'];
  $addr  = $_POST['addr'];
  $phone  = $_POST['phone'];
  $email  = $_POST['email'];
  $services  = $_POST['services'];
  
  $mysqli->query("UPDATE com SET busname='$busname', bustype='$bustype', reg_dt='$reg_dt', addr='$addr', phone='$phone', email='$email', services='$services' WHERE id=$id") or
             
  die($mysqli->error);
  
  
  
  $_SESSION['message'] = "Record has been updated";
  $_SESSION['msg_type'] = "Warning";
  
  
  header('location: bus.php');
  
  
  }
  
  


?>
