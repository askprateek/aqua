<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>AQUA - The Home Water Delivery System</title>

  <!-- Bootstrap -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
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
      <a href="#" class="brand-logo center" style="color:#00BCD4;">AQUA</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href ="vendor/login.php" style="color:#00BCD4;">Vendor Login</a></li>
        <li><a href ="vendor/signup.php" style="color:#00BCD4;">Vendor Signup</a></li>
      </ul>
    </div>
  </nav>
  <?php
if(isset($_GET["msg"]))
{
	if($_GET["msg"]=="err")
	{
echo"<div class='card-panel red red'>Invalid Email/ Password</div>
";
	}
	else
	{
	echo"
	
	    <div class='card-panel teal green'>Your Have been Registered Successfully, Now Login To Proceed</div>

	";	
	}
	
}


?>
  <div class="container">
    <div class="row">
      <div class="col s10 col offset-s1 valign wrapper">
        <form action="login-sys.php" method="post">
          <div class="card-panel">
            <span class="blue-text text-darken-2 center"><h5 style="color:#00BCD4;">User login</h5></span>

            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" name="username" class="validate">
                <label for="email">Email</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="password" name="pass" class="validate">
                <label for="email">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="col s3">
                <button type="submit" class="waves-effect waves-light btn">Login</button>
              </div>
              <div class="col s2 pull right">
                <a class="waves-effect waves-light btn modal-trigger" href="#signup">New User ?</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Modal Structure -->
  <div id="signup" class="modal">
    <form method ="POST" action="user-register.php">
      <div class="modal-content">
        <h4 style="color:#00BCD4;">Register Here</h4>
        <div class="row">
		<form action="reg.php" method="post">
          <div class="input-field col s12">
            <input id="email" type="text" name="name" class="validate">
            <label for="email">Full Name</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" name="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
		 <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" name="phone" class="validate">
            <label for="email">Phone Number</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="password" name="pass" class="validate">
            <label for="email">Password</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="waves-effect waves-light btn">Login</button>
      </div>
    </form>
  </div>

  <script>
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  </script>
  <script src="js/script.js"></script>
</body>
</html>
