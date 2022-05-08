<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'header.php'; ?>
	<title>Login Page</title>
</head>

<body>
	<main>
		<form name="" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
			<h1>Apply Login Form</h1>
			<input type="text" name="user" id="" placeholder="Full Name" autocomplete="off">
			<br>
			<input type="tel" name="phone" id="" placeholder="Phone" autocomplete="off"> <br>
			<input type="email" name="email" id="" placeholder="email add"><br>
			<textarea id="" cols="30" rows="5" name="message" placeholder="Message"></textarea>
			<input type="submit" value="Register" name="submit">
		</form>

		<?php include 'btns.php' ?>
	</main>
</body>

</html>

<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
 $user = mysqli_real_escape_string($con, $_POST['user']);
 $phone = mysqli_real_escape_string($con, $_POST['phone']);
 $email = mysqli_real_escape_string($con, $_POST['email']);
 $message = mysqli_real_escape_string($con, $_POST['message']);

 $insertQuery = "INSERT INTO register(name, email, phone, message) VALUES ('$user', '$email', '$phone', '$message')";
 $query = mysqli_query($con, $insertQuery);
 if ($query == true) {
	?>
	<script>
		alert('Inserted Successful!');
	</script>
	<?php
} else {
	?>
	<script>
		alert('Error while Inserting data!');
	</script>
	<?php
}
}
?>