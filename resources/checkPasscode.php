<?php
include 'connection.php';
$code=$_POST['passCode'];
$error=false;
try{
$sql="select * from code where code='".$code."' and status<>1";
$result=$conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  
  $error=false;
    while($row = $result->fetch_assoc()) {

    }

} else {
  $error=true;
}
$conn->close();
} catch (Exception $e) {

}
?>
