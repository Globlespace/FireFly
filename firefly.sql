-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 10:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firefly`
--

-- --------------------------------------------------------

--
-- Table structure for table `agentqueryassineds`
--

CREATE TABLE `agentqueryassineds` (
  `id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `c_q_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(5000) NOT NULL,
  `email` varchar(40) NOT NULL,
  `fullPrivilege` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `companyPhone` varchar(20) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `username`, `password`, `email`, `fullPrivilege`, `phone`, `companyPhone`, `added_on`) VALUES
(1, 'Danish', '@danish', '$2y$10$BV9TjCHE3sdWuEoKaf5KuuUDozPt/Bz8TSSYGx1hg3znbH/Pedh1q', 'danish@flyparadise.in', 1, '12345678', '122345678', '2022-02-15 10:17:50'),
(2, 'Mohsina', '@mohsina', '$2y$10$tiKlBS/CSAHch/ThT2mM2OAdlkywrB27Fzs/eMjRA/TdD7S.Ump1m', 'mohsina@flyparadise.in', 0, '7654321', '876764532', '2022-02-15 10:17:50'),
(3, 'Sahiba', '@sahiba', '$2y$10$pryO93Isd1iwexCQn27e6O9MqKJw22qv2HRTPY8tKPG.SWxdQhpDK', 'sahiba@flyparadise.in', 0, '7654321', '876764532', '2022-02-15 10:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `customer_queries`
--

CREATE TABLE `customer_queries` (
  `id` int(11) NOT NULL,
  `customerName` varchar(500) NOT NULL,
  `explorer` varchar(500) NOT NULL,
  `destination` varchar(40) NOT NULL,
  `departure` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` varchar(16) NOT NULL,
  `hotel_category` varchar(18) NOT NULL DEFAULT '2',
  `flight` varchar(5) NOT NULL DEFAULT 'No',
  `cab` varchar(5) NOT NULL DEFAULT 'Yes',
  `budget` varchar(22) NOT NULL,
  `adults` int(11) NOT NULL DEFAULT 1,
  `children` int(11) NOT NULL DEFAULT 0,
  `infants` int(11) NOT NULL DEFAULT 0,
  `departure_date` varchar(16) NOT NULL DEFAULT 'anytime',
  `duration` int(11) NOT NULL DEFAULT 1,
  `i_will_book_in` varchar(22) NOT NULL,
  `type_of_package` varchar(32) NOT NULL,
  `prefered_time_to_call` varchar(20) NOT NULL,
  `driver_language` varchar(20) NOT NULL,
  `tour_type` varchar(16) NOT NULL,
  `Additional_Details` text NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_queries`
--

INSERT INTO `customer_queries` (`id`, `customerName`, `explorer`, `destination`, `departure`, `email`, `contact_number`, `hotel_category`, `flight`, `cab`, `budget`, `adults`, `children`, `infants`, `departure_date`, `duration`, `i_will_book_in`, `type_of_package`, `prefered_time_to_call`, `driver_language`, `tour_type`, `Additional_Details`, `added_on`, `updated_on`, `status`) VALUES
(1, 'uzair1', 'yes', 'kashmir', 'hmt', 'daruzair420@gmail.com', '+917006402806', '2', 'No', 'Yes', '16000', 1, 2, 2, 'anytime', 3, 'next 2-3 days', 'cusomize', '1pm', 'hindi', 'abc', 'no', '2022-01-21 07:58:51', '2022-01-26 14:28:51', 4),
(2, 'uzair2', 'yes', 'kashmir', 'hmt', 'daruzair420@gmail.com', '+917006402806', '2', 'No', 'Yes', '16000', 1, 2, 2, 'anytime', 3, 'next 2-3 days', 'cusomize', '1pm', 'hindi', 'abc', 'no', '2022-01-21 09:58:51', '2022-01-26 15:28:51', 4),
(3, 'uzair3', 'yes', 'kashmir', 'hmt', 'daruzair420@gmail.com', '+917006402806', '2', 'No', 'Yes', '16000', 1, 2, 2, 'anytime', 3, 'next 2-3 days', 'cusomize', '1pm', 'hindi', 'abc', 'no', '2022-01-21 09:58:51', '2022-01-26 15:28:51', 4);

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `distinationPoint` varchar(500) NOT NULL,
  `hotelName` varchar(500) NOT NULL,
  `hotelRating` varchar(100) NOT NULL,
  `hotelRoomType` varchar(100) NOT NULL,
  `dinner` varchar(10) NOT NULL,
  `breakfast` varchar(10) NOT NULL,
  `itenary` varchar(2000) NOT NULL,
  `itenaryHeading` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `give_quotations`
--

CREATE TABLE `give_quotations` (
  `id` int(11) NOT NULL,
  `vehicleType` varchar(500) NOT NULL,
  `Inclusions` varchar(10000) NOT NULL,
  `Exclusions` varchar(10000) NOT NULL,
  `dateOfJourney` date NOT NULL,
  `flight` varchar(500) NOT NULL,
  `quotationPrice` varchar(100) NOT NULL,
  `advanceAmountToPay` varchar(100) NOT NULL,
  `c_q_id` int(11) NOT NULL,
  `pdf` varchar(1111) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `stage` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `reminder` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tripid` int(11) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quotation_days`
--

CREATE TABLE `quotation_days` (
  `id` int(11) NOT NULL,
  `g_q_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `id` int(11) NOT NULL,
  `link` varchar(266) NOT NULL,
  `header` varchar(255) NOT NULL,
  `content` varchar(510) NOT NULL,
  `whenToRemind` datetime NOT NULL,
  `agent_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agentqueryassineds`
--
ALTER TABLE `agentqueryassineds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agent_id` (`agent_id`),
  ADD KEY `c_q_id` (`c_q_id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_queries`
--
ALTER TABLE `customer_queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `give_quotations`
--
ALTER TABLE `give_quotations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation_days`
--
ALTER TABLE `quotation_days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminder`
--
ALTER TABLE `reminder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agentqueryassineds`
--
ALTER TABLE `agentqueryassineds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_queries`
--
ALTER TABLE `customer_queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `give_quotations`
--
ALTER TABLE `give_quotations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `quotation_days`
--
ALTER TABLE `quotation_days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `reminder`
--
ALTER TABLE `reminder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agentqueryassineds`
--
ALTER TABLE `agentqueryassineds`
  ADD CONSTRAINT `agentqueryassineds_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`),
  ADD CONSTRAINT `agentqueryassineds_ibfk_2` FOREIGN KEY (`c_q_id`) REFERENCES `customer_queries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
