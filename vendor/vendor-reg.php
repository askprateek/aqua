<?php
$zip=$_POST["zip"];
$name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aqua";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO vendor (name, vzip, email, password)
VALUES ('$name', '$zip', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    header("location: login.php?msg=success");
} else {
    header("location: login.php?msg=error");
}

$conn->close();
?>