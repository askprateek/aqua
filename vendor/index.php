<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>AQUA</title>

  <!-- Bootstrap -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
  <link href="css/style.css" rel ="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="cyan">

  <nav>
    <div class="nav-wrapper white">
      <a href="#" class="brand-logo center" style="color:#00BCD4;">Waterworks</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
       <li><a style="color:#00BCD4;">Hello <?php
	   echo $user_check;	   ?></a></li>

	   <li><a href="logout.php"  style="color:#00BCD4;">Logout</a></li>
     </ul>
    </div>

  </nav>

  <div class="container">
    <div class="row">
      <div class="col s6">
	  <?php
	  if(isset($_GET["msg"]))
	  {
		 if($_GET["msg"]=="updated")
		 {
			 echo"
			     <div class='card-panel teal green'>Your Data Has Been Updated</div>

			 ";
		 }
	  }
	  ?>
        <table class="bordered white" style ="margin-top:10px;border-radius:3px;">
          <thead>
            <tr>
              <th data-field="pid">Product</th>
              <th data-field="quantity">Quantity</th>
              <th data-field="units">Units</th>
            </tr>
          </thead>

          <tbody>
<?php
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

$sql = "SELECT * FROM `vendor` where email='$user_check'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$_SESSION["vid"]=$row["vid"];
	}

}

$conn->close();
?>
<form action="update.php" method="post">
<input type="text" value="<?php echo $_SESSION["vid"] ?>" name="vid" hidden>
		  <tr>
              <td>Bottle</td>
              <td>10 ltr</td>
              <td>
			  <?php
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

$sql = "SELECT * FROM `product` where vid='$_SESSION[vid]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<input  type='text' name='bottlesmall' class='validate' value='".$row["b10"]."'>";
	}

}
else
{
	echo "<input  type='text' name='bottlesmall' class='validate' value='0'>";
}
$conn->close();
?>
			  </td>
            </tr>
			 <tr>
              <td>Bottle</td>
              <td>20 ltr</td>
              <td>  <?php
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

$sql = "SELECT * FROM `product` where vid='$_SESSION[vid]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<input  type='text' name='bottlebig' class='validate' value='".$row["b20"]."'>";
	}

}
else
{
	echo "<input  type='text' name='bottlebig' class='validate' value='0'>";
}
$conn->close();
?></td>
            </tr>
            <tr>
              <td>Tanker</td>
              <td>200 ltr</td>
              <td>



			  <?php
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

$sql = "SELECT * FROM `product` where vid='$_SESSION[vid]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<input  type='text' name='tank' class='validate' value='".$row["tank"]."'>";
	}

}
else
{
	echo "<input  type='text' name='tank' class='validate' value='0'>";
}
$conn->close();
?></td>
            </tr>
			<tr>
			<td></td><td></td>
			<td>
			<center>
			<button type="submit" class="waves-effect waves-light btn">Update Stock</button>
			</center>
			</td>
			</tr>
          </tbody>

		  </table>



      </div>

      <div class="col s6">
        <div class="row" id ="test">

  <ul class="collapsible" data-collapsible="accordion" id ="noti">
  </ul>

        </div>
      </div>

    </div>
    <script>
    $(document).ready(function(){
   $('.collapsible').collapsible({
     accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
   });
 });
  $(document).ready(function(){

    var response = '';
    $.ajax({ type: "POST",
    url: "../api/noti.php",
    async: false,
    datatype: "json",
    success : function(data)
    {
      var type;
      var obj =JSON.parse(data);
      var l = obj.length;
      console.log(obj[0].user);
      for ( var i=0; i<l ; i+=1)
      {
        if (obj[i].pid=='b10')
        {   type="10 Litre Bottle";}
        if (obj[i].pid=='b20')
        {   type="20 Litre Bottle";}
        if (obj[i].pid=='tank')
        {   type="Water tank";}
        $("#noti").append('<li> <div class=\"collapsible-header\">' +obj[i].user+ 'requested '+obj[i].quantity+ 'units of ' +type+' </div> <div class=\"collapsible-body\"><p>Address'+obj[i].address+'</p></div></li>');
        //$("#test").append("lol");
      }
      }
    });
  });
  </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
    <script src="js/script.js"></script>
  </body>
  </html>
