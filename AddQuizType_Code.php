
<?php
// error_reporting(0);
include('connect.php'); 

$Category = $_POST['Category'];
$cid = $_POST['cid'];



  $xquery = "INSERT INTO tblquizque (cid,Category) VALUES ('$cid', '$Category')";
  $result = mysqli_query($con, $xquery);

echo '<script type="text/javascript">'; 
echo 'alert("Successfully Add Quiz Type.");'; 
$URL="AddTestType.php";
echo "location.href='$URL'";
echo '</script>';


?>

