
<?php
// error_reporting(0);
include('connect.php'); 



$Qid = $_POST['Qid'];
$Answer = $_POST['Answer'];
$Mark = $_POST['Mark'];
$statement="";
$Question = mysqli_real_escape_string($con, $_POST["Question"]);
$ResouseFile=$_FILES['ResouseFile']['name'];


if($Question !== "") {
    $xquery = "INSERT INTO tblquizquestion (Qid,ResouseFile,Answer,Mark,statement) VALUES ('$Qid', '$Question', '$Answer','$Mark','$statement')";
    $result = mysqli_query($con, $xquery); 
}else {
  $xquery = "INSERT INTO tblquizquestion (Qid,ResouseFile,Answer,Mark,statement) VALUES ('$Qid', '$ResouseFile', '$Answer','$Mark','$statement')";
  $result = mysqli_query($con, $xquery);
  move_uploaded_file($_FILES["ResouseFile"]["tmp_name"],"audio/".$_FILES["ResouseFile"]["name"]);
}

echo '<script type="text/javascript">'; 
echo 'alert("Successfully Add Test.");'; 
$URL="AddTest.php";
echo "location.href='$URL'";
echo '</script>';

?>

