
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
                  <a class="nav-link" href="StudentHomepage.php"> Back</a>
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
  <h1 align="center"> Test List </h1>



  <div class="content">
        <div class="container-fluid">
            <div class="search" >
            <form action="Search_Course1.php" method="post" >
                    <table class="tb-search" style="display:flex">
                        <tr>
                            <td>
                            <select name="Qid" class="form-control" id="Qid" required>
                        <option value="">Quiz Type</option>
                         <?php
                        require_once "connect.php";
                         $result = mysqli_query($con,"SELECT * FROM  tblquizque Q, tblcourse C where C.cid=Q.cid ");
                         while($row = mysqli_fetch_array($result)) {
                         ?>
                        <option value="<?php echo $row['Qid'];?>">
                        <?php echo $row["Category"];?> -- Course: <?php echo $row["cname"];?></option>
                        <?php
                        }
                       ?>
                              </select> 
                            </td>
                            <td>
                                <input type="submit" value="Search" class="btn btn-primary">
                                <a href="TakeTest.php"><input type="button" value="Clear"
                                        class="btn btn-danger"></a>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <br/><br/>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
<?php
include('connect.php');

$q="select * from  tblcourse C, tblquizque Q where C.cid=Q.cid";

$r=mysqli_query($con,$q);
$num=mysqli_num_rows($r);
	if ($num > 0){

$i=0;
echo "<br>";
		echo "<table  id='productSizes' class='table' border='1'  style='width:100%;' align=center  cellspacing=2>";
	echo "<tr>";
	echo "<br>";

echo"</tr>";

echo"<th >Course NAME";
echo"<th > Quiz Type";
echo"<th colspan='2'> ACTION";


echo"<tr>";
while($row = mysqli_fetch_assoc($r)) {
$cname=$row["cname"];
$Category=$row["Category"];
$Qid=$row["Qid"];



echo"<tr >";
echo"<td >$cname";
echo"<td >$Category";
echo "<td><a href='Quiz.php?Qid=$Qid' class='btn-login' )'>Start Quiz</a></td>";
echo"</tr>";

$i++;


}

echo"</table><br>";
}
else{
	echo "<center>No  Quiz Yet! <br>";
	echo "Click <a href='StudentHomepage.php'>here</a> To Back !</a></center>";
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