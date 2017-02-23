-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2017 at 05:14 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `number_of_installment` int(11) NOT NULL,
  `inserted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `total_amount`, `number_of_installment`, `inserted_at`) VALUES
(1, 'Platinum', 5000000, 24, '2017-02-23 15:41:15'),
(2, 'Gold', 10000000, 36, '2017-02-23 15:41:15'),
(3, 'Diamond', 20000000, 60, '2017-02-23 15:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `property_id` int(11) NOT NULL,
  `image_location` varchar(100) NOT NULL,
  `priority` int(11) NOT NULL,
  `inserted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `name`, `property_id`, `image_location`, `priority`, `inserted_at`) VALUES
(1, 'Photo 1', 0, '1.png', 1, '2017-02-23 15:18:28'),
(2, 'Photo 2', 0, '2.jpg', 2, '2017-02-23 15:18:28'),
(3, 'Photo 3', 0, '3.jpg', 3, '2017-02-23 15:19:10'),
(4, 'Photo 4', 0, '4.jpg', 4, '2017-02-23 15:19:10'),
(5, 'Photo 5', 0, '5.jpg', 5, '2017-02-23 15:19:51'),
(6, 'Photo 6', 0, '6.jpg', 7, '2017-02-23 15:19:51'),
(7, 'Photo 7', 0, '7.jpg', 6, '2017-02-23 15:20:28'),
(8, 'Photo  8', 0, '8.jpg', 8, '2017-02-23 15:20:28'),
(9, 'Photo  9', 0, '9.jpg', 9, '2017-02-23 15:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `price` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `installment_id` int(11) NOT NULL,
  `inserted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `name`, `location`, `size`, `details`, `price`, `category`, `status`, `installment_id`, `inserted_at`, `updated_at`) VALUES
(1, 'The Emporium', 'Dhaka	, 14/1, Mirpur Road, Shyamoli', '599 sft - 1693sft (Com)', 'Live a colorful life in an exclusive community of your own at the Emporium – a stylish product in our Classic Collection. Rich in aesthetic appeal and contemporary style, The Emporium is uniquely designed to cater to your stylish lifestyle. Thirty-eight homes from the 7th floor onwards are perfected in comfort, functionality and style. With access to an exquisitely manicured rooftop to provide you with the ultimate relaxing retreat, you will find yourself in a home that is a haven, while at the same time enabling you to connect with the vivacious life of Dhaka. - See more at: http://www.btibd.com/property/the-emporium/#sthash.FqZSK2qY.dpuf', 5500000, 1, 0, 0, '2017-02-23 14:18:35', '0000-00-00 00:00:00'),
(2, 'bti Landmark', 'Gulshan Avenue, Dhaka', '733 sft - 10500 sft', 'The architecture of bti Landmark has been derived primarily from its vantage location. Being one of the larger buildings on a 30 katha plot of land, located on the burgeoning and posh Gulshan Avenue - See more at: http://www.btibd.com/commercial/#sthash.XJmqdmXT.dpuf', 5800000, 2, 0, 0, '2017-02-23 14:21:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `image_location` varchar(100) NOT NULL,
  `priority` int(11) NOT NULL,
  `inserted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
