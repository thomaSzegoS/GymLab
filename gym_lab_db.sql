-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 12:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_lab_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `creatines`
--

CREATE TABLE `creatines` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Dumping data for table `creatines`
--

INSERT INTO `creatines` (`id`, `title`, `description`, `price`, `image_path`) VALUES
(1, 'BioTech Usa Crea ZERO', 'Multiphase Creatine Drink Powder with Sweetener (320gr)', 17.99, 'img/biotech_creatine.jpg'),
(2, 'Scitec Nutrition Alkaly-X', 'Scitec Nutrition Alkaly-X with Fruit Punch Flavor (660gr)', 36.99, 'img/scitec_creatine.jpg'),
(3, 'IronMaxx Krea7 Superalkaline', 'Buffered Krea7 Formula 1700mg (90 Tabs)', 26.99, 'img/ironmaxx_creatine.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `proteins`
--

CREATE TABLE `proteins` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Dumping data for table `proteins`
--

INSERT INTO `proteins` (`id`, `title`, `description`, `price`, `image_path`) VALUES
(1, 'Optimum Nutrition Whey Gold', 'Whey Gold Optimum Nutrition 99% Protein (2000gr)', 59.99, 'img/gold_whey.png'),
(2, 'Ultra Premium Nutrition Iso Gro Whey', 'Ultra Premium Usn Nutrition Iso Gro Whey (2000gr)', 64.99, 'img/iso_gro_whey.jpg'),
(3, 'BioTech Usa Hydro Whey Zero', 'Protein Drink Powder with Sweeteners (1816gr)', 59.99, 'img/biotech_whey.jpg'),
(4, 'Weider Nutrition Premium Whey', 'Protein with 20% Whey Isolate (2300gr)', 73.99, 'img/weider_whey.jpg'),
(5, 'Scitec Nutrition Whey Isolate', 'Scitec Nutrition 100% Whey Isolate (2000gr) with Shaker', 57.99, 'img/scitec_whey.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `title`, `description`, `price`, `image_path`) VALUES
(1, 'Optimum Nutrition Whey Gold', 'Whey Gold Optimum Nutrition 99% Protein', 59.99, 'img/gold_whey.png'),
(2, 'BioTech Usa Hydro Whey Zero', 'Protein Drink Powder with Sweeteners (1816gr)', 59.99, 'img/biotech_whey.jpg'),
(3, 'BioTech Usa Crea ZERO', 'Multiphase Creatine Drink Powder with Sweetener (320gr)', 17.99, 'img/biotech_creatine.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `steroids`
--

CREATE TABLE `steroids` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Dumping data for table `steroids`
--

INSERT INTO `steroids` (`id`, `title`, `description`, `price`, `image_path`) VALUES
(1, 'D-BOL (Methadrostenol)', 'Methadrostenol Ammount Per Serving 230mg', 79.99, 'img/dianabol_steroid.png'),
(2, 'MASTERBOLAN (Drostanozol) ', 'Muscle Hardener and Strength Increaser (60 capsules)', 79.99, 'img/masterbolan_steroids.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'tomzegos97@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'tomzegos97@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `vitamins`
--

CREATE TABLE `vitamins` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Dumping data for table `vitamins`
--

INSERT INTO `vitamins` (`id`, `title`, `description`, `price`, `image_path`) VALUES
(1, 'Power Health Classics Vitamin B50 ', 'Power Health Classics Platinum Range Vitamin B50 Complex (30 tabs)', 6.65, 'img/b50_vitamin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creatines`
--
ALTER TABLE `creatines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proteins`
--
ALTER TABLE `proteins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `steroids`
--
ALTER TABLE `steroids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vitamins`
--
ALTER TABLE `vitamins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `creatines`
--
ALTER TABLE `creatines`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proteins`
--
ALTER TABLE `proteins`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `steroids`
--
ALTER TABLE `steroids`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vitamins`
--
ALTER TABLE `vitamins`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
