<?php
session_start();
$mysqli = new mysqli("localhost","root","","attendence tracking");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else{
	$rollno=$_POST['rollno'];
	$password=$_POST['password'];
	$query="select * from attendence where rollno='$rollno' and password='$password'";
	$_SESSION["rollno"]=$rollno;
	$result=mysqli_query($mysqli,$query);
	$row = $result->fetch_assoc();
	if($row['rollno']==$rollno && $row['password']==$password){
		echo "attendence of the          ".$rollno."                 is:        ";
		echo $row['attendence1'];
		echo "<br>";
		echo "Your request will be sent to all of your coordinators".$rollno."          is:                    ";
		$list = split ("->", $row['proctor hierarchy'];
		foreach($list as $value){
			$query="select email from proctors where name='$value'";
			$email=mysqli_query($mysqli,$query);
			triggerfunction($email);
		}

	}
	else{
		echo "invalid credentials";
	}
}
function triggerfunction($email){
	CREATE TRIGGER email
ON Person.Person 
AFTER INSERT, UPDATE, DELETE 
AS 
   EXEC msdb.dbo.sp_send_dbmail 
                        @profile_name = '$session["rollno"]', 
                        @recipients = '$email' , 
                        @body = 'I request you to grant my leave', 
                        @subject = 'request for leave' 
GO

}

?>
