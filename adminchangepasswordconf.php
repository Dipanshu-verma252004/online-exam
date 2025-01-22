<?php
session_start();
if ($_SESSION==null) {
    echo "<script>
    alert('first login !')
    window.location.href='index.php'
    
    </script>";
}
include 'conn.php';
$admin=$_SESSION['admin'];

$old_p=$_POST['old'];
$new_p=$_POST['newp'];
$s="select * from admin where uname='$admin' and password='$old_p'";
$q=mysqli_query($c,$s);
if ($r=mysqli_fetch_assoc($q)) {
    $db_pass=$r['password'];

    if ($old_p==$db_pass) {
    $q2="update admin set password='$new_p' where uname='$admin'";
    mysqli_query($c,$q2);
    echo "<script>
        alert('Password Changed Successfully !')
        window.loction,href='Adminlogin.php';  

    </script>";

    }

}else {
    echo "<script>

    alert('old password dose not match!')
    window.loction,href='ChangePassword.php';  

    </script>";



}


?>