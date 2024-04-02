
<?php
 
 session_start();
 $UserID=$_GET['email'];
 $npwd = $_POST['npwd'];
 $_SESSION['email'] = $UserID;

 include ("connect.php");	
 $query = "update tblstudent set password='$npwd' where email='$UserID'";
 mysqli_query($con,$query);      
echo '<script type="text/javascript">'; 
echo 'alert("Your password has been successfully Updated!");'; 
$URL="login.html";
echo "location.href='$URL'";
echo '</script>';



    ?>
 
