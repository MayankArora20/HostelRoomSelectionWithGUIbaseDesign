<?php
$con=mysqli_connect("localhost","root","");
 if(!$con)
  echo '<script type="text/javascript"> alert("Database connection error");</script>';
 else
 {
   mysqli_select_db($con,"mini_proj");
   for($i=701;$i<742;$i++)
   {
     $q="insert into room values('$i','3','0','0','0')";
     $r=mysqli_query($con,$q);
   }
 }
 ?>