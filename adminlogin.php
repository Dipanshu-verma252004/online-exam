<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        *{
            /* background:url(https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fG9ubGluZSUyMGV4YW18ZW58MHx8MHx8fDA%3D); */
            background:url(https://images.unsplash.com/photo-1635405038683-39ac9c4c70c7?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
            background-size: cover;
            background-size: 100% 100%;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
        .box{
            /* background-color:black; */
            
            width: 500px;
            height: 500px;
            border-radius: 5px;
            margin-top: 100px;
            /* box-shadow: 12px 12px yellow  ; */
         }
         #login{
             color:white;
             padding-top: 50px;
             font-size:70px;
             
         }
         .table{
             width: 300px;
             height: 230px;
            color: white;
            /* padding: 30px; */
            font-size: 35px;
            padding: 10px;
            border: white;
                     }
         #button{
                width: 300px;
                height:50px ;
                background: yellow ;
                border-radius: 13px;
                font-size: 33px;
                 }
                 #td input
                 {
                width: 300px;
                height:50px ;
                background: white;
                 border-radius: 13px;
                font-size: 33px;

                 }
                #td select
                {
                  width: 305px;
                  height:50px ;
                  background: white;
                  border-radius: 13px;
                  font-size: 33px; 
                     }
                        
    </style>
</head> 
<body bgcolor="	#383838">
    
   <center><div class="box"><h1 id="login"> Admin Login </h1>
    <table class="table" id="td">
        <form action="" method="post">
      <td><select name="user"><option value="Admin">Admin</select></td></tr>
<tr><td><input type="text" name="email" placeholder="Email"></td></tr>
<tr><td><input type="password" name="pswd" placeholder="Password"></td></tr>
</table>
 <input type="submit" name="login" value="Login" id="button">
       </form>
    <hr>
    <label style="color: white; margin-right: 120px; font-size: 25px;">
        <input type="checkbox" checked="checked" name="remember"> Remember me  </label> 
        <label style="color: white; font-size: 25px;">Forget Password?
      </label>
    Forget Password?
   

</div></center> </body>
</html>

<?php

if (isset($_POST['login'])) {
    $username=$_POST['email'];
    $pass=$_POST['pswd'];
    include 'conn.php';
    $s="select * from admin where uname='$username' and  password ='$pass'";
    $q=mysqli_query($c,$s);
    if ($r=mysqli_fetch_assoc($q)){
        $db_user=$r['uname'];
        $db_pass=$r['password'];
        session_start();
        $_SESSION['admin']=$r['uname'];
        if ($username==$db_user and $pass==$db_pass) {

            echo  "<script>;
            alert('login Successfully')
            window .location.href='AdminHome.php'
            

            echo </script>";
        }

    }else{
        echo "<script>;
        alert('Password or username are worng.please try again ')

        </script>";

    }
}




?>