<?php
$vid=$_POST["zip"];
$pid=$_POST["name"];
$uid=$_POST["email"];
$quantity=$_POST["phone"];
$address=$_POST["pass"];
$user=$_POST["pass"];
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

$sql = "INSERT INTO request (name, uzip, email, phone, password)
VALUES ('$name', '$zip', '$email', '$phone', '$pass')";

if ($conn->query($sql) === TRUE) {
    header("location: index.php?msg=success");
} else {
    header("location: index.php");
}

$conn->close();
?>
