<?php
error_reporting(0);     
session_start();
include ("connect.php");
$cid = $_GET['cid'];
$cname  =$_POST['cname'];
$level  =$_POST['level'];



$query1= "update  tblcourse set cname='$cname',level='$level'  where cid='$cid';";
    mysqli_query($con,$query1);
    echo '<script type="text/javascript">'; 
    echo 'alert("Course Updated Successfully.");'; 
    $URL="listCourse.php";
    echo "location.href='$URL'";
    echo '</script>';


?>
