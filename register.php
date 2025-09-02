<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<title></title>
</head>
<body>
<?php
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$emp=$_REQUEST['emp_id'];

$host='localhost';
$us='root';
$pa='';
$db='login';

$con=mysqli_connect($host,$us,$pa,$db);
if($con->connect_error){
	die("❌Connection failed: " . $conn->connect_error);
}
echo("<center>✅Connected successfully..!");
$sql="INSERT INTO user(user_name,password,Emp_no)
 VALUES ('$user','$pass','$emp')";
if (mysqli_query($con,$sql)){
	echo "<br><br><br>✅New record created succesfully..!";
}
else{
	echo "<br><br><br>❌Error..!";
}
mysqli_close($con);
?>

</body>
</html>
