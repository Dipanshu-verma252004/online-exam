<?php

$uname=$_POST['user'];
$sname=$_POST['sname'];
$course=$_POST['Course'];
$dob=$_POST['dob'];
$address=$_POST['addr'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$state=$_POST['state'];
$pass=$_POST['pswd'];
$cpass=$_POST['cpswd'];
$pin=$_POST['pin'];
$phone=$_POST['contact'];
$img_name=$_FILES['file']['name'];
$img_tmp=$_FILES['file']['tmp_name'];
$folder='uploadImage/'.$img_name;
move_uploaded_file($img_tmp,$folder);


include 'conn.php';
$s="select * from exam1  where uname ='$uname'";
$q=mysqli_query($c,$s);
if ($r=mysqli_fetch_assoc($q)) {
    $db_uname=$r['uname'];

    if ($uname==$db_uname) {
        echo "<script>
        alert('email already registared')

        window.location.href='Registeration.php'
        
        
        </script>";
    }
}else{

$sql="insert into exam1 values('$uname','$sname','$course','$dob','$gender','$address','$city','$state','$pass','$cpass','$pin','$phone','$folder')";
mysqli_query($c,$sql);

}


?>