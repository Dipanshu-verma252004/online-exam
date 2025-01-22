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
        *{
            
        }
        body{
            margin: 0px;
            padding: 0px;
            background: url(https://img.freepik.com/free-photo/preteen-boy-uses-laptop-make-online-classes_158595-7541.jpg?semt=ais_hybrid);
            background-repeat:no-repeat ;
            background-size: cover;
            /* background-position: center; */
            background-attachment: fixed;

           /* background-size: 1550px 800px;     */
           
             
           
        }
        .navbar
        {
         display: inline-block;
         /* border: 3px solid black; */
        margin-left: 18%;
         margin-top: 25px;
         border-radius: 5px;
         /* position: fixed;  */
         /* background:white; */
         /* width:100%; */
        }
        .navbar li{
            display: inline-block;

        }
        .navbar li a{
            font-size: 23px;
            padding:  60px;
            text-decoration: none; 
         color: white;

        }
        .navbar li a:hover{
           
            color: grey;
            font-size: 23px;
            padding:  60px;
            text-decoration: none; 
        }

    
    </style>
</head>
<body>
    <header>
        <div class="navbar">
        <ul>
        <li><a href="stu_profile.php"> Profile</a> </li>
        <li><a href="examstart.php">Exam</a></li>
        <li><a href="StuResult.php">Result</a></li>
        <li><a href="stu_feedback.php">Feedback</a></li>
        <li><a href="stu_logout.php">Logout</a></li>
        </ul>
    </div><hr>
    </header>
    
    <marquee style="border:2px solid white;color:white;margin:80px 200px;text-align:left;border-radius:40px;padding:2px 20px;" behavior="alternate" scrollamount="10">
        <h1>Welcome <span style='color:#34e7e4'>  </span><?php echo $stu; ?></h1>
    </marquee>

</body>
</html>