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
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Register.html">Register</a>
                </li>
              </ul>
            </div>
            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
              <a href="login.html">
              Student
              </a>
            </div>
            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
              <a href="Adminlogin.html">
               Admin
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
  
  </div>

 <!--Login section start -->

 <?php
 include('connect.php');
 $UserID=$_GET['sid'];
 $q="select * from  tblstudent where sid='$UserID'";
 $result = mysqli_query($con,$q);
 while($row = mysqli_fetch_assoc($result)) {
 $Security_Qus=$row["Security_Qus"];
 
 }
 ?>
 <br/> <br/> <br/> <br/> <br/>
 <div class="demo-container">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12 mx-auto">
          <div class="text-center image-size-small position-relative">
          <img src="images/user.png" class="rounded-circle p-2 bg-white" width="150px">
          </div>
          <div class="p-5 bg-white rounded shadow-lg">
            <h3 class="mb-2 text-center pt-5">Forgot Password</h3>
            <form action="<?php echo "StudentCheckAnswer.php?sid=$UserID";?>" method="post">
            <label class="font-500">Security Question:</label>
            <input type="text" name="Security_Qus"value="<?php echo $Security_Qus ?>" class="form-control form-control-lg"  readonly>
               <label class="font-500">Answer:</label>
               <input type="text" name="Security_Ans"  maxlength="25" class="form-control form-control-lg"  required>
               <br/>
              <button class="btn btn-primary btn-lg w-100 shadow-lg">Submit</button>
            </form>       
          </div>        
        </div>
      </div>
    </div>


<!--Login section start -->


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