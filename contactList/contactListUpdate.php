<!-- RAMAS, RON PATRICK G. -->

<?php
require "contactDatabase.php";

if (isset($_POST["submit"])) {
	$submit = $_POST["submit"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$contact = $_POST["contact_no"];

	$sql = "UPDATE contacts SET
				first_name = '$fname',
				last_name = '$lname',
				email = '$email',
				contact_number = '$contact'
			WHERE contact_id = '$submit'";

	$conn->query($sql);
}

mysqli_close($conn);
header("Location: contactList.php");
?>