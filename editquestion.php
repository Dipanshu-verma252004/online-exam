
<?php
session_start();
if ($_SESSION==null) {
    echo "<script>
    alert('first login !')
    window.location.href='index.php'
    
    </script>";
}
$admin=$_SESSION['admin'];

include 'conn.php';
$qid=$_GET['id'];
$s="select * from quest_pepr where qid='$qid'";
$r=mysqli_query($c,$s);
if ($r=mysqli_fetch_assoc($r)) {
    
}



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
            background: url(Images/Student7.jpg);
            background-repeat:no-repeat ;
           background-size: 1550px 800px;  
           font-family: Baloo Bhai;  
           
        }

.input
{
width:270%;
height:40px;
border:2px solid grey;
font-size:16px;
margin-left:50px;
}
        .navbar
        {
         display: inline-block;
         /* border: 3px solid white; */
        margin-left: 2%;
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
           font-size: 23px;
           padding: 13px 15px;
           text-decoration: none; 
       }

       #div{
        width:95%;
        height:450px;
        padding-top: 50px; 
        background-color:white; 
        border:3px solid grey; 
        margin-left:auto;
        margin-right:auto;
       }

       .mainb{
        color: #0652DD;
        padding: 8px;
        border-radius: 8px;
        font-size: 14pt;
        background-color: white;
        border: 2px solid #0652DD;
        transition: all 0.3s linear;
       }

       .mainb:hover{
            color: white;
            padding: 8px;
            border-radius: 8px;
            font-size: 14pt;
            background-color: #0652DD;
            border: 2px solid white;
            box-shadow: 2px 2px 2rem 2px grey;
       }


     

    
    </style>
</head>
<body>
    <header>
        <div class="navbar">
        <ul>
        <li><a href="StudentList.php">Student List</a> </li>
        <li><a href="AddQuestion.php">Add Question</a></li>
        <li><a href="UpdateQuestion.php">Update Question</a></li>
        <li> <a href="QuestionList.php">Question List</a></li>
        <li><a href="ExamResult.php">Result</a></li>
        <li><a href="Feedback.php">Feedback</a></li>
        <li><a href="ChangePassword.php">Account</a></li>
        <li><a href="Logout.php">Logout</a></li>
        </ul>
    </div><hr>
<div id="div">
<form method="post">
<table width="500" height="400" border="0">
<tr><th style="font-size:22px;"><u>Add Question</u></th></tr>
<tr><td><input type="text" readonly value="<?php echo $r['qid'] ?>" required name="qid" class="input" placeholder="Question" required></td></tr>

<tr><td><input type="text" name="question" value="<?php echo $r['question'] ?>" class="input" placeholder="Question" required></td></tr>

<tr><td><input type="text" name="option1" value="<?php echo $r['option1'] ?>" class="input" placeholder="Option1" required></td></tr>
<tr><td><input type="text" name="option2" value="<?php echo $r['option2'] ?>" class="input" placeholder="Option2" required></td></tr>
<tr><td><input type="text" name="option3" value="<?php echo $r['option3'] ?>" class="input" placeholder="Option3" required></td></tr>
<tr><td><input type="text" name="option4" value="<?php echo $r['option4'] ?>" class="input" placeholder="Option4" required></td></tr>
<tr><td><input type="text" name="answer" value="<?php echo $r['answer'] ?>" class="input" placeholder="Answer" required></td></tr>
<tr><td>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type=submit value="UPDATE" class="mainb" name="update">
         &nbsp;&nbsp;&nbsp;
         <input type=reset value="RESET" class="mainb">
     </td>
</tr>
</table>
</form>
</div>    
</header>

</body>
</html>


<?php
if (isset($_POST['update'])) {
    $q=$_POST['question'];
    $o1=$_POST['option1'];
    $o2=$_POST['option2'];
    $o3=$_POST['option3'];
    $o4=$_POST['option1'];
    $ans=$_POST['answer'];

$q2="update quest_pepr set question='$q',option1='$o1',option2='$o2',option3='$o3',option4='$o4',answer='$ans' where qid='$qid'";
mysqli_query($c,$q2);

header("loction:QuestionList.php");


}



?>