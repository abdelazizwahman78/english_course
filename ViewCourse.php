
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
.card {
  width: 300px;
  background-color: lightpurple;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  margin-bottom: 20px;
  margin-right:10px;
}

.card-title {
  font-size: 20px;
  font-weight: bold;
}

.card-text {
  font-size: 16px;
  margin-bottom: 10px;
}

ul {
  margin: 0;
  padding-left: 20px;
}

li {
  margin-bottom: 5px;
}

a {
  color: blue;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}
.card-group {
    display:flex;
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
  <h1 align="center"> Course List </h1>
  <br/><br/><br/>
   <div class="container">
    <div class="row">
        <div class="card-group">
        <div class="card">
  <div class="card-body">
    <a href="Level-1.php"><h5 class="card-title" style="text-align:center">Level 1</h5></a>
    </div>
</div>

<div class="card">
  <div class="card-body">
  <a href="Level-2.php"><h5 class="card-title" style="text-align:center">Level 2</h5></a>
    </div>
</div>

<div class="card">
  <div class="card-body">
  <a href="Level-3.php"><h5 class="card-title" style="text-align:center">Level 3</h5></a>
    </div>
</div>

<div class="card">
  <div class="card-body">
  <a href="Level-4.php"><h5 class="card-title" style="text-align:center">Level 4</h5></a>
    </div>
</div>
   </div>
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

  <br/> <br/> <br/> 
  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2024 All Rights Reserved By University of Technology & Applied Sciences'Students 
    </p>
  </section>
  <!-- footer section -->


 
</body>

</html>