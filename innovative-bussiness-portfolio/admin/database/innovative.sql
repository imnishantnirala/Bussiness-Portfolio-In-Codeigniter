-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 12:56 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `innovative`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_img` varchar(255) NOT NULL,
  `about_banner` varchar(255) NOT NULL,
  `about_taxt` text NOT NULL,
  `date/time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_title`, `about_img`, `about_banner`, `about_taxt`, `date/time`) VALUES
(1, 'About Us', '6933_1583091085_about.png', '5656_1583091085_aboutus.png', '<p><span style=\"color:#e74c3c\"><span style=\"background-color:#2ecc71\">innovative</span></span> IT is a much sought after name in the IT industry, with a host of achievements in offering effective Web</p>\r\n\r\n<p><span style=\"color:#e74c3c\">innovative</span> IT is a much sought after name in the IT industry, with a host of achievements in offering effective Web</p>\r\n\r\n<p>in</p>\r\n\r\n<p><u><em>innovative IT is a much sought after name in the IT industry, with a host of achievements in offering effective Web</em></u></p>\r\n\r\n<p><u><em>in</em></u></p>\r\n\r\n<p>innovative IT is a much sought after name in the IT industry, with a host of achievements in offering effective Web</p>\r\n\r\n<p>in</p>\r\n', '2020-03-14 16:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_title` varchar(255) NOT NULL,
  `banner_tag` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `banner_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_title`, `banner_tag`, `description`, `banner_img`) VALUES
(18, 'Web Development ', 'Innovative It', 'Helping Growing Business & Maximize Benefits from the Right Solution', '9584_1583276802_9856_1582711140_seo-2394237_1280.jpg'),
(19, 'Web Development ', 'For Better Products', 'for test', '6785_1583922438_7935_1582711550_57231782-home-office-interior-stylish-workspace-on-home-or-studio-vector-flat-design-of-modern-home-office-in.jpg'),
(21, 'Server Installation', 'Server', 'for test', '4694_1583925022_banner2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `id` int(11) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`id`, `image_title`, `image`, `date_time`) VALUES
(1, 'asjkdsdj', '1936_1583577615_509938.jpg', '2020-03-07 10:40:15'),
(2, 'demo', '3368_1583577626_509938.jpg', '2020-03-07 10:40:26'),
(3, 'demo', '5154_1583577654_509938.jpg', '2020-03-07 10:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `details_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `company_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`details_id`, `company_name`, `company_email`, `company_no`, `address`) VALUES
(1, 'innovative-It', 'info@innovativeit.com', '9218840927', 'Innovative-It, Surya Kiran Colony, P.O Chamba Ghat, Solan - 173213');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_num` varchar(255) NOT NULL,
  `c_subject` varchar(255) NOT NULL,
  `c_message` varchar(255) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_email`, `c_num`, `c_subject`, `c_message`, `c_date`) VALUES
(1, 'NISHANT KUMAR NIRALA', 'hello@gmai.com', '1234567891', 'PHP Development', 'hy nishant', '2020-02-10 10:17:14'),
(2, 'Manish Kumar', 'hello123@gmail.com', '2147483647', '.NET Development', 'hy im manish', '2020-02-10 10:17:22'),
(6, 'NISHANT KUMAR NIRALA', 'hello@gmai.com', '7703865824', 'php development', 'as', '2020-02-10 10:36:15'),
(7, 'php', 'hello@gmai.com', '7703865824', 'php development', 'helooooooooooooooooo', '2020-02-12 08:15:51'),
(8, 'Amit', 'amit@apsmind', '95557287777', 'server ', 'test my team', '2020-03-11 11:05:17'),
(9, 'NISHANT KUMAR NIRALA', 'hello@gmai.com', '7703865824', 'php development', 'a;l', '2020-03-13 11:38:55'),
(10, 'NISHANT KUMAR NIRALA', 'hello@gmai.com', '7703865824', 'php development', 'test', '2020-03-14 16:56:52'),
(11, 'NISHANT KUMAR NIRALA', 'hello@gmai.com', '7703865824', 'php development', 'aKL', '2020-03-14 16:57:20'),
(12, 'NISHANT KUMAR NIRALA', 'hello@gmai.com', '7703865824', 'php development', 'jsck', '2020-03-14 16:58:25'),
(13, 'NISHANT KUMAR NIRALA', 'hello@gmai.com', '7703865824', 'php development', 'jsck', '2020-03-14 16:59:32'),
(14, 'NISHANT KUMAR NIRALA', 'hello@gmai.com', '7703865824', 'php development', 'mklz', '2020-03-14 16:59:55'),
(15, 'NISHANT KUMAR NIRALA', 'hello@gmai.com', '7703865824', 'php development', 'mklz', '2020-03-14 17:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `demo_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `phone` int(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`demo_id`, `name`, `email`, `pass`, `phone`, `country`, `city`, `time`) VALUES
(11, 'NISHANT KUMAR NIRALA', 'hello@gmai.com', '123', 123344, 'india', 'namb', '2020-03-06 23:20:27');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `info_id` int(11) NOT NULL,
  `debt_amount` int(255) NOT NULL,
  `payments_days` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` int(255) NOT NULL,
  `zip_code` int(255) NOT NULL,
  `dob` int(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`info_id`, `debt_amount`, `payments_days`, `state`, `first_name`, `last_name`, `phone`, `email`, `address`, `city`, `zip_code`, `dob`, `time`) VALUES
(11, 33, '60 Days', '1', 'nishant', 'nirala', 2147483647, 'hello@gmai.com', 'udkjhs', 0, 87234, 0, '2020-03-05 10:59:15'),
(12, 24, 'no', '1', 'sonu', 'kumar', 87136817, 'hello123@gmail.com', 'rohini', 0, 7236, 738628, '2020-03-05 11:00:35'),
(13, 24, 'no', '1', 'sonu', 'kumar', 87136817, 'hello123@gmail.com', 'rohini', 0, 7236, 738628, '2020-03-05 11:01:53'),
(14, 0, '<br />\r\n<b>Notice</b>:  Undefined variable: nd in <b>C:xampphtdocsprojectinterviewpage_3.php</b> on line <b>78</b><br />\r\n', 'Arizona', 'jhg', 'nirala', 2147483647, 'hello@gmai.com', 'jksahjkadh', 0, 87234, 0, '2020-03-06 09:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `latest_projects`
--

CREATE TABLE `latest_projects` (
  `project_id` int(11) NOT NULL,
  `sub_menu_id` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `project_url` varchar(255) NOT NULL,
  `project_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latest_projects`
--

INSERT INTO `latest_projects` (`project_id`, `sub_menu_id`, `project_name`, `admin_name`, `project_url`, `project_img`) VALUES
(3, '5', 'School Managements Project', 'Nishant Nirala', 'xyz', '5485_1581852809_project-4.jpg'),
(4, '5', 'demo', 'innovative IT', 'xyz/abc', '2281_1581869400_project-1.jpg'),
(5, '5', 'demo', 'innovative IT', 'xyz/abc', '7374_1581869426_project-2.jpg'),
(6, '5', 'demo', 'innovative IT', 'xyz/abc', '9191_1581869446_project-3.jpg'),
(7, '5', 'demo', 'innovative IT', 'xyz/abc', '6478_1581869465_project-5.jpg'),
(9, '5', 'Hotel Management Project', 'innovative IT', 'xyz/abc', '8783_1584007620_8948_1581848062_PHP-Development.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `date/time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `email`, `username`, `pass`, `date/time`) VALUES
(1, 'hello@gmai.com', 'nishant', '123', '2020-02-09 18:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logo_id` int(11) NOT NULL,
  `logo_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `logo_img`) VALUES
(1, '9413_1582709887_logo-innovative.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `m_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_url` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`m_id`, `menu_name`, `menu_url`, `date_time`) VALUES
(4, 'Home', 'welcome/index', '2020-02-26 09:42:40'),
(5, 'About Us', 'welcome/about', '2020-03-01 20:06:09'),
(6, 'Services ', '1', '2020-02-22 10:26:02'),
(7, 'Contact', 'welcome/contact', '2020-03-03 22:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy`
--

CREATE TABLE `privacy_policy` (
  `policy_id` int(11) NOT NULL,
  `policy_title` varchar(255) NOT NULL,
  `policy_text` text NOT NULL,
  `policy_banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privacy_policy`
--

INSERT INTO `privacy_policy` (`policy_id`, `policy_title`, `policy_text`, `policy_banner`) VALUES
(1, 'Privacy Policy', 'We collect personally identifiable information, like names, postal addresses, email addresses, etc., when voluntarily submitted by our visitors. The information you provide is used to fulfill you specific request. Unless you have given us your consent, we shall not send any type of email message to you except that which is related to your request, which is information about the company.\r\n\r\nUsers can anytime update/modify his or her information by mailing us. Users may opt-out of receiving future mailings by choosing the unsubscribe option in the form or by contacting us.\r\n\r\nUnder no-circumstances company shall distribute the user information with any third party.\r\n\r\nThis site has security measures in place to protect the loss, misuse, and / or alteration of information under our control. The data resides behind a firewall, with access restricted to authorize HDISOLUTION.IN.\r\n\r\nThe use of any product, service or feature (the \'Materials\') available through the Internet websites accessible HDISOLUTION.IN. (collectively, the \'Website\') by any user of the Web Site (\'you\' or \'your\') shall be governed by the following Terms of Use: This Website \'WWW.HDISOLUTION.IN. may be used for informational purposes only. By using the site or downloading the Materials from the site, you agree to abide by the terms and conditions set forth in this notice. If you do not agree to abide by these terms and conditions please do not use the Website or download materials from the Website. This Site, including all Materials present (excluding any applicable third party materials), is the property of HDISOLUTION.IN. and is copyrighted and protected by worldwide copyright laws and treaty provisions. You agree to comply with all copyright laws worldwide in your use of this Website and to prevent any unauthorized copying of the Materials. HDISOLUTION.IN. does not grant any express or implied rights under any patents, trademarks, copyrights or trade secret information. HDISOLUTION.IN. has business relationships with lot of customers, suppliers, and others. For convenience and simplicity, words like partnership and partner are used to indicate business relationships involving common activities and interests, and those words may not indicate precise legal relationships.\r\n\r\nSubject to the terms and conditions set forth in these Terms of Use, HDISOLUTION.IN. grants you a non-exclusive, non-transferable, limited right to access, use and display this site and the materials thereon. You agree not to interrupt or attempt to interrupt the operation of the site in any way.\r\n\r\nIn no event shall HDISOLUTION.IN. be liable to any entity for any direct, indirect, special, consequential or other damages (including, without limitation, any lost profits, business interruption, loss of information or programs or other data on your information handling system) that are related to the use of, or the inability to use, the content, materials, and functions of the website, even if HDISOLUTION.IN. is expressly advised of the possibility of such damages.\r\n\r\nThe website may contain inaccuracies and typographical and clerical errors. HDISOLUTION.IN. expressly disclaims any obligation to update this site or any of the materials on this site. HDISOLUTION.IN. does not warrant the accuracy or completeness of the materials or the reliability of any advice, opinion, statement or other information displayed or distributed through the site. You acknowledge that any reliance on any such opinion, advice, statement, memorandum, or information shall be at your sole risk. HDISOLUTION.IN. reserves the right, in its sole discretion, to correct any errors or omissions in any portion of the site. HDISOLUTION.IN. may make any other changes to the site, the materials and the products, programs, services or prices (if any) described in the site at any time without notice.\r\n\r\nYou agree to remunerate and hold harmless HDISOLUTION.IN., its subsidiaries and affiliates from any claim, cost, expense, judgment or other loss relating to your use of this Website, including without limitation of the foregoing, any action you take which is in violation of the terms and conditions of these Terms of Use.\r\n\r\nHDISOLUTION.IN. reserves the right, at its sole discretion, to change, modify, add or remove any portion of these Terms of Use in whole or in part, at any time. Changes in these Terms of Use will be effective when notice of such change is posted. Your continued use of the Website after any changes to these Terms of Use are posted will be considered acceptance of those changes. HDISOLUTION.IN. may terminate, change, suspend or discontinue any aspect of the HDISOLUTION.IN. Website, including the availability of any features of the Site, at any time. HDISOLUTION.IN. may also impose limits on certain features and services or restrict your access to parts or the entire Website without notice or liability. HDISOLUTION.IN. may terminate the authorization, rights and license given above and, upon such termination; you shall immediately destroy all Materials.\r\n\r\nThese Terms of Use constitutes the entire agreement between HDISOLUTION.IN. and you with respect to your use of the Website. Any cause of action you may have with respect to your use of the Website must be commenced within one (1) year after the claim or cause of action arises. If for any reason a court of competent jurisdiction finds any provision of these Terms of Use or portion thereof, to be unenforceable, that provision shall be enforced to the maximum extent permissible so as to affect the intent of these Terms of Use, and the remainder of these Terms of Use shall continue in full force and effect.', 'privacy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_text` varchar(255) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `user_details` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `user_name`, `user_text`, `user_img`, `user_details`, `time`) VALUES
(2, 'user_1', 'demo', '5639_1583233800_avatar5.png', 'delhi', '2020-03-03 11:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `sub_menu_id` varchar(255) NOT NULL,
  `service_d` mediumtext NOT NULL,
  `service_img` varchar(255) NOT NULL,
  `cover_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `service_name`, `sub_menu_id`, `service_d`, `service_img`, `cover_img`) VALUES
(1, 'Web Development ', '5', 'With latest tools and technologies, reinforced frameworks and proven methodologies, our experts create enterprise web apps, facilitating business transformation.\r\n\r\nOur expert developers are capable of delivering web apps that simplify really complex busi 123', '7632_1581499763_web-development.png', 'app-development-banner.png'),
(2, 'PHP Development ', '10', 'hello 123', '', ''),
(4, '.NET Development ', '11', 'demo', '9605_1581878056_ios-app-development-india.png', '5411_1581878056_iPhone-app-development-banner.png');

-- --------------------------------------------------------

--
-- Table structure for table `service_card`
--

CREATE TABLE `service_card` (
  `cart_id` int(11) NOT NULL,
  `sub_menu_id` varchar(255) NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `card_d` varchar(255) NOT NULL,
  `card_url` varchar(255) NOT NULL,
  `card_img` varchar(255) NOT NULL,
  `cover_img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_card`
--

INSERT INTO `service_card` (`cart_id`, `sub_menu_id`, `card_name`, `card_d`, `card_url`, `card_img`, `cover_img`, `description`) VALUES
(1, '5', 'codeigniter123', 'try', 'xyz/abc123', '5043_1583916869_126_1581868233_CodeIgniter-Development.png', '1057_1583916869_2700_1581883317_Contact-Banner.jpg', 'demo'),
(2, '6', '.Dot Net Development', 'demo', 'xyz/abc', '527_1581868919_net.png', 'app-development-banner.png', 'try'),
(3, '5', 'PHP Development', 'demo', 'xyz/abc', '794_1581869792_PHP-Development.png', 'app-development-banner.png', 'try'),
(4, '5', 'JAVA Development ', 'demo', 'xyz/abc', '8023_1581870065_java_development.jpg', 'app-development-banner.png', 'try'),
(5, '11', 'JAVA Development ', 'demo', 'xyz/abc', '5715_1581883428_ios-app-development-india.png', '488_1581883428_Contact-Banner.jpg', 'try');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `sub_menu_id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `sub_menu_name` varchar(255) NOT NULL,
  `sub_menu_url` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`sub_menu_id`, `menu`, `sub_menu_name`, `sub_menu_url`, `date_time`) VALUES
(5, '6', 'Web Development ', 'welcome/web_development', '2020-02-12 07:57:51'),
(10, '6', 'PHP Development ', 'admin/index', '2020-02-16 18:28:32'),
(11, '6', '.NET Development ', 'admin/index', '2020-02-16 18:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `terms_conditions`
--

CREATE TABLE `terms_conditions` (
  `terms_id` int(11) NOT NULL,
  `terms_title` varchar(255) NOT NULL,
  `terms_text` text NOT NULL,
  `terms_banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `view_counter`
--

CREATE TABLE `view_counter` (
  `id` int(11) NOT NULL,
  `ip_address` int(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `view_counter`
--

INSERT INTO `view_counter` (`id`, `ip_address`, `time`) VALUES
(1, 0, '2020-03-14 20:03:23'),
(2, 54, '2020-03-14 20:04:45'),
(3, 30, '2020-03-15 11:27:55'),
(4, 40, '2020-03-15 11:34:26'),
(5, 50, '2020-03-15 11:34:41'),
(6, 9382, '2020-03-15 11:34:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`details_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`demo_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `latest_projects`
--
ALTER TABLE `latest_projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  ADD PRIMARY KEY (`policy_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `service_card`
--
ALTER TABLE `service_card`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`sub_menu_id`);

--
-- Indexes for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  ADD PRIMARY KEY (`terms_id`);

--
-- Indexes for table `view_counter`
--
ALTER TABLE `view_counter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `demo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `latest_projects`
--
ALTER TABLE `latest_projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  MODIFY `policy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `service_card`
--
ALTER TABLE `service_card`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `sub_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  MODIFY `terms_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `view_counter`
--
ALTER TABLE `view_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
