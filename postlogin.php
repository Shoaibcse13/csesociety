<?php
$servername = "localhost";
  $susername = "root";
  $spassword = "sust";
  $dbname = "csesociety";
  $conn = new mysqli($servername, $susername, $spassword, $dbname);
  if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
 
$myusername=$_POST['username']; 
$mypassword=$_POST['password'];
// To protect MySQL injection (more detail about MySQL injection)
// removing whitspace
$myusername = trim($myusername);
$mypassword = trim($mypassword);

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);


$sql="SELECT * FROM admin WHERE username='$myusername' and password='$mypassword'";
 $result = $conn->query($sql);

// Mysql_num_row is counting table row
$count=$result->num_rows;
$conn->close();
if($count>0) {
 
session_start();
$_SESSION['myusername'] = $myusername;
$_SESSION['mypassword'] = $mypassword;
header("location:dashboard.php");
}
else {
echo "Wrong Username or Password";
}
?>