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
	<center>
		<form action="aboutUs.php" method="POST">
			 <!-- First name:<br>
			<input type="text" name="firstname">
			<br>
			Last name:<br>
			<input type="text" name="lastname">
			<br> -->
			<input type="hidden" name="id" value="<?php  echo $id; ?>">
			<br>
			<textarea name="description" value="<?php  echo $description; ?>"  rows="10" cols="80" required><?php  echo $description; ?></textarea>
			<br>
			<input type="submit" value="Submit">
		
			
		</form>
	</center>
</body>
</html>