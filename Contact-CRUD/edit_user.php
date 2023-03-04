<?php

class UserCRUD {
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

    public function getUserById($userId) {
        $sql = "SELECT * FROM aplikimi WHERE User_ID='$userId'";
        $result = $this->conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            return false;
        }
    }

    public function updateUser($userId, $emri, $numriPersonal, $email, $departamenti) {
        $sql = "UPDATE aplikimi SET Emri='$emri', NumriPersonal='$numriPersonal', Email='$email', Departamenti='$departamenti' WHERE User_ID='$userId'";

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

$userCRUD = new UserCRUD();

if (isset($_POST['edit'])) {
    $userId = $_POST['User_ID'];
    $user = $userCRUD->getUserById($userId);

    if ($user) {
        $Emri = $user['Emri'];
        $NumriPersonal = $user['NumriPersonal'];
        $Email = $user['Email'];
        $Departamenti = $user['Departamenti'];
    } else {
        echo "User not found.";
    }
} elseif (isset($_POST['save'])) {
    $userId = $_POST['User_ID'];
    $Emri = $_POST['Emri'];
    $NumriPersonal = $_POST['NumriPersonal'];
    $Email = $_POST['Email'];
    $Departamenti = $_POST['Departamenti'];

    if ($userCRUD->updateUser($userId, $Emri, $NumriPersonal, $Email, $Departamenti)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    header("Location: crud-dashboard.php");
    exit();
}

$userCRUD->closeConnection();

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="edit.css">
	<title>Edit User</title>
</head>
<body>
	<h2>Edit User</h2>
	<form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="hidden" name="User_ID" value="<?php echo isset($userId) ? $userId : ''; ?>">
    <label for="Emri">Emri:</label><br>
    <input type="text" name="Emri" value="<?php echo isset($Emri) ? $Emri : ''; ?>"><br>
    <label for="NumriPersonal">Numri Personal:</label><br>
    <input type="text" name="NumriPersonal" value="<?php echo isset($NumriPersonal) ? $NumriPersonal : ''; ?>"><br>
    <label for="Email">Email:</label><br>
    <input type="text" name="Email" value="<?php echo isset($Email) ? $Email : ''; ?>"><br>
    <label for="Departamenti">Departamenti:</label><br>
    <input type="text" name="Departamenti" value="<?php echo isset($Departamenti) ? $Departamenti : ''; ?>"><br><br>
    <?php if (isset($userId)) { ?>
        <input type="submit" class="editButton" name="save" value="Save">
    <?php } else { ?>
        <input type="submit" name="edit" value="Edit">
    <?php } ?>
</form>
</body>
</html>
