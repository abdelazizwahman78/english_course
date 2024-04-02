
<?php
// error_reporting(0);
include('connect.php'); 

$cid = $_POST['cid'];
$cname = $_POST['cname'];
$level = $_POST['level'];



  $xquery = "INSERT INTO tblcourse (cid,cname,level) VALUES ('$cid', '$cname', '$level')";
  $result = mysqli_query($con, $xquery);

echo '<script type="text/javascript">'; 
echo 'alert("Successfully Add Course.");'; 
$URL="AddCourse.php";
echo "location.href='$URL'";
echo '</script>';


?>

