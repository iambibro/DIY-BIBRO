<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diybibro";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO comments values ('".$_POST["COMMENTS"]."')";

if ($conn->query($sql) === TRUE) {
  echo "Comment accept successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<a href="home.html"><h3>back to homepage</h3></a>
