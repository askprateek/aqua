
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>AQUA - The Online Water Delivery System</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="../css/bootstrap.min.css" rel="stylesheet" />
	<link href="../css/gsdk-base.css" rel="stylesheet" />

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">

</head>

<body>
<div class="image-container set-full-height" style="background-image: url('../images/wizard.jpg')">
    <!--   Creative Tim Branding   -->
    <a href="index.html">
         <div class="logo-container">
            <div class="logo">
                <img src="../icon.png">
            </div>
            <div class="brand">
                AQUA
            </div>
        </div>
    </a>

    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card ct-wizard-orange" id="wizard">

                <!--        You can switch "ct-wizard-orange"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->

                    	<div class="wizard-header">

                    	</div>
                    	<ul>
                            <li><a href="#about" data-toggle="tab">ZIP CODE</a></li>
                            <li><a href="#account" data-toggle="tab">TYPE</a></li>
                            <li><a href="#address" data-toggle="tab">QUANTITY</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row"><br/><br/>
                                  <h4 class="info-text"> Enter Your ZIP Code</h4>

<form action="order.php" method="get">

<center>
	  <input type="text" style="width:500px;height:60px;font-size:35px;" id="zipcode" name="zip" placeholder="Zip Code...">
</center>



                              </div>
                            </div>
                            <div class="tab-pane" id="account">
                                <h4 class="info-text"> Select What You Want? </h4>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-radio">
                                                <input type="radio" name="type" value="b10">
                                                <div class="icon">
                                                    <i class="fa fa-pencil"></i>
                                                </div>
                                                <h6>10 Litre Bottle</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-radio">
                                                <input type="radio" name="type" value="b20">
                                                <div class="icon">
                                                    <i class="fa fa-terminal"></i>
                                                </div>
                                                <h6>20 Litre Bottle</h6>
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice"  data-toggle="wizard-radio">
                                                <input type="radio" name="type" value="tank">
                                                <div class="icon">
                                                    <i class="fa fa-laptop"></i>
                                                </div>
                                                <h6>Tanker</h6>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Number Of Units </h4>
                                    </div>


                                    <div class="col-sm-12 col-sm-offset-1">
                                         <div class="form-group">


                                          </div>
                                    </div>

																		<center>
							<input type="number" name="quantity" min="1" max="500" style="width:500px;height:60px;font-size:35px;">
																		</center>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            	<div class="pull-right">
    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
  <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm'  value='Place Order' />

                                </div>
                                <div class="pull-left">
                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                </div>
                                <div class="clearfix"></div>
                        </div>
                </div>
                </form>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->


     <div class="footer">
      <div class="container">
             Made by PyKnight <i class="fa fa-heart heart"></i></a>.
					       </div>
    </div>

    <div class="fixed-plugin">
        <div class="dropdown open">
          <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
          </a>

     </div>


</div>

</body>

    <script src="../js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>

	<!--   plugins 	 -->
	<script src="../js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
	<script src="../js/wizard.js"></script>

</html>
