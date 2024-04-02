
<?php
//session start()
session_start();

$mans=$_POST["Security_Ans"];
$UserID=$_GET['email'];

include ("connect.php");
$query = "select * from  tblstudent where email='$UserID'";
$result = mysqli_query($con,$query);
 while($row = mysqli_fetch_assoc($result)) {

$anss=$row["Security_Ans"];
$sq=$row["Security_Qus"];
}

if ($mans==$anss) {
    header("Location:StudentNewPassword.php?email=$UserID");
    
}else{
 echo '<script type="text/javascript">'; 
echo 'alert("The Answer is invalid. Please try again!");'; 
$URL="Student_Forgot.php?email=$UserID";
echo "location.href='$URL'";
echo '</script>';
}



?>
