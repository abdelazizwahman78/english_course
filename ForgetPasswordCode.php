
<?php
//session start()
session_start();

//connection
include('connect.php');


$_SESSION['status']="Active";

//input
$UserID = mysqli_real_escape_string($con,$_POST['txtid']);
 
$query ="Select * FROM  tbladmin where aname='$UserID'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);

$query1 ="Select * FROM  tblstudent where email='$UserID'";
$result1 = mysqli_query($con,$query1);
$num1 = mysqli_num_rows($result1);


//correct
if ($num>0)
{
session_start();
$adddname =$row["aid"];
$_SESSION['aid'] = $adddname;
header ("location:Admin_Forgot.php?aid=$UserID");

}else if ($num1>0)
{
session_start();
$adddname =$row["sid"];
$_SESSION['sid'] = $adddname;
header ("location:Student_Forgot.php?sid=$UserID");

}
else {

 echo '<script type="text/javascript">'; 
echo 'alert("YOUR UserID");'; 
$URL="Forget_Password.html";
echo "location.href='$URL'";
echo '</script>';
}



?>
