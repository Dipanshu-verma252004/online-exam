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
       th{
        font-size:22px

       }
       td{
        color:black;
        background-color:Cornsilk;
        font-size:20px
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
        <li><a href="ChangePassword.php">Change password</a></li>
        <li><a href="admin_logout.php">Logout</a></li>
        </ul>
    </div><hr>
<div style="width:95%;height:660px;  border:4px solid grey; margin-left:40px;overflow:srcoll;box-shadow:0 0 1rem 1rem grey inset; border-radius:30px; margin-top:40px;">
<center><h1 style="color:green;font-size:50px"><u>Feedback</u></h1></center>
<table width=98% border="1px" cellspacing="1" cellpadding="10" style="margin:20px;">
<tr style="color:white; background-color:dodgerblue;"><th>Username</th><th>subject</th><th>message</th><th>date</th></tr>
<?php
include 'conn.php';

$s="select * from stu_feedback";
$q=mysqli_query($c,$s);
$count=0;
while ($r=mysqli_fetch_assoc($q)) {
    // $qid=$r['qid'];
    $uname=$r['username'];
    $s=$r['subject'];
    $m=$r['msg'];
    $d=$r['date'];

    echo "<tr>
    <td>$uname</td>
    <td>$s</td>
    <td>$m</td>
    <td>$d</td>
    

    
    </tr>";

    $count++;


}



?>
</table>
</div>    
</header>
    
</body>
</html>