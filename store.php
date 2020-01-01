<?php 
$name = $_POST['name'];
$email = $_POST['email'];

$conn = mysqli_connect('localhost','root','','cued');
$sql= "INSERT INTO users VALUES(NULL,'$name','$email',NULL,12345678,NULL,NULL,NULL)";
if(mysqli_query($conn,$sql)){
	header("Location:index.php");
}

else{
	echo "Not Done";
}



?>