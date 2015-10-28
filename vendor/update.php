<?php
	$big=$_POST["bottlebig"];
	$vid=$_POST["vid"];
	$small=$_POST["bottlesmall"];
	$tank=$_POST["tank"];
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
	$sql = "SELECT * FROM `product` where vid='$vid'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    $sql1 = "UPDATE product SET b10='$small' , b20='$big' , tank='$tank' WHERE vid='$vid'";
		if ($conn->query($sql1) === TRUE) {
		    header("location: index.php?msg=updated");
		} else {
		    echo "Error updating record: " . $conn->error;
		}
	}
	else
	{
		$sql2 = "INSERT INTO product (vid, b10, b20, tank)
		VALUES ('$vid', '$small', '$big', '$tank')";
		if ($conn->query($sql2) === TRUE) {
		   header("location: index.php?msg=updated");
		} else {
		    echo"err new";
		}
	}
?>












?>