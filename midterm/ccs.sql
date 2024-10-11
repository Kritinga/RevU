-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2024 at 11:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccs`
--

-- --------------------------------------------------------

--
-- Table structure for table `ccs_login`
--

CREATE TABLE `ccs_login` (
  `id` int(11) NOT NULL,
  `stunum` int(9) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `secret` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccs_login`
--

INSERT INTO `ccs_login` (`id`, `stunum`, `fname`, `mname`, `lname`, `password`, `secret`, `action`) VALUES
(1, 202210336, 'Kenneth', 'A.', 'Casakit', '213311d0722e191141a06b0adaa37a4b', '7c6f5bdc16b3748b481fb5ea98bd4ace', 'User'),
(2, 202109223, 'Roger', 'A.', 'Magsanga', '213311d0722e191141a06b0adaa37a4b', 'sa', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `uploader` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `title`, `category`, `uploader`) VALUES
(3, 'ReincarnatedAsCondom', 'Fantasy', 'Pastor');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `timess` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `fname`, `mname`, `lname`, `action`, `timess`, `status`) VALUES
(0, 'Kenneth', '', 'Casakit', 'Successfully Login', '2024-10-05 11:19:51', ''),
(0, 'Kenneth', '', 'Casakit', 'Successfully Login', '2024-10-05 11:20:37', ''),
(0, 'Kenneth', '', 'Casakit', 'Successfully Login', '2024-10-05 11:26:59', ''),
(0, 'Kenneth', '', 'Casakit', 'Successfully Login', '2024-10-05 11:30:00', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-05 11:50:49', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-05 02:57:47', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-05 06:51:53', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-05 06:54:11', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-05 07:58:33', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-05 10:28:39', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-05 10:32:49', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-05 10:33:56', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-06 08:15:43', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-06 09:11:02', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-06 09:17:17', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-06 02:31:08', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-06 02:34:11', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-06 02:34:47', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-06 02:36:52', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-06 02:38:16', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-06 02:38:47', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-06 02:40:10', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-06 02:46:47', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-06 02:47:59', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-07 09:26:12', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-07 11:53:16', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-08 09:56:13', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-08 09:56:24', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-08 09:56:59', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-08 09:57:11', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-08 09:57:34', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-09 01:42:47', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-10 08:33:46', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-11 08:21:09', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-11 08:48:06', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-11 09:13:55', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-11 09:15:13', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-11 10:19:11', ''),
(0, 'Kenneth', 'A.', 'Casakit', 'Successfully Login', '2024-10-11 05:18:34', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `stunum` varchar(9) NOT NULL,
  `password` varchar(50) NOT NULL,
  `secret` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `status`, `fname`, `lname`, `mname`, `stunum`, `password`, `secret`) VALUES
(1, 'Inactive', 'juan', 'ted', 'rapper', '211212343', 'pogi', 'ako'),
(13, 'inactive', 'the', 'box', 'what', '202210336', 'pogi', 'ako');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(100) NOT NULL,
  `title` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `uploader` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `title`, `category`, `uploader`) VALUES
(3, 'ReincarnatedAsCondom', 'Fantasy', 'Pastor'),
(11, 'HowToCode', 'Computer', 'AliceGuo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ccs_login`
--
ALTER TABLE `ccs_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ccs_login`
--
ALTER TABLE `ccs_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
