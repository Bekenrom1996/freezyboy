<?php

$server ="localhost";
$username ="root";
$password ="";
$database ="comment_system";


$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn) {
 die("<script>alert['connection failed']</script>");




}



?>