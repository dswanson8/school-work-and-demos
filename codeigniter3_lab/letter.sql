-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2019 at 07:50 AM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dswanson8_codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `letter`
--

CREATE TABLE `letter` (
  `auth_id` int(11) NOT NULL,
  `letter` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `address` varchar(25) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_orig_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `lid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `letter`
--

INSERT INTO `letter` (`auth_id`, `letter`, `description`, `address`, `phone`, `file_name`, `file_orig_name`, `file_path`, `lid`) VALUES
(1, 'Kobe Bistro', 'One of the best places that I\'ve gone to. It is a Japanese restaurant and the quality of their food is off the top charts. Price wise, there are a bit more expensive than others, but they make up for it in their quality of food. It will be a place that you do not regret!', '6655 178 St NW', '7804447878', '', '', '', 8),
(1, 'Tony Roma\'s', 'A restaurant that you might pass as it doesn\'t stand out, but don\'t let that fool you from having try their ribs. A little pricey, but let me tell you, that going here will be enjoyable for any night. Whether you\'re on a date or with family, everything from their menu is enjoyable. ', '1640 Bourbon Street', '780 444 310', '', '', '', 9),
(2, 'Pho Hoa', 'A great Vietnamese restaurant. If you\'re not from the west side, you probably won\'t like it. But hey, it\'s close to the mall and easy to find.', '8882 170 St', '780 443 466', '', '', '', 10),
(2, 'Miga', 'A great Korean restaurant that gives you a chance at trying Korean cuisine without feeling lost. They\'ve got a great selection of large pan orders, in which you get 4 to 5 different dishes that get cooked in front of you. Great food, great atmosphere and definitely a comfortable place to eat in.', '9261 34 Ave', '780 438 624', '', '', '', 11),
(3, 'Rge Rd', 'Wanna go out on a fancy date, with unique food? Try this place out. A nice relaxing and comfortable atmosphere, gives you a chance to really the enjoy the food with your special someone.', '10643 123 St NW', '780 447 457', '', '', '', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `letter`
--
ALTER TABLE `letter`
  ADD PRIMARY KEY (`lid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `letter`
--
ALTER TABLE `letter`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
