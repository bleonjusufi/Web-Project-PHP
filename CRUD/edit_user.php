<?php

class Database {
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "user";
	private $conn;

	public function __construct() {
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		}
	}

	public function getUserByID($id) {
		$sql = "SELECT * FROM useri WHERE User_ID='$id'";
		$result = $this->conn->query($sql);

		if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			return $row;
		} else {
			return false;
		}
	}

	public function updateUser($id, $username, $email, $password) {
		$sql = "UPDATE useri SET Username='$username', Email='$email', Password='$password' WHERE User_ID='$id'";

		if ($this->conn->query($sql) === TRUE) {
			return true;
		} else {
			return false;
		}
	}

	public function closeConnection() {
		$this->conn->close();
	}
}

if (isset($_POST['edit'])) {
	$db = new Database();
	$User_ID = $_POST['User_ID'];
	$user = $db->getUserByID($User_ID);

	if ($user) {
		$Username = $user['Username'];
		$Email = $user['Email'];
		$Password = $user['Password'];
	} else {
		echo "User not found.";
	}

	$db->closeConnection();
} elseif (isset($_POST['save'])) {
	$db = new Database();
	$User_ID = $_POST['User_ID'];
	$Username = $_POST['Username'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];

	if ($db->updateUser($User_ID, $Username, $Email, $Password)) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $conn->error;
	}

	$db->closeConnection();

	header("Location: crud.php");
	exit();
}

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
