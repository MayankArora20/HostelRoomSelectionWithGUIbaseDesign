<?php
session_start();
 $con=mysqli_connect("localhost","root","");
 if (!$con) 
 {
    die(" Database Connection failed: " . mysqli_connect_error());
 }
 else
 {
 	$name = $_POST["sname"];
 	$reg = $_POST["reg"];
 	$exam = $_POST["exam"];
 	$course = $_POST["course"];
 	$branch = $_POST["branch"];
 	$dob = $_POST["dob"];
 	$mob = $_POST["mob"];
 	$add = $_POST["address"];
 	$city = $_POST["city"];
 	$state = $_POST["state"];
 	$country = $_POST["country"];
 	$email = $_POST["email"];
 	$fnam = $_POST["fname"];
 	$fmob = $_POST["fmob"];

 	mysqli_select_db($con,"mini_proj");

 	$query="insert into student values ( '".$reg."','".$name."','".$exam."','".$course."','".$branch."','".$dob."','".$mob."','".$add."','".$city."','".$state."','".$country."','".$email."','".$fnam."','".$fmob."',0)";

 	if (mysqli_query($con, $query)) 
 	{
     echo "New record created successfully";
     $_SESSION["registration"]=$reg;
	 $_SESSION["name"]=$name;
     header('Location:floor.php');
	}
	else 
	{
      echo "Error: " . $query . "<br>" . mysqli_error($con);
    }

  mysqli_close($con);

 }

?>