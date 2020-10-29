<?php
$mysqli = new mysqli("localhost","root","","attendence tracking");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else{
	$rollno=$_POST['rollno'];
	$password=$_POST['password'];
	$query="select * from attendence where rollno='$rollno' and password='$password'";
	$result=mysqli_query($mysqli,$query);
	$row = $result->fetch_assoc();
	if($row['rollno']==$rollno && $row['password']==$password){
		echo "attendence of the          ".$rollno."                 is:        ";
		echo $row['attendence1'];
		echo "<br>";
		echo "Proctor hierarchy of the student      ".$rollno."          is:                    ";
		echo $row['proctor hierarchy'];
	}
	else{
		echo "invalid credentials";
	}
}

?>