<?php
session_start();

if (!isset($_SESSION['admin_user'])) {
    echo '<script>window.location.href = "../open/login.html";</script>';
    exit();
}
?>
<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $query = "DELETE FROM products WHERE id=?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Product deleted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$mysqli->close();

header("Location: read.php");
?>
