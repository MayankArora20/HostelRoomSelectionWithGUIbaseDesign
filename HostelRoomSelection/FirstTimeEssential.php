<?php
$con=mysqli_connect("localhost","root","");
 if(!$con)
  echo '<script type="text/javascript"> alert("Database connection error");</script>';
 else
 {
   mysqli_select_db($con,"mini_proj");


   $q="INSERT INTO `student` VALUES ('0', '***', 'NIMET', 'MCA', '**', '2000-10-10', 000000, '** ', ' **', '** ', '** ', 'b', ' **', 00000000);";
  $r=mysqli_query($con,$q);
  if($r)
    echo "okk";
  else
    echo "Not ok";
  
   for($i=701;$i<742;$i++)
   {
     $q="insert into room values('$i','3','0','0','0','Swami Vivekanand Boys Hostel')";
     $r=mysqli_query($con,$q);
   }

   for($i=601;$i<642;$i++)
   {
     $q="insert into room values('$i','3','0','0','0','Swami Vivekanand Boys Hostel')";
     $r=mysqli_query($con,$q);
   }
   for($i=501;$i<542;$i++)
   {
     $q="insert into room values('$i','3','0','0','0','Swami Vivekanand Boys Hostel')";
     $r=mysqli_query($con,$q);
   }
   for($i=401;$i<442;$i++)
   {
     $q="insert into room values('$i','3','0','0','0','Swami Vivekanand Boys Hostel')";
     $r=mysqli_query($con,$q);
   }
   for($i=301;$i<342;$i++)
   {
     $q="insert into room values('$i','3','0','0','0','Swami Vivekanand Boys Hostel')";
     $r=mysqli_query($con,$q);
   }
   for($i=201;$i<242;$i++)
   {
     $q="insert into room values('$i','3','0','0','0','Swami Vivekanand Boys Hostel')";
     $r=mysqli_query($con,$q);
   }
   for($i=101;$i<142;$i++)
   {
     $q="insert into room values('$i','3','0','0','0','Swami Vivekanand Boys Hostel')";
     $r=mysqli_query($con,$q);
   }

   


 $q="insert into `student` VALUES ('2017CA21', 'lokesh', 'NIMCET', 'MCA', '', '1992-02-02', 9410236114, 'jila khagarya bihar', 'muzaffarpur', 'bihar', 'INDIA', 'lokeshchutya@gmail.com', 'mujhe nhi pata', 9898649641);";
   $r=mysqli_query($con,$q);

  $q="INSERT INTO `student` VALUES ('2017CA25', 'mubashhsir ahmad', 'NIMCET', 'MCA', '', '1992-02-02', 9410236114, 'jila khagarya bihar', 'muzaffarpur', 'bihar', 'INDIA', 'lokeshchutya@gmail.com', 'mujhe nhi pata', 9898649641);";
  $r=mysqli_query($con,$q);

  $q="INSERT INTO `student` VALUES ('2017ca51', 'sriram', 'NIMET', 'MCA', 'ddd', '2000-10-10', 7317778274, 'tilak hostel,mnnit(room no-222), mnnit allahabad', 'ALLAHABAD', 'mnnit', 'India', 'bittukumarmnnit@gmail.com', 'RAMAN', 7317778274);";
  $r=mysqli_query($con,$q);

  $q="INSERT INTO `student` VALUES ('2017ca52', 'Bittu kumar', 'NIMET', 'MCA', 'ddd', '2000-10-10', 7317778274, 'tilak hostel,mnnit(room no-222), mnnit allahabad', 'ALLAHABAD', 'mnnit', 'India', 'bittukumarmnnit@gmail.com', 'Vipin Choudhary', 7317778274);";
  $r=mysqli_query($con,$q);

  $q="update `room`  set availability=0 , reg1='2017CA21' , reg2='2017ca51' , reg3='2017ca52' where roomNo=107;";
  $r=mysqli_query($con,$q);


   $q="update `room`  set availability=2,reg1='2017CA25' where roomNo=112;;";
  $r=mysqli_query($con,$q);


   $q="update `room`  set availability=2,reg1='2017ca52' where roomNo=111;";
  $r=mysqli_query($con,$q);

  if($r)
    echo "okk";
  else
    echo "Not ok";



	echo "OK";
	
 }
 ?>