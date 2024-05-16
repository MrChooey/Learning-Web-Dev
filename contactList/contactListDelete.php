<!-- RAMAS, RON PATRICK G. -->

<?php
require "contactDatabase.php";

if (isset($_POST["submit"])) {
	$submit = $_POST["submit"];
	$sql = "DELETE FROM contacts WHERE contact_id = '$submit'";

	mysqli_query($conn, $sql);
}

mysqli_close($conn);
header("Location: contactList.php");
?>