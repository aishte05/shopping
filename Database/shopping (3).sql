-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 04:20 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2017-01-24 16:21:18', '24-11-2019 10:09:40 AM');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(1, 'Ace & Tate', 'Ace & Tate offers products (such as handcrafted sunglasses, prescription lenses and gift cards) and services (such as online eye-tests and virtual try-ons), together the â€œProductsâ€. ', '2019-12-10 01:45:13', '10-12-2019 10:39:51 AM'),
(2, 'Rayban', 'Ray-Ban is an American-founded Italian brand of luxury sunglasses and eyeglasses created in 1936 by the American company Bausch & Lomb.', '2019-12-10 01:47:46', '10-12-2019 09:54:59 AM'),
(3, 'Cubitts', 'Completely unique and handmade by our master craftsmen using traditional spectacle making skills. Available in over 175 colours.', '2019-12-10 03:00:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderId` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productreviews`
--

CREATE TABLE `productreviews` (
  `id` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `review` longtext DEFAULT NULL,
  `reviewDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productCompany` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productPriceBeforeDiscount` int(11) DEFAULT NULL,
  `productDescription` longtext DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `shippingCharge` int(11) DEFAULT NULL,
  `productAvailability` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `subCategory`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productDescription`, `productImage1`, `productImage2`, `productImage3`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`) VALUES
(1, 1, 1, 'Heather Smoke', 'Ace & Tate', 5488, 7000, 'A bold and outspoken frame, Heather is ridiculously stylish and self-assured.', 'Heather-Smoke-45.jpg', 'Heather-Smoke-front.jpg', 'Heather-Smoke-profile.jpg', 1000, 'In Stock', '2019-12-10 01:45:50', NULL),
(2, 2, 2, 'Aviator Classic', 'Rayban', 1000, 8000, 'Model code: RB3025 001/58 58-14\r\n\r\nCurrently one of the most iconic sunglass models in the world, Ray-Ban Aviator Classic sunglasses were originally designed for U.S. aviators in 1937. Aviator Classic sunglasses are a timeless model that combines great aviator styling with exceptional quality, performance and comfort.', '805289602057_shad_al2.jpg', '805289602057_shad_fr.jpg', '805289602057_shad_qt.jpg', 1000, 'In Stock', '2019-12-10 01:50:10', NULL),
(3, 2, 2, 'Round Metal', 'Rayban', 7800, 10000, 'Model code: RB3447 001 50-21\r\n\r\nThe Ray-Ban Â® Round Metal sunglasses are totally retro. This look has been worn by legendary musicians and inspired by the 1960s counter-culture when this style first originated.The Ray-Ban unisex metal, iconic sunglasses are known for their defined round crystal lenses and distinct shape. A curved brow bar, adjustable nose pads, and thin metal temples with plastic end tips rest comfortably behind the ears.', '805289439899_shad_al2.jpg', '805289439899_shad_fr.jpg', 'l_ced52a0b8fe2f5038bdf2b6d87914cd6.jpg', 1000, 'In Stock', '2019-12-10 02:12:43', NULL),
(4, 2, 2, 'NEW WAYFARER CLASSIC', 'Rayban', 7300, 8000, 'Model code: RB2132 901 55-18\r\n\r\nGo back to where it all began with Ray-Ban New Wayfarer Classic sunglasses. Using the same iconic shape as the classic Wayfarer, these sunglasses offer an updated version that includes a smaller frame and slightly softer eye shape.', '805289052418_shad_al2.jpg', '805289052418_shad_fr.jpg', '805289052418_shad_qt.jpg', 1000, 'In Stock', '2019-12-10 02:16:39', NULL),
(5, 2, 2, 'CLUBMASTER METAL', 'Rayban', 8313, 9000, 'Model code: RB3716 186/R5 51-21\r\n\r\nClassics feel new forever and the Clubmaster is no exception. An update to the retro icon, it offers a sleek, contemporary look and fresh all-metal frames with matte or shiny black, shiny havana, or white finishes. The timeless shades come in green, blue, or gradient lenses, making them the perfect pair for trendsetters of all ages.', '8053672867060_shad_al2.jpg', '8053672867060_shad_fr.jpg', '8053672867060_shad_qt.jpg', 1000, 'In Stock', '2019-12-10 02:19:25', NULL),
(6, 2, 2, 'JUSTIN CLASSIC', 'Rayban', 7293, 10000, 'Model code: RB4165 601/8G 55-16\r\n\r\nRay-Ban Justin sunglasses may just be one of the coolest looks in the Ray-Ban collection. Inspired by the iconic Wayfarer sunglasses, this style has been redesigned with slightly larger rectangle lenses, fresh new frame colors, stunning colored lenses and a rubberized frame finish to really give it that extra edge. Justin RB4165 sunglasses are bold, fun and unforgettable. These sunglasses come in traditional frame colors such as black, grey, brown and tortoise, as well as some total statement-making colors such as red, violet, blue, fuchsia, turquoise and matte blue. Add some edge to your style with these durable and unmistakable, iconic sunglasses.', '805289526575_shad_al2.jpg', '805289526575_shad_fr.jpg', '805289526575_shad_qt.jpg', 1000, 'In Stock', '2019-12-10 02:22:35', NULL),
(7, 2, 3, 'CLUBMASTER OPTICS', 'Rayban', 9078, 11000, 'Model code: RB5154 2000 49-21\r\n\r\nRay-Ban Clubmaster eyeglasses are retro and timeless. Inspired by the 50â€™s, the unmistakable design of the Clubmaster Optics is worn by cultural intellectuals, those who lead the changed tomorrow.', '805289270102_shad_al2.jpg', 'l_ced52a0b8fe2f5038bdf2b6d87914cd6.jpg', '805289270102_shad_qt.jpg', 1000, 'In Stock', '2019-12-10 02:28:31', NULL),
(8, 2, 3, 'ROUND METAL OPTICS', 'Rayban', 8568, 9000, 'Model code: RB3447V 2945 50-21\r\n\r\nThe Ray-BanÂ® Round Metal eyeglasses are totally retro. This look has been worn by legendary musicians and inspired by the 1960s counter-culture when this style first originated.The Ray-Ban unisex metal, iconic eyeglasses are known for their defined round distinct shape. A curved brow bar, adjustable nose pads, and thin metal temples with plastic end tips rest comfortably behind the ears.', '8053672875256_shad_al2.jpg', '8053672875256_shad_fr.jpg', '8053672875256_shad_qt.jpg', 1000, 'In Stock', '2019-12-10 02:33:28', NULL),
(9, 1, 1, 'Quentin', 'Ace & Tate', 8288, 10000, 'Can you picture yourself in the summer somewhere in Greece, drinking a Campari cocktail, soaking up the sun, wet hair combed back? Then Quentin needs you â€“ and you need Quentin.', 'Quentin-Soft_breeze-45.jpg', 'Quentin-Soft_breeze-front.jpg', 'Quentin-Soft_breeze-profile.jpg', 1000, 'In Stock', '2019-12-10 02:47:20', NULL),
(10, 1, 1, 'Zack', 'Ace & Tate', 5488, 6000, 'Elevated aviator style frame with a built-in attitude.', 'Quentin-Soft_breeze-45.jpg', 'Quentin-Soft_breeze-front.jpg', 'Quentin-Soft_breeze-profile.jpg', 1000, 'In Stock', '2019-12-10 02:49:57', NULL),
(11, 1, 1, 'Capri', 'Ace & Tate', 5488, 7000, 'The beauty of the nouvelle vague, smartly updated in a range of acetates. Catlike eyeline and angled wings bring glamour to the beach.', 'Capri-Into_the_groove-45.jpg', 'Capri-Into_the_groove-front.jpg', 'Capri-Into_the_groove-profile.jpg', 1000, 'In Stock', '2019-12-10 02:51:26', NULL),
(12, 1, 4, 'Neil', 'Ace & Tate', 5488, 7000, 'Ah, Neil, what a champ. Loved by many, our first metal frame is a real classic, in the purest sense of the word. Youâ€™ll want to hold on to this one for years to come.', 'NEIL-SATIN-GOLD-45.jpg', 'NEIL-SATIN-GOLD-FRONT.jpg', 'NEIL-SATIN-GOLD-PROFILE.jpg', 1000, 'In Stock', '2019-12-10 02:53:21', NULL),
(13, 1, 4, 'Pierce', 'Ace & Tate', 5488, 7000, 'A cutting-edge, sophisticated style, the Pierce is gently rounded with a trimmed-down top. Quirky but classic; businesslike but attractive: the Pierce is eminently wearable.', 'PIERCE-CHAMPAGNE-45.jpg', 'PIERCE-CHAMPAGNE-FRONT.jpg', 'PIERCE-CHAMPAGNE-PROFILE.jpg', 1000, 'In Stock', '2019-12-10 02:54:59', NULL),
(14, 1, 4, 'Damien', 'Ace & Tate', 5488, 8000, 'Damien is a sophisticated frame with timeless style and an understated charm.', 'DAMIEN-TIGER-WOOD-45.jpg', 'DAMIEN-TIGER-WOOD-FRONT.jpg', 'DAMIEN-TIGER-WOOD-PROFILE.jpg', 1000, 'In Stock', '2019-12-10 02:56:11', NULL),
(15, 1, 4, 'Morris', 'Ace & Tate', 5488, 9000, 'Curved metal temples punctuate Morrisâ€™s eloquent lines. Elegant, lightweight, never sedate.', 'Morris-Hunter-green-45.jpg', 'Morris-Hunter-green-Front.jpg', 'Morris-Hunter-green-profile.jpg', 1000, 'In Stock', '2019-12-10 02:57:22', NULL),
(16, 3, 5, 'HERBRAND', 'Cubitts', 8250, 10000, 'Herbrandâ€™s circular lens shape is ideal for offsetting angular face types. The Herbrand features a keyhole bridge, sitting on the sides of the upper nose, making it suited to people with flatter nose bridges.', '5fe5a2c728dabc328ea7208567a3.jpeg', 'bdcd559d96215db7570dbe5312ca.jpeg', 'a6ac0d47d9c79aee25b62245e54d.jpeg', 1000, 'In Stock', '2019-12-10 03:04:41', NULL),
(17, 3, 5, 'MATILDA', 'Cubitts', 8250, 10000, 'An oversized, upswept frame, Matilda features a saddle bridge and hockey end temples with rounded tips. With thicker rims and a shape reminiscent of the Sixties.', '668d22b6d603b4a47f8db9a8b2ba.jpeg', '990f7af013c2145d3c696cce0092.jpeg', 'f2512ce8561f7f6150762cbda305.jpeg', 1000, 'In Stock', '2019-12-10 03:06:43', NULL),
(18, 3, 5, 'JUDD', 'Cubitts', 8250, 11000, 'A larger, boxy statement frame, ideal for a wider head (although narrower than Calthorpe Large).', '3da0ddbbfd773cfd177131027508.jpeg', '8b38a96c9f862e3cf5c9ea5840b8.jpeg', '66287d471080fa69634b6b9dfaad.jpeg', 1000, 'In Stock', '2019-12-10 03:08:44', NULL),
(19, 3, 5, 'HEATHCOTE', 'Cubitts', 8250, 10000, 'Heathcote is a square shape with a flatter brow-line. The frame features a keyhole bridge and hockey end temples.', 'a54e8d474c2d8090dcd3cfd98cd4.jpeg', 'd85e589ed95d94fb888ad2d1df20.jpeg', 'c5dd14f4f81599386c109cb29144.jpeg', 1000, 'In Stock', '2019-12-10 03:10:38', NULL),
(20, 3, 6, 'FLAXMAN', 'Cubitts', 8250, 9000, 'Flaxman features a universally wearable panto lens shape in an acetate rim, with a mechanically riveted bridge and slender acetate sleeve temples.', '919005cbd92fe6121bca569bd4f9.jpeg', 'ca1a9f55752cbd7b7e42aa354482.jpeg', 'ed6c80fe0bfbc8894caafc6b0ad8.jpeg', 1000, 'In Stock', '2019-12-10 03:14:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(1, 1, 'Sun Glasses', '2019-12-10 01:45:19', '10-12-2019 10:40:19 AM'),
(2, 2, 'Sun Glasses', '2019-12-10 01:47:57', '10-12-2019 09:49:10 AM'),
(3, 2, 'Eye Glasses', '2019-12-10 02:25:20', NULL),
(4, 1, 'Eye Glasses', '2019-12-10 02:51:46', NULL),
(5, 3, 'Sun Glasses', '2019-12-10 03:00:32', NULL),
(6, 3, 'Eye Glasses', '2019-12-10 03:00:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `shippingAddress` longtext DEFAULT NULL,
  `shippingState` varchar(255) DEFAULT NULL,
  `shippingCity` varchar(255) DEFAULT NULL,
  `shippingPincode` int(11) DEFAULT NULL,
  `billingAddress` longtext DEFAULT NULL,
  `billingState` varchar(255) DEFAULT NULL,
  `billingCity` varchar(255) DEFAULT NULL,
  `billingPincode` int(11) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productreviews`
--
ALTER TABLE `productreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `productreviews`
--
ALTER TABLE `productreviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
