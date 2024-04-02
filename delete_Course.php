<?php

include('connect.php');
$cid = $_GET['cid'];

$query = "DELETE FROM tblcourse WHERE cid = '$cid'";
$result = mysqli_query($con, $query);


  echo '<script type="text/javascript">'; 
  echo 'alert("This Course has been successfully deleted");'; 
  echo 'location.href="listCourse.php";';
  echo '</script>';

?>