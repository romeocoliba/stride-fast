-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 07:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stride`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `stars` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `stars`, `price`, `category`, `size`, `image`) VALUES
(3, 'Converse Chuck Taylor All Star', 'The Converse Chuck Taylor All Star is an iconic sneaker that never goes out of style. It features a canvas upper and a rubber sole for durability. Available in various colors.', 4, '59.99', 'women', '35,36,37,38,39', '../../style/img/products/image3.jpg'),
(4, 'Puma Suede Classic', 'The Puma Suede Classic is a timeless shoe that offers a retro look and superior comfort. It features a suede upper and a rubber outsole for excellent traction.', 4, '79.99', 'men', '40,41,42,43,44', '../../style/img/products/image4.jpg'),
(5, 'Reebok Classic Leather', 'The Reebok Classic Leather is an iconic sneaker that combines style and functionality. It features a soft leather upper and a cushioned midsole for all-day comfort.', 4, '89.99', 'women', '36,37,38,39,40', '../../style/img/products/image5.jpg'),
(6, 'New Balance 574', 'The New Balance 574 is a versatile sneaker that offers a perfect blend of style and comfort. It features a suede and mesh upper and an ENCAP midsole for superior support.', 4, '89.99', 'men', '40,41,42,43,44', '../../style/img/products/image6.jpg'),
(7, 'Vans Authentic', 'The Vans Authentic is a classic skate shoe known for its simplicity and durability. It features a canvas upper and a vulcanized rubber outsole for enhanced grip.', 4, '49.99', 'men', '41,42,43,44,45', '../../style/img/products/image7.jpg'),
(8, 'Nike Roshe One', 'The Nike Roshe One is a lightweight and breathable shoe designed for everyday comfort. It features a mesh upper and a cushioned Phylon midsole for a responsive feel.', 4, '79.99', 'women', '36,37,38,39,40', '../../style/img/products/image8.jpg'),
(9, 'Adidas Superstar', 'The Adidas Superstar is a classic sneaker that has been a symbol of street style for decades. It features a leather upper and the iconic shell toe design.', 5, '89.99', 'men', '40,41,42,43,44', '../../style/img/products/image9.jpg'),
(10, 'Converse Jack Purcell', 'The Converse Jack Purcell is a timeless shoe known for its clean and minimalist design. It features a canvas upper and a signature smiley face on the toe cap.', 4, '69.99', 'women', '35,36,37,38,39', '../../style/img/products/image10.jpg'),
(11, 'Puma Clyde Court', 'The Puma Clyde Court is a performance basketball shoe that offers exceptional on-court performance. It features a lightweight upper and responsive cushioning.', 5, '129.99', 'men', '40,41,42,43,44', '../../style/img/products/image11.jpg'),
(12, 'Reebok Club C 85', 'The Reebok Club C 85 is a classic tennis shoe that exudes retro style. It features a soft leather upper and a cushioned midsole for comfort and support.', 4, '79.99', 'women', '36,37,38,39,40', '../../style/img/products/image12.jpg'),
(13, 'New Balance 997', 'The New Balance 997 is a premium lifestyle sneaker that offers a perfect combination of style and craftsmanship. It features a suede and mesh upper and an ENCAP midsole.', 5, '149.99', 'men', '40,41,42,43,44', '../../style/img/products/image13.jpg'),
(14, 'Vans Slip-On', 'The Vans Slip-On is a classic skate shoe that provides an effortless style and comfort. It features a canvas upper and elastic side accents for easy on and off.', 4, '54.99', 'men', '41,42,43,44,45', '../../style/img/products/image14.jpg'),
(15, 'Nike Air Force 1', 'The Nike Air Force 1 is an iconic basketball shoe that has become a streetwear staple. It features a leather upper and a full-length Nike Air unit for superior cushioning.', 5, '109.99', 'women', '36,37,38,39,40', '../../style/img/products/image15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `role`) VALUES
(1, 'user', '$2y$10$1c8YHC1qICptCGeHQRqJZ.9yZr2X5YOt//eRvfZL9EnphwbMnTeOu', 'user'),
(2, 'romeo', '$2y$10$7WbyozETQ.WNgdtIO/llzOU7OmkbVrq/RIdy9R5qlA3V5RWoeKrlW', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
