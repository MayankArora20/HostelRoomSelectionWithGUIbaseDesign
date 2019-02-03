<html>
<?php
session_start();
 $con=mysqli_connect("localhost","root","");
 if (!$con) 
 {
    die(" Database Connection failed: " . mysqli_connect_error());
 }
 else
 {
   mysqli_select_db($con,"mini_proj");
   $id=$_GET['delid'];

   $q1="select Room from student where registration_num='".$id."'";
   $r=mysqli_query($con,$q1);
   $row=mysqli_fetch_array($r);
   $room=$row['Room'];
   echo "room=$room";

   $q2="delete from student where registration_num='".$id."'";
   $r=mysqli_query($con,$q2);
   if(!$r)
   	echo "error";

   $q3="select * from room where roomNo='".$room."'";
   $rrs=mysqli_query($con,$q3);
   $row = mysqli_fetch_array($rrs);
   $avail=$row['availability'];
   $reg1=$row['reg1'];
   $reg2=$row['reg2'];
   $reg3=$row['reg3'];

   $avail=$avail+1;
   $up="update room set availability='".$avail."' where roomNo='".$room."'"; 
    mysqli_query($con,$up);
    if($reg3==$id)
   {
    $up="update room set reg3=0 where roomNo='".$room."' and reg3='".$id."'";
    mysqli_query($con,$up);
   }
   else
   if($reg2==$id)
   {
    $up="update room set reg2='".$reg3."',$reg3=0 where roomNo='".$room."' and reg2='".$id."'";
    mysqli_query($con,$up);
   }
   else
   {   
     $up="update room set reg1='".$reg2."',reg2='".$reg3."',reg3=0 where roomNo='".$room."' and reg1='".$id."'";
     mysqli_query($con,$up);
   }
   echo "<script>alert(recod for registration $id deleted sucessfully);</script>";
   header('location:delete.php');
}
?>
</html>