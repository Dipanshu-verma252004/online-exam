<?php
session_start();

$_SESSION['admin'];

include 'conn.php';
$qid=$_GET['id'];
$q="delete from quest_pepr where qid='$qid'";
mysqli_query($c,$q);
header("location:QuestionList.php?question deleted");



?>