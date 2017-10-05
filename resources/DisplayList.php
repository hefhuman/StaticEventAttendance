<?php
include 'connection.php';
$sql= "select StdName, StdCourse, TimeIn from student order by StdName";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
  while ($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>" . $row['StdName'] . "</td><td>" . $row['StdCourse'] . "</td><td>" . $row['TimeIn'] . "</td></tr>";
  }
}
  ?>
