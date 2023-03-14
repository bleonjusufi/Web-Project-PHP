<?php
	// require '../login.php';
	session_start();

	if(!(isset($_SESSION))){
        header("Location: ../home.php");
    } else if(!($_SESSION["is_admin"])){
            header("Location: ../home.php");
    }
?>
<!DOCTYPE html>
<html>
	<link rel="stylesheet" href = "style.css">
<head>
	<title>Admin Dashboard</title>
</head>
<body>
	<h1>Admin Dashboard</h1>
	<!-- CREATE -->
<h2>Create User</h2>
<form class = "form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label>Username:</label>
    <input type="text" name="username" autocomplete="off"><br><br>
    <label>Email:</label>
    <input type="email" name="email" autocomplete="off"><br><br>
    <label>Password:</label>
    <input type="password" name="password" autocomplete="off"><br><br>
    <input class="createButton" type="submit" name="submit" value="Create">
</form>
<?php
	class UserRegistration {
		private $servername;
		private $username;
		private $password;
		private $dbname;
		private $conn;
	  
		public function __construct($servername, $username, $password, $dbname) {
		  $this->servername = $servername;
		  $this->username = $username;
		  $this->password = $password;
		  $this->dbname = $dbname;
	  
		  $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
	  
		  if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		  }
		}
	  
		public function registerUser() {
		  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  
			$username = mysqli_real_escape_string($this->conn, $_POST["username"]);
			$email = mysqli_real_escape_string($this->conn, $_POST["email"]);
			$password = mysqli_real_escape_string($this->conn, $_POST["password"]);
	  
			$sql = "SELECT * FROM useri WHERE Email='$email'";
			$result = $this->conn->query($sql);
			if ($result->num_rows > 0) {
			  echo "User with this email already exists";
			} else {
			  if (strlen($password) < 6) {
				echo "Password must be at least 6 characters long";
			  } else {
				$sql = "INSERT INTO useri (Username, Email, Password) VALUES ('$username', '$email', '$password')";
				if ($this->conn->query($sql) === TRUE) {
				  echo "New user created successfully";
				} else {
				  echo "Error: " . $sql . "<br>" . $this->conn->error;
				}
			  }
			}
		  }
		}
	  
		public function __destruct() {
		  $this->conn->close();
		}
	  }
	  
	  $userRegistration = new UserRegistration("localhost", "root", "", "user");
	  $userRegistration->registerUser();
	  
	?>
	<!-- READ -->
	<h2>Users</h2>
	<table>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
        class UserDatabase {
            private $servername;
            private $username;
            private $password;
            private $dbname;
            private $conn;
          
            public function __construct($servername, $username, $password, $dbname) {
              $this->servername = $servername;
              $this->username = $username;
              $this->password = $password;
              $this->dbname = $dbname;
            }
          
            public function connect() {
              $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
          
              if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
              }
            }
          
            public function getUsers() {
              $sql = "SELECT * FROM useri";
              $result = $this->conn->query($sql);
          
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo "<tr><td>" . $row["User_ID"]. "</td><td>" . $row["Username"]. "</td><td>" . $row["Email"]. "</td><td>" . $row["Password"]. "</td>";
                  echo "<td><form action='edit_user.php' method='post'><input type='hidden' name='User_ID' value='" . $row["User_ID"] . "'><input type='submit' class = 'editButton' name='edit' value='Edit'></form></td>";
				  echo "<td><a style='color:red;' href='delete_user.php?id=" . $row["User_ID"] . "'>Delete</a></td></tr>";                
				}
              } else {
                echo "<tr><td colspan='6'>0 results</td></tr>";
              }
            }
          
            public function closeConnection() {
              $this->conn->close();
            }
          }
          
          $userDatabase = new UserDatabase("localhost", "root", "", "user");
          
          $userDatabase->connect();
          
          $userDatabase->getUsers();
          
          $userDatabase->closeConnection();
        ?>
	</table>

</body>
</html>