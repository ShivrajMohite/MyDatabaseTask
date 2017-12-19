-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2017 at 04:26 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(2) NOT NULL,
  `EMPNO` int(10) NOT NULL,
  `ENAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `JOB` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `MGR` int(5) NOT NULL,
  `HIREDATE` date NOT NULL,
  `SAL` int(10) NOT NULL,
  `COMM` int(5) NOT NULL,
  `DEPTNO` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `EMPNO`, `ENAME`, `JOB`, `MGR`, `HIREDATE`, `SAL`, `COMM`, `DEPTNO`) VALUES
(1, 7369, 'Smith ', 'Clerk', 7816, '1983-10-19', 800, 200, 30),
(3, 7521, 'Ward', 'Salesman', 7622, '1981-02-22', 1100, 500, 20),
(5, 7834, 'Martin', 'Salesman', 7600, '1980-05-12', 1250, 300, 30),
(6, 7423, 'Blake', 'Manager', 7839, '1981-05-29', 1700, 0, 10),
(9, 7081, 'Viraj', 'President', 0, '1979-01-01', 4000, 0, 10),
(10, 7813, 'Turner', 'Salesman', 7812, '1982-09-05', 1300, 100, 30),
(11, 7599, 'Martinmnn', 'Salesman', 7600, '1980-05-12', 1250, 300, 30),
(12, 7412, 'James', 'Clerk', 7521, '1980-03-20', 1700, 0, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
