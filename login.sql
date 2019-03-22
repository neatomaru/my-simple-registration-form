-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 22, 2019 at 04:20 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pswd` varchar(200) NOT NULL,
  `md5` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `pswd`, `md5`) VALUES
(1, 'neatomaru', '1234', '9f4007dd28d8f5044ae47f54a8b162d2'),
(2, 'NEATI', '2233', '03d5c0e087bc43c8672209677d97d000'),
(3, 'Nikita', '222', '452cae567bda1b57f1aa1da1cc877e02'),
(4, 'Vasya', '233', '214cd4e46079df2a3b7599a9a65e09c0'),
(5, 'dsasa', '133131', 'a0c02efa885c98869cf88a73e2092d94');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
