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
           /* background-size: 1550px 800px; */ 
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
           font-size: 23px;
           padding: 13px 15px;
           text-decoration: none; 
       }
       table{
        font-size:50px;
        margin-left: 90px;
        height:90%;
        width:90%;
        /* border-radius:20px; */
        /* background-color: black; */
       }
       .box{
        margin-left:35%;
        font-size:32px;
        width:30%;
        height:40px;
        border-radius: 8px;

        /* padding:10px; */

       }
       .btn1{
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
       .btn1:hover{
        color: white;
            background: green;
            box-shadow: 3px 2px 2rem grey;
            border-radius: 15px;

       }  
       .btn2{
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
       .btn2:hover{
        color: white;
            background: red;
            box-shadow: 3px 2px 2rem grey;
            border-radius: 15px;

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
    </div><hr><br><br><br>
<div style="width:97%;height:580px; border:5px solid grey; margin:-25px 20px;box-shadow:0 0 1rem 1rem gray inset; border-radius:30px;">
<form method="post">
<table>
<tr><th style="color:white; font-size:50px;"><u>Add Question</u></th></tr>
<tr><td><input type="text" class="box" name="question" class="input" placeholder="Question" required></td></tr>
<tr><td><input type="text" class="box" name="option1" class="input" placeholder="Option1" required></td></tr>
<tr><td><input type="text" class="box" name="option2" class="input" placeholder="Option2" required></td></tr>
<tr><td><input type="text" class="box" name="option3" class="input" placeholder="Option3" required></td></tr>
<tr><td><input type="text" class="box" name="option4" class="input" placeholder="Option4" required></td></tr>
<tr><td><input type="text" class="box" name="answer" class="input" placeholder="Answer" required></td></tr>
<tr><th><input type=submit class="btn1" name="save" value=Submit>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=reset class="btn2" value=Reset></th></tr>
</table>
</form>
</div>    
</header>

</body>
</html>

<?php
if (isset($_POST['save'])) {

include 'conn.php';
$q=$_POST['question'];
$o1=$_POST['option1'];
$o2=$_POST['option2'];
$o3=$_POST['option3'];
$o4=$_POST['option4'];
$ans=$_POST['answer'];

$s="insert into quest_pepr(question,option1,option2,option3,option4,answer)values('$q','$o1','$o2','$o3','$o4','$ans')";
mysqli_query($c,$s);


}

?>