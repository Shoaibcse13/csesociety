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
			                    <h4>Admin_Commitee Members</h4>
			                </div>
			    		    <div class="col-md-6">                            
			                    <a class="pull-right" href="logout.php"><button class="btn btn-success">Log Out</button></a>
			                </div>
			            </div>
			        </div>
				 	<form class="form-horizontal" action="gg.php" method="POST" enctype="multipart/form-data">
						<fieldset>
					        <div class="form-group">
					            <label for="name" class="control-label col-lg-2" class="col-xs-2">Name*:</label>
					            <div class="col-lg-6"> 
					            	<input class="form-control" name="name"  type="text" placeholder="Enter your name here" required/>
					        	</div>
					        </div>
					        <!-- <div class="form-group">
					            <label for="student" class="control-label col-lg-2" class="col-xs-2">Student:</label>
					            <div class="col-lg-6">
						            <input class="form-control" name="session" placeholder="session"/>
						        </div>
					    	</div> -->
					    	<div class="form-group">
					            <label for="University" class="control-label col-lg-2" class="col-xs-2">University Name*:</label>
					            <div class="col-lg-6"> 
					            	<input class="form-control" name="univ_name"  type="text" placeholder="University Name" required/>
					        	</div>
					        </div>

					        <div class="form-group">
					            <label  for="dept" class="control-label col-lg-2" class="col-xs-2">Department</label>
					            <div class="col-lg-6">
					               <input class="form-control" name="dept_name"  type="text" placeholder="Dept name" required/>
					        	</div>
					        </div>

					        <div class="form-group">		        
					        	<label for="Session" class="control-label col-lg-2" for="Session" class="col-xs-2">Session*</label>
						        <div class="col-lg-6">
						            <select name="session" class="form-control">
						                <option>2011-12</option>
						                <option>2012-13</option>
						                <option>2013-14</option>
						                <option>2014-15</option>
						                <option>2015-16</option>
						                <option>2016-17</option>
						                <option>2017-18</option>
						            </select>
								</div>
					        </div>

					        <div class="form-group">
					            <label for="File" class="control-label col-lg-2" class="col-xs-2">File*</label>
					            <div class="col-lg-6"> 
					            	<input class="form-control" name="fileToUpload"  type="file">
					        	</div>
					        </div>

					        <div class="form-group">
					            <div class="col-lg-6"> 
					            	<label for= "submit" class="control-label col-lg-6" class="col-xs-2"><button class="btn btn-info">Submit</button></label><!-- 
					            	 type="submit" class="btn btn-info col-md-8" class="col-sm-4" -->
					        	</div>
					        </div>
						</fieldset>
					</form>
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