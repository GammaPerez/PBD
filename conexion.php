<?php
$servername = "localhost";
$database = "hospital";
//$username = $_POST['user'];
//$password = $POST['pass'];
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>