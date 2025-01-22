<?php
session_start();

$_SESSION['admin'];




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
            font-size: 23px;
            padding: 13px 15px;
            text-decoration: none;
        }
        .navbar li a:hover{
           
           color: grey;
           font-size: 25px;
           padding: 13px 15px;
           text-decoration: none; 
       }

       .div{
        width:96%;
        height:670px;
        border:2px solid grey;
        margin-left:auto;
        margin-right:auto;
        overflow:auto;
        border-radius: 30px;
        box-shadow:0px 0px 1rem 1rem grey inset; 
        /* background-color:lightgrey; */
        margin-top:30px;

       } 

       a{
        margin: 10px;
        font-size: 16pt;
        color: #0984e3;
        text-decoration: none;
       }

       a:hover{
            color: blue;
            text-decoration: underline;
       }   
       
       td{

        color:black;
        font-size:20px;
        background-color:Cornsilk;
       }

    
    </style>
</head>
<body>
    <header>
<title>Student List</title>     
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
<div class="div">
<center><h1 style="color:white; font-size:50px;"><u>Question List</u></h1></center>
<table width="95%" border="1" cellspacing="5" cellpadding="5" style="margin-left:auto;margin-right:auto;">
<tr style="color:white; background-color:blue;"><th>S.NO</th><th>Ques ID</th><th>Question</th><th>Option1</th><th>Option2</th><th>Option3</th><th>Option4</th><th>Answer</th><th colspan="2">Operation</th></tr>
<?php
include 'conn.php';
$s="select * from quest_pepr";
$q1=mysqli_query($c,$s);
$count=0;
while($r=mysqli_fetch_assoc($q1)){
     $qid=$r['qid'];
     $q=$r['question'];
     $o1=$r['option1'];
     $o2=$r['option2'];
     $o3=$r['option3'];
     $o2=$r['option2'];
     $ans=$r['answer'];

    echo "<tr>
    <td>$count</td>
    <td>$qid</td>
    <td>$q</td>
    <td>$o1</td>
    <td>$o2</td>
    <td>$o3</td>
    <td>$o1</td>
    <td>$ans</td> 
    <td><a href='editquestion.php?id=$qid'>Edit</a></td> 
    <td><a href='delete_question.php?id=$qid'>Delete</a></td> 
    


    </tr>";


    $count++;
}


?>

</table>
</div>    
</header>
    
</body>
</html>