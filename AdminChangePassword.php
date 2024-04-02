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


 <br/> <br/> <br/> <br/> <br/>
 <div class="demo-container">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12 mx-auto">
          <div class="text-center image-size-small position-relative">
          <img src="images/reset-password.png" class="rounded-circle p-2 bg-white" width="150px">
          </div>
          <div class="p-5 bg-white rounded shadow-lg">
            <h3 class="mb-2 text-center pt-5">Change Password</h3>
            <br/>
            <form   method="post" id="form2"   name="form2"  onsubmit="return validate(this);"  enctype="multipart/form-data"   action="Admin_ChangePasswordCode.php">
            <label class="font-500">Current Password</label>
            <input type="password" name="opwd"  maxlength="10" class="form-control form-control-lg" placeholder="Enter Your  Password" required>
            <br/>
            <label class="font-500">New Password</label>
            <input type="password" name="npwd"  id="npwd"  maxlength="10" class="form-control form-control-lg" placeholder="Enter Your New Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}" title="Please enter a password with at least 8 characters including at least one uppercase letter, one lowercase letter, one number, and one special character."   required>
            <br/>
               <label class="font-500">Repeat Password</label>
               <input type="password" name="nrpwd"  id="nrpwd" oninput="check(this)" maxlength="10" class="form-control form-control-lg" placeholder="Enter  Repeat Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}" title="Please enter a password with at least 8 characters including at least one uppercase letter, one lowercase letter, one number, and one special character."  required>
               <p class="m-0 py-4"><a href="" class="text-muted"></a></p>
              <button class="btn btn-primary btn-lg shadow-lg" style="margin-left:106px;">Submit</button>
              <button type="reset" class="btn btn-primary btn-lg  shadow-lg" >Clear</button>
            </form>        
          </div>        
        </div>
      </div>
    </div>


 <!-- Check If New Password Match Repeat Password -->
 <script>
function check(input) {
  if (input.value !== document.getElementById('npwd').value) {
    input.setCustomValidity('must match New  Password');
  } else {
    input.setCustomValidity('');
  }
}
</script>
<!--Login section start -->


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