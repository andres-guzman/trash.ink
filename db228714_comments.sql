-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 05, 2020 at 09:18 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db228714_comments`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `post_time`) VALUES
(339, 'you never thought that this could happen to me, did you? Ha, ha, ha, ha', '2019-10-04 19:12:17'),
(123, 'test 123', '2019-08-31 16:19:37'),
(340, 'Venetian Snares x Daniel Lanois', '2019-10-06 03:09:09'),
(133, 'https://www.badtrash.com/images/1472606097408.gif', '2019-09-01 01:03:36'),
(168, 'Ö i hate the fact i have to deal with people all the time ÖŽ', '2019-09-03 20:36:22'),
(166, 'What will it take to make you capitulate?\nWe appreciate power\nWe appreciate power\nElevate the human race, putting makeup on my face\nWe appreciate power\nWe appreciate power, power\n\nGrimes is ugly', '2019-09-02 02:01:43'),
(167, '...I Care Because You Do', '2019-09-03 01:43:59'),
(50, '\"andy\"', '2019-08-30 02:50:33'),
(220, 'foo isn\'t\\n bar', '2019-09-05 22:37:46'),
(341, 'tent in my pants', '2019-10-06 04:10:07'),
(343, 'i want to feel you from the INSIDE', '2019-11-06 05:19:26'),
(346, 'i\'m loco', '2020-01-05 02:01:00'),
(132, '043985j0ierig ws rtg --.\'\'Â¿\\0\\Â¿Â¿Â¿\\\'Â¿', '2019-08-31 16:35:59'),
(320, 'new design coming soon...', '2019-09-06 04:35:34'),
(326, 'ain\'t got no how whatchamacallit ', '2019-09-07 05:17:34'),
(327, 'Welcome everybody\n', '2019-09-12 19:31:06'),
(328, 'somebody online?\n', '2019-09-12 19:31:43'),
(329, 'last day, close to die', '2019-09-12 19:33:39'),
(345, 'I promise to watch and raise your babies', '2019-12-31 06:18:09'),
(331, 'DOOM rules baby, it rules!', '2019-09-13 14:27:07'),
(332, 'i n e v e r l e a r n ', '2019-09-14 06:26:00'),
(333, 'remember kids, don\'t smoke... unless you wanna look cool', '2019-09-16 14:32:29'),
(334, 'sunny day, ideal for ice cream', '2019-09-16 19:58:42'),
(335, 'I wish the milkman would deliver my milk in the morning', '2019-09-20 00:51:26'),
(336, 'Comprehensive Beginners Guide to Learn the Basics and Effective Methods of Cyber Security', '2019-09-20 01:55:46'),
(337, 'IÂ´m sleepy at work\n', '2019-10-03 22:13:31'),
(338, 'glad the site is back!', '2019-10-04 03:04:04'),
(99, 'hola', '2019-08-30 15:33:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=347;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
