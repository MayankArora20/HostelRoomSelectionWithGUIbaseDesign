<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `room` WHERE CONCAT(`roomNo`, `availability`, `reg1`, `reg2`, `reg3`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `room`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
     $con=mysqli_connect("localhost","root","");
 if(!$con)
  echo '<script type="text/javascript"> alert("Database connection error");</script>';
 else
 {
   mysqli_select_db($con,"mini_proj");
  
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
  }
}
?>
<html>
<head>
       <title>svbh hostle</title>
       <link rel="stylesheet" type="text/css" href="status.css">
       <script type="text/javascript"></script>
</head>
<body>


 <div style="width: 100%;height: 40px; background-color: black; text-align: right;">
   <a href="login.html"><label style="color: white; font-size: 30 ;">log out&nbsp;</label></a>
 </div>    
       
<br>
<center>
  <label class="label" >Room Status</label>
</center>

<form  method="post">
  <br>
    <input type="text" name="valueToSearch" class="search" placeholder="roomNo/availability/registration_num">
    <input type="submit" name="search" value="Search" class="button" >

<div id='di'>
        
    <center> 
  
    <table border="7" bordercolor="black" bgcolor="lightblue" >
     <tr>
     	<th>Room Number</th>
     	<th>Availability</th>
     	<th>Student 1</th>
      <th>Student 2</th>
      <th>Student 3</th>
     </tr>       
     
<?php while($row = mysqli_fetch_array($search_result)):?>
    <tr>
      <td><?php echo $row["roomNo"];?></td>
      <td><?php echo $row["availability"];?></td>
      <td><?php echo $row["reg1"];?></td>
      <td><?php echo $row["reg2"];?></td>
      <td><?php echo $row["reg3"];?></td>
    </tr>
  <?php endwhile;?>
  </table>
  </center>
</div>
</form>
</body>
</html>