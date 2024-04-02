
<?php
 
 session_start();
 $UserID=$_GET['aname'];
 $npwd = $_POST['npwd'];
 $_SESSION['aname'] = $UserID;

 include ("connect.php");	
 $query = "update tbladmin set password='$npwd' where aname='$UserID'";
 mysqli_query($con,$query);      
echo '<script type="text/javascript">'; 
echo 'alert("Your password has been successfully Updated!");'; 
$URL="login.html";
echo "location.href='$URL'";
echo '</script>';



    ?>
 
