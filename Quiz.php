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
.hero_area {
    height: 12vh;
}
.test {
  margin-left:20px;
}
.container-fluid p{
  text-align: center;
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
<div class="test">
<?php
include("connect.php");
$Qid = $_GET['Qid'];

// Fetch all records with matching Qid
$qryname = "SELECT * FROM tblquizquestion WHERE Qid='$Qid'";
$result = mysqli_query($con, $qryname);
$num = mysqli_num_rows($result);

// Display the records in a form
echo '<form method="post" action="submit_quiz.php?Qid='.$Qid.'">';
echo '<table>';
while ($row = mysqli_fetch_assoc($result)) {
    $Qu_id = $row["Qu_id"];
    $ResouseFile = $row["ResouseFile"];
    $Mark = $row["Mark"];

    echo '<tr>';
    echo '<td>';
    
    if (strpos($ResouseFile, '.mp4') !== false) {
        // Audio file
        echo '<label for="answer_'.$Qu_id.'">'.$ResouseFile.'</label><br>';
        echo '<audio controls>';
        echo '<source src="audio/' . $ResouseFile . '" type="audio/ogg"><br>';
        echo 'Your browser does not support the audio element.';
        echo '</audio><br>';
        echo '<br/>';

    } else {
        // Text
        echo '<label for="answer_'.$Qu_id.'">'.$ResouseFile.'</label>';
    
    
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><input type="hidden" name="Qu_id[]" value="'.$Qu_id.'">';
    echo '<select name="Answer[]" class="form-control form-control-lg mb-3" id="answer_'.$Qu_id.'" required>';
    echo '<option value="">Select Answer</option>';
    echo '<option value="A">A</option>';
    echo '<option value="B">B</option>';
    echo '<option value="C">C</option>';
    echo '<option value="D">D</option>';
    echo '</select>';
    echo '</tr>';
  }  
}  
echo '<tr>';
echo '<td colspan="2">';
echo '<br/>';
echo '<input type="submit" class="btn-Submit" value="Submit" style="margin-left:100px">';
echo '</td>';
echo '</tr>';

echo '</table>';
echo '</form>';
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