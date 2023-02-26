<?php
class Register {
  private $conn;

  function __construct($host, $user, $password, $database) {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $name = "user";
    $this->conn = mysqli_connect($host, $user, $password, $database);

    if (!$this->conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
  }

  function __destruct() {
    mysqli_close($this->conn);
  }

  public function validateForm($Emri, $NumriPersonal, $Email, $Departamenti) {
    $errors = array();

    if (count($errors) === 0) {

      $sql = "SELECT * FROM useri WHERE Email='$Email'";
      $result = mysqli_query($this->conn, $sql);
        $sql = "INSERT INTO aplikimi (Emri, NumriPersonal, Email, Departamenti) VALUES ('$Emri', '$NumriPersonal', '$Email', '$Departamenti')";
        $result = mysqli_query($this->conn, $sql);

        if ($result) {
          $success_msg = "Ju aplikuat me sukses!";
        } else {
          $error_msg = "Error: " . mysqli_error($this->conn);
        }
      

    } else {
      $error_msg = "";
      foreach ($errors as $key => $value) {
        $error_msg .= $value . '<br>';
      }
    }

    if (isset($success_msg)) {
      echo "<script type='text/javascript'>alert('$success_msg'); window.location.href='contact.php';</script>";
    }

    if (isset($error_msg)) {
      echo "<script type='text/javascript'>alert('$error_msg'); window.location.href='contact.php';</script>";
    }
  }
}

$register = new Register("localhost", "root", "", "user");

if (isset($_POST['register'])) {
  $Emri = $_POST['Emri'];
  $NumriPersonal = $_POST['NumriPersonal'];
  $Email = $_POST['Email'];
  $Departamenti = $_POST['Departamenti'];

  $register->validateForm($Emri, $NumriPersonal, $Email, $Departamenti);
}
?>

<?php if (isset($success_msg)): ?>
	<script type="text/javascript">window.location.href='contact.php';
		alert("<?php echo $success_msg; ?>");
	</script>
<?php endif; ?>

<?php if (isset($error_msg)): ?>
	<script type="text/javascript">window.location.href='contact.php';
		alert("<?php echo $error_msg; ?>");
	</script>
<?php endif; ?>
