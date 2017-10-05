<?php include './resources/connection.php';?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="resources/css/bootstrap.min.css"  crossorigin="anonymous">
      <link rel="stylesheet" href="resources/Style.css">

      <!-- JQuery here -->
      <script src="./resources/JQuery/jquery-3.2.1.min.js"></script>

<title>Attendance</title>

</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="./resources/img/logo.png" href="#" width="50" height="30" class="d-inline-block align-top">
      Teacher's Day Attendance
    </a>
  </nav>

  <div class="container mt-3 mb-5">
    <div class="row">
      <div class="col-md-4">
         <h3 class="mb-4" style="color:white;">Attendance Form</h3>
         <div class="container form-control shadow mt-2">
<form action="./resources/AddSuccess.php" autocomplete="off" method="Post">
           <input class="form-control mb-1" id="stdID" required name="stdID" placeholder="Student - ID">
           <input class="form-control mb-1" id="stdName" required name="stdName" placeholder="Name">

           <input class="form-control mb-1" id="passCode" required name="passCode" placeholder="Passcode">

          <select class="form-control bg-dark" id="stdCourse" required name="stdCourse" style="color:white">
<option>BSIT</option>
<option>MASSCOM</option>
<option>DBM</option>
<option>DTE</option>
<option>HM</option>
          </select>
          <input style="color:white;" class="btn form-control bg-dark" type="submit" value="Submit">
</form>
         </div>
      </div><!--col2-->
      <div class="col">


      <div class="container mb-3">

        <h3 style="color:white;">Attendance List</h3>

      <div class="container">

          <table class="table table-striped shadow table-inverse">
          <thead>
            <tr>
              <th>Name</th>
              <th>Course</th>
              <th>Time In</th>
            </tr>
          </thead>
        </table>
          <div class="scrollable shadow">
          <table class="table table-striped shadow table-inverse">

            <thead>
              <tr>

              </tr>
            </thead>

            <tbody id="list">
              <script src="./resources/ajax.js"></script>
            </tbody>
          </table>
        </div>

      </div>

      </div>
    </div><!--col3-->
  </div> <!--row-->
</div> <!--container-->

<!--footer-->
<footer class="footer pt-2">
  <span><h6>Credits | vindecode<img src="./resources/img/LGO.png"></h6></span>
</footer>

</body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="./resources/js/bootstrap.min.js"></script>
    <script src="./resources/tbl-fixed-header.js"></script>
</html>
