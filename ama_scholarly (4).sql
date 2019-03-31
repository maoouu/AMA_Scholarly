-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 31, 2019 at 06:04 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ama_scholarly`
--

-- --------------------------------------------------------

--
-- Table structure for table `Metadata`
--

CREATE TABLE `Metadata` (
  `db_ID` int(11) NOT NULL,
  `db_title` varchar(255) NOT NULL,
  `db_authorFirstName1` varchar(255) NOT NULL,
  `db_authorLastName1` varchar(255) NOT NULL,
  `db_authorFirstName2` varchar(255) NOT NULL,
  `db_authorLastName2` varchar(255) NOT NULL,
  `db_authorFirstName3` varchar(255) NOT NULL,
  `db_authorLastName3` varchar(255) NOT NULL,
  `db_authorFirstName4` varchar(255) NOT NULL,
  `db_authorLastName4` varchar(255) NOT NULL,
  `db_authorFirstName5` varchar(255) NOT NULL,
  `db_authorLastName5` varchar(255) NOT NULL,
  `db_authorFirstName6` varchar(255) NOT NULL,
  `db_authorLastName6` varchar(255) NOT NULL,
  `db_category` varchar(255) NOT NULL,
  `db_authorQuantity` int(11) NOT NULL,
  `db_likes` int(11) NOT NULL,
  `db_citationMode` int(11) NOT NULL,
  `db_citationInput` varchar(355) NOT NULL,
  `db_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `db_fileName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Metadata`
--

INSERT INTO `Metadata` (`db_ID`, `db_title`, `db_authorFirstName1`, `db_authorLastName1`, `db_authorFirstName2`, `db_authorLastName2`, `db_authorFirstName3`, `db_authorLastName3`, `db_authorFirstName4`, `db_authorLastName4`, `db_authorFirstName5`, `db_authorLastName5`, `db_authorFirstName6`, `db_authorLastName6`, `db_category`, `db_authorQuantity`, `db_likes`, `db_citationMode`, `db_citationInput`, `db_date`, `db_fileName`) VALUES
(1, 'Effects of Chuchu Balachuchu', 'James', 'Doe', '', '', '', '', '', '', '', '', '', '', 'Computer Science', 1, 15, 0, '', '2019-03-08 20:16:24', ''),
(2, 'A Take on Anxiety: It\'s Causes and Effects on Students', 'James', 'Dean', '', '', '', '', '', '', '', '', '', '', 'Humanities', 1, 67, 0, '', '2019-03-09 15:31:05', ''),
(3, 'Black Holes', 'Audrey', 'Hepburn', '', '', '', '', '', '', '', '', '', '', 'Astronomy', 1, 100, 0, '', '2019-03-09 15:55:00', ''),
(4, 'Understanding Video Game Addiction', 'Vic', 'Fuentes', '', '', '', '', '', '', '', '', '', '', 'Video Games', 1, 8, 0, '', '2019-03-09 16:09:20', ''),
(10, 'Generalized Anxiety Disorder: Factors To Consider In Understanding Grade 12 Students With Generalized Anxiety Disorder And Coping With Anxiety', 'Alaejah', 'Anog', 'Maria Jelica', 'Gozo', 'Shania Janelle', 'Mauzar', '', '', '', '', '', '', 'Human Behavior', 3, 0, 2, 'Anog, A., Gozo, M. et al. Generalized Anxiety Disorder: Factors To Consider In Understanding Grade 12 Students With Generalized Anxiety Disorder And Coping With Anxiety Thesis. AMA Computer College Lucena, 2019.', '2019-03-30 21:12:40', 'Generalized Anxiety Disorder: Factors To Consider In Understanding Grade 12 Students With Generalized Anxiety Disorder And Coping With Anxiety.docx'),
(11, 'Reason For Non Usage Of Social Media Perceived By Students In Ransohan Integrated School', 'Ken Ivan', 'Amparo', 'Prince Emmanuel', 'Anggulo', 'John Kennedy', 'Asia', 'Mark Jason', 'Catalona', 'Von Irish', 'Dalumpienes', 'Jericho', 'Tamayo', 'Technology', 6, 0, 1, 'Amparo, K., Anggulo, P. AsiaJ. CatalonaM. DalumpienesV. TamayoJ. (2019). Reason For Non Usage Of Social Media Perceived By Students In Ransohan Integrated School. AMA Computer College Lucena, Lucena City, Philippines.', '2019-03-30 21:49:14', 'Reason For Non Usage Of Social Media Perceived By Students In Ransohan Integrated School.pdf'),
(12, 'RIMS (Ragit\\\'s Inventory Management System)', 'John Matthew', 'Batilo', 'Ron Ivan', 'Barola', 'Daniel', 'Cantos', 'Joshua', 'Ragit', 'Carl', 'Ramos', '', '', 'System', 5, 0, 1, 'Batilo, J., Barola, R. Cantos, D. Ragit, J. Ramos, C. (2019). RIMS (Ragit\'s Inventory Management System). AMA Computer College Lucena, Lucena City, Philippines.', '2019-03-30 22:11:08', 'RIMS (Ragit\\\'s Inventory Management System).docx');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `ID` int(11) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `user_USN` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `dateadded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`ID`, `user_fullname`, `user_USN`, `user_email`, `user_password`, `dateadded`) VALUES
(1, 'John Dale Reyes', '17001388600', 'dale.reyes@hotmail.com', '8be3c943b1609fffbfc51aad666d0a04adf83c9d', '2019-02-02 13:22:57'),
(2, 'John Harvey Reyes', '18002503800', 'iamgodly13@gmail.com', '8be3c943b1609fffbfc51aad666d0a04adf83c9d', '2019-02-02 14:18:05'),
(5, 'Vincent Oliveros', '17001282700', 'jvdo319@gmail.com', '7346a84e2a9cf8c909c453e35b72866cd5237dee', '2019-02-02 14:21:40'),
(8, 'John Doe Johnson', '12312312312', 'johndoe@microsoft.com', '8be3c943b1609fffbfc51aad666d0a04adf83c9d', '2019-03-24 12:14:57'),
(9, 'Admin', 'Admin', 'admin@secure.com', '8be3c943b1609fffbfc51aad666d0a04adf83c9d', '2019-03-24 12:35:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Metadata`
--
ALTER TABLE `Metadata`
  ADD PRIMARY KEY (`db_ID`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Metadata`
--
ALTER TABLE `Metadata`
  MODIFY `db_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
