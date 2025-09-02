<?php
$user=$_REQUEST['username'];
$pass=$_REQUEST['password'];

$host='localhost';
$us='root';
$pa='';
$db='login';

$con=mysqli_connect($host,$us,$pa,$db);
if ($con->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo("<center>Connected successfully..!");
}

$result =$con->query("SELECT password FROM user WHERE user_name = '$user' limit 1;");
if(mysqli_num_rows($result)){
    while($row=mysqli_fetch_assoc($result)){
        if($row==$user){
            echo('You logged in successfully');
        }
        else{
            echo('Incorrect username');
        }
    }
}

$stmt->close();
$con->close();
?>