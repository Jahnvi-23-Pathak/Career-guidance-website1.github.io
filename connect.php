<?php
  $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','career');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
		$sql="INSERT INTO login(firstname, lastname, email, password) VALUES('$firstname','$lastname','$email','$password')";
    $res=$conn->query($sql);
    if($res)
    {
      echo "added";
    }
    else
    {
      echo "not added";
    }
		$conn->close();
   
?>