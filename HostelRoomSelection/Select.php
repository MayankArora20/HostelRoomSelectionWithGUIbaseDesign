<HTML>
<BODY style="background-color:#ed1061;">
<BR><BR><BR>
	<CENTER>
	<DIV style="background-color: white; margin-right: 10%; margin-left: 10%; box-shadow: 2px 2px 3px 3px black;">
<?php
session_start();
$reg=$_SESSION['registration'];
$name=$_SESSION["name"];
$id=$_REQUEST['id'];




 $con=mysqli_connect("localhost","root","");
 if(!$con)
  echo '<script type="text/javascript"> alert("Database connection error");</script>';
else
 {
   mysqli_select_db($con,"mini_proj");
   $sel="select availability from room where roomNo='".$id."'";
   $rrs=mysqli_query($con,$sel);
   $row = mysqli_fetch_array($rrs);
   $avail=$row['availability'];
   
   $i=4-$avail;
   $avail=$avail-1;
   $up="update room set reg".$i."='".$reg."' , availability='".$avail."' where roomNo='".$id."'"; 
  
   mysqli_query($con,$up);
  // $query="insert into room values('".$reg."', ".$id.",'".$name."')";
   $que="UPDATE student set Room=".$id." where registration_num='".$reg."'";
   // mysqli_query($con,$query);
	mysqli_query($con,$que);
 }

?>
<h1>CONGRATULATIONS</h1>
<H2> YOU HAVE <B> SUCESSFULLY COMPLETED ROOM SELECTION PROCESS<B><BR>
YOU HAVE BEEN ALLOTTED ROOM:<B><?PHP echo $id;?></H2>
	<A HREF="Instruction.html">CLICK HERE</A>
</DIV>
</CENTER>
</BODY>
</HTML>