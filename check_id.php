<?php
 
  include('connect.php'); 
  if(isset($_POST['student_id'])) {
    $student_id = $_POST['student_id'];
    $query = "SELECT count(*) as cnt FROM `tblstudent` WHERE email = '".$student_id."'";
    $result = mysqli_query($con,$query); 
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
 
    if($row['cnt']== 0) {
     r1: echo '';
    } else {
     r2: echo '<span class="text-danger">student id <b>'.$student_id.'</b> is already registered!</span>';
     
    
  }}

 

 
 
 
?>