<?php
$servername='localhost';
$username='root';
$password='';
$dbname='attendance';
//creating connection
$conn=new mysqli($servername, $username, $password, $dbname);

//checking the connection
if($conn->connect_error){
  die('connection failed:'.$conn->connect_error);
}
?>
