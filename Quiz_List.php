
<?php 
session_start();
include ("connect.php");
$aname = $_SESSION['txtid'];
$qryname = "SELECT *  from  tbladmin where aname='$aname'";
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
                  <a class="nav-link" href="ListTest.php"> Back</a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="AdminHomepage.php"> Home</a>
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
<?php
include('connect.php');


$Qid=$_GET['Qid'];

$q="select * from  tblquizquestion where Qid='$Qid'";

$r=mysqli_query($con,$q);
$num=mysqli_num_rows($r);
	if ($num > 0){

$i=0;
echo "<br>";
		echo "<table  id='productSizes' class='table' border='1'  style='width:100%;' align=center  cellspacing=2>";
	echo "<tr>";
	echo "<br>";

echo"</tr>";

echo"<th> Question ID";
echo"<th >Question";
echo"<th > Answer";
echo"<th > Mark";
echo"<th colspan='2'> ACTION";


echo"<tr>";
while($row = mysqli_fetch_assoc($r)) {
$Qu_id=$row["Qu_id"];
$ResouseFile=$row["ResouseFile"];
$Answer=$row["Answer"];
$Mark=$row["Mark"];



echo"<tr >";
echo"<td >$Qu_id";
echo"<td >$ResouseFile";
echo"<td >$Answer";
echo"<td >$Mark";
echo "<td><a href='Quiz_Update.php?Qu_id=$Qu_id&&Qid=$Qid' class='btn-login' )'>Update</a></td>";
echo"</tr>";

$i++;


}

echo"</table><br>";
}
else{
	echo "<center>No  New Student Yet! <br>";
	echo "Click <a href='AdminHomepage.php'>here</a> To Back !</a></center>";
}
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