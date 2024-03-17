<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Appointment Form</title>
</head>
<body>

<div class="appointment-form">
    <!-- Start Logo -->
    <div class="logo">
									<a href="index.php"><img src="img/logo.png" alt="#"></a>
								</div>
								<!-- End Logo -->
    <h2 style="text-align: center; justify-content: center; align-items: center;">Book Appointment</h2>
    <form method="post" >
        <label for="name">Name:</label>
        <input type="text" id="name" name="txtname" placeholder="Enter your name" required>

        <label for="mobile">Mobile:</label>
        <input type="tel" id="mobile" name="txtmobile" placeholder="Enter your mobile number" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="txtemail" placeholder="Enter your email" required>

        <label for="cnic">CNIC:</label>
        <input type="text" id="cnic" name="txtcnic" placeholder="Enter your CNIC" required>

        <label for="date">Date:</label>
        <input type="date" id="date" name="txtdate" required>
        <br><br>

        <select id="timings" name="txttimings" required class="label">
            <option hidden>Select Your Timings</option>
            <option value="9-5">9 AM - 5 PM</option>
            <option value="9-1">9 AM - 1 PM</option>
            <option value="10-2">10 AM - 2 PM</option>
            <option value="1-9">1 PM - 9 PM</option>
            <option value="2-10">2 PM - 10 PM</option>
        </select>
        <br>
        <select name="txtdoctor" class="label">
            <option hidden>Select Your Doctor</option>
        <?php
        include("connection.php");
        $query ="SELECT * FROM tbl_doctor";
        $result = mysqli_query($con,$query);
        foreach($result as $row){
            echo"<option value='$row[doctor_id]'>$row[doctor_name]</option>";
        }
        
        ?>
        <br><br><br>
        <input type="submit" name="btnappointment" value="Book Appointment" class="button"><br><br>
        <?php
        include("connection.php");
        if(isset($_POST['btnappointment'])){
            $name = $_POST['txtname'];
            $mobile = $_POST['txtmobile'];
            $email = $_POST['txtemail'];
            $cnic = $_POST['txtcnic'];
            $date = $_POST['txtdate'];
            $time = $_POST['txttimings'];
            $doctor = $_POST['txtdoctor'];
            
            $query = "INSERT INTO `tbl_appointment` (`p_name`, `p_mobile`, `p_email`, `p_cnic`, `p_date`, `p_timings`, `d_id`) VALUES ('$name','$mobile','$email','$cnic','$date','$time','$doctor')";
            $result = mysqli_query($con,$query);
            if($result){
                echo"<script>alert('Appointment is Booked Succecfully')</script>";
            }
            else{
                echo"<script>alert('Appointment is not Booked Succecfully')</script>";
            }
        }
        ?>
    </form>
</div>

</body>
</html>


