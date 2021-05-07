
<!-- For hosting website -->
<?php
$servername = "";
$username = "";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'dbnamme');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>


