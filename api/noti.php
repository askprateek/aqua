<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aqua";
$connection = mysql_connect($servername, $username, $password);
$db = mysql_select_db($dbname, $connection);
$email=$_SESSION['login_user'];
//$sql= "SELECT vid FROM vendor WHERE email='$email'";
//$result =mysql_query($sql,$connection);
$sql="SELECT * FROM request";
$ans=mysql_query($sql,$connection);
$log=array();
while ($row =mysql_fetch_assoc($ans))
{
  $log[]=$row;
}

echo json_encode($log);
