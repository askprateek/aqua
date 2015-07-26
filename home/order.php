
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
       <li><a style="color:#00BCD4;">Hello </a></li>

	   <li><a href="logout.php"  style="color:#00BCD4;">Logout</a></li>
     </ul>
    </div>

  </nav>

  <div class="container">
    <div class="row">
      <div class="col s6">
 <form action='submitorder.php' method="post">
<input type='text' name="pid" value="<?php echo $_GET["type"]?>" >

          <?php
          $zip=$_GET["zip"];
          $type=$_GET["type"];
          $quantity=$_GET["quantity"];

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
          $sql = "SELECT * FROM `vendor` where vzip='$zip'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {

                $sr=$row["vid"];
                $emid=$row["email"];
                $name=$row["name"];
                $sql = "SELECT `$type` FROM `product` where vid='$sr'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo"
                    <table class='bordered white' style ='margin-top:10px;border-radius:3px;''>
                      <thead>
                        <tr>
                          <th data-field='units'>Choose</th>
                          <th data-field='pid'>Vendor Name</th>
                          <th data-field='quantity'>Email</th>

                        </tr>
                      </thead>
                    ";
                    while($row = $result->fetch_assoc()) {
                      if($row[$type]>=$quantity)
                      {
                        echo"<tr><td>
                          <p>
                            <input type='checkbox' id='test5' name='vendor' value='$sr' />
                            <label for='test5'>Choose</label>
                          </p>
                        </td>";
                        echo"<td>".$name."</td><td>".$emid."</td></tr>";

                      }
                    else  {

                        echo"No Vendors Available1";
                      }
                    }
                  }
                  else {

                    echo"No Vendors Available";
                  }
          	}





          }
          else {

            echo"No Merchant Found";
          }
          echo"</table>";
          $conn->close();
          ?>



      </div>
      <div class="card-panel" >

            <div class="row">

      <div class="row">
        <div class="input-field col s6">
          <textarea id="textarea1" name="address" class="materialize-textarea"></textarea>
          <label for="textarea1">Enter Delivery Address</label>
        </div>
      </div>

  </div>
    <button type="submit" class="waves-effect waves-light btn">Place Order</button></form>
          </div>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
    <script src="js/script.js"></script>
  </body>
  </html>
