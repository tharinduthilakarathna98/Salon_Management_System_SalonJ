-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 01:45 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon_j`
--

-- --------------------------------------------------------

--
-- Table structure for table `beautician_data`
--

CREATE TABLE `beautician_data` (
  `BID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `address` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beautician_data`
--

INSERT INTO `beautician_data` (`BID`, `name`, `age`, `email`, `contact`, `address`) VALUES
(1, 'Jenny Fernando', 25, 'jenny.salonj@gmail.com', 712548710, 'No:07,School Lane,Kaluthara'),
(2, 'Ann Perera', 23, 'ann.salonj@gmail.com', 784567891, 'No:05, Waliwita road, Malabe');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `Services` varchar(150) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `Services`, `date`) VALUES
(11, 'haricutting,.hairdressing,facial,massage,tattoo,shaving,', '2021-05-18'),
(12, 'shaving,', '2021-05-27'),
(37, 'haricutting,.hairdressing,', '2021-05-26'),
(38, 'massage,tattoo,', '2021-05-26'),
(40, 'haricutting,.hairdressing,facial,', '2021-05-10'),
(41, 'massage,tattoo,shaving,', '2021-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `PhoneNo` varchar(12) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`FirstName`, `LastName`, `Email`, `PhoneNo`, `Message`) VALUES
('sadisha', 'samarasinghe', 'it20605902@my.sliit.lk', '+94702449678', 'qweqweq'),
('Sadisha', 'samarasinghe', 'lksadish@gmail.com', '0702449678', 'qwedq'),
('SADISH', 'DILMIN', 'malaka@gmail.com', '0776752435', 'shagvdsahjfvsdhfhbsdhfbbhdsbfhmbdsfmhbsdmbvhbvbjbdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `FirstName` varchar(10) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `DOB` varchar(12) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `PhoneNo` varchar(12) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `CareerPath` enum('Hair Cutter','Massage Therapist','Beautician') NOT NULL,
  `experience` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`FirstName`, `LastName`, `Address`, `DOB`, `Email`, `PhoneNo`, `NIC`, `CareerPath`, `experience`) VALUES
('Sadisha Sa', 'Try', '89/1,Makandana,madapatha', '1123/31/23', 'it20605902@my.sliit.lk', '+94702449678', '20001564567', 'Hair Cutter', 'Yes'),
('asdasd', 'asdfadsfsdfg', '34/1,awsfdihja,asas', '2000/12/23', 'dish@gmail.com', '0712345678', '200077765456', 'Hair Cutter', 'Yes'),
('dfsdfs', 'fgdgdxggf', '77/1maharagama', '2000/04/20', 'lksadish@gmail.com', '0724356464', '3999945495', 'Hair Cutter', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `method` enum('paypal','credit') NOT NULL,
  `cardholder` varchar(40) NOT NULL,
  `validthru` varchar(10) NOT NULL,
  `cvv` int(11) NOT NULL,
  `cardno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`method`, `cardholder`, `validthru`, `cvv`, `cardno`) VALUES
('', 'Sadisha dilmin samarasinghe', '12/11', 2345, '12345678'),
('', 'sadish', '12/12', 1234, '1234567899'),
('', 'kakaka', '12/14', 3333, '666666666666');

-- --------------------------------------------------------

--
-- Table structure for table `propic`
--

CREATE TABLE `propic` (
  `id` int(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `propic`
--

INSERT INTO `propic` (`id`, `img`) VALUES
(1, 'uploads/'),
(2, 'uploads/'),
(3, 'uploads/image1.jpeg'),
(4, 'src/uploads/image1.jpeg'),
(26, 'uploads/PicsArt_05-23-02.56.49.jpg'),
(27, 'uploads/PicsArt_05-23-02.56.49.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `salonproduct`
--

CREATE TABLE `salonproduct` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salonproduct`
--

INSERT INTO `salonproduct` (`id`, `description`, `image`, `price`) VALUES
(1, 'Tea Tree Essential Oil', '1.png', 910),
(2, 'Lavender Essential Oil', '2.png', 1000),
(3, 'Peppermint Essential Oil', '3.png', 1300),
(4, 'Roushun Essential Oils - 30ml Bottle', '4.png', 700),
(5, 'Milk & Honey Gold nourishing Hand & Body Cream', '5.png', 910),
(6, 'NOVAGE Ecollagen Wrinkle Power Night Cream', '6.png', 1600),
(7, 'Diamond Cellular Anti-Ageing Cream 13659', '7.png', 1300),
(8, 'OPTIMALS Age Revive Anti-Ageing Night Cream', '8.png', 700),
(9, 'Even Out Preventing Day Cream SPF 20', '9.png', 1500),
(10, 'NOVAGE Men Intense Anti-Ageing Face Gel Lotion 33201', '10.png', 700),
(11, 'ORIFLAME_Tender Care Protecting Balm_1276 (Face ,Lips,Baby Rashes)', '11.png', 910),
(12, 'Hair Coconut Oil', '12.png', 1900),
(13, 'OnColuor Cream Lipstick - Oriflame', '13.png', 1000),
(14, 'Giordani Gold Original Eau de Parfum', '14.png', 700);

-- --------------------------------------------------------

--
-- Table structure for table `userregis`
--

CREATE TABLE `userregis` (
  `regid` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userregis`
--

INSERT INTO `userregis` (`regid`, `fname`, `lname`, `dob`, `email`, `phone`, `gender`, `address`, `password`) VALUES
(27, 'Sadisha', 'samarasinghe', '', 'lksadish@gmail.com', '0702449678', 'male', '89/1,Makandana,madapatha', '1234567888'),
(35, 'malaka', 'sandaruwan', '2021-05-19', 'lksadish@gmail.com', '0783456745', 'male', '78/1,kalubowila,nugegoda', '1234567899');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beautician_data`
--
ALTER TABLE `beautician_data`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`NIC`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`cardno`);

--
-- Indexes for table `propic`
--
ALTER TABLE `propic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salonproduct`
--
ALTER TABLE `salonproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregis`
--
ALTER TABLE `userregis`
  ADD PRIMARY KEY (`regid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beautician_data`
--
ALTER TABLE `beautician_data`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `propic`
--
ALTER TABLE `propic`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `salonproduct`
--
ALTER TABLE `salonproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `userregis`
--
ALTER TABLE `userregis`
  MODIFY `regid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
