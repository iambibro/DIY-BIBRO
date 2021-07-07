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

$sql = "INSERT INTO login1 values ('".$_POST["uname"]."', '".$_POST["psw"]."')";

if ($conn->query($sql) === TRUE) {
  echo "Signed Up successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<a href="home.html"><h3>back to homepage</h3></a>



