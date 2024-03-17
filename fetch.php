<?php

  include("connection.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoinments</title>
    <style>
      body {
        margin: 0;
        font-family: Arial, sans-serif;
      }

      .navbar {
        background-color: green;
        padding: 10px;
        display: flex;
        justify-content: flex-end;
      }

      .user-icon {
        width: 40px;
        height: 40px;
        background-color: #3498db;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
        margin-right: 10px;
      }

      .user-icon:hover {
        background-color: #2980b9;
      }

      /* @keyframes bounce {
        0%,
        20%,
        50%,
        80%,
        100% {
          transform: translateY(0);
        }
        40% {
          transform: translateY(-8px);
        }
        60% {
          transform: translateY(-4px);
        }
      } */

      .animated-icon {
        animation: bounce 1s infinite;
      }
    </style>
</head>
<body>

<div class="navbar">
      <div class="user-icon animated-icon">
        <a href=""><span>👤<?php echo $_SESSION['SQL'];?></span></a>
      </div>
    </div>
    <h1 style="text-align: center;" >Appointments</h1><br><br><br><br> 
    <table style="justify-content: center; justify-content: center;margin-left: auto;
  margin-right: auto; " border="2">
        <thead>
            <tr>
                <th>PATIENT ID</th>
                <th>PATIENT NAME</th>
                <th>PATIENT MOBILE</th>
                <th>PATIENT EMAIL</th>
                <th>PATIENT CNIC</th>
                <th>PATIENT DATE</th>
                <th>PATIENT TIMINGS</th>
                <th>DOCTORS NAME</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("connection.php");
            $query="SELECT * FROM tbl_appointment WHERE  $_SESSION[SQ] = d_id";
            $result=mysqli_query($con,$query);
            foreach($result as $row){
                echo"<tr>";
                echo"<td>$row[p_id]</td>";
                echo"<td>$row[p_name]</td>";
                echo"<td>$row[p_mobile]</td>";
                echo"<td>$row[p_email]</td>";
                echo"<td>$row[p_cnic]</td>";
                echo"<td>$row[p_date]</td>";
                echo"<td>$row[p_timings]</td>";
                echo"<td>$row[d_id]</td>";
                echo"</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>