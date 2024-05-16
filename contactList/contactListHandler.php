<!-- RAMAS, RON PATRICK G. -->

<?php
require "contactDatabase.php";
session_start();

if (isset($_POST["submit"])) {
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$contact_no = $_POST["contact-no"];

	$sql = "INSERT INTO contacts (first_name, last_name, email, contact_number) 
			VALUES ('$fname', '$lname', '$email', '$contact_no')";

	if ($conn->query($sql) === true) {
		$_SESSION["message"] = "Contact added successfully!";
	} else {
		$_SESSION["message"] = "Could not add contact!";
	}
}

mysqli_close($conn);
header("Location: contactList.php");
?>