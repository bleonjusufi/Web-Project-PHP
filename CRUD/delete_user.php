<?php
class Database {
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

        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function deleteRecord($User_ID) {
        $sql = "DELETE FROM useri WHERE User_ID='$User_ID'";

        if ($this->conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $this->conn->error;
        }

        header("Location: crud.php");
        exit();
    }

    public function __destruct() {
        $this->conn->close();
    }
}

if (isset($_GET['id'])) {
    $User_ID = $_GET['id'];

    $db = new Database("localhost", "root", "", "user");
    $db->deleteRecord($User_ID);
}
?>
