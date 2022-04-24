-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2022 at 03:15 PM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16383182_freeindiapostdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`) VALUES
(1, 'salil', 'salilrbhagat@gmail.com', 'salil');

-- --------------------------------------------------------

--
-- Table structure for table `bulletin`
--

CREATE TABLE `bulletin` (
  `id` int(11) NOT NULL,
  `bulletin` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bulletin`
--

INSERT INTO `bulletin` (`id`, `bulletin`) VALUES
(2, 'Welcome to \"FREE INDIA POST\". Make sure you visit our other social contacts.'),
(4, 'Zoom anxiety is still a major problem, one year into the pandemic'),
(9, 'Samsung to launch new A series phones');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=REDUNDANT;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `des`) VALUES
(1, 'World', 'World'),
(2, 'Politics', 'Politics'),
(3, 'Business', 'Business'),
(4, 'E-sports', 'E-sports/Gaming'),
(5, 'Science', 'Science'),
(6, 'Technology', 'Technology'),
(7, 'Entertainment', 'Entertainment'),
(8, 'Economy', 'Economy'),
(9, 'Arts/Culture', 'Arts and Culture'),
(10, 'Environment', 'Environment'),
(11, 'Travel', 'Travel'),
(12, 'Europe', 'Europe'),
(13, 'Oceania', 'Oceania'),
(14, 'North America', 'North America'),
(15, 'South America', 'South America'),
(16, 'Asia', 'Asia'),
(17, 'Travel1', 'Travel11');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `comment`) VALUES
(1, 'vivek kumar pandey', 'vivek65k@gmail.com', 'this is vivek');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `description2` text NOT NULL,
  `description3` text NOT NULL,
  `description4` text NOT NULL,
  `thumbnail2` varchar(225) NOT NULL,
  `thumbnail3` varchar(225) NOT NULL,
  `thumbnail4` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`, `category`, `thumbnail`, `admin`, `author`, `description2`, `description3`, `description4`, `thumbnail2`, `thumbnail3`, `thumbnail4`) VALUES
(1, 'INTRODUCTION', 'HELLO PEOPLE!!!\r\nWE ARE HAPPY TO ANNOUNCE THAT THE PROJECT “The Political Flow” WE HAD BEEN WORKING ON, HAS FINALLY COMPLETED ITS INITIAL DEVELOPMENT.\r\nWe are very excited to serve you with our services and as concrete information as possible.  ', '2021-03-16', 'World', 'fiplogo 512.png', 'salil', 'F.I.P TEAM', ' “The Political Flow” is initially the independent digital news/journalism website. We provide unbiased news and fact-checked information on this website. We will be covering most of the world’s important current affairs and past, present, and future actions.', ' This is our first ever post/article on this site, so we would like to ask you to please support us on every social media above for exclusive content and notifications of every single article/post we publish. Also, subscribe to us on YouTube for a variety of videos on world affairs.', ' We are ready to start our journey are you with us?\r\n\r\n-	SALIL BHAGAT ( C.E.O)', 'fip 720p.png', 'fip 720p social.png', 'support.png'),
(2, 'Israel Will Continue Disregarding International Law', 'Now, along with Sudan, there are five Arab countries that recognize Israel, and there are rumors that others like Oman will join the bandwagon. This recent development could have implications for the Palestinians, including the bitter realization that Arab and Muslim countries are betraying them. A 2019 poll by the Palestinian Center for Policy and Survey Research found that nearly 80% of Palestinians feel they are abandoned by Arab states.\r\n\r\nThe task of bringing Israel into compliance with its obligations as the occupying power vis-à-vis the Palestinians has become ever more convoluted. UN Security Council resolutions addressing the Israeli–Palestinian conflict are routinely disregarded by the Israelis. A case in point is the Security Council Resolution 2334, adopted in 2016, which terms Israel’s settlements in the Occupied Palestinian Territories as “a flagrant violation under international law.”    ', '2020-11-21', 'World', 'NECK TURN.jpg', 'salil', 'sumit rajpure', '', '', '', '', '', ''),
(3, 'pointing either in the same or opposite direction (depending on their initial alignment)', 'The task of bringing Israel into compliance with its obligations as the occupying power vis-à-vis the Palestinians has become ever more convoluted. UN Security Council resolutions addressing the Israeli–Palestinian conflict are routinely disregarded by the Israelis. A case in point is the Security Council Resolution 2334, adopted in 2016, which terms Israel’s settlements in the Occupied Palestinian Territories as “a flagrant violation under international law.”     ', '2020-11-22', 'World', 'neck 3.JPG', 'salil', 'sumit rajpure', '', '', '', '', '', ''),
(4, 'The align command is a combination of the rotate and ', '  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"  width=\"800\" height=\"400\"     ', '2020-11-24', 'World', '1920.png', 'salil', 'sumit rajpure', '', '', '', '', '', ''),
(5, 'CBSE Exam 2021: Board Announces Practical Exam Dates, Issues Fresh SOPs For Schools ', 'Speaking during a webinar on New Education Policy (NEP), Tripathi ended all speculations and asserted that board exams will happen for sure. He asserted that the CBSE is making plans and will soon reveal how it will do test assessments.  ', '2020-11-26', 'World', 'Capture.PNG', 'salil', 'salil bhagat', '', '', '', '', '', ''),
(6, 'At 6.9 Degrees', 'At 6.9 Degrees, Delhi Records Coldest November Morning In 17 YearsAt 6.9 Degrees, Delhi Records Coldest November Morning In 17 YearsAt 6.9 Degrees, Delhi Records Coldest November Morning In 17 YearsAt 6.9 Degrees, Delhi Records Coldest November Morning In 17 YearsAt 6.9 Degrees, Delhi Records Coldest November Morning In 17 YearsAt 6.9 Degrees, Delhi Records Coldest November Morning In 17 Years\r\nAt 6.9 Degrees, Delhi Records Coldest November Morning In 17 YearsAt 6.9 Degrees, Delhi Records Coldest November Morning In 17 Years   ', '2020-11-30', 'Lifestyle', 'neck 1.JPG', 'salil', 'sumit rajpure', '', '', '', '', '', ''),
(7, 'At 6.9 Degrees, Delhi Records Coldest November Morning In 17 Years', 'At 6.9 Degrees, Delhi At 6.9 Degrees, Delhi Records Coldest November Morning In 17 YearsRecords Coldest November Morning In 17 Years', '2020-12-01', 'Business', 'Capture.PNG', 'salil', 'barkha', '', '', '', '', '', ''),
(8, 'Coronavirus pandemic live updates: Odisha governor’s wife dies of post-Covid complications', 'Coronavirus pandemic live updates: Odisha governor’s wife dies of post-Covid complicationsCoronavirus pandemic live updates: Odisha governor’s wife dies of post-Covid complicationsCoronavirus pandemic live updates: Odisha governor’s wife dies of post-Covid complicationsCoronavirus pandemic live updates: Odisha governor’s wife dies of post-Covid complications   ', '2020-12-08', 'World', 'neck 2.JPG', 'salil', 'pritesh tambe1', '', '', '', '', '', ''),
(9, 'ddadadds sd sadsds F fafad', 'vdfsesdsscscwdwccwdsxccsscscxcxacacccaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2020-12-03', 'Business', 'neck 3.JPG', 'salil', 'barkha69', '', '', '', '', '', ''),
(10, 'Can Australia and India Effectively Partner for COVID-19 Vaccine Roll-out?', 'Australia is well-positioned to help roll-out a COVID-19 vaccine across the Pacific and Southeast Asia; India’s vaccine manufacturing capability would be a huge boost to that effort\r\nwww.instagram.com', '2020-12-12', 'Politics', 'NECK TURN.jpg', 'salil', 'salil bhagat 23', '', '', '', '', '', ''),
(68, 'test', 'http://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.phphttp://localhost/news/allcategories.php ', '2020-12-18', 'World', '1.jpg', 'salil', 'sumit rajpure', '', '', '', '', '', ''),
(69, 'test 2', 'test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 ', '2020-12-19', 'Science and Technology', '1.jpg', 'salil', 'pritesh tambe', '      test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 ', '      test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 ', '      test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 test 2 ', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bulletin`
--
ALTER TABLE `bulletin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bulletin`
--
ALTER TABLE `bulletin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
