<?php
session_start();
if(!isset($_SESSION['myusername']) ){
	header('location:admin_login.html');
} else {
	//echo "<center> Welcome ". $_SESSION['myusername'] . "</center>" ;
}
?>
<!Doctype html>
<html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>
<body>
	<!-- <div class="modal fade" id="myModal" role="dialog">
    	<div class="modal-dialog">
 -->			
			<div class="container">
			    <div class="well" class="col-xs-4">

					<div class="panel-heading">
			            <div class="row">
			            	<div class="col-lg-6">
			                    <h4>Admin Panel</h4>
			                    <br>
			                    <a  href="admin_aboutus.php"><button class="btn btn-success">About Us</button></a><br><br>

			                    <a  href="admin_commitee.php"><button class="btn btn-success">Commitee Add</button></a><br><br>

			                    <!-- <a  href=""><button class="btn btn-success">Log Out</button></a><br><br> -->

			                </div>
			    		    <div class="col-md-6">                            
			                    <a class="pull-right" href="logout.php"><button class="btn btn-success">Log Out</button></a>
			                </div>
			            </div>
			        </div>
				 	
				</div>
			</div>
				<div class="footer-copyright"></div>
			    <div class="container"></div>
			    <div class="row"></div>
			    <div class="col-lg-6">
			        <p  class="text-center">Copyright ©2016, CSE-SOCIETY-SUST, All Rights Reserved</p>
			    </div>
	<!-- 	</div>
	</div> -->
</body>
</html>