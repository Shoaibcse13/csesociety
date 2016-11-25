<?php 
$servername = "localhost";
  $susername = "root";
  $spassword = "sust";
  $dbname = "csesociety";
  $conn = new mysqli($servername, $susername, $spassword, $dbname);
  if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);  
  }


// $id = $_GET["id"];
$sql = "SELECT * FROM aboutus";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $description = $row["description"];
      $id = $row["id"];
      // $cgpa = $row["cgpa"];
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>

<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CSE SOCIETY</title>
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
  
</head><!--/head-->
<body id="home" class="homepage">
	<header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top top-nav-collapse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" style="height:50px; width:150px;" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll"><a href="index.html">Home</a></li>
                        <li class="scroll active"><a href="Aboutus.html">About us</a></li>
                        <li class="scroll"><a href="Activity.html">Activity</a></li>
                        <li class="scroll"><a href="Commitee.html">Committee</a></li>
                        <li class="scroll"><a href="Alumni.html">Alumni   </a></li>
                        <li class="scroll"><a href="Gallery.html">Gallery</a></li>     
                       <li class="scroll"><a href="contact.html">Contact</a></li>
                       <li class="scroll"><a href="Sitemap.html">Site Map</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
    <br>
    <br>
	<!-- About Us start-->
	<section id="aboutus" >
        <div class="container">

            <div class="section-header center">
                <h2 class="section-title text-center wow fadeInDown">About us</h2>
                <h4 class="text-center wow fadeInDown">
                    CSE Society is a non-political departmental organization.<br>All the students and teachers of CSE department are the general member of this society.
                </h4>
                <p class="text-center wow fadeInDown">
                    <?php echo $description; ?> </p>
            </div>
        </div><!--/.container-->
    </section>
    <!--/#shoaib-->
    <br>
    <br>
    <br>
    <br>

    <footer id="footer">
        <div class="container text-center">
          All rights reserved CseSociety © 2016 | <p>Developed By <br><a href="#">Shoaibalam</a></p>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
	<script src="js/scrolling-nav.js"></script>
<script>

    $(document).ready(function($) {
      $("#owl-example").owlCarousel();
    });

    $("body").data("page", "frontpage");

$("#owl-example").owlCarousel({ 
        items:3,   
/*        itemsDesktop : [1199,3],
        itemsDesktopSmall : [980,9],
        itemsTablet: [768,5],
        itemsTabletSmall: false,
        itemsMobile : [479,4]*/
})

    </script>

</body>
</html>