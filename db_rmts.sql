-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 07:24 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rmts`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bridge_type`
--

CREATE TABLE `tbl_bridge_type` (
  `bridge_type_id` int(11) NOT NULL,
  `bridge_type_name` varchar(40) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_inspection`
--

CREATE TABLE `tbl_data_inspection` (
  `inspection_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_defects`
--

CREATE TABLE `tbl_defects` (
  `defect_ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `Dep_ID` int(50) NOT NULL,
  `Department_name` varchar(50) NOT NULL,
  `Department_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`Dep_ID`, `Department_name`, `Department_description`) VALUES
(1, 'laboratory department', 'department that tests construction materials'),
(2, 'Maintenance department', 'Manages progress of projects,inspects budget '),
(3, 'production department', 'produces row materials for construction'),
(4, 'Data collector', 'collects data which will be used as row input for projects');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `District_id` int(50) NOT NULL,
  `District_name` varchar(50) NOT NULL,
  `Disrict_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`District_id`, `District_name`, `Disrict_description`) VALUES
(1, 'North Addis ababa district', 'North addis abab district including yeka sub city and some part of bole sub city'),
(2, 'south Addis ababa district', 'south addis ababa district including kolfe keranio sub city and some part of gulele and ldeta sub city'),
(3, 'West addis Ababa', 'west addis ababa district including Gulele and arada sub city and some part of gulele and ldeta sub city'),
(4, 'East Addis Ababa district', 'east addis ababa district');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drinage_type`
--

CREATE TABLE `tbl_drinage_type` (
  `drinage_type_id` int(11) NOT NULL,
  `drinage_type` varchar(40) NOT NULL,
  `drinage_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laboratories`
--

CREATE TABLE `tbl_laboratories` (
  `lab_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_machinery`
--

CREATE TABLE `tbl_machinery` (
  `machinery_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maintainance_projects`
--

CREATE TABLE `tbl_maintainance_projects` (
  `project_ID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_priority`
--

CREATE TABLE `tbl_priority` (
  `priority_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_production_plant`
--

CREATE TABLE `tbl_production_plant` (
  `Plant_id` int(50) NOT NULL,
  `Production_plant_name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Date_registered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resource_allocation`
--

CREATE TABLE `tbl_resource_allocation` (
  `Allocation_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roadfurniture_type`
--

CREATE TABLE `tbl_roadfurniture_type` (
  `roadfurniture_type_id` int(10) NOT NULL,
  `roadfurniture_name` varchar(40) NOT NULL,
  `roadfurniture_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_road_asset`
--

CREATE TABLE `tbl_road_asset` (
  `road_number` int(11) NOT NULL,
  `road_name` varchar(100) NOT NULL,
  `origin` varchar(100) NOT NULL,
  `block_number` int(100) NOT NULL,
  `measured_Length` int(100) NOT NULL,
  `start_chainage` varchar(100) NOT NULL,
  `start_description` varchar(100) NOT NULL,
  `End_chainage` varchar(100) NOT NULL,
  `End_description` varchar(100) NOT NULL,
  `surface_type` varchar(100) NOT NULL,
  `surface_width` varchar(100) NOT NULL,
  `carriage_way` varchar(100) NOT NULL,
  `no_lanes` int(100) NOT NULL,
  `no_ways` int(100) NOT NULL,
  `sub_city_ID` varchar(100) NOT NULL,
  `Start_code` varchar(100) NOT NULL,
  `end_code` varchar(100) NOT NULL,
  `road_class_ID` int(100) NOT NULL,
  `rate` int(100) NOT NULL,
  `survey_date` date NOT NULL,
  `District_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_road_class`
--

CREATE TABLE `tbl_road_class` (
  `class_id` int(40) NOT NULL,
  `RoadclassName` varchar(40) NOT NULL,
  `road_class_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_road_class`
--

INSERT INTO `tbl_road_class` (`class_id`, `RoadclassName`, `road_class_description`) VALUES
(1, 'pss', 'new road'),
(2, 'psas', 'ifif jjkj jbj');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_road_segment`
--

CREATE TABLE `tbl_road_segment` (
  `segment_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `Role_ID` int(50) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `Role_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`Role_ID`, `role_name`, `Role_description`) VALUES
(1, 'central', 'central administrator who manages all of districts'),
(2, 'District', 'has privilege in its districts');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `Staff_ID` int(50) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Middle_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Birth_date` varchar(50) NOT NULL,
  `Hire_date` varchar(50) NOT NULL,
  `salary` int(50) NOT NULL,
  `academic_level` varchar(50) NOT NULL,
  `District_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`Staff_ID`, `First_name`, `Middle_name`, `Last_name`, `Gender`, `Birth_date`, `Hire_date`, `salary`, `academic_level`, `District_id`) VALUES
(1, 'bihan', 'nega', 'cheru', 'Male', '12/2/1992', '6/2/1992', 3000, 'Degree', 1),
(2, 'Efrem', 'mulu', 'Areya', 'Male', '12/2/1992', '6/2/1992', 5000, 'Degree', 2),
(3, 'tenkr', 'dino', 'Mohammed', 'Male', '12/2/1945', '6/2/1992', 3000, 'Degree', 1),
(4, 'tesfaye', 'desalegn', 'urgessa', 'Male', '12/2/1992', '6/2/1992', 3000, 'Degree', 3),
(5, 'wude', 'dugasa', 'lemesa', 'Male', '12/2/1992', '6/2/1992', 3000, 'Degree', 2),
(6, 'seid', 'nur', 'ahmed', 'Male', '12/2/1992', '6/2/1992', 3000, 'Degree', 3),
(7, 'Dawud', 'Meeruf', 'Abdela', 'Male', '12/2/1992', '8/2/1992', 6000, 'Degree', 1),
(8, 'usman', 'dawud', 'meeruf', 'Male', '12/2/2008', '8/2/1992', 5000, 'Degree', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `Staff_ID` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Role_ID` varchar(50) NOT NULL,
  `Date_created` varchar(50) NOT NULL,
  `Registered_by` varchar(50) NOT NULL,
  `Dep_ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`Staff_ID`, `user_name`, `password`, `Role_ID`, `Date_created`, `Registered_by`, `Dep_ID`) VALUES
('1', 'birhan', '12345', '2', '', '', ''),
('2', 'efa', 'efa', '5', '', '', ''),
('3', 'admin', 'admin', '1', '', '', ''),
('4', 'tes', 'tes123', '4', '', '', ''),
('6', 'seid', '124', '1', '', '', ''),
('7', 'laboratory', 'birhan', '3', '17/2/2018', 'Birhan', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_walkway_type`
--

CREATE TABLE `tbl_walkway_type` (
  `walkway_type_id` int(11) NOT NULL,
  `walkway_name` varchar(40) NOT NULL,
  `walkway_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_walkway_type`
--

INSERT INTO `tbl_walkway_type` (`walkway_type_id`, `walkway_name`, `walkway_description`) VALUES
(1, 'Asphalt', 'Asphalt walkway_');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data_inspection`
--
ALTER TABLE `tbl_data_inspection`
  ADD PRIMARY KEY (`inspection_id`);

--
-- Indexes for table `tbl_defects`
--
ALTER TABLE `tbl_defects`
  ADD PRIMARY KEY (`defect_ID`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`Dep_ID`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`District_id`);

--
-- Indexes for table `tbl_laboratories`
--
ALTER TABLE `tbl_laboratories`
  ADD PRIMARY KEY (`lab_id`);

--
-- Indexes for table `tbl_machinery`
--
ALTER TABLE `tbl_machinery`
  ADD PRIMARY KEY (`machinery_id`);

--
-- Indexes for table `tbl_maintainance_projects`
--
ALTER TABLE `tbl_maintainance_projects`
  ADD PRIMARY KEY (`project_ID`);

--
-- Indexes for table `tbl_priority`
--
ALTER TABLE `tbl_priority`
  ADD PRIMARY KEY (`priority_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_production_plant`
--
ALTER TABLE `tbl_production_plant`
  ADD PRIMARY KEY (`Plant_id`);

--
-- Indexes for table `tbl_resource_allocation`
--
ALTER TABLE `tbl_resource_allocation`
  ADD PRIMARY KEY (`Allocation_id`);

--
-- Indexes for table `tbl_road_asset`
--
ALTER TABLE `tbl_road_asset`
  ADD PRIMARY KEY (`road_number`);

--
-- Indexes for table `tbl_road_class`
--
ALTER TABLE `tbl_road_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_road_segment`
--
ALTER TABLE `tbl_road_segment`
  ADD PRIMARY KEY (`segment_id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`Role_ID`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- Indexes for table `tbl_walkway_type`
--
ALTER TABLE `tbl_walkway_type`
  ADD PRIMARY KEY (`walkway_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `Dep_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `District_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_road_class`
--
ALTER TABLE `tbl_road_class`
  MODIFY `class_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `Role_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `Staff_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_walkway_type`
--
ALTER TABLE `tbl_walkway_type`
  MODIFY `walkway_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
