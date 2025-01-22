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
    <title>Student Profile</title>
    <style>
        /* CSS RESET  */
        body{
            margin: 0px;
            padding: 0px;
            background: url(https://img.freepik.com/free-photo/preteen-boy-uses-laptop-make-online-classes_158595-7541.jpg?semt=ais_hybrid);
            background-repeat:no-repeat ;
           /* background-size: 1550px 800px; */
            background-size: cover;
            /* background-position: center; */
            background-attachment: fixed;
           
             
           
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
            font-size: 25px;
            padding:  60px;
            text-decoration: none; 
        }

        .showprofile{
            border:2px solid white;
            /* background-color:gray; */
            color:white;
            margin:20px 50px;
            text-align:center;
            border-radius:25px;
            padding:20px 50px;
            box-shadow: 0 0 1rem 1rem  lightgray inset;
        }

        th{
            color: white;
            font-size: 24px;
            text-align: left;
            padding: 5px;
        }
        table{
            margin: 0px auto;
            width: 70%;
            /* border: 3px solid red; */
        }

        td{
            font-size:30px;
        }

    
    </style>
</head>
<body>
    <header>
        <div class="navbar">
         <ul>
        <li><a href="student.php"> Back</a> </li>
        <li><a href="examstart.php">Exam</a></li>
        <li><a href="StuResult.php">Result</a></li>
        <li><a href="stu_feedback.php">Feedback</a></li>
        <li><a href="stu_logout.php">Logout</a></li>
        </ul>
    </div><hr>
    </header>
    
    <div class="showprofile">
        <h1>STUDENT PROFILE</h1>

        <?php
        include 'conn.php';
        $sql="select * from exam1 where uname='$stu'";
        $q=mysqli_query($c,$sql);
        if ($r=mysqli_fetch_assoc($q)) {
            $img=$r['image'];
            
        }
        
        
        ?>


        <table>
        <tr>
                <td>Username</td>
                <th><?php  echo $stu; ?></th>
            </tr>
            <tr>
                <td>Name</td>
                <th><?php  echo $r['sname']; ?></th>
            </tr>
            <tr>
                <td>Course</td>
                <th><?php  echo $r['course']; ?></th>
            </tr>
            <tr>
                <td>Dob</td>
                <th><?php  echo $r['dob']; ?></th>
            </tr>
            <tr>
                <td>Gender</td>
                <th><?php  echo $r['gender']; ?></th>
            </tr>
            <tr>
                <td>Address</td>
                <th><?php  echo $r['address']; ?></th>
            </tr>
            <tr>
                <td>City</td>
                <th><?php  echo $r['city']; ?></th>
            </tr>
            <tr>
                <td>State</td>
                <th><?php  echo $r['state']; ?></th>
            </tr>
            <tr>
                <td>Pin</td>
                <th><?php  echo $r['pin']; ?></th>
            </tr>
            <tr>
                <td>Phone</td>
                <th><?php  echo $r['phone']; ?></th>
            </tr>
            <tr>
                <td>Profile Image</td>
                <th><?php  echo "<img src='$img' height='100' width='100'>" ?></th>
            </tr>
            <tr>
                <td> Edit Your Profile </td>
                <th><a href="edit_stu.php" style="color:blue ;text-decoration:none;">Click here</a></th>


            </tr>



        </table>

    </div>

</body>
</html>