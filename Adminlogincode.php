
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
$query ="Select * FROM  tbladmin where aname='$UserID' AND password='$Passw'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);


//correct
	if ($num>0){
			//session variables
	   $_SESSION['txtid']=$UserID;
	   $_SESSION['aname']=$row['aname'];
	   header('location:AdminHomepage.php');
}else
echo '<script type="text/javascript">'; 
echo 'alert("Your Id Or Password");'; 
$URL="Adminlogin.html";
echo "location.href='$URL'";
echo '</script>';

?>

