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
  <?php
include("connect.php");
$UserID= $_SESSION['txtid'];
$qryname = "select * from  tblstudent where email='$UserID' ";
$result= mysqli_query($con,$qryname);
$num = mysqli_num_rows($result);
 while($row = mysqli_fetch_assoc($result)) {

$sid=$row["sid"];
$Sfname=$row["Sfname"];
$Slname=$row["Slname"];
$mname=$row["mname"];
$email=$row["email"];
$phone=$row["phone"];
}
?>
  
 <br/> <br/> <br/> <br/> <br/>
 <div class="demo-container">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12 mx-auto">
          <div class="text-center image-size-small position-relative">
          <img src="images/user.png" class="rounded-circle p-2 bg-white" width="150px" style="margin-left:135px;margin-bottom: 10px;">
          </div>
          <div class="p-5 bg-white rounded shadow-lg" style="width:687px !important;">
            <h3 class="mb-2 text-center pt-5" style="padding-top: 0rem !important;padding-bottom: 26px;">Update Profile</h3>
            <form action="StudentProfile_Code.php" method="post">
                <table>
                    <tr>
                        <td><label for="">Student ID</label>
                            <input type="text" name="sid" class="form-control form-control-lg mb-3" value="<?php echo $sid ?>" readonly>                       				
                          </td>
                        <td><label for="">First Name</label>
                            <input type="text" name="Sfname" class="form-control form-control-lg mb-3"  value="<?php echo $Sfname ?>" maxlength="35" id="" pattern="[a-zA-Z ]+" placeholder="Enter Your First Name" required title="Please enter a name using only letters" style="width:300px;height:45px;padding:15px" required>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Last Name</label>
                            <input type="text" name="Slname" class="form-control form-control-lg mb-3" value="<?php echo $Slname ?>"  maxlength="35" id="" pattern="[a-zA-Z ]+" placeholder="Enter Your Last Name" required title="Please enter a name using only letters" style="width:300px;height:45px;padding:15px" required>
                          </td>
                        <td><label for="">Middle Name</label>
                            <input type="text" name="mname" class="form-control form-control-lg mb-3" value="<?php echo $mname?>"  maxlength="35" id="" pattern="[a-zA-Z ]+" placeholder="Enter Your Middle Name" required title="Please enter a name using only letters" style="width:300px;height:45px;padding:15px" required>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Phone</label>
                            <input type="text" name="phone" class="form-control form-control-lg mb-3"  value="<?php echo $phone ?>" maxlength="8" id="phone" placeholder="00000000" pattern="[7|9|2][0-9]{7}" required title="Please enter a phone number starting with 7, 9, or 2 and has a total of 8 digits" style="width:300px;height:45px;padding:15px" required>
                        </td>
                        <td><label for="">Email</label>
                            <input type="email" name="email" class="form-control form-control-lg mb-3" value="<?php echo $email ?>"  placeholder="Enter Your Email" id="" style="width:300px;height:45px;padding:15px" required>
                        </td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <input type="submit" class="btn-Submit" value="Update">
                        <input type="reset" class="btn-Cancel" value="Reset">

                      </td>
                    </tr>
                </table>
             </form>          
          </div>        
        </div>
      </div>
    </div>


<!--Register section start -->


  <!-- check student id -->
  <script>
    $(document).ready(function () {
      $('#sid').on('blur', function () {
        var student_id = $(this).val().trim();
        if (student_id != '') {
          $.ajax({
            url: 'check_id.php',
            type: 'post',
            data: { student_id: student_id },
            success: function (cnt) {
              $('#result').html(cnt);
            }
          });
        }     });
    });
  </script>


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