<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "crud";

$con = mysqli_connect($server, $user, $password, $db);

if ($con == true) {
	?>
	<script>
		alert('Connection Successful!');
	</script>
	<?php
} else {
	?>
	<script>
		alert('No connection!!');
	</script>
	<?php
}

?>