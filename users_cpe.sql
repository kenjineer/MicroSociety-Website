-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2018 at 11:38 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `microsoclogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_cpe`
--

CREATE TABLE `users_cpe` (
  `stud_id` int(11) NOT NULL,
  `stud_sname` text NOT NULL,
  `stud_fname` text NOT NULL,
  `stud_mname` text NOT NULL,
  `stud_year` int(1) NOT NULL,
  `stud_section` varchar(3) NOT NULL,
  `stud_cont` varchar(11) NOT NULL,
  `stud_email` varchar(255) NOT NULL,
  `stud_pass` varchar(255) NOT NULL,
  `stud_mem` varchar(15) NOT NULL DEFAULT 'NOT REGISTERED',
  `cpega` varchar(15) NOT NULL DEFAULT 'NOT REGISTERED',
  `cpesem` varchar(15) NOT NULL DEFAULT 'NOT REGISTERED',
  `cpedays` varchar(15) NOT NULL DEFAULT 'NOT REGISTERED',
  `edays` varchar(15) NOT NULL DEFAULT 'NOT REGISTERED',
  `icpepmem` varchar(15) NOT NULL DEFAULT 'NOT REGISTERED',
  `icpeptb` varchar(15) NOT NULL DEFAULT 'NOT REGISTERED',
  `icpepga` varchar(15) NOT NULL DEFAULT 'NOT REGISTERED',
  `icpepchal` varchar(15) NOT NULL DEFAULT 'NOT REGISTERED',
  `icpepnatcon` varchar(15) NOT NULL DEFAULT 'NOT REGISTERED',
  `icpeplympics` varchar(15) NOT NULL DEFAULT 'NOT REGISTERED',
  `icpepcon` varchar(15) NOT NULL DEFAULT 'NOT REGISTERED'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_cpe`
--

INSERT INTO `users_cpe` (`stud_id`, `stud_sname`, `stud_fname`, `stud_mname`, `stud_year`, `stud_section`, `stud_cont`, `stud_email`, `stud_pass`, `stud_mem`, `cpega`, `cpesem`, `cpedays`, `edays`, `icpepmem`, `icpeptb`, `icpepga`, `icpepchal`, `icpepnatcon`, `icpeplympics`, `icpepcon`) VALUES
(1111111, 'Dela Cruz', 'Juan', 'Tomas', 1, 'E3E', '09000000000', 'jtdelacruz@gmail.com', '$2y$10$ETs70WNEUbQBZuJbOoxEcezGTYv/B7rlQcHAPjf6ABJadWi33R.C.', 'NOT REGISTERED', 'PENDING', 'NOT REGISTERED', 'PENDING', 'PENDING', 'NOT REGISTERED', 'NOT REGISTERED', 'NOT REGISTERED', 'NOT REGISTERED', 'NOT REGISTERED', 'NOT REGISTERED', 'NOT REGISTERED'),
(140320700, 'Karamihan', 'Kenneth', 'Caro', 5, 'E5K', '09554723947', 'kennethkaramihan@gmail.com', '$2y$10$73/v/Xr4RN3.L8rtvosedudCzhNrXkm9QjIolCe9GwxaexfmH0jdu', 'PENDING', 'NOT REGISTERED', 'PENDING', 'PENDING', 'PENDING', 'PENDING', 'PENDING', 'PENDING', 'PENDING', 'PENDING', 'PENDING', 'PENDING');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_cpe`
--
ALTER TABLE `users_cpe`
  ADD PRIMARY KEY (`stud_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
