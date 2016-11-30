<?php
$servername = "localhost";
  $susername = "root";
  $spassword = "sust";
  $dbname = "csesociety";
  $conn = new mysqli($servername, $susername, $spassword, $dbname);
  if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
$path = '';
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    header('location:dashboard.php');
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $path = "uploads/".basename($_FILES["fileToUpload"]["name"]);
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



$name=$_POST['name']; 
$univ_name=$_POST['univ_name'];
$dept_name=$_POST['dept_name']; 
$session=$_POST['session'];
$data  =  array(
			'name' => $name,
			'univ_name' => $univ_name,
			'dept_name' => 	$dept_name,
			'session' => $session, 
      'img_url' => $path,
			);
// var_dump($data);
// dd($data);

$sql = "INSERT INTO committee (name, univ_name, dept_name, session, img_url)
VALUES ('$name', '$univ_name', '$dept_name', '$session', '$path')";

if ($conn->query($sql) === TRUE) {
    echo "Added successfully";
    header('location:dashboard.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>