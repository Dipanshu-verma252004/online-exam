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

$ans[1]="not submited";
$qid[1]=$_REQUEST['qid1'];


$ans[2]="not submited";
$qid[2]=$_REQUEST['qid2'];


$ans[3]="not submited";
$qid[3]=$_REQUEST['qid3'];


$ans[4]="not submited";
$qid[4]=$_REQUEST['qid4'];


$ans[5]="not submited";
$qid[5]=$_REQUEST['qid5'];

if (isset($_REQUEST['ans1'])) {
    $ans[1]=$_REQUEST['ans1'];
}

if (isset($_REQUEST['ans2'])) {
    $ans[2]=$_REQUEST['ans2'];
}

if (isset($_REQUEST['ans3'])) {
    $ans[3]=$_REQUEST['ans3'];
}

if (isset($_REQUEST['ans4'])) {
    $ans[4]=$_REQUEST['ans4'];
}

if (isset($_REQUEST['ans5'])) {
    $ans[5]=$_REQUEST['ans5'];
}

for ($i=1; $i<=5; $i++) { 
    $s1="insert into result_master values('$stu','$qid[$i]','$ans[$i]')";

    mysqli_query($c,$s1);

}

$s2="select result_master.qid from result_master,quest_pepr where result_master.qid=quest_pepr.qid and result_master.ans=quest_pepr.answer and result_master.sid='$stu'";

$q2=mysqli_query($c,$s2);
$marks=null;
$d=date('d-m-y');
while ($r=mysqli_fetch_assoc($q2)) {
    $marks=$marks+5;

}
$s3="insert into result values ('$stu','25','$marks','$d')";
mysqli_query($c,$s3);

echo"<script>
alert('Your exam submited')
window.location.href='StuResult.php'




</script>";



?>