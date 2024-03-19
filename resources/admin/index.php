<?php
session_start();

if (!isset($_SESSION['admin_user'])) {
      echo '<script>window.location.href = "../open/login.html";</script>';
    exit();
}
?>
<?php
$conn = new mysqli("localhost", "root", "", "stride");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT id, username, password, role FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
            if ($row['role'] == 'admin') {
                  echo '<script>window.location.href = "../admin/index.php";</script>';
            } else {
                  echo '<script>alert("Role error!");</script>';
            }
      
    } else {
      echo '<script>alert("Incorrect password!");</script>';
    }
} else {
      echo '<script>alert("User not found!");</script>';
}

$conn->close();
?>