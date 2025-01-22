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
            background-size: cover;
              /* background-size: 100% 100%; */
            background-position: center;
            background-attachment: fixed;
           /* background-size: 1550px 800px;   */
           font-family: Baloo Bhai;  
           
        }

.input
{
width:400px;
height:35px;
border:2px solid grey;
font-size:16px;
margin-left:50px;
}
        .navbar
        {
         display: inline-block;
         /* border: 3px solid white; */
        margin-left: 250px;
         margin-top: 25px;
         border-radius: 5px;
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
           font-size: 25px;
           padding: 13px 15px;
           text-decoration: none; 
       }

       .action1{
            color: blue;
            /* background: white; */
            padding: 10px;
            border-radius: 10px;
            border: 2px solid green;
            cursor: pointer;
            font-size: 18px;
            transition: all 0.4s linear;
            padding: 10px 20px;
       }
       .action1:hover{
            color: white;
            background: green;
            box-shadow: 3px 2px 2rem grey;
            border-radius: 15px;
       }

       .action2{
            color: blue;
            /* background: white; */
            padding: 10px;
            border-radius: 10px;
            border: 2px solid red;
            cursor: pointer;
            font-size: 18px;
            transition: all 0.4s linear;
            padding: 10px 20px;
       }
       .action2:hover{
            color: white;
            background: red;
            box-shadow: 3px 2px 2rem grey;
            border-radius: 15px;
       }
       .box{
        /* text-align:center; */
        margin-left:35%;
        font-size:28px;
        width:30%;
        border-radius: 10px;

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
        <li><a href="ExamResult.php">Result</a></li>
        <li><a href="Feedback.php">Feedback</a></li>
        <li><a href="ChangePassword.php">Change Password</a></li>
        <li><a href="admin_logout.php">Logout</a></li>
        </ul>
    </div><hr>
<div style="width:95%;height:500px; border:3px solid grey; margin-left:50px;box-shadow:0 0 1rem 1rem gray inset; border-radius:30px; margin-top:40px;">
<form action="adminchangepasswordconf.php" method="post" onsubmit="return checkPass()">
<table width="98%" height="350" border="0">
<tr><th style="font-size:50px;color:white;"><u>Change Password</u></th></tr>
<tr><td><input class="box" type=password name="old" required class="input" placeholder="Enter Old Password" required></td></tr>
<tr><td><input class="box" type=password name="newp" id="newpassword" required class="input" placeholder="Enter New Password" required></td></tr>
<tr><td><input class="box" type="text" name="confp" id="confirmpassword" required class="input" placeholder="Confirm Password" required></td></tr>
<tr><th>
        <input type="submit" name="submit" value="Update Password" class="action1">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type=reset value=Reset class="action2">
    </th>
</tr>
</table>
</form>
</div>    
</header>
   
<script>
    function checkPass(){
        var newpassword = document.getElementById("newpassword").value;
        var confirmpassword = document.getElementById("confirmpassword").value;
        if(!(newpassword==confirmpassword)){
            alert("Password And Confirm Password are not Matched");
            return false;
        }
        
    } 
</script>

</body>
</html>