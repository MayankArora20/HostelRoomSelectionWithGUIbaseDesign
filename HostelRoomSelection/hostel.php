<html>
<head>
       <title>svbh hostle</title>
       <link rel="stylesheet" type="text/css" href="hostle.css">
       <script type="text/javascript"></script>
</head>
<body>

<?php
 $con=mysqli_connect("localhost","root","");
 if(!$con)
  echo '<script type="text/javascript"> alert("Database connection error");</script>';
 else
 {
   mysqli_select_db($con,"mini_proj");
   $query='select * from hostel';
   $res=mysqli_query($con,$query);
   $row=mysqli_fetch_row($res);
 }
?>
 <div style="width: 100%;height: 40px; background-color: black; text-align: right;">
   <a href="login.html"><label style="color: white; font-size: 30 ;">log out&nbsp;</label></a>
 </div>          


<div id='1'>

<input type="button" class="button" onclick="window.location.href='student_detail.php'" value="Student Detail">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;
<input type="button" class="button" onclick="window.location.href='roomstatus.php'"value="Room Status">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;
<input type="button" class="button" onclick="window.location.href='delete.php'"value="Delete Student details">

  </div>


<div id='di'>
    <center> 
  &nbsp;&nbsp;&nbsp;&nbsp;   
    <table border="7" bordercolor="black" bgcolor="lightblue">
          <tr>
               <td>Hostle Name</td>
                <td><?php echo $row[0];?></td>
         </tr>
      
         <tr>
               <td>Total Number of Rooms </td>
                <td><?php echo $row[1];?></td>
         </tr>
	  
        <tr>
               <td>Total Number of Floors</td>
                <td><?php echo $row[2];?></td>
        </tr>
        <tr>
               <td>Rooms On Each Floor</td>
                <td><?php echo $row[3];?></td>
        </tr>
       <tr>
               <td>Number Of Mess</td>
                <td><?php echo $row[4];?></td>
         </tr>
       <tr>
               <td>Number Of Canteen</td>
                <td><?php echo $row[5];?></td>
         </tr>
       <tr>
               <td>Games Room</td>
                <td><?php echo $row[6];?></td>
         </tr>
</table>
  </center>
</div>
</body>

</html>
