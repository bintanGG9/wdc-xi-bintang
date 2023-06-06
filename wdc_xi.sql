-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 11:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdc_xi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities`
--

CREATE TABLE `tbl_activities` (
  `id` int(10) NOT NULL,
  `come` varchar(150) NOT NULL,
  `home` varchar(150) NOT NULL,
  `activities` varchar(1000) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_activities`
--

INSERT INTO `tbl_activities` (`id`, `come`, `home`, `activities`, `date`) VALUES
(9, '08:30', '06:07', 'Final', '2022-09-12'),
(10, '08:31', '18:02', 'Input content Univ pertamina, Make admin guidelines Leafy bali', '2022-09-13'),
(11, '08:25', '18:02', 'Make admin guidelines (Leafy bali)', '2022-09-14'),
(13, '09:09', '19:09', 'make admin', '2023-06-01'),
(15, '09:09', '18:01', 'Final test leafy bali ', '2023-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `cpassword`) VALUES
('bintangg', 'bintangg@gmail.com', 'bintangg', 'bintangg'),
('superadmin', 'gajah@gmail.com', '17c4520f6cfd1ab53d8745e84681eb49', ''),
('superadmin', 'superadmin@gmail.com', '17c4520f6cfd1ab53d8745e84681eb49', ''),
('admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', ''),
('nasywababi', 'pineappleajg@gmail.com', 'a5ea6108b9ba2d58195924c9ec08abec', ''),
('lea', 'lea@gmail.com', '907b61f7f79b9e1081271ed673ed5139', ''),
('piggy', 'piggy@gmail.com', '9731e89f01c1fb943cf0baa6772d2875', ''),
('rpl1', 'rpl1@gmail.com', 'f433bf7abde397dc33e205e5a445fbf7', ''),
('kucing', 'kucing@gmail.com', 'b65845fca59b323bd285bdcada3454c8', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_activities`
--
ALTER TABLE `tbl_activities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_activities`
--
ALTER TABLE `tbl_activities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
