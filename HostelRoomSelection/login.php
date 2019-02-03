<?php
 $con=mysqli_connect("localhost","root","");
 if(!$con)
  echo '<script type="text/javascript"> alert("Database connection error");</script>';
else
 {
   $id = $_POST["username"] ;
   $pass = $_POST["password"] ;
   mysqli_select_db($con,"mini_proj");
   $query='select * from ADMIN';
   $res=mysqli_query($con,$query);
   $row=mysqli_fetch_row($res);
   if($id==$row[0]&&$pass==$row[1])
	      header('location:hostel.php'); 
   else
	   echo "INVALID USER";
 }
?>