<?php
require '../login.php';

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
<h2>Create Application</h2>
<form class = "form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label>Emri:</label>
    <input type="text" name="Emri" autocomplete="off"><br><br>
    <label>Numri Personal:</label>
    <input type="text" name="NumriPersonal" autocomplete="off"><br><br>
    <label>Email:</label>
    <input type="email" name="Email" autocomplete="off"><br><br>
    <label>Departamenti:</label>
    <input type="text" name="Departamenti" autocomplete="off"><br><br>
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
	  
		  // Create MySQL database connection
		  $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
	  
		  // Check MySQL database connection
		  if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		  }
		}
	  
		public function registerUser() {
		  // Check if the form was submitted
		  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  
			// Retrieve form data and escape special characters
			$Emri = mysqli_real_escape_string($this->conn, $_POST["Emri"]);
			$NumriPersonal = mysqli_real_escape_string($this->conn, $_POST["NumriPersonal"]);
			$Email = mysqli_real_escape_string($this->conn, $_POST["Email"]);
			$Departamenti = mysqli_real_escape_string($this->conn, $_POST["Departamenti"]);
	  
			// Check if user with same email already exists
			$sql = "SELECT * FROM aplikimi WHERE Email='$Email'";
			$result = $this->conn->query($sql);
			if ($result->num_rows > 0) {
			  echo "User with this email already exists";
			} else {
				// Insert user data into MySQL database
				$sql = "INSERT INTO aplikimi (Emri, NumriPersonal, Email, Departamenti) VALUES ('$Emri', '$NumriPersonal', '$Email', '$Departamenti')";
				if ($this->conn->query($sql) === TRUE) {
				  echo "New user created successfully";
				} else {
				  echo "Error: " . $sql . "<br>" . $this->conn->error;
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
			<th>Emri</th>
			<th>Numri Personal</th>
			<th>Email</th>
			<th>Departamenti</th>
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
              $sql = "SELECT * FROM aplikimi";
              $result = $this->conn->query($sql);
          
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["User_ID"]. "</td><td>" . $row["Emri"]. "</td><td>" . $row["NumriPersonal"]. "</td><td>" . $row["Email"]. "</td><td>" . $row["Departamenti"]. "</td></tr>";
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