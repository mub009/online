-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2017 at 11:09 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_online_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `pk_int_category_id` int(11) NOT NULL,
  `vchr_category` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `pk_int_order_id` int(11) NOT NULL,
  `fk_int_user_id` int(11) DEFAULT NULL,
  `dat_purchase_date` date DEFAULT NULL,
  `fk_int_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`pk_int_order_id`, `fk_int_user_id`, `dat_purchase_date`, `fk_int_status_id`) VALUES
(1, 1, '2017-03-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `pk_int_order_details_id` int(11) NOT NULL,
  `int_quantity` int(11) DEFAULT NULL,
  `int_price` int(11) DEFAULT NULL,
  `fk_int_order_id` int(11) DEFAULT NULL,
  `fk_int_product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pk_int_product_id` int(11) NOT NULL,
  `vchr_product_name` varchar(200) DEFAULT NULL,
  `vchr_pic` varchar(200) DEFAULT NULL,
  `int_price` int(11) DEFAULT NULL,
  `text_product_description` text,
  `dat_created_date` date DEFAULT NULL,
  `fk_int_sub_category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `pk_int_status_id` int(11) NOT NULL,
  `vchr_status` varchar(200) NOT NULL DEFAULT 'order recieved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`pk_int_status_id`, `vchr_status`) VALUES
(1, 'order recieved'),
(2, 'shipped'),
(3, 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_category`
--

CREATE TABLE `tbl_sub_category` (
  `pk_int_sub_category_id` int(11) NOT NULL,
  `vchr_sub_category` varchar(200) DEFAULT NULL,
  `fk_int_category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `pk_int_user_id` int(11) NOT NULL,
  `vchr_name` varchar(200) DEFAULT NULL,
  `vchr_password` varchar(200) DEFAULT NULL,
  `int_mobile_number` int(11) DEFAULT NULL,
  `vchr_gender` varchar(200) DEFAULT NULL,
  `text_address` text,
  `vchr_email` varchar(200) NOT NULL,
  `fk_int_user_type_id` int(11) DEFAULT NULL,
  `dat_registration_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`pk_int_user_id`, `vchr_name`, `vchr_password`, `int_mobile_number`, `vchr_gender`, `text_address`, `vchr_email`, `fk_int_user_type_id`, `dat_registration_date`) VALUES
(1, 'athira', 'athira123', 2147483647, 'female', 'athira rtidxgccgcgc', 'athira@gmail.com', 1, '2017-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_type`
--

CREATE TABLE `tbl_user_type` (
  `pk_int_user_type_id` int(11) NOT NULL,
  `vchr_user_type` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_type`
--

INSERT INTO `tbl_user_type` (`pk_int_user_type_id`, `vchr_user_type`) VALUES
(1, 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`pk_int_category_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`pk_int_order_id`),
  ADD KEY `fk_int_user_id` (`fk_int_user_id`),
  ADD KEY `fk_int_status_id` (`fk_int_status_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`pk_int_order_details_id`),
  ADD KEY `fk_int_order_id` (`fk_int_order_id`),
  ADD KEY `fk_int_product_id` (`fk_int_product_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pk_int_product_id`),
  ADD KEY `tbl_product_ibfk_1` (`fk_int_sub_category_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`pk_int_status_id`);

--
-- Indexes for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  ADD PRIMARY KEY (`pk_int_sub_category_id`),
  ADD KEY `fk_int_category_id` (`fk_int_category_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`pk_int_user_id`),
  ADD UNIQUE KEY `int_mobile_number` (`int_mobile_number`),
  ADD KEY `fk_int_user_type_id` (`fk_int_user_type_id`);

--
-- Indexes for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  ADD PRIMARY KEY (`pk_int_user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `pk_int_category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `pk_int_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `pk_int_order_details_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pk_int_product_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `pk_int_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  MODIFY `pk_int_sub_category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `pk_int_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  MODIFY `pk_int_user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`fk_int_user_id`) REFERENCES `tbl_user` (`pk_int_user_id`),
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`fk_int_status_id`) REFERENCES `tbl_status` (`pk_int_status_id`);

--
-- Constraints for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`fk_int_order_id`) REFERENCES `tbl_order` (`pk_int_order_id`),
  ADD CONSTRAINT `tbl_order_details_ibfk_2` FOREIGN KEY (`fk_int_product_id`) REFERENCES `tbl_product` (`pk_int_product_id`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`fk_int_sub_category_id`) REFERENCES `tbl_sub_category` (`pk_int_sub_category_id`);

--
-- Constraints for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  ADD CONSTRAINT `tbl_sub_category_ibfk_1` FOREIGN KEY (`fk_int_category_id`) REFERENCES `tbl_category` (`pk_int_category_id`);

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`fk_int_user_type_id`) REFERENCES `tbl_user_type` (`pk_int_user_type_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
