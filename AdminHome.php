<?php
session_start();
if ($_SESSION==null) {
    echo "<script>
    alert('first login !')
    window.location.href='index.php'
    
    </script>";
}
$admin=$_SESSION['admin'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&family=Baloo+Bhaina+2:wght@800&display=swap" rel="stylesheet">
    <style>
        /* CSS RESET  */
        body{
            font-family: 'Baloo Bhai 2', cursive;
            margin: 0px;
            padding: 0px;
            background: url(https://images.unsplash.com/photo-1635405038683-39ac9c4c70c7?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
            background-repeat:no-repeat ;
            /* background-size: cover; */
            background-size: 100% 100%;
            background-position: center;
            background-attachment: fixed;
           /* background-size: 1550px 800px;   */
           font-family: Baloo Bhai;  
           
        }
        .navbar
        {
         display: inline-block;
         /* border: 3px solid white; */
        margin-left: 150px;
         margin-top: 25px;
         border-radius: 10px;
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{
            color: white;
            font-size: 25px;
            padding: 13px 15px;
            text-decoration: none;
        }
        .navbar li a:hover{
           
           color: grey;
           font-size: 23px;
           padding: 13px 15px;
           text-decoration: none; 
       }
     

    
    </style>
</head>
<body>
    <header>
        <div class="navbar">
        <ul>
        <li><a href="StudentList.php">Student List</a> </li>
        <li><a href="AddQuestion.php">Add Question</a></li>
        <li> <a href="QuestionList.php">Question List</a></li>
        <li> <a href="UpdateQuestion.php">Update Question</a></li>
        <li><a href="ExamResult.php">Result</a></li>
        <li><a href="Feedback.php">Feedback</a></li>
        <li><a href="ChangePassword.php">Change Password</a></li>
        <li><a href="admin_logout.php">Logout</a></li>
        </ul>
    </div><hr>
    </header>
    <marquee style="border:2px solid white;color:white;margin:70px 200px;text-align:left;border-radius:40px;padding:2px 20px;" behavior="alternate" scrollamount="10">

    <h1 ><span>Welcome To Admin Login Page</span></h1>
    </marquee>
    
</body>
</html>