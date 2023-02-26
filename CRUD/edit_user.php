<?php
// Create MySQL database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check MySQL database connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['edit'])) {
	$User_ID = $_POST['User_ID'];
	$sql = "SELECT * FROM useri WHERE User_ID='$User_ID'";
	$result = $conn->query($sql);

	if ($result->num_rows == 1) {
		$row = $result->fetch_assoc();
		$Username = $row['Username'];
		$Email = $row['Email'];
		$Password = $row['Password'];
	} else {
		echo "User not found.";
	}
} elseif (isset($_POST['save'])) {
	$User_ID = $_POST['User_ID'];
	$Username = $_POST['Username'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];

	$sql = "UPDATE useri SET Username='$Username', Email='$Email', Password='$Password' WHERE User_ID='$User_ID'";

	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $conn->error;
	}

	header("Location: crud.php");
	exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="edit.css">
<head>
	<title>Edit User</title>
</head>
<body>
	<h2>Edit User</h2>
	<form method="post" class="form">
		<input type="hidden" name="User_ID" value="<?php echo $User_ID ?>">
		<label>Username:</label><br>
		<input type="text" name="Username" value="<?php echo $Username ?>"><br>
		<label>Email:</label><br>
		<input type="text" name="Email" value="<?php echo $Email ?>"><br>
		<label>Password:</label><br>
		<input type="text" name="Password" value="<?php echo $Password ?>"><br><br>
		<input class="editButton" type="submit" name="save" value="Save">
	</form>
</body>
</html>
