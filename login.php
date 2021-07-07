<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diybibro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "Select * from login1 where USER_ID = '".$_POST["uname"]."' and PASSWORD ='".$_POST["psw"]."';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	  echo "Login successfully";
}
else{
	echo "TRY AGAIN !!!!";
}


$conn->close();
?>
<a href="home.html"><h3>back to homepage</h3></a>