<?php
include 'conn.php';
$uname=$_POST['email'];
$pass=$_POST['password'];
$sql="select * from exam1 where uname='$uname' and pass='$pass'";
$q=mysqli_query($c,$sql);
if ($r=mysqli_fetch_assoc($q)) {
    $db_uname=$r['uname'];
    $db_pass=$r['pass'];
    session_start();
    $_SESSION['student']=$r['uname'];
    if($uname==$db_uname and $pass==$db_pass){

        header('location:Student.php');
        
        echo  "<script>;
        alert('login Successfully')
        window .location.href='student.php'
        

        echo </script>";   
    }

    }else{ "<script> ;
           nalert('Invalid password  or username ')
           window .location.href='index.php'
    
          </script>";



}



?>