-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 04:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(1, 'uploads/interior/int5ed0b0940a1c47.28581711.jpg', 1),
(2, 'uploads/interior/int5ed0b094150113.62013966.jpg', 1),
(3, 'uploads/interior/int5ed0b0942480a2.78896302.jpg', 1),
(4, 'uploads/interior/int5ed0b10a6351f8.60086209.jpg', 2),
(5, 'uploads/interior/int5ed0b10aca19b0.69856910.jpg', 2),
(6, 'uploads/interior/int5ed0b10b0cc992.72317158.jpg', 2),
(7, 'uploads/interior/int5ed0b19d770774.80708445.jpg', 3),
(8, 'uploads/interior/int5ed0b19d802f75.60760647.jpg', 3),
(9, 'uploads/interior/int5ed0b19d87cb07.41905772.jpg', 3),
(10, 'uploads/interior/int5ed0b21e4505a8.27229114.jpg', 4),
(11, 'uploads/interior/int5ed0b21e55bdd7.38950268.jpg', 4),
(12, 'uploads/interior/int5ed0b21e6069b7.64493492.jpg', 4),
(13, 'uploads/interior/int5ed0b297a565c0.24844983.jpg', 5),
(14, 'uploads/interior/int5ed0b297b67857.94932599.jpg', 5),
(15, 'uploads/interior/int5ed0b297c0cf56.35223210.jpg', 5),
(16, 'uploads/interior/int5ed0b3467f7c67.41457588.jpg', 6),
(17, 'uploads/interior/int5ed0b3468abab7.26167858.jpg', 6),
(18, 'uploads/interior/int5ed0b346a30ff3.14334566.jpg', 6),
(19, 'uploads/interior/int5ed0b434e60ef7.08976556.jpg', 7),
(20, 'uploads/interior/int5ed0b435050902.71756982.jpg', 7),
(21, 'uploads/interior/int5ed0b4350d2e44.25091931.jpg', 7),
(22, 'uploads/interior/int5ed0b4d911a664.41634160.jpg', 8),
(23, 'uploads/interior/int5ed0b4d927aa11.25915854.jpg', 8),
(24, 'uploads/interior/int5ed0b4d9360009.53279486.jpg', 8),
(25, 'uploads/interior/int5ed0b59ac1f339.44448017.jpg', 9),
(26, 'uploads/interior/int5ed0b59ac974e6.15252288.jpg', 9),
(27, 'uploads/interior/int5ed0b59ad19905.21452940.jpg', 9),
(28, 'uploads/interior/int5ed0b7757287d8.53627453.jpg', 10),
(29, 'uploads/interior/int5ed0b7758035f3.94648676.jpg', 10),
(30, 'uploads/interior/int5ed0b7758ae015.28583127.jpg', 10),
(31, 'uploads/interior/int5ed0b8187f9439.53864973.jpg', 11),
(32, 'uploads/interior/int5ed0b818a32be6.29980862.jpg', 11),
(33, 'uploads/interior/int5ed0b818d62cd8.16150974.jpg', 11),
(34, 'uploads/interior/int5ed0b875420301.92690365.jpg', 12),
(35, 'uploads/interior/int5ed0b8754c6469.56350998.jpg', 12),
(36, 'uploads/interior/int5ed0b8755a6270.47274582.jpg', 12),
(37, 'uploads/interior/int5ed0b8e2ddd4e5.35845786.jpg', 13),
(38, 'uploads/interior/int5ed0b8e2e947f8.21960214.jpg', 13),
(39, 'uploads/interior/int5ed0b8e2ee0939.22442625.jpg', 13),
(40, 'uploads/interior/int5ed0bbc6c88255.86325584.jpg', 14),
(41, 'uploads/interior/int5ed0bbc6e2bee2.33609338.jpg', 14),
(42, 'uploads/interior/int5ed0bbc6e87cd9.25604364.jpg', 14),
(43, 'uploads/interior/int5ed0bc2e445552.10180249.jpg', 15),
(44, 'uploads/interior/int5ed0bc2e4a18f8.53765925.jpg', 15),
(45, 'uploads/interior/int5ed0bc2e51e285.95710788.jpg', 15),
(46, 'uploads/interior/int5ed0bcfdc8c636.94227183.jpg', 16),
(47, 'uploads/interior/int5ed0bcfdcdf646.63773517.jpg', 16),
(48, 'uploads/interior/int5ed0bcfdd64735.69595792.jpg', 16),
(49, 'uploads/interior/int5ed0bdb4b4e381.12775457.jpg', 17),
(50, 'uploads/interior/int5ed0bdb4d1cfa4.40511680.jpg', 17),
(51, 'uploads/interior/int5ed0bdb4eb3bd6.44519812.jpg', 17);

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
(1, 1, '25000', '100000', '2BHK', '1200', 'No.35, 2nd Street, Guindy', 'Chennai', 'No', 'If you are looking for an apartment to rent ideal for families & bachelors, you need to check out this home. Your search for a 2 BHK in Adyar ends here, this home is conveniently located & comes at just 25,000 rupees. This 1100 sqft. Home comes with ample dedicated parking area for car and bike. This home faces the East direction.', 'uploads/main/main5ed0b093e9732.jpg'),
(2, 1, '50000', '150000', '3BHK', '1500', 'No. 42, 4th street, Adayar ', 'Chennai', 'Semi', 'If you are looking for a home with electric back up, security & lift, this home is just right for you. With premium amenities such as rainwater harvesting & air conditioner this home provides you with many added benefits.', 'uploads/main/main5ed0b10a49455.jpg'),
(3, 1, '85000', '300000', '4BHK', '2400', 'No. 4, 5th street, OMR ', 'Chennai', 'Semi', 'Access to bus stop & medical stores is very easy & convenient from this house.If you are in need of any emergency services or medical assistance, you will be happy to note that RVita Health Center, FORTIS MALAR HOSPITAL CHENNAI and Frontline Eye Hospital are very close by. Sishya School, Shemrock Little Stars and Chettinad Hari Shree Vidyalayam are well known educational institutes in town & are very close to this home.', 'uploads/main/main5ed0b19d55f83.jpg'),
(4, 2, '15000', '100000', '1BHK', '600', 'No. 2nd Street, Neredmet', 'Hyderabad', 'Semi', 'If you are looking for a home with electric back up, security & lift, this home is just right for you. With premium amenities such as rainwater harvesting & air conditioner this home provides you with many added benefits.', 'uploads/main/main5ed0b21e2bcbd.jpg'),
(5, 2, '35000', '120000', '2BHK', '1500', 'No. 4, 5th street, Casa Gardens ', 'Bangalore', 'Semi', 'If you are looking for a home with electric back up, security & lift, this home is just right for you. With premium amenities such as rainwater harvesting & air conditioner this home provides you with many added benefits.If you are looking for a home with electric back up, security & lift, this home is just right for you. With premium amenities such as rainwater harvesting & air conditioner this home provides you with many added benefits.', 'uploads/main/main5ed0b29792125.jpg'),
(6, 2, '50000', '200000', '3BHK', '2000', 'No. 2nd Street, Royal Gardens', 'Mumbai', 'No', 'This 3 BHK apartment comes with an affordable price tag of just 50,000 rupees. This home is well equipped with 5 wardrobes & also has 2 bathrooms. You get ample & dedicated parking lot for a bike with this home.', 'uploads/main/main5ed0b3466dd82.jpg'),
(7, 3, '20000', '100000', '1BHK', '800', 'No. 42, 4th street, Covet Gardens', 'Trichy', 'Fully', 'Your search for a 1 BHK  ends here, this home is conveniently located & comes at just 20,000 rupees. This 800 sqft. Home comes with ample dedicated parking area for car and bike. This home faces the East direction.', 'uploads/main/main5ed0b434d997e.jpg'),
(8, 3, '40000', '150000', '3BHK', '1500', 'No. 2nd Street, Neredmet', 'Hyderabad', 'No', 'If you are looking for a home with electric back up, security & lift, this home is just right for you. With premium amenities such as rainwater harvesting & air conditioner this home provides you with many added benefits.', 'uploads/main/main5ed0b4d8eb353.jpg'),
(9, 3, '60000', '150000', '3BHK', '1800', 'No. 2nd Street, Royal Gardens', 'Coimbatore', 'Semi', 'Access to bus stop & medical stores is very easy & convenient from this house.\r\nIf you are in need of any emergency services or medical assistance, you will be happy to note that RVita Health Center and Frontline Eye Hospital are very close by. Sishya School, Shemrock Little Stars and Chettinad Hari Shree Vidyalayam are well known educational institutes in town & are very close to this home.', 'uploads/main/main5ed0b59ab36a9.jpg'),
(10, 4, '65000', '20000', '4BHK', '2400', 'No. 2nd Street, Guindy', 'Chennai', 'No', 'With Ganapathy Ram Theatre, S2 Theyagaraja & Hilight Photography Institute - Photography Film institute Viscom close by, you can catch your favourite movies running & never worry about missing a show because of traffic. If you are looking for gifts, or just want to spoil yourself, Avon Solutions & Logistics Pvt. Ltd, 24x7 Stores and MyFric have a wide variety of things that you can choose from.', 'uploads/main/main5ed0b77566098.jpg'),
(11, 4, '35000', '100000', '2BHK', '1500', 'No. 2nd Street, Royal Gardens', 'Hyderabad', 'Semi', 'With Ganapathy Ram Theatre & Hilight Photography Institute - Photography Film institute Viscom close by, you can catch your favourite movies running & never worry about missing a show because of traffic. If you are looking for gifts, or just want to spoil yourself, Avon Solutions & Logistics Pvt. Ltd, 24x7 Stores and MyFric have a wide variety of things that you can choose from.', 'uploads/main/main5ed0b81867cff.jpg'),
(12, 4, '25000', '100000', '1BHK', '850', 'No. 4, 5th street, Casa Gardens ', 'Mumbai', 'Fully', 'If you are looking for a home with electric back up, security & lift, this home is just right for you. With premium amenities such as rainwater harvesting & air conditioner this home provides you with many added benefits.', 'uploads/main/main5ed0b87534ea2.jpg'),
(13, 4, '75000', '300000', '4BHK', '2500', 'No. 4, 5th street, Casa Gardens ', 'New Delhi', 'No', 'Your search for a 4 BHK in mumbai ends here, this home is conveniently located & comes at just 75,000 rupees. This 2500 sqft. Home comes with ample dedicated parking area for car and bike. This home faces the East direction.', 'uploads/main/main5ed0b8e2d030b.jpg'),
(14, 1, '60000', '200000', '3BHK', '2000', 'No. 2nd Street, Royal Gardens', 'Bangalore', 'No', 'If you are looking for a home with electric back up, security & lift, this home is just right for you. With premium amenities such as rainwater harvesting & air conditioner this home provides you with many added benefits.', 'uploads/main/main5ed0bbc6b907f.jpg'),
(15, 2, '25000', '100000', '1BHK', '900', 'No. 2nd Street, Royal Gardens', 'Coimbatore', 'Fully', 'If you are looking for a home with electric back up, security & lift, this home is just right for you. With premium amenities such as rainwater harvesting & air conditioner this home provides you with many added benefits.', 'uploads/main/main5ed0bc2e3490e.jpg'),
(16, 2, '40000', '20000', '2BHK', '1200', 'No. 4, 5th street, Casa Gardens ', 'Trichy', 'Semi', 'If you are looking for a home with electric back up, security & lift, this home is just right for you. With premium amenities such as rainwater harvesting & air conditioner this home provides you with many added benefits.', 'uploads/main/main5ed0bcfdb9605.jpg'),
(17, 2, '15000', '80000', '1BHK', '750', 'No. 2nd Street, Royal Gardens', 'New Delhi', 'Semi', 'If you are looking for a home with electric back up, security & lift, this home is just right for you. With premium amenities such as rainwater harvesting & air conditioner this home provides you with many added benefits.', 'uploads/main/main5ed0bdb4a227b.jpg');

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
(2, '5', '3'),
(4, '4', '1'),
(5, '4', '3');

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
(1, 'Anbarsan', 'arsan@gmail.com', '9876545644', '1234'),
(2, 'Thomas Shelby', 'shelby@gmail.com', '9998887777', '1234'),
(3, 'Sheldon Cooper', 'cooper@gmail.com', '9998885555', '1234'),
(4, 'Ted Mosby', 'ted@gmail.com', '9998886677', '1234'),
(5, 'Barney Stinson', 'stinson@gmail.com', '9998885544', '1234');

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
  MODIFY `imgsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `imgId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saved`
--
ALTER TABLE `saved`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
