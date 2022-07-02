<?php
    $firstname = $_POST['firstname'];
	  $lastname = $_POST['lastname'];
	  $email = $_POST['email'];
	  $mobile = $_POST['mobile'];
    $text = $_POST['text'];

	// Database connection
	$conn = new mysqli('localhost','root','','message');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
		$sql="INSERT INTO msg(FirstName, LastName, Email, Mobile, Message) VALUES('$firstname','$lastname','$email','$mobile','$text')";
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