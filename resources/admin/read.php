<?php
session_start();

if (!isset($_SESSION['admin_user'])) {
    echo '<script>window.location.href = "../open/login.html";</script>';
    exit();
}
?>
<?php
require_once 'config.php';

$query = "SELECT * FROM products";
$result = $mysqli->query($query);

$products = array();

while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    
    <style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        height: 100vh;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    img {
        max-width: 100px;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    form {
        display: inline-block;
        margin-right: 5px;
    }

    button {
        background-color: #4caf50;
        color: #fff;
        padding: 8px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        width: 80px;
    }

    button:hover {
        background-color: #45a049;
    }

    a {
        text-decoration: none;
    }

    .remove {
        background-color: red;
    }

    .remove:hover {
        background-color: #600a0a;
    }

    .remove-form {
        margin: 0 auto;
        padding-bottom: 10px;
    }

    .top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 80%;
        margin: 0 auto;
        height: 100px;
    }

    .top>a>button {
        width: 100px;
    }

    .add {
        width: auto;
    }

</style>

</head>
<body>

    <div class="top">

    <h2>Welcome, <?php echo $_SESSION['admin_user']; ?>!</h2>

    <div class="buttons">

    <a  href="create.php" >
            <button class = "add">Add product</button>
        </a>

        <a href="logout.php">
            <button  class="remove">Log out</button>
        </a>

    </div>
    </div>
    

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Stars</th>
                <th>Price</th>
                <th>Category</th>
                <th>Size</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['description']; ?></td>
                    <td><?php echo $product['stars']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $product['category']; ?></td>
                    <td><?php echo $product['size']; ?></td>
                    <td><img src="<?php echo $product['image']; ?>" alt="Product Image" style="max-width: 100px;"></td>
                    <td>
                        <form method="post" class="remove-form" action="delete.php">
                              <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                              <button type="submit" class="remove" onclick="return confirm('Are you sure you want to remove this product?')">Remove</button>
                        </form>
                        <a  href="update.php?id=<?php echo $product['id']; ?>">
                              <button>Update</button>
                        </a>
                        
                       </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
