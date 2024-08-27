-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 09, 2024 at 03:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_gallery_cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin2', '1c6637a8f2e1f75e06ff9984894d6bd16a3a36a9'),
(2, 'admin3', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(3, 'admin4', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pid`, `name`, `price`, `quantity`, `image`) VALUES
(6, 4, 3, 'Thilapiya Rice & Curry', 700, 1, 'thilapiya.png');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(1, 11, 'Dinaji Imesha', 'dinajirajapaksha08@gmail.com', '12', 'hii ');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` date NOT NULL DEFAULT current_timestamp(),
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(1, 3, 'Mendis', '0123456789', 'mendis@gmail.com', 'cash on delivery', '729, /6, wehera,  kurunegala, Sri Lanka - 6000', 'Cheese Chicken Kottu (1200 x 2) - Thilapiya Rice & Curry (700 x 1) - ', 3100, '2024-07-26', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `image`) VALUES
(2, 'Cheese Chicken Kottu', 'sri lankan', 1200, 'Cheese-Kottu.jpg'),
(3, 'Thilapiya Rice & Curry', 'sri lankan', 700, 'thilapiya.png'),
(4, 'KiriBath', 'Sri Lankan', 60, 'kiribath.png'),
(5, 'String Hoppers & Curry', 'Sri Lankan', 120, 'string hoppers.png'),
(6, 'Spaghetti Bolognese', 'Italian', 1200, 'Spaghetti Bolognese.png'),
(7, 'Lasagna', 'Italian', 800, 'Lasagna.png'),
(8, 'Tagliatelle al Ragù', 'Italian', 1100, 'Tagliatelle al Ragù.png'),
(9, 'Calamari Fritti', 'Italian', 1800, 'Calamari Fritti.png'),
(10, 'Panettone ', 'Dessert', 600, 'Panettone.png'),
(11, 'Kung Pao Chicken ', 'Chinese', 2400, 'Kung Pao Chicken for 4 persons.png'),
(12, 'Beef and Mushroom Stir Fry', 'Chinese', 1500, 'Beef and Mushroom Stir Fry.png'),
(13, 'Dumplings', 'Chinese', 1000, 'Dumplings.png'),
(14, 'Chinese spring rolls', 'Dessert', 750, 'Chinese spring rolls.png'),
(15, 'Roast Chicken \r\n', 'Special', 2000, 'home-img-3.png'),
(16, 'chezzy hamburger ', 'Special', 1800, 'home-img-2.png'),
(17, 'Orange Juice', 'beverage', 500, 'drink-1.png'),
(18, 'Chocolate Coffe', 'beverage', 650, 'drink-2.png'),
(19, 'Lemon Mohitho', 'beverage', 800, 'drink-3.png'),
(20, 'Stoberry Juice', 'beverage', 700, 'drink-4.png');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `password`) VALUES
(3, 'staff1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(4, 'staff2', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Table structure for table `table_reservation`
--

CREATE TABLE `table_reservation` (
  `id` int(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(12) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_time` time(6) NOT NULL,
  `guests` int(20) NOT NULL,
  `parking` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_reservation`
--

INSERT INTO `table_reservation` (`id`, `full_name`, `email`, `phone`, `reservation_date`, `reservation_time`, `guests`, `parking`) VALUES
(29, 'induwara', 'induwaramendis419@gmail.com', 779426462, '2024-07-30', '10:24:00.000000', 1, 'No'),
(30, 'induwara', 'induwaramendis419@gmail.com', 779426462, '2024-07-30', '10:24:00.000000', 1, 'No'),
(31, 'induwara', 'induwaramendis419@gmail.com', 779426462, '2024-07-31', '10:40:00.000000', 1, 'Yes'),
(32, 'induwara', 'induwaramendis419@gmail.com', 779426462, '2024-07-31', '10:40:00.000000', 1, 'Yes'),
(33, 'induwara', 'induwaramendis419@gmail.com', 779426462, '2024-07-31', '10:40:00.000000', 1, 'Yes'),
(37, 'induwara', 'induwaramendis419@gmail.com', 779426462, '2024-08-09', '14:39:00.000000', 5, 'Yes'),
(38, 'induwara', 'induwaramendis419@gmail.com', 779426462, '2024-08-05', '18:00:00.000000', 4, 'Yes'),
(39, 'induwara', 'kavishkasupunpathiraja@gmail.com', 767430989, '2024-08-22', '17:48:00.000000', 5, 'Yes'),
(40, 'induwara', 'kavishkasupunpathiraja@gmail.com', 767430989, '2024-08-22', '17:48:00.000000', 5, 'Yes'),
(41, 'Dinaji Imesha', 'dinajirajapaksha08@gmail.com', 789476193, '2024-08-06', '14:50:00.000000', 2, 'Yes'),
(42, 'induwara jayanga', 'induwaramendis419@gmail.com', 779426462, '2024-08-09', '13:42:00.000000', 1, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `password`, `address`) VALUES
(2, 'dsdf', 'menda@gmail.com', '1234567890', '$2y$10$MaRTIjko6ITVBUNk1fJ/guj4IOk/NNa.arzG363ZmLx', ''),
(3, 'Mendis', 'mendis@gmail.com', '0123456789', '310b86e0b62b828562fc91c7be5380a992b2786a', '729, /6, wehera,  kurunegala, Sri Lanka - 6000'),
(4, 'shadow', 'shadow@gmail.com', '7894561230', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '6, 60, ghfh,  fghg, gh - 6000'),
(6, 'indu', 'indu@gmail.com', '7794264620', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(7, 'tutu', 'tutu@gmail.com', '9638521230', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(8, 'Testuser', 'Testuser@gmail.com', '8527419630', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(9, 'nnn', 'nnn@gmail.com', '7315946258', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(10, 'kavishka', 'kavishkasupunpathiraja@gmail.com', '0767430989', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(11, 'Dinaji Imesha', 'dinajirajapaksha08@gmail.com', '0767791525', '618dcdfb0cd9ae4481164961c4796dd8e3930c8d', ''),
(13, 'induwara jayanga', 'induwaramendis419@gmail.com', '0779426462', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '729, 60, wehera,  kurunegala, Sri Lanka - 6000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_reservation`
--
ALTER TABLE `table_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_reservation`
--
ALTER TABLE `table_reservation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
