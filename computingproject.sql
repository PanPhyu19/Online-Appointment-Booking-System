-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 05:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computingproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointmentid` int(11) NOT NULL,
  `appointmenthours` varchar(250) DEFAULT NULL,
  `appointmentdays` varchar(250) DEFAULT NULL,
  `doctorid` int(11) DEFAULT NULL,
  `patientid` int(11) DEFAULT NULL,
  `treatmentid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentid`, `appointmenthours`, `appointmentdays`, `doctorid`, `patientid`, `treatmentid`) VALUES
(2, '9:00-11:00', 'Monday', 1, 1, 1),
(3, '9:00-11:00', 'Monday', 1, 1, 1),
(4, '9:00-11:00', 'Monday', 1, 1, 1),
(5, '9:00-11:00', 'Tuesday', 2, 1, 1),
(6, '9:00-11:00', 'Monday', 2, 1, 1),
(8, '7:00-10:00', 'Wednesday', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branchid` int(11) NOT NULL,
  `branchname` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phno` varchar(20) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchid`, `branchname`, `email`, `phno`, `address`) VALUES
(1, 'Canberra Branch', 'magnoliacanberra@gmail.com', '+613-12345', 'No.8, Parkes Way, Canberra, Australia'),
(2, 'Sydney Branch', 'magnoliasydney@gmail.com', '+613-54321', 'No.3, Perry Street, Sydney, NSW, Australia'),
(3, 'Melbourne Branch', 'magnoliamelbourne@gmail.com', '+613-98765', 'No.12, Exhibition street, Melbourne, Vic, Australia');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` text NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `deliveryid` int(11) NOT NULL,
  `flat` varchar(100) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL,
  `orderid` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`deliveryid`, `flat`, `street`, `city`, `state`, `country`, `pincode`, `orderid`) VALUES
(1, 'fdd', 'dfd', 'dfd', 'dfs', 'dfs', 'dfs', 3),
(2, 'dfd', 'dfs', 'adfs', 'dsa', 'sfsa', 'adfsa', 4),
(3, '2423423', 'dfeff', 'canberra', 'act', 'australia', '12345', 5),
(4, 'dfd', 'dfd', 'dfd', 'dfddf', 'dfd', 'dfd', 6),
(5, '2423423', '2323', 'erer', 'dfdfcds', 'australia', '12345', 7),
(6, '2423423', 'dfeff', 'dfd', 'dfd', 'australia', '12345', 8),
(7, 'dfd', 'dfdsdfd', 'dfds', 'dfs', 'australia', '12345', 9),
(8, 'dfd', 'dfd', 'dfd', 'dfd', 'dfd', '112', 10),
(9, 'fdd', 'dffd', 'dfef', 'dfs', 'edfere', '12345', 11);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctorid` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phno` varchar(20) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `branchid` int(11) DEFAULT NULL,
  `doctorimage` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctorid`, `firstname`, `surname`, `email`, `phno`, `address`, `password`, `role`, `branchid`, `doctorimage`) VALUES
(1, 'Mark', '', 'mark@gmail.com', '091234', 'Sydney, Australia', '$2y$10$EE/6Tu4s5tvLh/aN.KbPGOEC/LWYemw767jSOcDcXIoScU1RHl1O.', 'resident doctor', 2, 'images/__dermatologist1.jpg'),
(2, 'Richard', '', 'richard@gmail.com', '89789', 'Sydney, Australia', '$2y$10$TYwobsda3qErEJao3QWYt.hXm8cX/t2RMttDrE4GvvvAgQKW7VKyC', 'dermatologist', 2, 'images/_doctor5.jpg'),
(3, 'Michael', '', 'michael@gmail.com', '1234', 'Melbourne', '$2y$10$oDug1dowYUex5XmqWcijuOE4A7avsTxSsSCkujbfDIhChEW3RkqN.', 'resident doctor', 3, 'images/_doctor6.jpg'),
(4, 'Ella', '', 'ella@gmail.com', '89076', 'Sydney, Australia', '$2y$10$9LmfpbpJp6Ekf0s2czj8v.Uo74VT..cmOm1vJKLEHuUUZRKESM.rq', 'resident doctor', 3, 'images/_doctor8.jpg'),
(5, 'Caroline', '', 'caroline@gmail.com', '19890', 'khkjkj', '$2y$10$aHUmttXWcHoZEpL0099M/exjCutugcGmzfB/PV2OM8ofvXwAscn2e', 'dermatologist', 1, 'images/_doctor4.jpg'),
(6, 'Tiana', '', 't.ana@gmail.com', '89989', 'Canberra', '$2y$10$3aZa0IGff9TbDk.aV77V9OmvniEXu1pSCqZm9F6Z5A8hXX9puqCbm', 'resident doctor', 1, 'images/_doctor 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageid`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Gaiam Premium 2 color yoga mat', 'phwhiteflower175@gmail.com', 'jakjkoj', 'jioih');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderid` int(20) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderid`, `productid`, `quantity`, `total_amount`) VALUES
(8, 6, NULL, NULL),
(9, 7, 1, NULL),
(11, 5, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(20) NOT NULL,
  `orderdate` date DEFAULT current_timestamp(),
  `email` varchar(50) DEFAULT NULL,
  `phno` varchar(20) DEFAULT NULL,
  `patientid` int(11) DEFAULT NULL,
  `paymentmethod` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `orderdate`, `email`, `phno`, `patientid`, `paymentmethod`) VALUES
(1, '2022-08-09', 'ph@gmail.com', '90883', 1, 'cash on delivery'),
(2, '2022-08-09', 'ph@gmail.com', '8334', 1, 'cash on delivery'),
(3, '2022-08-09', 'ph@gmail.com', '8948504', 1, 'cash on delivery'),
(4, '2022-08-09', 'ph@gmail.com', '89994', 1, 'cash on delivery'),
(5, '2022-08-09', 'ph@gmail.com', '0912345', 1, 'credit cart'),
(6, '2022-08-09', 'ph@gmail.com', '98908', 1, 'credit cart'),
(7, '2022-08-09', 'ph@gmail.com', '789898', 1, 'cash on delivery'),
(8, '2022-08-09', 'ph@gmail.com', '98977', 1, 'cash on delivery'),
(9, '2022-08-09', 'ph@gmail.com', '7899', 1, 'cash on delivery'),
(10, '2022-08-09', 'ph@gmail.com', '7989898', 1, 'cash on delivery'),
(11, '2022-08-09', 'ph@gmail.com', '23232', 1, 'cash on delivery');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patientid` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phno` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `medicalhistory` varchar(150) DEFAULT NULL,
  `drughistory` varchar(150) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientid`, `firstname`, `surname`, `email`, `phno`, `gender`, `DOB`, `medicalhistory`, `drughistory`, `address`, `password`) VALUES
(1, 'Pan', 'Phyu', 'ph@gmail.com', '611678', 'Female', '0000-00-00', '-', 'No known drug allergy', 'No.1, Market street, Sydney, NSW', '$2y$10$IFw1kj5jfi8FAdKtbzOiNu2zg0goQKZjB9K2RIa.R9cAIxqP3lj9a'),
(2, 'Jennifer', 'Blaze', 'jennifer@gmail.com', '6198675', 'Female', '0000-00-00', 'Hypertension', 'Amlodipine 5mg', 'No.2, Market street,Sydney, NSW', '$2y$10$IFw1kj5jfi8FAdKtbzOiNu2zg0goQKZjB9K2RIa.R9cAIxqP3lj9a'),
(5, 'user', '', 'user90@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$0ZEM9Jmpre808CUGEfoWcOqvVaRpbW6HX5G8MzqvpgeeeInR4UwWu');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productid` int(11) NOT NULL,
  `productname` varchar(150) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `category` varchar(150) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `expireddate` date DEFAULT NULL,
  `productimage` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `productname`, `description`, `category`, `price`, `quantity`, `expireddate`, `productimage`) VALUES
(3, 'Serum', 'hydrates, softens and rejuvenates skin.', 'skincare', 69, 100, '2024-02-04', 'images/_serumskincare.jpg'),
(4, 'Essence', 'For your best skin, use this essence that softens texture, evens out skin tone, boosts radiance, and lessens the appearance of dark spots and fine wri', 'skincare', 30, 100, '2024-08-19', 'images/_serum.jpg'),
(5, 'Vitamin C essence', 'This enhances the clarity of your skin to the next level.', 'skincare', 69, 100, '2023-08-19', 'images/_vitamin-c-skin.jpg'),
(6, 'Clay mask', 'minimizes the appearance of dark spots and fine wrinkles, improves brightness, evens up skin tone, and softens texture for your finest skin ever.', 'skincare', 99, 100, '2024-09-27', 'images/_2317487.jpg'),
(7, 'Ampoule', 'supercharged to give the appearance of larger, younger eyes.', 'skincare', 160, 100, '2023-09-19', 'images/_pinkserum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phno` varchar(20) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `branchid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `firstname`, `surname`, `email`, `phno`, `address`, `password`, `branchid`) VALUES
(1, 'Pan', 'Phyu', 'ph12@gmail.com', '6115998', 'No.1, Main Road, Sydney, NSW', '$2y$10$WTy8RP4w0cR2Li7Poq9ZG.H7GQlf7p1wb82XZill1h9suJPxIEhS6', NULL),
(2, 'Pancy', 'Kay', 'staff@gmail.com', '6117900', 'No.1, Main Road, Melbourne, Vic', '$2y$10$WTy8RP4w0cR2Li7Poq9ZG.H7GQlf7p1wb82XZill1h9suJPxIEhS6', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplierid` int(11) NOT NULL,
  `suppliername` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phno` varchar(20) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplierid`, `suppliername`, `email`, `phno`, `address`) VALUES
(1, 'Pan', 'ph@gmail.com', '091234', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `supplyrecords`
--

CREATE TABLE `supplyrecords` (
  `supplierid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `supplieddate` date DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `treatmentid` int(11) NOT NULL,
  `treatmentname` varchar(150) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `concern` varchar(150) DEFAULT NULL,
  `treatmentimage` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`treatmentid`, `treatmentname`, `description`, `price`, `concern`, `treatmentimage`) VALUES
(1, 'Microdermabrasion', 'minimizes the appearance of dark spots and fine wrinkles, improves brightness, evens up skin tone, and softens texture for your finest skin ever.', 160, 'skin', 'images/_microderm.jpg'),
(2, 'Laser Hair Removal', 'Remove all of the unnecessary hair without pain. ', 160, 'hair', 'images/_hair removal.webp'),
(3, 'EMS sculpting', 'By using electro magnetic stimulation, or EMS Sculpting, you can burn fat while toning and constructing muscle.', 1099, 'body', 'images/_ems sculpting.jfif'),
(4, 'Hifu Skin Tightening', 'HIFU is a secure, non-invasive ultrasound procedure that aids in reversing the effects of gravity and time on your skin.', 179, 'skin', 'images/_hifu.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointmentid`),
  ADD KEY `doctorid` (`doctorid`),
  ADD KEY `patientid` (`patientid`),
  ADD KEY `treatmentid` (`treatmentid`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`deliveryid`),
  ADD KEY `orderid` (`orderid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctorid`),
  ADD KEY `branchid` (`branchid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageid`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderid`,`productid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `patientid` (`patientid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffid`),
  ADD KEY `branchid` (`branchid`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplierid`);

--
-- Indexes for table `supplyrecords`
--
ALTER TABLE `supplyrecords`
  ADD PRIMARY KEY (`supplierid`,`productid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`treatmentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branchid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `deliveryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplierid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `treatmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`doctorid`) REFERENCES `doctor` (`doctorid`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`patientid`) REFERENCES `patient` (`patientid`),
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`treatmentid`) REFERENCES `treatment` (`treatmentid`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`branchid`) REFERENCES `branch` (`branchid`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`branchid`) REFERENCES `branch` (`branchid`);

--
-- Constraints for table `supplyrecords`
--
ALTER TABLE `supplyrecords`
  ADD CONSTRAINT `supplyrecords_ibfk_1` FOREIGN KEY (`supplierid`) REFERENCES `supplier` (`supplierid`),
  ADD CONSTRAINT `supplyrecords_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `products` (`productid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
