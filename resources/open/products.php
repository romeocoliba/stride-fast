<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/200fead19d.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../../style/img/favicon.svg">
    <link rel="stylesheet" href="style/navigation.css">
    <link rel="stylesheet" href="style/loader.css">
    <link rel="stylesheet" href="style/products.css">
    <title>Products</title>
</head>
<body>
    
    
    
    <nav>
    <div class="navContainer">
        <div class="left">
            <a href="../../index.html"><img src="../../style/img/light-logo.svg" alt="Stride LOGO" class="navLogo"></a>
        </div>

        <div class="center">
            <ul class="pages">
                <li><a href="products.php">Products</a></li>
                <li><a href="aboutUs.html">About us</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contacts.html">Contacts</a></li>
            </ul>
        </div>

        <div class="right">
            <a href="../../RO/index.html"><h3>RO</h3></a>
            <a href="login.html"><i class="fa-regular fa-user" style="color: #ECF6FF;"></i></a>
        </div>
        <div class="burger-menu" onclick="dropdown()">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    </nav>

    <div class="drop-down inactive" id="drop-down">
            <ul class="drop-down-links">
                <li><a href="products.php">Products</a></li>
                <li><a href="aboutUs.html">About us</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                <li><a href="../../RO/index.html"><h3>RO</h3></a></li>
                <li><a href="login.html"><i class="fa-regular fa-user" style="color: #ECF6FF;"></i></a></li>
            </ul>
    </div>

    <a href="cart.html">
    <div class="cart">
        
        <div class="qty" id="qty">0</div>
        <i class="fa-solid fa-cart-shopping fa-xl" style="color: #ffffff;"></i>
    </div>
</a>

    
    <section class="hero-text">

        <div class="container">
            <h1>Products</h1>
            <h3>Choose what your heart desires!</h3>

        </div>
        
    </section>


    <section class="productsSection">
        <div class="container">
            <div id="product-list">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stride";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $products = $result->fetch_all(MYSQLI_ASSOC);

    $startIndex = 0;
    $endIndex = count($products);

    for ($i = $startIndex; $i < $endIndex; $i++) {
        $product = $products[$i];

        echo '<div class="product-card">';
        echo '<a onclick="dynamicPage(' . $product['id'] . ')" href="product.html"><img src="' . $product['image'] . '" alt="' . $product['name'] . '" /></a>';
        echo '<h2>' . $product['name'] . '</h2>';
        echo '<div id="stars-container' . $i . '">';
        $indexStars = $product['stars'];
        $antiIndex = 5 - $indexStars;

        for ($j = 0; $j < $indexStars; $j++) {
            echo '<i class="fa-solid fa-star"></i>';
        }
        for ($j = 0; $j < $antiIndex; $j++) {
            echo '<i class="fa-regular fa-star"></i>';
        }
        echo '</div>';
        echo '<p>€' . $product['price'] . '</p>';
        echo '<div class="buttons">';
        echo '<button onclick="buyNow(' . $product['id'] . ')">Buy Now</button>';
        echo '<button onclick="addToCart(' . $product['id'] . ')">Add to Cart</button>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo 'No products found';
}

$conn->close();
?>

            </div>
        </div>
    </section>




    <footer>
        <div class="links">
            <div class="left">
                <div class="footerLogo">
                    <a href="../../index.html"><img src="../../style/img/light-logo.svg" alt="Stride LOGO" class="footerLogo"></a>
                </div>
                <div class="column">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="aboutUs.html">About us</a></li>
                        <li><a href="blog.html">Blog</a></li>
                    </ul>
                </div>
                <div class="column">
                    <ul>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="">Terms and Conditions</a></li>
                        <li><a href="">Private policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <div class="socials">
                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook fa-xl"style="color: #ECF6FF;"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-xl"style="color: #ECF6FF;"></i></a>
                    <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube fa-xl"style="color: #ECF6FF;"></i></a>
                </div>
                <div class="copyright">
                    <p>@2023 - stride. All rights reserved</p>
                </div>
            </div>
        </div>
        <div class="label">
            <p class="romeo">Created by Romeo.</p>
        </div>
    </footer>

    <script src="../../resources/js/responive.js"></script>
    
    
</body>
</html>