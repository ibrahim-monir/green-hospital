-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2022 at 11:21 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `reason` varchar(255) NOT NULL,
  `is_new` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `doctor_id`, `date`, `reason`, `is_new`, `status`) VALUES
(1, 1, 2, '2022-06-25', 'fever', 'yes', 'pending'),
(2, 3, 2, '2022-06-26', 'fever', 'yes', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `beds`
--

CREATE TABLE `beds` (
  `id` int(11) NOT NULL,
  `bed_name` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beds`
--

INSERT INTO `beds` (`id`, `bed_name`, `category_id`, `price`, `status`) VALUES
(1, 'G-001', 3, 500, 'Free'),
(2, 'G-002', 3, 500, 'Booked'),
(3, 'G-003', 3, 500, 'Free'),
(4, 'G-004', 3, 500, 'Free'),
(5, 'D-001', 1, 1000, 'Free'),
(6, 'D-002', 1, 1000, 'Free'),
(7, 'S-001', 2, 1500, 'Booked'),
(8, 'S-002', 2, 1500, 'Free');

-- --------------------------------------------------------

--
-- Table structure for table `bed_booking`
--

CREATE TABLE `bed_booking` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `bed_id` int(11) DEFAULT NULL,
  `allotment` varchar(255) DEFAULT NULL,
  `discharge` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed_booking`
--

INSERT INTO `bed_booking` (`id`, `patient_id`, `bed_id`, `allotment`, `discharge`) VALUES
(1, 2, 7, '2022-07-13', '2022-07-19'),
(28, 1, 2, '2022-07-13', '2022-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `bed_categories`
--

CREATE TABLE `bed_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed_categories`
--

INSERT INTO `bed_categories` (`id`, `name`) VALUES
(1, 'Delux'),
(2, 'Super Delux'),
(3, 'General');

-- --------------------------------------------------------

--
-- Table structure for table `blood_groups`
--

CREATE TABLE `blood_groups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'Square Pharmaceuticals'),
(2, 'Globe Pharmaceuticals'),
(3, 'Pharmasia Pharmaceuticals Limited'),
(4, 'Beximco Pharmaceuticals');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `status` enum('active','deactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `status`) VALUES
(1, 'Medicine\r\n', 'lorem ipsum doller sit ammet ', 'active'),
(2, 'kkkk', 'yyyyy', 'active'),
(3, 'Gynocology', 'dddd', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `diagnoses`
--

CREATE TABLE `diagnoses` (
  `id` int(11) NOT NULL,
  `reportnumber` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `average_glucose` varchar(255) DEFAULT NULL,
  `blood_sugar` varchar(255) DEFAULT NULL,
  `unrine_sugar` varchar(255) DEFAULT NULL,
  `blood_pressure` varchar(255) DEFAULT NULL,
  `diabetes` varchar(255) DEFAULT NULL,
  `cholesterol` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diagonoses_cat`
--

CREATE TABLE `diagonoses_cat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `gender` enum('male','female','shemale') DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `designation` varchar(50) NOT NULL,
  `doctor_type` enum('permanent','contract') NOT NULL,
  `shortbio` longtext,
  `details` longtext,
  `specialist` varchar(50) NOT NULL,
  `department_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `username`, `email`, `mobile_number`, `password`, `full_name`, `dob`, `gender`, `age`, `address`, `photo`, `designation`, `doctor_type`, `shortbio`, `details`, `specialist`, `department_id`) VALUES
(1, 'monzur', 'monzur707@gmail.com', '01786860880', '202cb962ac59075b964b07152d234b70', 'Monzur Alam', '', 'male', 23, 'Rangpur, Bangladesh', '', 'MBBS, Medicine', 'permanent', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\n', 'Medicine', 1),
(2, 'rufaida', 'rufaida123@gmail.com', '01711221122', '21232f297a57a5a743894a0e4a801fc3', 'Rufaida Jannat', '', 'male', 3, 'Gazipur, Bangladesh', '', 'Gynaecologist', 'permanent', 'sss', '', 'fever', 2),
(3, 'ddd', 'faisal@viserx.com', '343434343434', 'd41d8cd98f00b204e9800998ecf8427e', 'Monzur Alam', '2022-04-18', 'male', 33, 'uttara', '', 'MBBS', 'contract', 'yrdry', 'yrdy', 'ffff', 2),
(5, 'alex', 'alex@gmail.com', '0233232323', 'd1d78f12fbe4f200d9a03fad3cbdea9d', 'alex piter', '2022-04-18', 'male', 32, 'uttara', '', 'MBBS', 'permanent', 'test', 'eeeee', 'WP DEV', 2),
(6, 'eeeee', 'x23@sarticle.com', '23232323233', 'b3ebefdd550097a82138605542a0eb33', 'testddddddd', '2022-04-18', 'male', 22, '', '', '2333', 'permanent', '333', '333', 'WP', 1),
(8, 'alex', 'alex@gmail.com', '0233232323', 'd1d78f12fbe4f200d9a03fad3cbdea9d', 'alex piter', '2022-04-18', 'male', 32, 'uttara', '', 'MBBS', 'permanent', 'testff', 'eeeee', 'Development', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donars`
--

CREATE TABLE `donars` (
  `id` int(11) NOT NULL,
  `blood_group_id` int(11) DEFAULT NULL,
  `last_donation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `donar_id` int(11) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `generic_name` varchar(255) DEFAULT NULL,
  `other_brand_name` varchar(255) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `buy_price` int(11) DEFAULT NULL,
  `sell_price` int(11) DEFAULT NULL,
  `side_effect` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `generic_name`, `other_brand_name`, `brand_id`, `category_id`, `buy_price`, `sell_price`, `side_effect`, `description`) VALUES
(1, 'Napa', 'paracetamol', 'Ace, Fea, Reset', 4, 1, 8, 10, 'No side effect', 'lorem ipsum doller sit ammet'),
(2, 'Op - 20', 'omeprazol', 'Ometid, Seclo, Finix', 2, 1, 4, 5, 'no side effect', 'lorem'),
(3, 'Ticamet 250', 'Salmeterol Xinafoate BP & Fluticasone Propionate BP', 'N/A', 1, 1, 11, 12, 'N/A', 'lorem ipsum doller sit ammet');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_cat`
--

CREATE TABLE `medicine_cat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_cat`
--

INSERT INTO `medicine_cat` (`id`, `name`, `status`) VALUES
(1, 'General', 1),
(2, 'Sergical', 0);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_pricription`
--

CREATE TABLE `medicine_pricription` (
  `id` int(11) NOT NULL,
  `medicine_id` int(11) DEFAULT NULL,
  `pricription_id` int(11) DEFAULT NULL,
  `instruction` text,
  `dose` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_pricription`
--

INSERT INTO `medicine_pricription` (`id`, `medicine_id`, `pricription_id`, `instruction`, `dose`, `duration`) VALUES
(1, 1, 9201485, 'testea eaea', '1+0+1', '7'),
(2, 1, 4526696, 'testea eaea', '1+0+1', '7'),
(3, 2, 4526696, 'test', '1+0+1', '7');

-- --------------------------------------------------------

--
-- Table structure for table `nurses`
--

CREATE TABLE `nurses` (
  `id` int(11) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `mobile_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurses`
--

INSERT INTO `nurses` (`id`, `email_address`, `password`, `full_name`, `mobile_number`) VALUES
(1, 'sarmin@hms.test', '202cb962ac59075b964b07152d234b70', 'Sharmin Akter', '01711-112211'),
(2, 'asha@hms.test', '202cb962ac59075b964b07152d234b70', 'Asha Akter', '01711-112211');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `gender` enum('male','female','shemale') DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `description` text,
  `status` varchar(100) NOT NULL,
  `date` varchar(99) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `username`, `password`, `mobile_number`, `full_name`, `dob`, `gender`, `age`, `address`, `photo`, `description`, `status`, `date`, `doctor_id`) VALUES
(1, 'shakil', '6c5d16410cc9251e69a8e42846b56308', '017111111111', 'Shakil Ahmed', '12/07/2004', 'male', 15, 'rangpur', 'http://hms.test/admin/assets/images/xs/avatar4.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.\r\n\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.\r\n\r\n', 'approved', '2022-06-22', 2),
(2, 'Humaira', 'edfb6e81ed3dca77bd1edb1e1bbfa535', '017111111111', 'Humaira binte abdul halim', '12/07/2006', 'male', 12, 'rangpur', '/admin/assets/images/xs/avatar4.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.\r\n\r\n', 'pending', '22/2/22', 1),
(3, 'suzan', '202cb962ac59075b964b07152d234b70', '0171221122`', 'Suzan Mia', '12/22/23', 'male', 22, 'test', 'http://hms.test/admin/assets/images/xs/avatar4.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.\r\n\r\n', 'pending', '2022-06-22', 1),
(4, 'hello', '202cb962ac59075b964b07152d234b70', '017', 'hello', '12/2/22', 'male', 12, 'test location', 'http://hms.test/admin/assets/images/xs/avatar4.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.\r\n\r\n', 'approved', '2022-06-22', 1),
(5, NULL, '202cb962ac59075b964b07152d234b70', '01777', 'fontawesome', NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '22-07-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` int(11) NOT NULL,
  `case_history` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `appointments_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `case_history`, `date`, `appointments_id`) VALUES
(4526696, 'test test', '2022-07-15', 1),
(9201485, 'testy', '2022-07-14', 2);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `subject` text,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `email`, `mobile`, `subject`, `message`) VALUES
(1, 'Monzur', 'monzur@viserx.com', '01786860880', 'General', 'Test message.'),
(2, 'Monzur', 'x40@sarticle.com', '0177777771', 'test', 'stest');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `ratings` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `beds`
--
ALTER TABLE `beds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `bed_booking`
--
ALTER TABLE `bed_booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `bed_id` (`bed_id`);

--
-- Indexes for table `bed_categories`
--
ALTER TABLE `bed_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_groups`
--
ALTER TABLE `blood_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnoses`
--
ALTER TABLE `diagnoses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `test_id` (`test_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `diagonoses_cat`
--
ALTER TABLE `diagonoses_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `donars`
--
ALTER TABLE `donars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blood_group_id` (`blood_group_id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donar_id` (`donar_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `medicine_cat`
--
ALTER TABLE `medicine_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_pricription`
--
ALTER TABLE `medicine_pricription`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `pricription_id` (`pricription_id`),
  ADD KEY `medicine_id` (`medicine_id`);

--
-- Indexes for table `nurses`
--
ALTER TABLE `nurses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `appointments_id` (`appointments_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `beds`
--
ALTER TABLE `beds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bed_booking`
--
ALTER TABLE `bed_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `bed_categories`
--
ALTER TABLE `bed_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blood_groups`
--
ALTER TABLE `blood_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `diagnoses`
--
ALTER TABLE `diagnoses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diagonoses_cat`
--
ALTER TABLE `diagonoses_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donars`
--
ALTER TABLE `donars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicine_cat`
--
ALTER TABLE `medicine_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicine_pricription`
--
ALTER TABLE `medicine_pricription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nurses`
--
ALTER TABLE `nurses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9201486;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `beds`
--
ALTER TABLE `beds`
  ADD CONSTRAINT `beds_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `bed_categories` (`id`);

--
-- Constraints for table `bed_booking`
--
ALTER TABLE `bed_booking`
  ADD CONSTRAINT `bed_booking_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `bed_booking_ibfk_2` FOREIGN KEY (`bed_id`) REFERENCES `beds` (`id`);

--
-- Constraints for table `diagnoses`
--
ALTER TABLE `diagnoses`
  ADD CONSTRAINT `diagnoses_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `diagonoses_cat` (`id`),
  ADD CONSTRAINT `diagnoses_ibfk_2` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`),
  ADD CONSTRAINT `diagnoses_ibfk_3` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `diagnoses_ibfk_4` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `donars`
--
ALTER TABLE `donars`
  ADD CONSTRAINT `donars_ibfk_1` FOREIGN KEY (`blood_group_id`) REFERENCES `blood_groups` (`id`);

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_ibfk_1` FOREIGN KEY (`donar_id`) REFERENCES `donars` (`id`),
  ADD CONSTRAINT `donations_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `medicines`
--
ALTER TABLE `medicines`
  ADD CONSTRAINT `medicines_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `medicines_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `medicine_cat` (`id`);

--
-- Constraints for table `medicine_pricription`
--
ALTER TABLE `medicine_pricription`
  ADD CONSTRAINT `medicine_pricription_ibfk_1` FOREIGN KEY (`pricription_id`) REFERENCES `prescriptions` (`id`),
  ADD CONSTRAINT `medicine_pricription_ibfk_2` FOREIGN KEY (`medicine_id`) REFERENCES `medicines` (`id`);

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_ibfk_1` FOREIGN KEY (`appointments_id`) REFERENCES `appointments` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `patients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
