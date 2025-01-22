<?php
session_start();
if ($_SESSION==null) {
    echo "<script>
    alert('first login !')
    window.location.href='index.php'
    
    </script>";
}
$stu=$_SESSION['student'];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* CSS RESET  */
        body{
            margin: 0px;
            padding: 0px;
            background: url(https://img.freepik.com/free-photo/preteen-boy-uses-laptop-make-online-classes_158595-7541.jpg?semt=ais_hybrid);
            background-repeat:no-repeat ;
            background-size: cover;
            background-attachment: fixed;
           /* background-size: 1550px 800px; */
           
             
           
        }
        .navbar
        {
         display: inline-block;
         /* border: 3px solid white; */
        margin-left: 18%;
         margin-top: 25px;
         border-radius: 5px;
         /* position: fixed; */
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{
            color: white;
            font-size: 23px;
            padding:  60px;
            text-decoration: none; 
        }
        .navbar li a:hover{
           
            color: grey;
            font-size: 23px;
            padding:  60px;
            text-decoration: none; 
        }

        .maininput{
            width:98%;
            height: 30px;
            text-align: left;
            font-size: 15pt;
        }

        .btnclass1{
            width: 20%; 
            height: 40px;
            font-size: 16pt;
            border-radius: 10px;
           /* background-color:green; */
           color:green;
        }

        .btnclass2{
            width: 20%; 
            height: 40px;
            font-size: 16pt;
            border-radius: 10px;
           /* background-color:red; */
           color:red;
           /* margin-left:70px; */
        }


        table{
            margin: 0px auto;
        }


    
    </style>
</head>
<body>
    <header>
        <div class="navbar">
         <ul>
        <li><a href="student.php">Home</a></li>
        <li><a href="stu_profile.php"> Profile</a> </li>
        <li><a href="examstart.php">Exam</a></li>
        <li><a href="StuResult.php">Result</a></li>
        <li><a href="stu_feedback.php">Feedback</a></li>
        <li><a href="stu_logout.php">Logout</a></li>
        </ul>
    </div><hr>
    </header>
    
            <!-- box-shadow: 0 0 1rem 1rem  lightgray inset; -->
    <div style="border:10px solid white;color:white;margin:100px 200px;text-align:center;border-radius:50px;padding:25px 25px; box-shadow:0 0 0.5rem 0.5rem " behavior="alternate" scrollamount="10">
        <h1 style="text-align:center">Give Your Feedback</h1>

        <form method="post">
            <table width="60%" cellpadding="5" cellspacing="0">
                <tr>
                    <th style="font-size:30px;">Enter Your Subject</th>
                    <th><input type="text" name="subject" class="maininput"></th>
                </tr>

                <tr>
                    <th style="font-size:30px;">Enter Your Message</th>
                    <th><input type="text" name="message" class="maininput"></th>
                </tr>

                <tr>
                    <th colspan="2">
                        <input type="submit" name="submit" class="btnclass1">
                        <input type="reset" class="btnclass2">
                    </th>
                    
                </tr>

                

            </table>
        </form>
        <br><br>
    </div>

</body>
</html>


<?php

if (isset($_POST['submit'])) {
    $s=$_POST['subject'];
    $m=$_POST['message'];
    $d=date('d-m-y');
    include 'conn.php';
    $s="insert into stu_feedback values('$stu','$s','$m','$d')";
    mysqli_query($c,$s);
}






?>