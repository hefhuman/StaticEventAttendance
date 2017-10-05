<?php
include "checkPasscode.php";
include "connection.php";
$stdid=$_POST['stdID'];
$stdname=$_POST['stdName'];
$stdcode=$_POST['passCode'];
$stdcourse=$_POST['stdCourse'];

echo $code;
if ($error != true){
  //

  $sqlcode = "UPDATE code SET status='1' WHERE Code='$code'";
  if ($conn->query($sqlcode) === TRUE) {
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $conn->error;
  }



  $sql = "INSERT INTO student (StdId, StdName, StdCode, StdCourse, TimeIn)
  VALUES ('$stdid', '$stdname', '$stdcode', '$stdcourse', now())";

if ($conn->query($sql) === TRUE) {

  echo  "<div style='margin-top:10%;margin-left:25%;' class='alert alert-success w-50' role='alert'>
  <h4 class='alert-heading'>Well done!</h4>
  <p>Aww yeah, you have successfully signed-in.</p>
  <hr>
  <span><p id='timer'> <script src='timer.js'></script></p></span>
</div>";

} else {
  echo  "<div style='margin-top:10%;margin-left:25%;' class='alert alert-danger w-50' role='alert'>
  <h4 class='alert-heading'>Error!</h4>
  <p>Please try again</p>
  <hr>
  <span><p id='timer'> <script src='timer.js'></script></p></span>
</div>";

}
}else{
  echo  "<div style='margin-top:10%;margin-left:25%;' class='alert alert-danger w-50' role='alert'>
  <h4 class='alert-heading'>Error!</h4>
  <p>The Code you enter is already used, please get another one or try to enter the code again</p>
  <hr>
  <span><p id='timer'> <script src='timer.js'></script></p></span>
</div>";
}
 ?>
