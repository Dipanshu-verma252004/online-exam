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
$s1="select * from exam1 where uname='$stu'";
$q= mysqli_query($c,$s1);
if ($r=mysqli_fetch_assoc($q)) {
	$sname=$r['sname'];
}



?>



<!DOCTYPE html>
<html>
<head>
<!-- Bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
	.positiona{
		position: fixed;
		right: 10px;
		top: 5px;
		background: white;
		color: #EA2027;
		font-size: 20px;
		padding: 10px 20px;
		border-radius: 5px;
		border: 1px solid #EA2027;
		transition: all 0.3s linear;
	}
	.positiona:hover{
		background: #EA2027;
		color:white;
		border-radius: 10px;
	}

	.mainbtn{
		border: 1.5px solid white;
		background-color: #7efff5;
		font-size: 15pt;
		padding: 10px 20px;
		border-radius: 5px;
		transition: all 0.4s linear ;
	}
	.mainbtn:hover{
		background-color: #0652DD;
		color: white;
		box-shadow: 0px 0px 2rem 0.5rem #d1ccc0;
		border-radius: 10px;
	}
</style>
<title>Exam Page</title>
</head>
<body class="container-fluid">
<a href="Student.php" title="Go Home Page" class="positiona"> Go Back </a>
<br>
<div class="m-5">
<h1 class="bg-dark text-white text-center  p-3 d-inline-block w-100" style="border-radius:20px;"><?php echo $sname; ?></h1>
</div>

<form action="examstart_submit.php" method="post" class="shadow-lg container-fluid">

<table width="100%" class="table table-borderless table-primary">
	<?php
	$s2="select * from result where sid='$stu'";
	$q2=mysqli_query($c,$s2);
	if ($r1=mysqli_fetch_assoc($q2)) {
		echo "<script>
		alert('Your Exam Completed. for Re-exam contact to Admin');
		window.location.href='stu_feedback.php';

		</script>";

	}else {
		$s3="select * from quest_pepr";
		$q3=mysqli_query($c,$s3);
		$count=1;
		while ($r3=mysqli_fetch_assoc($q3)) {
			$qid=$r3['qid'];
			$q=$r3['question'];
			$o1=$r3['option1'];
			$o2=$r3['option2'];
			$o3=$r3['option3'];
			$o4=$r3['option4'];
           
			
		
	
	echo "<tr style='color:blue;'>
		<th colspan='2'><input type='hidden' name='qid$count' value='$qid'></th>
	</tr>";

	echo "<tr style='color:blue;'>
		<th colspan='2'><span style='color:red;'>Question $count : $q </span> </th>
	</tr>";

	echo "<tr>
		<th>a) <input type='radio' name='ans$count' id='' value='$o1'> <label for=''></label>$o1</th>

<th>b) <input type='radio' name='ans$count' id='' value='$o2'> <label for=''></label>$o2</th>
	</tr>";

	echo "<tr>
		<th>c) <input type='radio' name='ans$count' id='' value='$o3'> <label for=''></label>$o3</th>
		

<th>d) <input type='radio' name='ans$count' id='' value='$o4'> <label for=''></label>$o4</th>
	</tr>";

	$count++;
   }


 echo "<tr>
<th colspan='2'>
	<input type='submit' name='submit' value='Submit Exam' class='mainbtn'>
	<input type='reset'  value='Clear Form' class='mainbtn'>
</th>

</tr>";

}

?>


</table>

</form>

</body>
</html>