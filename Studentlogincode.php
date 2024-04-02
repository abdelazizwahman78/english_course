
<?php
//session start()
session_start();
//connection
include('connect.php');
$_SESSION['status']="Active";

//input
$UserID = mysqli_real_escape_string($con,$_POST['txtid']);
$Passw = mysqli_real_escape_string($con,$_POST['txtpword']); 
 
//Query
$query ="Select * FROM  tblstudent where email='$UserID' AND password='$Passw' and  status='1'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);


//correct
	if ($num>0){
			//session variables
	   $_SESSION['txtid']=$UserID;
	   $_SESSION['email']=$row['email'];
	   header('location:StudentHomepage.php');
}else
echo '<script type="text/javascript">'; 
echo 'alert("Your Id Or Password OR Your An Account Not Approved");'; 
$URL="login.html";
echo "location.href='$URL'";
echo '</script>';

?>

