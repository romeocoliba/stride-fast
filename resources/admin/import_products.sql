
CREATE TABLE products (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    description TEXT,
    stars INT,
    price DECIMAL(10, 2),
    category VARCHAR(50),
    size VARCHAR(255),
    image VARCHAR(255)
);

INSERT INTO products (id, name, description, stars, price, category, size, image) VALUES
(1, 'Nike Air Max 90', 'The Nike Air Max 90 is a classic shoe that offers comfort and style. It features a durable upper and a cushioned midsole for maximum support. Perfect for everyday wear.', 4, 99.99, 'men', '41,42,43,44,45', '../../style/img/products/image1.jpg'),
(2, 'Adidas Ultraboost', 'The Adidas Ultraboost is a popular running shoe known for its responsive cushioning and lightweight design. It provides excellent energy return and support during workouts.', 5, 129.99, 'men', '40,41,42,43,44', '../../style/img/products/image2.jpg'),
(3, 'Converse Chuck Taylor All Star', 'The Converse Chuck Taylor All Star is an iconic sneaker that never goes out of style. It features a canvas upper and a rubber sole for durability. Available in various colors.', 4, 59.99, 'women', '35,36,37,38,39', '../../style/img/products/image3.jpg'),
(4, 'Puma Suede Classic', 'The Puma Suede Classic is a timeless shoe that offers a retro look and superior comfort. It features a suede upper and a rubber outsole for excellent traction.', 4, 79.99, 'men', '40,41,42,43,44', '../../style/img/products/image4.jpg'),
(5, 'Reebok Classic Leather', 'The Reebok Classic Leather is an iconic sneaker that combines style and functionality. It features a soft leather upper and a cushioned midsole for all-day comfort.', 4, 89.99, 'women', '36,37,38,39,40', '../../style/img/products/image5.jpg'),
(6, 'New Balance 574', 'The New Balance 574 is a versatile sneaker that offers a perfect blend of style and comfort. It features a suede and mesh upper and an ENCAP midsole for superior support.', 4, 89.99, 'men', '40,41,42,43,44', '../../style/img/products/image6.jpg'),
(7, 'Vans Authentic', 'The Vans Authentic is a classic skate shoe known for its simplicity and durability. It features a canvas upper and a vulcanized rubber outsole for enhanced grip.', 4, 49.99, 'men', '41,42,43,44,45', '../../style/img/products/image7.jpg'),
(8, 'Nike Roshe One', 'The Nike Roshe One is a lightweight and breathable shoe designed for everyday comfort. It features a mesh upper and a cushioned Phylon midsole for a responsive feel.', 4, 79.99, 'women', '36,37,38,39,40', '../../style/img/products/image8.jpg'),
(9, 'Adidas Superstar', 'The Adidas Superstar is a classic sneaker that has been a symbol of street style for decades. It features a leather upper and the iconic shell toe design.', 5, 89.99, 'men', '40,41,42,43,44', '../../style/img/products/image9.jpg'),
(10, 'Converse Jack Purcell', 'The Converse Jack Purcell is a timeless shoe known for its clean and minimalist design. It features a canvas upper and a signature smiley face on the toe cap.', 4, 69.99, 'women', '35,36,37,38,39', '../../style/img/products/image10.jpg'),
(11, 'Puma Clyde Court', 'The Puma Clyde Court is a performance basketball shoe that offers exceptional on-court performance. It features a lightweight upper and responsive cushioning.', 5, 129.99, 'men', '40,41,42,43,44', '../../style/img/products/image11.jpg'),
(12, 'Reebok Club C 85', 'The Reebok Club C 85 is a classic tennis shoe that exudes retro style. It features a soft leather upper and a cushioned midsole for comfort and support.', 4, 79.99, 'women', '36,37,38,39,40', '../../style/img/products/image12.jpg'),
(13, 'New Balance 997', 'The New Balance 997 is a premium lifestyle sneaker that offers a perfect combination of style and craftsmanship. It features a suede and mesh upper and an ENCAP midsole.', 5, 149.99, 'men', '40,41,42,43,44', '../../style/img/products/image13.jpg'),
(14, 'Vans Slip-On', 'The Vans Slip-On is a classic skate shoe that provides an effortless style and comfort. It features a canvas upper and elastic side accents for easy on and off.', 4, 54.99, 'men', '41,42,43,44,45', '../../style/img/products/image14.jpg'),
(15, 'Nike Air Force 1', 'The Nike Air Force 1 is an iconic basketball shoe that has become a streetwear staple. It features a leather upper and a full-length Nike Air unit for superior cushioning.', 5, 109.99, 'women', '36,37,38,39,40', '../../style/img/products/image15.jpg');
