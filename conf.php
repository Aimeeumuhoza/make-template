<?php
$name = $_POST['name'];
$email= $_POST['email'];
$age= $_POST['age'];

// Create connection
$conn = new mysqli('localhost', 'root', '','make');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    $sql = "INSERT INTO `form` (`id`, `name`, `email`, `age`) VALUES ('0', '$name', '$email', '$age')";

// insert in database 
$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

}
?>