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
    <title></title>
    <link rel="stylesheet" href="styles.css">
  <style >
      


      /* styles.css */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f4f8;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.quiz-score-card {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    width: 90%;
    max-width: 400px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.quiz-header h1 {
    font-size: 1.8rem;
    color: #007bff;
    margin: 0 0 10px;
}

.quiz-header p {
    font-size: 1rem;
    color: #555;
    margin: 0 0 20px;
}

.score-details {
    margin-bottom: 20px;
}

.score-summary p {
    font-size: 1rem;
    margin: 5px 0;
    color: #333;
}

.progress-bar {
    width: 100%;
    height: 10px;
    background: #e0e0e0;
    border-radius: 5px;
    margin-top: 15px;
    position: relative;
}

.progress {
    height: 10px;
    background: #007bff;
    border-radius: 5px;
    transition: width 0.5s ease;
}

.quiz-footer p {
    font-size: 0.9rem;
    color: #777;
    margin: 5px 0;
}


.btn-back{
    position: relative;
    top:-200px;
    left:260px;
    font-size:30px;
    padding:10px;
    border-radius:10px;
    border:2px solid black;
    cursor:pointer;
    /* background:#007bff; */



}



.btn-print{
position: relative;
font-size:15px;
border-radius:4px;
padding: 5px;
}

  </style>

</head>
<body>

<?php
include 'conn.php';

$s="select * from result where sid='$stu'";
$q=mysqli_query($c,$s);
if($r=mysqli_fetch_assoc($q)){
   $p=$r['om']/$r['mm']*100;
//    $progressColor = ($p < 50) ? 'red' : (($p < 80) ? 'orange' : 'green');



    

}


?>
<a href="Student.php">
<button class="btn-back">Back </button>
</a>
    
    <div class="quiz-score-card">
        <header class="quiz-header">
            <h1>Exam Results</h1>
            <p>Username: <?php echo $stu; ?> </b></p>
        </header>
        <section class="score-details">
            <div class="score-summary">
                <p><strong>Total Marks: <?php echo $r['mm']?> </strong></p>
                <p><strong>Obtained Maraks: <?php echo $r['om']?></strong> </p>
                <p><strong>Score in percentage :  <?php echo $p ?></strong> </p>
            </div>
            <div class="progress-bar">
                <div class="progress" style="width:<?php echo $p ?>% ;background: <?php $progressColor;?> >"></div>
            </div>
        </section>
        <footer class="quiz-footer">
            <p>Attempted on: <?php echo $r['edate']?>  </p>
            <p>Keep practicing to improve your score!</p>
            
        </footer>
    <button onclick='window.print()' class="btn-print">Print</button>

    </div>


    
    <!-- <button onclick='window.print()' class="btn-print">Print</button> -->


</body>
</html>