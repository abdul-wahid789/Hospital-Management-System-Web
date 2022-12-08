-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 09:04 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `picture`, `full_name`, `gender`, `dob`, `blood_group`, `email`, `phone`, `address`) VALUES
(1, 'admin', 'admin', '637c83e85adbeCSE422-PC-B-Project Progress.png', 'Abdul Wahid Admin', 'Male', '2022-11-22', 'A+', 'parvezsean35@gmail.com', '01849450075', 'House no: D-12/3');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doc_id`, `patient_id`, `date`, `time`) VALUES
(1, 3, 49, '2022-11-23', '10:30AM - 11:00AM'),
(2, 1, 49, '2022-11-23', '10:00AM - 10:30AM'),
(3, 4, 58, '2022-11-23', '10:30AM - 11:00AM'),
(4, 3, 60, '2022-11-23', '10:30AM - 11:00AM'),
(5, 5, 60, '2022-11-23', '10:00AM - 10:30AM');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `username`, `password`, `department`, `speciality`, `degree`, `picture`, `full_name`, `gender`, `dob`, `blood_group`, `email`, `phone`, `address`) VALUES
(3, 'doctor', '1234', 'cardiology', 'dasd', 'dasd', '637ce9a654f5bpublic.png', 'Wahid', 'male', '2022-11-22', 'A+', 'parvezsean35@gmail.com', '343434343', 'Dhaka'),
(4, 'doc_hos', '1234', 'allergist ', 'Medicine', 'FCPSS', '637d720945333einstein-commons-wikimedia.jpg', 'DOC HOS', 'male', '2020-06-15', 'B-', 'a.elahi@gmail.com', '018464664', 'USA'),
(5, 'Elahi', '1234', 'cardiology', 'Surgery', 'MBBS', '637da65b0ef97PXL_20211122_081948276.jpg', 'Elahi Arju', 'male', '2022-11-23', 'A+', 'arju@gmail.com', '01786956098', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `medical_record`
--

CREATE TABLE `medical_record` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `nurse_id` int(11) NOT NULL,
  `heart_rate` int(11) NOT NULL,
  `body_temp` int(11) NOT NULL,
  `glue_lev` varchar(11) NOT NULL,
  `blood_p` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_record`
--

INSERT INTO `medical_record` (`id`, `patient_id`, `nurse_id`, `heart_rate`, `body_temp`, `glue_lev`, `blood_p`, `date`, `time`) VALUES
(8, 49, 3, 222, 22, '22', '12', '2022-11-22', '07:06'),
(9, 49, 3, 1212, 12, '212', '212', '2022-11-22', '07:07'),
(10, 49, 3, 1212, 12, '212', '212', '2022-11-22', '07:09'),
(11, 49, 3, 1212, 12, '212', '212', '2022-11-22', '07:09'),
(12, 49, 3, 1212, 12, '212', '212', '2022-11-22', '07:09'),
(13, 49, 3, 123, 123, '3123', '123', '2022-11-22', '07:11'),
(14, 49, 3, 1233, 1233, '1233', '1233', '2022-11-22', '09:08'),
(15, 58, 4, 11, 22, '33', '44', '2022-11-23', '06:59'),
(16, 60, 3, 80, 98, '76', '120', '2022-11-23', '10:46');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`id`, `username`, `password`, `picture`, `full_name`, `gender`, `dob`, `blood_group`, `email`, `phone`, `address`) VALUES
(1, 'asdasdNurse', 'sadasdasd', '637c82cebc9f9public.png', 'Parvez sean Nurse', 'Male', '2022-11-22', 'O+', 'parvezsean35@gmail.com', '+8801849450075', 'E-14'),
(2, 'asdasdNurse', 'sadasdasd', '637c82f0c69f7public.png', 'Parvez sean Nurse', 'Male', '2022-11-22', 'O+', 'parvezsean35@gmail.com', '+8801849450075', 'E-14'),
(3, 'nurse', '1234', '637cf46438402hms-android.png', 'Arju', 'Male', '2020-05-10', 'A+', 'parvezsean35@gmail.com', '343434343', 'Savar, Dhaka'),
(4, 'nurse_hos', '1234', '637d700a76811hms-android.png', 'Nurse Hosp', 'Male', '2022-11-08', 'AB+', 'nurse@hos.com', '0164666646', 'Uttara'),
(5, 'aya', '1234', '637da4e8cf8f6hms_logo.png', 'aya', 'Male', '2022-11-23', 'AB+', 'aya@gmail.com', '01976543422', 'Savar');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `username`, `password`, `picture`, `full_name`, `gender`, `dob`, `blood_group`, `email`, `phone`, `address`) VALUES
(49, 'wahid', '1234', '637c5fa966fd7public.png', 'Wahid p', 'Male', '2022-11-22', 'B+', 'parvezsean35@gmail.com', '+8801849450075', 'E-14'),
(58, 'arju', '1234', '637d6f4d53951arju.png', 'Elahi Arju', 'Male', '2022-11-23', 'A+', 'arju@gmail.com', '01664666562', 'Savar, Dhaka'),
(59, 'www', '1234', '637d75c9c28b9download.png', 'qwer', 'Male', '2022-11-09', 'O+', 'qwe@gag.com', '01585858', 'qweqwe'),
(60, 'patient', '1234', '637da4443e679hms_logo.png', 'Patient', 'Male', '2002-07-23', 'AB+', 'patient@gmail.com', '01877766665', 'Savar');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`id`, `username`, `password`, `picture`, `full_name`, `gender`, `dob`, `blood_group`, `email`, `phone`, `address`) VALUES
(1, 'dasdas', 'dasdasd', '637c79de76da6public.png', 'Parvez sean OH', 'Male', '2022-11-22', 'B+', 'parvezsean35@gmail.com', '+8801849450075', 'E-14'),
(2, 'pharma', '1234', '637d6fb95257bCSE422-PC-B-Project Progress.png', 'Pharma Hos', 'Male', '2022-11-22', 'A+', 'phar@hos.com', '01654641', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `medicine_tine` varchar(255) NOT NULL,
  `realtion_meal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`id`, `username`, `password`, `picture`, `full_name`, `gender`, `dob`, `blood_group`, `email`, `phone`, `address`) VALUES
(1, 'sas', 'sasas', '637c730d94bffpublic.png', 'Parvez sean', 'female', '2022-11-22', 'A-', 'parvezsean35@gmail.com', '+8801849450075', 'E-14'),
(2, 'sas', 'sasas', '637c7310e39ccpublic.png', 'Parvez sean', 'female', '2022-11-22', 'A-', 'parvezsean35@gmail.com', '+8801849450075', 'E-14'),
(3, 'sas', '1234', '637ced6276ed0hms-android.png', 'parvez sean', 'male', '2022-11-22', 'A+', 'parvezsean35@gmail.com', '343434343', 'Dhaka'),
(4, 'rec', '1234', '637ced84b0ea5public.png', 'parvez sean', 'male', '2022-11-22', 'A+', 'parvezsean35@gmail.com', '343434343', 'Dhaka'),
(6, 'recp', '1235', '637da70e65433hms_logo.png', 'recp', 'female', '2022-11-23', 'A+', 'recp@gmail.com', '1234567891', 'savar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medical_record`
--
ALTER TABLE `medical_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
