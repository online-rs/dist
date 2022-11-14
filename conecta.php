<?php
$servername = "bruno572_motoristas";
$database = "216.172.188.75:3306";
$username = "bruno572_bruno";
$password = "Reiter@2022";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>