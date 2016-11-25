<?php
session_start();
if(isset($_SESSION['myusername']) ){
    // header('location:admin_login.html');
    header('location:dashboard.php');
}
    //echo "<center> Welcome ". $_SESSION['myusername'] . "</center>" ;
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

<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

h2{
	background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;

}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

<body>
 	<div   class="well">
    	<h2>Admin Login</h2>
    </div>
	<center>
		<form class="form-horizontal" action="postlogin.php" method="post">
		 <!--  <div class="imgcontainer">
		    <img class="img-rounded" style="width: 15%;" src="images/12622204_10207322300408676_8499003387779943773_o.jpg" alt="Avatar" class="avatar">
		  </div> -->

		  <div class="container col-md-8">
		    <label><b>Email</b></label>
		    <input type="text" placeholder="Email" name="username" required>

		    <label><b>Password</b></label>`
		    <input type="password" placeholder="Enter Password" name="password" required>
		        
		    <button type="submit">Login</button>
		    <input type="checkbox" checked="checked"> Remember me
		  </div>

		  <!-- <div class="container" style="background-color:#f1f1f1">
		    <button type="button" class="cancelbtn">Cancel</button>

		  </div> -->
		</form>
	</center>
</body>
</html>