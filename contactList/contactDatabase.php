<!-- RAMAS, RON PATRICK G. -->

<?php
	$db_server = "localhost";
	$db_username = "root";
	$db_password = "";
	$db_name = "contactList";

	try {
		$conn = new mysqli($db_server, $db_username, $db_password, $db_name);
	}
	catch (mysqli_sql_exception) {
		echo "Connection failed";
	}

	


?>