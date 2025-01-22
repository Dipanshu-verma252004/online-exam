<?php

session_start();
if($_SESSION==null){
    echo "<script>
    alert('First Login !');
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
        h1{
            font-size:40px;
            color:white;
        }

        .div{
            margin: 50px auto;
            border: 3px solid white;
            width: 90px;
            padding: 20px 20px;
            background-color: rgba(149, 165, 166,0.7);
            /* box-shadow: 0 0 1rem 1rem  lightgray inset;  */
            border-radius: 25px;
        }
        table{
           width: 90%;
           margin-left:80px;
           font-size: 16pt;
           /* background-color: rgba(46, 204, 113,1.0); */
           padding: 40px 40px;
           /* box-shadow: 3px 3px 2rem 10px rgba(127, 140, 141,1.0); */
           box-shadow: 0 0 1rem 1rem  lightgray inset;
           border-radius: 25px;



        }
        tr:nth-child(odd){
            /* background-color: rgba(52, 152, 219,1.0); */
            color: white;
            font-size:30px;

        }
        tr:nth-child(even){
            /* background-color: rgba(52, 152, 219,1.0); */
            color: white;
            font-size:30px;
        }
        tr,td{
            border-radius: 10px;
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
 <center>
    <h1>Exam Result </h1>
    <button style="font-size:30px; margin-left:32% ;position: absolute; margin-top:400px;border:1px solid white; padding:5px;box-shadow:0 0 1rem 1rem lightgray inset;"><a href="result.php">Result Print</a></button>
    </center>
    <?php 
    include 'conn.php';
    $s="select * from exam1,result where result.sid=exam1.uname and result.sid='$stu'";
    $q=mysqli_query($c,$s);
    if($r=mysqli_fetch_assoc($q)){
        $n=$r['sname'];
        $c=$r['course'];
        $d=$r['dob'];
        $g=$r['gender'];

        $mm=$r['mm'];
        $om=$r['om'];
        $ed=$r['edate'];
        $img=$r['image'];
       echo "<table> 

         <tr>
          <th> Student Name</th>
          <th>$n</th>
         </tr>

         
         <tr>
          <th> Course</th>
          <th>$c</th>
         </tr>

         
         <tr>
          <th> DOB</th>
          <th>$d</th>
         </tr>

         
         <tr>
          <th> Gender</th>
          <th>$g</th>
         </tr>

         
         <tr>
          <th> Maximun Marks</th>
          <th>$mm</th>
         </tr>

         
         <tr>
          <th> Obtained Marks</th>
          <th>$om</th>
         </tr>

         
         <tr>
          <th> Date</th>
          <th>$ed</th>
         </tr>


         
         <tr>
          <th colspan='2'>$img</th>
         </tr>

        </table>";

    }
    else{


    echo "
    <h1 style='color:white;text-align:center;margin:150px auto;background-color:#d63031;padding:50px 0px;width:80%;border-radius:20px;border:3px solid white'> To Show Result Please Give Exam </h1>  

";
    }
    ?>
    

      
</body>
</html>