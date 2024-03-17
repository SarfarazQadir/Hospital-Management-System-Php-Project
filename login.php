<?php

  include("connection.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Appointment Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Sweet Alert link --> <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <style>
   body {
      font-family: Arial, sans-serif;
    }

    .appointment-form {
      max-width: 400px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }

    /* .appointment-form:hover {
            transform: scale(1.02);
        } */

    .label {
      display: block;
      margin-bottom: 8px;
    }

    input,
    select {
      width: 100%;
      padding: 8px;
      margin-bottom: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      transition: border-color 0.3s ease-in-out;
    }

    input:focus,
    select:focus {
      border-color: #007bff;
    }

    .button {
      background-color: #007bff;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    .button:hover {
      background-color: #0056b3;
    }
    
  </style>
</head>
<body class="hold-transition login-page">
  <!-- ... (Your existing HTML code) ... -->

<div class="login-box">
  <!-- <div class="login-logo">
    <a href="index.php"><b> Medi</b>Plus</a>
  </div> -->
  <!-- /.login-logo -->
  <!-- Start Logo -->
  <div class="logo">
									<a href="index.php"><img src="img/logo.png" alt="#"></a>
								</div>
								<!-- End Logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login to see your Appointments</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Enter Your Username" name="txtusername">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Enter Your Password" name="txtpassword">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-4">
          <input type="submit" value="Login" name="btnlogin" class="btn btn-primary btn-block">
          </div>
          <!-- /.col -->
               <!-- /.col -->
               
               <?php
    include("connection.php");
    if(isset($_POST['btnlogin'])){
        $d_username = $_POST['txtusername'];
        $d_password = $_POST['txtpassword'];
        $query = "SELECT * FROM tbl_doctor where doctor_username ='$d_username' AND doctor_password ='$d_password' ";
        $result = mysqli_query($con,$query);
      //echo mysqli_num_rows($result);
        if(mysqli_num_rows($result)){
            $doctorid ="SELECT doctor_id from tbl_doctor where doctor_username ='$d_username'";
            $result = mysqli_query($con,$doctorid);
            $row = mysqli_fetch_array($result);
            // echo $row['doctor_id'];
            $_SESSION["SQ"] = $row['doctor_id'];
            $_SESSION["SQL"] = $d_username;
            echo"<script>
            Swal.fire({
              title: 'Login Successful!',
              text: 'Clicked the button!',
              icon: 'success'
});
            window.location.href ='fetch.php';
        </script>";
        }else{
          echo"<script>alert('Login Failed!')</script>";
        }
    }
                    ?>
                </div>
        </div>
      </form>
      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</body>
</html>
