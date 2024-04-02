<?php
error_reporting(0);     
session_start();
include ("connect.php");
$UserID = $_SESSION['txtid'];
$Sfname  =$_POST['Sfname'];
$Slname  =$_POST['Slname'];
$mname  =$_POST['mname'];
$email  =$_POST['email'];
$phone  =$_POST['phone'];


$query1= "update  tblstudent set Sfname='$Sfname',Slname='$Slname',mname='$mname',email='$email',phone='$phone' where sid='$UserID';";
    mysqli_query($con,$query1);
    echo '<script type="text/javascript">'; 
    echo 'alert("Account Updated Successfully.");'; 
    $URL="StudentUpdateProfile.php";
    echo "location.href='$URL'";
    echo '</script>';


?>
