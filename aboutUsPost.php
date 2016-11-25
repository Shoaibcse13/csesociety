<?php
$servername = "localhost";
  $susername = "root";
  $spassword = "sust";
  $dbname = "csesociety";
  $conn = new mysqli($servername, $susername, $spassword, $dbname);
  if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);  
  }

$description=$_POST['description']; 
$id=$_POST['id'];

$sql = "UPDATE aboutus SET description = '$description' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Your Data has been updated Succesfully";
       // header('Location: index.php');
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        $message = "Something went wrong . query failed";
        echo $message;
        //header('Location: index.php?meg='.$message);
    }

$conn->close();

?>