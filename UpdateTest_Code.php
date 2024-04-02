<?php
error_reporting(0);     
session_start();
include ("connect.php");

$Qu_id=$_GET["Qu_id"];
$Qid=$_GET["Qid"];
$Question = mysqli_real_escape_string($con, $_POST["Question"]);
$Answer=$_POST["Answer"];
$Mark=$_POST["Mark"];
$ResouseFile=$_FILES['ResouseFile']['name'];



if($Question !== "") {
$query1= "update  tblquizquestion set ResouseFile='$Question',Answer='$Answer',Mark='$Mark'  where Qu_id='$Qu_id';";
 mysqli_query($con,$query1);

}else {
    $query1= "update  tblquizquestion set ResouseFile='$ResouseFile',Answer='$Answer',Mark='$Mark'  where Qu_id='$Qu_id';";
    mysqli_query($con,$query1); 
    move_uploaded_file($_FILES["ResouseFile"]["tmp_name"],"audio/".$_FILES["ResouseFile"]["name"]);

}

    echo '<script type="text/javascript">'; 
    echo 'alert("Test Updated Successfully.");'; 
    $URL="Quiz_List.php?Qid=$Qid";
    echo "location.href='$URL'";
    echo '</script>';


?>
