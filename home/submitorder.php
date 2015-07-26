<?php

include('session.php');

$pid=$_POST["pid"];
$vid=$_POST["vendor"];
$address=$_POST["address"];
$quantity=$_POST["quantity"];
$user=$user_check;


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

$sql = "INSERT INTO request (vid, pid, quantity, address, user)
VALUES ('$vid', '$pid', '$quantity', '$address', '$user')";

if ($conn->query($sql) === TRUE) {
    header("location: payment.php");
} else {
    header("location: index.php");
}

$conn->close();
?>
