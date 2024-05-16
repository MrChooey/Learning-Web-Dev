<!-- RAMAS, RON PATRICK G. -->

<?php
require "contactDatabase.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="contactList.css">
	<title>Contact List</title>
	<script src="contactList.js" defer></script>
</head>
<body>
	<h1>Contacts Management System</h1>
	<div class="container">
		<form class="contact-list" action="contactListHandler.php" method="POST">
			<?php if (!empty($_SESSION["message"])): ?>
				<p><?php echo $_SESSION["message"]; ?></p>
				<?php unset($_SESSION["message"]); ?>
			<?php endif; ?>
			<div class="container-grid">
				<input type="text" name="fname" placeholder="First Name" required>
				<input type="text" name="lname" placeholder="Last Name" required>
				<input type="email" name="email" placeholder="Email Address" required>
				<input type="text" name="contact-no" placeholder="Contact Number" required>
			</div>
			<div class="container">
				<button type="submit" name="submit" value="true">Add Contact</button>
			</div>
		</form>
	</div>

	<div class="container" id="table">
		<table class="contact-list2">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email Address</th>
				<th>Contact Number</th>
				<th>Edit</th>
			</tr>
			<?php $result = $conn->query("SELECT * FROM contacts"); ?>

			<?php if ($result->num_rows > 0): ?>
				<?php while ($row = $result->fetch_assoc()): ?>
					<?php if (isset($_POST["submit"]) && $row["contact_id"] === $_POST["submit"]) :?>
						<tr>
							<form action="contactListUpdate.php" method="POST" >
								<td><input placeholder="First Name" name="fname" required type="text" value="<?php echo $row["first_name"]; ?>"/></td>
								<td><input placeholder="Last Name" name="lname" required type="text" value="<?php echo $row["last_name"]; ?>"/></td>
								<td><input placeholder="Email Address" name="email" required type="email" value="<?php echo $row["email"]; ?>"/></td>
								<td><input placeholder="Contact Number" name="contact_no" required type="text" value="<?php echo $row["contact_number"]; ?>"/></td>
								<td>
									<button name="submit" value="<?php echo $row["contact_id"]; ?>">Update</button>
									<form action="contactListDelete.php" method="POST">
										<button name="submit" value="<?php echo $row["contact_id"]; ?>">Delete</button>
									</form>
								</td>
							</form>
						</tr>
					<?php else: ?>
						<tr>
							<td><?php echo $row["first_name"]; ?></td>
							<td><?php echo $row["last_name"]; ?></td>
							<td><?php echo $row["email"]; ?></td>
							<td class="contact-number">
								<?php echo $row["contact_number"]; ?>
							</td>
							<td>
								<form action="contactList.php" method="POST" >
									<button name="submit" value="<?php echo $row["contact_id"]; ?>">Edit</button>
								</form>
								<form action="contactListDelete.php" method="POST">
									<button name="submit" value="<?php echo $row["contact_id"]; ?>">Delete</button>
								</form>
							</td>
						</tr>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</table>
	</div>
</body>
</html>

<?php mysqli_close($conn); ?>