<?php

include('connect.php');
$email = $_GET['email'];

$query = "DELETE FROM tblstudent WHERE email = '$email'";
$result = mysqli_query($con, $query);


  echo '<script type="text/javascript">'; 
  echo 'alert("This student has been successfully deleted");'; 
  echo 'location.href="NotApproved_list.php";';
  echo '</script>';

?>