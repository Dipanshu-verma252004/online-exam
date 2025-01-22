<?php
session_start();
if ($_SESSION==null) {
    echo "<script>
    alert('first login !')
    window.location.href='index.php'
    
    </script>";
}
$stu=$_SESSION['student'];

include 'conn.php';
$sql="select * from exam1 where uname='$stu'";
$q=mysqli_query($c,$sql);
if ($r=mysqli_fetch_assoc($q)) {
    $img=$r['image'];
    
}




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
            background-position: center;
            /* background-color: rgba(0, 0, 0, 0.329); */

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
        .container{
            width: 800px;
            height: 600px;
            /* border: 2px solid orange ; */
            margin-left: 450px;
            box-shadow: 0 0 1rem 1rem  lightgray inset;
            border-radius: 25px;


            /* background-color:rgba(0, 0, 0, 0.918); */
           
        }
        .content{
            color:white;
            font-size: 25px;
            padding-left: 100px;
            
            
        }
        .content input{
            padding: 5px 27px;
            margin: 5px;
            border-radius: 5px;
            width: 44%;
            border-radius: 2px black;
            font-size: 19px;
            /* padding-left: 80px; */
            padding-top: 10px;
        }
        .content select{
            padding: 5px 20px;
            margin: 5px;
            border-radius: 5px;
            width: 63%;
            border-radius: 4px black;
            font-size: 20px;
            /* padding-left: 80px; */
            padding-top: 10px;
        }
        
        .btn1 {
            margin: 5px;
            color: green;
            font-size: 20px;
            padding: 14px 80px;
            border-radius: 20px;
            margin-left: 100px;
            /* background-color: rgb(255, 166, 0); */
          
        }
        .btn2 {
            margin: 5px;
            color: red;
            font-size: 20px;
            padding: 14px 80px;
            border-radius: 20px;
            margin-left: 100px;
            /* background-color: rgb(255, 166, 0); */
          
        }
        h1{

            color:white;
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

    <div class="container" style="overflow:auto;padding:50px 0px;">
 <center><h1><u> EDIT REGISTERATION FORM</u></h1></center>
<form action="registrationconf.php" method="post" onsubmit="return validate()" enctype="multipart/form-data">
 <table class="content">
    <tr>
        <td>Select your Image</td>
        <td><input type="file" name="file" vlaue="<?php   ?>"  ></td>
        <th></th>
    </tr>
    <tr><td>User Name/E Mail:</td>
        <td>Student Name</td>
    </tr>

    <tr><td><input type="text" id="email" name="user" value="<?php echo $stu ; ?>"></td><td><input type="text" name="$sname" value="<?php echo $r['sname'] ?>"></td></tr>

      <tr><td> Qualification</td><td>Date of Birth</td></tr>

    <tr><td><select  name="Course">
        <option value="BCA" <?php if ($r['course']=="BCA") { echo 'selected';}   ?> >BCA</option>
        <option value="B.Tech" <?php if ($r['course']=="B.Tech") { echo 'selected';}   ?>>B.Tech</option>
        <option value="B.COM" <?php if ($r['course']=="B.COM") { echo 'selected';}   ?>>B.Com</option>
        <option value="BBA" <?php if ($r['course']=="BBA") { echo 'selected';}   ?>>BBA</option>
        <option value="BSC" <?php if ($r['course']=="BSC") { echo 'selected';}   ?>>BSC</option>
        <option value="Diploma" <?php if ($r['course']=="Diploma") { echo 'selected';}   ?>>Diploma</option>
        <option value="MBA" <?php if ($r['course']=="MBA") { echo 'selected';}   ?>>MBA</option>
        <option value="B.Voc" <?php if ($r['course']=="B.Voc") { echo 'selected';}   ?>>B.Voc</option></select></td>
        

        <td><input type="date" name="dob" value="<?php  echo $r['dob']  ?>" ></td></tr>
    <tr><td>Gender:</td><td>Address</td></tr>
       
    <td><input type="radio" name="gender" vlaue ="1" checked>Male
    
        <input type="radio" name="gender" vlaue ="2">Female</td>
<td><input type="text" name="addr"  value="<?php echo $r['address'] ?>"></td>
</tr>
    

    <tr><td >City</td><td>State</td></tr>

    <tr><td><input type="text" name="city" value="<?php echo $r['city'] ?>"></td><td><select name="state">
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
        <option value="Daman and Diu">Daman and Diu</option>
        <option value="Delhi">Delhi</option>
        <option value="Lakshadweep">Lakshadweep</option>
        <option value="Puducherry">Puducherry</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
        </select></td></tr> 

     <tr><td>Password:</td><td>Confirm Password:</td></tr>

    <tr><td><input type="password" id="pass" name="pswd"  value="<?php echo $r['pass'] ?>"></td><td><input type="password" id="cpass" name="cpswd"  value="<?php echo $r['cpass'] ?>"></td></tr>

<td>Pin</td><td>Contact Number</td></tr>

    <tr><td><input type="number" name="pin"  value="<?php echo $r['pin'] ?>"></td><td><input type="number" name=contact  value="<?php echo $r['phone'] ?>"></td></tr>
    
    
</table><hr>
<input type="submit" value="Submit" class="btn1"><input type="reset" class="btn2">
</form>
</div>

    </body>
    </html>
    




