<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
            background-color: #ffffff; /* White background */
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .register-box {
            margin: 50px auto;
            max-width: 400px;
            background-color: #ffffff; /* White background */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .register-logo a {
            color: #007bff; /* Blue color */
        }

        .card-body {
            padding: 20px;
        }

        .register-card-body {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        /* .register-card-body:hover {
            transform: scale(1.02);
        } */

        .login-box-msg {
            font-size: 18px;
            color: #007bff; /* Blue color */
        }

        .input-group-text {
            background-color: #ffffff; /* White background */
            transition: background-color 0.3s ease-in-out;
        }

        .input-group-text:hover {
            background-color: #eaeaea;
        }

        .btn-primary {
            background-color: #007bff; /* Blue color */
            border-color: #007bff; /* Blue color */
            transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
            color: #ffffff; /* White color */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue color */
            border-color: #0056b3; /* Darker blue color */
        }

        .text-center a {
            color: #007bff; /* Blue color */
            transition: color 0.3s ease-in-out;
        }

        .text-center a:hover {
            color: #0056b3; /* Darker blue color */
        }
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

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s ease-in-out;
        }

        input:focus, select:focus {
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
<body class="hold-transition register-page">

<div class="register-box">
    <!-- <div class="register-logo">
        <a href="index.php"><b>Medi</b>plus</a>
    </div> -->
    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png">
		<!-- Start Logo -->
        <div class="logo">
									<a href="index.php"><img src="img/logo.png" alt="#"></a>
								</div>
								<!-- End Logo -->

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter Your Name" name="txtname">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter Username" name="txtusername">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Enter Password" name="txtpwd">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <select id="timings" name="txtprofession" required class="label">
            <option hidden>Select Your Profession</option>
            <option value="Doctor">Doctor</option>
            <option value="Admin">Admin</option>
        </select>
        <br>
                <!-- <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <!-- <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div> -->
                    <!-- /.col -->
                    <div class="col-4">
                        <input type="submit" value="Register" name="btnregister" class="btn btn-primary btn-block">
                    </div>
                    <!-- /.col -->
                 <?php
                    include("connection.php");

                    if(isset($_POST["btnregister"])){
                      $name = $_POST['txtname'];  
                      $username = $_POST['txtusername']; 
                      $password = $_POST['txtpwd'];
                      $profession = $_POST['txtprofession'];

                      $query ="INSERT INTO `tbl_doctor`( `doctor_name`, `doctor_username`, `doctor_password`, `other`) VALUES ('$name','$username','$password','$profession')	";
                      $result = mysqli_query($con,$query);
                      if($result){
                        echo "<script>alert('Register successfully')</script>";
                      }
                      else{
                        echo "<script>alert('Register is not successfull')</script>";
                      }
                    }
                    ?>
                </div>
            </form>
            <a href="login.php" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

</body>
</html>
