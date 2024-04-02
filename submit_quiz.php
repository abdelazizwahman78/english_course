
<?php 
session_start();
include ("connect.php");
$email = $_SESSION['txtid'];
$qryname = "SELECT *  from  tblstudent where email='$email'";
$result = mysqli_query($con, $qryname);
if (mysqli_num_rows($result) == 0) {
  header("location:login.html");
}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>IELTS Assist platform</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/indexall.css" rel="stylesheet" />
  
</head>
<style>
  .container-fluid p{
  text-align: center;
}
.hero_area {
    height: 12vh;
}
.card {
  width: 900px;
  height: 600px;
  background-color: #F0DEEC;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  border-radius: 10px;
  margin-left:200px;
}
.card-one {

  background-color: lightpurple;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  border-radius: 10px;
  margin-left: 20px;
  padding: 30px;
}

</style>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <span>
            IELTS Assist platform
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
              <li class="nav-item">
                  <a class="nav-link" href="TakeTest.php"> Back</a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="StudentHomepage.php"> Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php"> Logout</a>
                </li>
              
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
<br/><br/><br/><br/><br/>

<div class="card-one">
<?php
include("connect.php");

// Get the form data
$Qu_ids = $_POST['Qu_id'];
$Answers = $_POST['Answer'];

$total_score = 0;
$marks = array();

for ($i = 0; $i < count($Answers); $i++) {
    $Qu_id = $Qu_ids[$i];
    $Answer = $Answers[$i];

    $qryname = "SELECT * FROM tblquizquestion WHERE Qu_id='$Qu_id'";
    $result = mysqli_query($con, $qryname);
    $row = mysqli_fetch_assoc($result);

    $question = $row['ResouseFile'];
    $correct_answer = $row['Answer'];
    $mark = $row['Mark'];

    if ($Answer == $correct_answer) {
        $marks[$Qu_id] = $mark;
        
    } else {
        $marks[$Qu_id] = 0;
    }

    echo "Question: $question<br>";
    echo "Your Answer: $Answer<br>";
    echo "Correct Answer: $correct_answer<br>";
    echo " Your Mark: $marks[$Qu_id]<br>";
    echo " Question Mark: $mark<br>";
    echo "<br>";
}

$total_score = array_sum($marks);

echo 'Your total score is: ' . $total_score;

if ($total_score <= 25) {
  echo '<div class="card" style="width: 900px; height: 600px; background-color: lightpurple; box-shadow: 2px 2px 5px #888888; border-radius: 5px;">';
    echo '    <div class="card-body">';
    echo '        <h5 class="card-title">You need to study more!</h5>';
    echo '        <p class="card-text">Your score is low. Keep studying and try again.</p>';
    echo '        <h6 class="card-subtitle mb-2 text-muted">Study English Resources:</h6>';
    echo '        <ul>';
    echo '            <li><a href="https://www.englishclub.com/" target="_blank">English Club</a></li>';
    echo '            <li><a href="https://www.ef.com/" target="_blank">EF Education First</a></li>';
    echo '            <li><a href="https://www.bbc.co.uk/learningenglish" target="_blank">BBC Learning English</a></li>';
    echo '            <li><a href="https://www.duolingo.com/" target="_blank">Duolingo</a></li>';
    echo '        </ul>';
    echo '        <p class="card-text">Advice for studying English:</p>';
    echo '        <ul>';
    echo '            <li>Practice regularly, even if it\'s just a few minutes a day.</li>';
    echo '            <li>Immerse yourself in English by watching movies, listening to music, and reading books or articles.</li>';
    echo '            <li>Find a language exchange partner to practice speaking with.</li>';
    echo '            <li>Use online resources and apps to supplement your learning.</li>';
    echo '        </ul>';
    echo '    </div>';
    echo '</div>';
     
} else {
  echo '<div class="card">
              <div class="card-body">
                  <h5 class="card-title">Congratulations!</h5>
                  <p class="card-text">You did well. Keep up the good work!</p>
              </div>
          </div>';
    echo '</td></tr>';
}
echo '<a href="StudentHomepage.php" class="btn btn-primary" style="margin-left:500px;margin-top:50px">Done</a>';




$date = date('Y-m-d');


$Qid=$_GET['Qid'];
$xquery = "INSERT INTO tbltakequiz (sid,Qid,Result,Date) VALUES ('$sid','$Qid','$total_score','$date')";
$result = mysqli_query($con, $xquery);



?>




<br/><br/><br/>



</div>
</div>
</div>
</div>

</div>
              </div>
              </div>     

            </div>
          </div>
        </div>
      </div>
    </div>

  <br/> <br/> <br/> <br/> <br/>
  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2024 All Rights Reserved By University of Technology & Applied Sciences'Students
    </p>
  </section>
  <!-- footer section -->


 
</body>

</html>


