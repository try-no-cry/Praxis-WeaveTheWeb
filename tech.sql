-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2019 at 06:53 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `imagePath` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `title`, `body`, `imagePath`, `created_at`, `updated_at`) VALUES
(1, 'LynQ', ' Getting separated from friends or a family member at an event or festival can be annoying. LynQ helps you find your loved ones when you get separated from the group.\r\n\r\n \r\n\r\n                            Unlike smartphones, compass-like devices do not need any wifi to stay connected. It is a great tool for family vacations.                   ', 'https://inteng-storage.s3.amazonaws.com/images/JANUARY/sizes/Inventions_blow_your_mind_IE_15_resize_md.jpg', '2019-09-28 04:07:26', '2019-09-27 19:50:43'),
(2, 'The Mirror', ' The Mirror is one of the sleekest looking inventions on this list. Perfect for those with fitness goals in 2019, the interactive mirror helps take your home fitness regime to the next level.\r\n\r\n                            The device streams live workouts and even offers an interactive fitness coach.                   ', 'https://inteng-storage.s3.amazonaws.com/images/JANUARY/sizes/Inventions_blow_your_mind_IE_6_resize_md.jpg', '2019-09-28 04:06:41', '2019-09-27 19:51:33'),
(3, ' HabitAware', ' A common New Year’s resolution centers around the idea of kicking some sort of bad habit. HabitAware is here to make your life a little easier.\r\n                            As a friendly reminder, the fashionable Keen band vibrates anytime it catches you doing the bad habit you are trying to shake.                 ', 'https://timedotcom.files.wordpress.com/2018/11/keen-best-inventions-2018-13.jpg?w=720&quality=85', '2019-09-28 04:06:53', '2019-09-27 21:04:19'),
(4, ' Solar Charged Jacket', ' If you are a night runner, then this one\'s for you. Created by U.K.-based sports-gear startup,  Vollebak, the Solar Charged Jacket phosphorescent membrane absorbs light during the day and release its “kryptonite green energy” for those who need to be safe after dark.                        ', 'https://inteng-storage.s3.amazonaws.com/images/JANUARY/sizes/Inventions_blow_your_mind_IE_12_resize_md.jpg', '2019-09-28 04:07:05', '0000-00-00 00:00:00'),
(8, 'dtjhrtu', 'rstjdryji', 'NULL', '2019-09-27 23:22:21', '2019-09-27 23:22:21'),
(9, 'dfjh', 'r', 'NULL', '2019-09-27 23:22:25', '2019-09-27 23:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `imagePath` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `article_id`, `imagePath`, `created_at`, `updated_at`) VALUES
(1, 3435, 'ArticleImages/article343595970192.class', '2019-09-27 19:24:00', '2019-09-27 19:24:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
