
<?php
// error_reporting(0);
include('connect.php'); 

$sid = $_POST['sid'];
$Sfname = $_POST['Sfname'];
$Slname = $_POST['Slname'];
$mname = $_POST['mname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$Security_Qus = $_POST['Security_Qus'];
$Security_Ans = $_POST['Security_Ans'];
$password = $_POST['password'];
$aid='';
$status='';


// Check if student ID is already registered 
$sql = "SELECT * FROM tblstudent WHERE email='$email'";
$res = mysqli_query($con, $sql);

if (mysqli_num_rows($res) > 0) { 
echo '<script type="text/javascript">'; 
echo 'alert("This student is already registered!!");'; 
$URL="Register.html";
echo "location.href='$URL'";
echo '</script>';
} else {
  $xquery = "INSERT INTO tblstudent (sid,Sfname,Slname,mname,email,phone,Security_Qus,Security_Ans,password,aid,status) VALUES ('$sid', '$Sfname', '$Slname', '$mname', '$email', '$phone','$Security_Qus','$Security_Ans','$password','$aid','$status')";
  $result = mysqli_query($con, $xquery);

echo '<script type="text/javascript">'; 
echo 'alert("Successfully Add Student.");'; 
$URL="login.html";
echo "location.href='$URL'";
echo '</script>';

}
?>

