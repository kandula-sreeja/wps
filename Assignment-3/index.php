<!DOCTYPE html>
<html>
<head>
	<title>Attendence Tracking System</title>
	<style type="text/css">
		body{
			background-color: powderblue;
		}
		h1{
			color: red;
		}
		input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=submit]:hover{
	color: red;
	border: 1px solid #999;
border-radius: 5px;
}
	</style>
</head>
<body>
	<h1>Vasavi college of Engineering(Attendence Tracking System)</h1>
	<h2>Enter Valid username and password registered</h2>
	<form action="/attendence_tracking.php" method="post" action="attendence_tracking.php">
	RollNo       :   <input type="text" name="rollno" id="rollno" placeholder="Enter your university RollNo" style="font-weight: bold;">
	<br>
	<br>
	password     :   <input type="password" name="password" id="password" placeholder="Enter registered password" style="font-weight: bold;">
	<br>
	<br>
	<input type="submit" name="submit">
</form>
</body>
</html>
