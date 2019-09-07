<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `student` WHERE CONCAT(`Room`, `student_name`, `branch`, `course`, `registration_num`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `student`";
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

<!DOCTYPE>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="status.css">
</head>

 <div style="width: 100%;height: 40px; background-color: black; text-align: right;">
   <a href="login.html"><label style="color: white; font-size: 30 ;">log out&nbsp;</label></a>
 </div>          
<br>
<center>
  <label class="label" >Student details</label>
</center>
<form  method="post">
	<br>
    <input type="text" name="valueToSearch" class="search" placeholder="roomNo/student_name/branch/course/registration_num">
    <input type="submit" name="search" value="Search" class="button" >

<div id='di'>
    <center>
<table border="1" bordercolor="black" bgcolor="lightblue" >
	
	<tr >
		<th>Registration Number</th>
		<th>Student Name</th>
		<th>Exam</th>
		<th>Course</th>
		<th>Branch</th>
		<th>DOB</th>
		<th>Mobile</th>
		<th>Address</th>
		<th>City</th>
		<th>State</th>
		<th>Country</th>
		<th>Email</th>
		<th>Fathers Name</th>
		<th>Fathers Mobile</th>
	</tr>

<?php while($row = mysqli_fetch_array($search_result)):?>
<tr>

	<td><?php echo $row['registration_num'];?></td>
	<td><?php echo $row['student_name'];?></td>
	<td><?php echo $row['exam'];?></td>
	<td><?php echo $row['course'];?></td>
	<td><?php echo $row['branch'];?></td>
	<td><?php echo $row['DOB'];?></td>
	<td><?php echo $row['Mobile'];?></td>
	<td><?php echo $row['Address'];?></td>
	<td><?php echo $row['City'];?></td>
	<td><?php echo $row['State'];?></td>
	<td><?php echo $row['Country'];?></td>
	<td><?php echo $row['Email'];?></td>
	<td><?php echo $row['Fathers Name'];?></td>
	<td><?php echo $row['Fathers Mob'];?></td>
	</tr>


</center>
 <?php endwhile;?>
</table>
</div>
</form>
</html>