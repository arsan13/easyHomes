-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 09:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `interiorimages`
--

CREATE TABLE `interiorimages` (
  `imgsId` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interiorimages`
--

INSERT INTO `interiorimages` (`imgsId`, `images`, `pid`) VALUES
(1, '../uploads/interior/int5faf947dbff3b5.54828078.jpg', 1),
(2, '../uploads/interior/int5faf947dc2b4b4.38485464.jpg', 1),
(3, '../uploads/interior/int5faf947dc43e33.84801192.jpg', 1),
(4, '../uploads/interior/int5faf94feaee3f2.55629052.jpg', 2),
(5, '../uploads/interior/int5faf94feb095a0.95814778.jpg', 2),
(6, '../uploads/interior/int5faf94feb34f42.62558594.jpg', 2),
(7, '../uploads/interior/int5faf956aab1092.67557665.jpg', 3),
(8, '../uploads/interior/int5faf956aade7d0.44308755.jpg', 3),
(9, '../uploads/interior/int5faf956aafa942.38257023.jpg', 3),
(10, '../uploads/interior/int5faf96f1dcac32.18501745.jpg', 4),
(11, '../uploads/interior/int5faf96f1df9652.82410431.jpg', 4),
(12, '../uploads/interior/int5faf96f1e182b4.73216696.jpg', 4),
(13, '../uploads/interior/int5faf974dcab835.50510957.jpg', 5),
(14, '../uploads/interior/int5faf974dccb561.82896996.jpg', 5),
(15, '../uploads/interior/int5faf974dcf2466.89921566.jpg', 5),
(16, '../uploads/interior/int5faf97ae8ca2b6.94611188.jpg', 6),
(17, '../uploads/interior/int5faf97ae8fc682.69033763.jpg', 6),
(18, '../uploads/interior/int5faf97ae919596.06900589.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `imgId` int(11) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `rent` varchar(50) NOT NULL,
  `deposit` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `furnished` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `mainImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`imgId`, `ownerId`, `rent`, `deposit`, `type`, `size`, `address`, `city`, `furnished`, `description`, `mainImage`) VALUES
(1, 1, '35000', '120000', '2BHK', '12000', 'No 45, Adyar', 'Chennai', 'No', 'Access to bus stop & medical stores is very easy & convenient from this house.If you are in need of any emergency services or medical assistance, you will be happy to note that RVita Health Center, FORTIS MALAR HOSPITAL CHENNAI and Frontline Eye Hospital are very close by. Sishya School, Shemrock Little Stars and Chettinad Hari Shree Vidyalayam are well known educational institutes in town & are very close to this home.', '../uploads/main/main5faf947dbd523.jpg'),
(2, 1, '85000', '400000', '3BHK', '2000', 'N. 32/3, OMR', 'Chennai', 'Semi', 'If you are looking for a home with electric back up, security & lift, this home is just right for you. With premium amenities such as rainwater harvesting & air conditioner this home provides you with many added benefits.', '../uploads/main/main5faf94feabdbb.jpg'),
(3, 1, '50000', '150000', '2BHK', '1000', 'No. 21, Mylapore', 'Chennai', 'Semi', 'If you are looking for a home with electric back up, security & lift, this home is just right for you. With premium amenities such as rainwater harvesting & air conditioner this home provides you with many added benefits.', '../uploads/main/main5faf956aa7b6f.jpg'),
(4, 2, '60000', '200000', '3BHK', '1800', 'No 45, Covet Gardens', 'Coimbatore', 'Semi', 'If you are looking for a home with electric back up, security & lift, this home is just right for you. With premium amenities such as rainwater harvesting & air conditioner this home provides you with many added benefits.', '../uploads/main/main5faf96f1d8bdc.jpg'),
(5, 2, '75000', '250000', '4BHK', '2500', 'No 45, Green Gardens', 'Coimbatore', 'No', 'If you are looking for a home with electric back up, security & lift, this home is just right for you. With premium amenities such as rainwater harvesting & air conditioner this home provides you with many added benefits.', '../uploads/main/main5faf974dc86d6.jpg'),
(6, 2, '35000', '100000', '2BHK', '800', 'No 45, Green Gardens', 'Trichy', 'No', 'If you are looking for a home with electric back up, security & lift, this home is just right for you. With premium amenities such as rainwater harvesting & air conditioner this home provides you with many added benefits.', '../uploads/main/main5faf97ae89f62.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `qid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

CREATE TABLE `saved` (
  `sid` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `imgId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saved`
--

INSERT INTO `saved` (`sid`, `uid`, `imgId`) VALUES
(1, '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `phone`, `pwd`) VALUES
(1, 'Anbarsan', 'arsan@gmail.com', '9876567898', '1234'),
(2, 'Barney Stinson', 'barney@gmail.com', '9876785432', '1234'),
(3, 'Sheldon Cooper', 'Cooper@gmail.com', '6789875643', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `interiorimages`
--
ALTER TABLE `interiorimages`
  ADD PRIMARY KEY (`imgsId`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`imgId`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `saved`
--
ALTER TABLE `saved`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `interiorimages`
--
ALTER TABLE `interiorimages`
  MODIFY `imgsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `imgId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saved`
--
ALTER TABLE `saved`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
