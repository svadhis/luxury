-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jul 11, 2019 at 07:09 AM
-- Server version: 10.3.13-MariaDB-1:10.3.13+maria~bionic
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nm_luxury`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gender` set('male','female') NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `curriculum` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT 1,
  `birth_date` timestamp NULL DEFAULT NULL,
  `birth_location` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `experience` set('0 - 6 months','6 months - 1 year','1 - 2 years','2 - 5 years','5 - 10 years','10+ years') DEFAULT NULL,
  `description` text DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `files` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `user_id`, `gender`, `first_name`, `last_name`, `adress`, `country`, `nationality`, `passport`, `curriculum`, `picture`, `availability`, `birth_date`, `birth_location`, `category_id`, `experience`, `description`, `notes`, `files`) VALUES
(1, 7, 'male', 'Nicolas', 'Miquel', '38 avenue de Noyon - Mably', 'France', 'Français', '259601047.jpeg', NULL, NULL, 0, '2014-01-01 00:00:00', 'Aix en Provence', NULL, '1 - 2 years', 'osef', NULL, NULL),
(2, 6, 'male', 'Jean', 'Jacques', '123 rue', 'iran', 'mars', '451506302.png', '686552459.jpeg', '357144759.jpeg', 1, '2014-01-01 00:00:00', NULL, NULL, '0 - 6 months', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'commercial'),
(2, 'retail sales'),
(3, 'creative'),
(4, 'technology'),
(5, 'marketing & pr'),
(6, 'fashion & luxury'),
(7, 'management & hr');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `type`, `notes`) VALUES
(1, 'Randstad', 'Interim', NULL),
(2, 'Adecoo', 'interim', NULL),
(3, 'Manpowa', 'interim', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `job` varchar(255) DEFAULT NULL,
  `main` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `client_id`, `name`, `email`, `phone`, `job`, `main`) VALUES
(1, 1, 'David Bernard', 'dbernard@gmail.com', 754484612, 'Recruteur', 1),
(2, 2, 'Jean Pierre', 'jp@gmail.com', 650050505, NULL, 0),
(3, 2, 'Paul', 'popol@laposte.net', 660565698, 'directeur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`id`, `candidate_id`, `offer_id`, `date_created`, `status`) VALUES
(1, 1, 1, '2019-07-10 12:49:24', 1),
(2, 2, 1, '2019-07-10 12:54:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `reference` varchar(50) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `notes` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `type` set('fulltime','part time','temporary','freelance','seasonal') NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `date_closing` timestamp NULL DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `reference`, `contact_id`, `description`, `status`, `notes`, `title`, `type`, `location`, `category_id`, `date_closing`, `salary`, `date_created`) VALUES
(1, 'CRE442379FU', 1, 'Faut couper de la mayo toute la journée', 1, NULL, 'Coupeur de mayonnaise', 'fulltime', 'usine', 3, '2020-01-01 00:00:00', 1050, '2019-07-10 12:05:54'),
(2, 'COM473403PA', 2, 'Pour servir des boissons', 1, NULL, 'Serveuse', 'part time', 'Los Angeles', 1, '2021-01-01 00:00:00', 650, '2019-07-10 13:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL,
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `admin`, `status`, `date_created`, `date_updated`, `date_deleted`) VALUES
(6, 'rr', '$2y$13$2NNUsEV6..rxvUExXEdvFO5eN8vhN6T1Ev5IvgD6K2eFrLOfAQ/aS', 'pp@pp.pp', 0, 1, '2019-07-08 10:28:32', NULL, NULL),
(7, 'a', '$2y$13$bRbtJXjM.SA3iV6gCVgTte/j7D8hKruyAuBdSLP3xqifxbNdvybKm', 'a@a.a', 0, 1, '2019-07-08 11:46:31', NULL, NULL),
(8, 'Nico', '$2y$13$bR/1s1pYmuryNBTcWulcXeq4agdRlf2pNmNsoDtDIztAsocIwgxOu', 'imeian@gmail.com', 1, 1, '2019-07-09 08:05:35', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidate_id` (`candidate_id`),
  ADD KEY `offer_id` (`offer_id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_id` (`contact_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `candidate_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `candidate_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`);

--
-- Constraints for table `job_application`
--
ALTER TABLE `job_application`
  ADD CONSTRAINT `job_application_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `candidate` (`id`),
  ADD CONSTRAINT `job_application_ibfk_2` FOREIGN KEY (`offer_id`) REFERENCES `offer` (`id`);

--
-- Constraints for table `offer`
--
ALTER TABLE `offer`
  ADD CONSTRAINT `offer_ibfk_1` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`),
  ADD CONSTRAINT `offer_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
