<?php
$servername = "localhost";
  $susername = "root";
  $spassword = "";
  $dbname = "csesociety";
  $conn = new mysqli($servername, $susername, $spassword, $dbname);
  if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }

$name=$_POST['name']; 
$univ_name=$_POST['univ_name'];
$dept_name=$_POST['dept_name']; 
$session=$_POST['session'];
$data  =  array(
			'name' => $name,
			'univ_name' => $univ_name,
			'dept_name' => 	$dept_name,
			'session' => $session
			);
// var_dump($data);

$sql = "INSERT INTO committee (name, univ_name, dept_name, session)
VALUES ('$name', '$univ_name', '$dept_name', '$session')";

if ($conn->query($sql) === TRUE) {
    echo "Added successfully";
    header('location:admin_commitee.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>