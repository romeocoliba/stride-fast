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
    $name = $_POST['name'];
    $description = $_POST['description'];
    $stars = $_POST['stars'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $size = $_POST['size'];
    $image = $_POST['image'];

    $query = "INSERT INTO products (name, description, stars, price, category, size, image) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ssidsis", $name, $description, $stars, $price, $category, $size, $image);

    if ($stmt->execute()) {
        echo "Product added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>


    <form method="post" action="create.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="description">Description:</label>
        <textarea name="description" required></textarea><br>
        <label for="stars">Stars:</label>
        <input type="number" name="stars" required><br>
        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required><br>
        <label for="category">Category:</label>
        <input type="text" name="category" required><br>
        <label for="size">Size:</label>
        <input type="text" name="size" required><br>
        <label for="image">Image URL:</label>
        <input type="text" name="image" required><br>
        <button type="submit">Add Product</button>
    </form>

</body>

<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 400px;
    }


    label {
        display: block;
        margin-bottom: 8px;
        color: #555;
    }

    input,
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    button {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #45a049;
    }
</style>

</html>
