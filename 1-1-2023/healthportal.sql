-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 05:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_list`
--

CREATE TABLE `appointment_list` (
  `appointment_id` int(255) NOT NULL,
  `timeslot` time NOT NULL,
  `doctors_id` varchar(255) NOT NULL,
  `reserved_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content_1` longtext NOT NULL,
  `content_2` longtext NOT NULL,
  `image_id` varchar(255) NOT NULL,
  `writer_id_FK` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content_1`, `content_2`, `image_id`, `writer_id_FK`) VALUES
('0', 'ssafayed the great', 'asdsad', 'sadasdasd', '0', '111111111'),
('1', 'micky mouse', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"  1914 translation by H. Rackham \"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"  Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"', 'The standard Lorem Ipsum passage, used since the 1500s\r\n\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"\r\n\r\nSection 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC\r\n\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"\r\n\r\n1914 translation by H. Rackham\r\n\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"\r\n\r\nSection 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC\r\n\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"\r\n\r\n1914 translation by H. Rackham\r\n\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"', '4', '111111111');

-- --------------------------------------------------------

--
-- Table structure for table `blood_request`
--

CREATE TABLE `blood_request` (
  `post_id` varchar(255) NOT NULL,
  `writer_id` varchar(255) NOT NULL,
  `blood_group` int(1) NOT NULL COMMENT '0=O+,1=0-, 2=A+, 3=A-, 4=B+,5=B- ',
  `posted_at` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `details` varchar(500) NOT NULL,
  `urgency_level` int(1) NOT NULL DEFAULT 0 COMMENT '0= lowest 5=hightest'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image_id` varchar(255) NOT NULL,
  `conducted_by` varchar(255) NOT NULL,
  `conducted_on` varchar(255) NOT NULL,
  `registration_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_fk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `caption`, `location`, `name`, `user_fk`) VALUES
('0', 'dasdasd', '../images/0-0.jpg', '0-0.jpg', '111111111'),
('1', '', '../images/1-0.jpg', '1-0.jpg', '111111111'),
('2', '', '../images/2-1.jpg', '2-1.jpg', '111111111'),
('3', '', '../images/3-2.jpg', '3-2.jpg', '111111111'),
('4', 'king of disney ', '../images/4-1.jpg', '4-1.jpg', '111111111');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `med_info` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `title`, `image_id`, `price`, `med_info`) VALUES
(3, 'napa osud', '1', '250', 'dasdsadasd'),
(4, 'surgical kit', '2', '1250', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"'),
(5, 'adodass', '3', '1250', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"\r\n\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` varchar(255) NOT NULL,
  `doctor_id` varchar(255) NOT NULL,
  `schedule_id` varchar(255) NOT NULL,
  `problems` varchar(500) NOT NULL,
  `presecription_id` varchar(255) NOT NULL,
  `user_fk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `id` int(11) NOT NULL,
  `breif_info` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content_1` mediumtext NOT NULL,
  `content_2` mediumtext NOT NULL,
  `content_3` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`id`, `breif_info`, `name`, `content_1`, `content_2`, `content_3`) VALUES
(1, ' dress code, discpline', ' student conduct', '	Stands for CHARACTER. It can hold a fixed-length string(alphabets, number, or special characters). The size of the required string is set using the size parameter, which can be between 0 and 255.\r\nYour string should not exceed the length defined using the size parameter. Although it can be less than the size. If you do not provide any value then the default size is 1.  It will occupy the space in the memory according to the size parameter. For example, Char(50) will straightaway occupy 50 bytes on the memory.\r\n\r\nVARCHAR(size)	Stands for VARIABLE CHARACTER. It can hold a variable-length string. The range of characters can be between 0 and 65,535. You cannot exceed the length of the string defined using the size parameter. Although it can be less than that. Its default value is also 1.\r\nBut the memory occupied by the varchar is dependent on the actual size of the string and not on what you have set. For example, if we have set the size to 50, Varchar(50), but our string is “Devdutt” then it will occupy only 7 bytes on the memory(unlike Char).\r\n\r\nBINARY(size)	Similar to CHAR(), but stores fixed-length binary byte strings. It does not contain any character set. The size parameter specifies the column length in bytes. Its range is between 0 and 255. The default size value is 1.\r\nVARBINARY(size)	Similar to VARCHAR(), but stores variable-length binary byte strings. It does not contain any character set as well. The size parameter specifies the maximum column length in bytes.\r\nBLOB(size)	BLOB is a Binary Large OBject that can hold a variable amount of data. It can store binary data such as images, multimedia, and PDF files. There are four BLOB types- TINYBLOB, BLOB, MEDIUMBLOB, and LONGBLOB. BLOB holds up to 65,535 bytes of data.\r\nIt takes 2-byte overhead. It means that BLOB will occupy [the number of Binary values used+2]Bytes in the memory. Each BLOB value is stored using a two-byte length prefix that indicates the number of bytes in the value.\r\n\r\nFor instance, your data contains 100 binary values then BLOB will occupy 102 bytes in the memory.', ' It is a type of BLOB that can hold up to 255 bytes of data. It takes 1-Byte overhead.\r\nMEDIUMBLOB	It is a type of BLOB that can hold up to 16,777,215 bytes of data. It takes 3-Bytes overhead.\r\nLONGBLOB	It is a type of BLOB that can hold up to 4,294,967,295 bytes of data. LONGBLOB can store the maximum data among these four BLOB. It takes 4-Bytes overhead.\r\nTEXT(size)	The TEXT is useful for storing long-form text strings such as articles, blogs, etc. It has more features than CHAR and VARCHAR. It can hold from 1 byte to 4 GB of data. Just like BLOB, there are four TEXT types- TINYTEXT, TEXT, MEDIUMTEXT, and LONGTEXT. TEXT holds up to 65,535 bytes or 64KB of data.\r\nIt takes 2-byte overhead. It means that TEXT will occupy [the number of character used+2]Bytes in the memory. For instance, your text contains 100 characters then TEXT will occupy 102 bytes in the memory.\r\n\r\nTINYTEXT	TINYTEXT can store up to 255 characters i.e 255 bytes. It is suitable for storing summaries of articles, short notices, captions, etc.\r\nIt takes 1-Byte overhead.', 'It is a type of BLOB that can hold up to 255 bytes of data. It takes 1-Byte overhead.\r\nMEDIUMBLOB	It is a type of BLOB that can hold up to 16,777,215 bytes of data. It takes 3-Bytes overhead.\r\nLONGBLOB	It is a type of BLOB that can hold up to 4,294,967,295 bytes of data. LONGBLOB can store the maximum data among these four BLOB. It takes 4-Bytes overhead.\r\nTEXT(size)	The TEXT is useful for storing long-form text strings such as articles, blogs, etc. It has more features than CHAR and VARCHAR. It can hold from 1 byte to 4 GB of data. Just like BLOB, there are four TEXT types- TINYTEXT, TEXT, MEDIUMTEXT, and LONGTEXT. TEXT holds up to 65,535 bytes or 64KB of data.\r\nIt takes 2-byte overhead. It means that TEXT will occupy [the number of character used+2]Bytes in the memory. For instance, your text contains 100 characters then TEXT will occupy 102 bytes in the memory.\r\n\r\nTINYTEXT	TINYTEXT can store up to 255 characters i.e 255 bytes. It is suitable for storing summaries of articles, short notices, captions, etc.\r\nIt takes 1-Byte overhead.'),
(2, ' dress code, discpline', ' student conduct', '	Stands for CHARACTER. It can hold a fixed-length string(alphabets, number, or special characters). The size of the required string is set using the size parameter, which can be between 0 and 255.\r\nYour string should not exceed the length defined using the size parameter. Although it can be less than the size. If you do not provide any value then the default size is 1.  It will occupy the space in the memory according to the size parameter. For example, Char(50) will straightaway occupy 50 bytes on the memory.\r\n\r\nVARCHAR(size)	Stands for VARIABLE CHARACTER. It can hold a variable-length string. The range of characters can be between 0 and 65,535. You cannot exceed the length of the string defined using the size parameter. Although it can be less than that. Its default value is also 1.\r\nBut the memory occupied by the varchar is dependent on the actual size of the string and not on what you have set. For example, if we have set the size to 50, Varchar(50), but our string is “Devdutt” then it will occupy only 7 bytes on the memory(unlike Char).\r\n\r\nBINARY(size)	Similar to CHAR(), but stores fixed-length binary byte strings. It does not contain any character set. The size parameter specifies the column length in bytes. Its range is between 0 and 255. The default size value is 1.\r\nVARBINARY(size)	Similar to VARCHAR(), but stores variable-length binary byte strings. It does not contain any character set as well. The size parameter specifies the maximum column length in bytes.\r\nBLOB(size)	BLOB is a Binary Large OBject that can hold a variable amount of data. It can store binary data such as images, multimedia, and PDF files. There are four BLOB types- TINYBLOB, BLOB, MEDIUMBLOB, and LONGBLOB. BLOB holds up to 65,535 bytes of data.\r\nIt takes 2-byte overhead. It means that BLOB will occupy [the number of Binary values used+2]Bytes in the memory. Each BLOB value is stored using a two-byte length prefix that indicates the number of bytes in the value.\r\n\r\nFor instance, your data contains 100 binary values then BLOB will occupy 102 bytes in the memory.', ' It is a type of BLOB that can hold up to 255 bytes of data. It takes 1-Byte overhead.\r\nMEDIUMBLOB	It is a type of BLOB that can hold up to 16,777,215 bytes of data. It takes 3-Bytes overhead.\r\nLONGBLOB	It is a type of BLOB that can hold up to 4,294,967,295 bytes of data. LONGBLOB can store the maximum data among these four BLOB. It takes 4-Bytes overhead.\r\nTEXT(size)	The TEXT is useful for storing long-form text strings such as articles, blogs, etc. It has more features than CHAR and VARCHAR. It can hold from 1 byte to 4 GB of data. Just like BLOB, there are four TEXT types- TINYTEXT, TEXT, MEDIUMTEXT, and LONGTEXT. TEXT holds up to 65,535 bytes or 64KB of data.\r\nIt takes 2-byte overhead. It means that TEXT will occupy [the number of character used+2]Bytes in the memory. For instance, your text contains 100 characters then TEXT will occupy 102 bytes in the memory.\r\n\r\nTINYTEXT	TINYTEXT can store up to 255 characters i.e 255 bytes. It is suitable for storing summaries of articles, short notices, captions, etc.\r\nIt takes 1-Byte overhead.', 'It is a type of BLOB that can hold up to 255 bytes of data. It takes 1-Byte overhead.\r\nMEDIUMBLOB	It is a type of BLOB that can hold up to 16,777,215 bytes of data. It takes 3-Bytes overhead.\r\nLONGBLOB	It is a type of BLOB that can hold up to 4,294,967,295 bytes of data. LONGBLOB can store the maximum data among these four BLOB. It takes 4-Bytes overhead.\r\nTEXT(size)	The TEXT is useful for storing long-form text strings such as articles, blogs, etc. It has more features than CHAR and VARCHAR. It can hold from 1 byte to 4 GB of data. Just like BLOB, there are four TEXT types- TINYTEXT, TEXT, MEDIUMTEXT, and LONGTEXT. TEXT holds up to 65,535 bytes or 64KB of data.\r\nIt takes 2-byte overhead. It means that TEXT will occupy [the number of character used+2]Bytes in the memory. For instance, your text contains 100 characters then TEXT will occupy 102 bytes in the memory.\r\n\r\nTINYTEXT	TINYTEXT can store up to 255 characters i.e 255 bytes. It is suitable for storing summaries of articles, short notices, captions, etc.\r\nIt takes 1-Byte overhead.');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `purchase_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration_list`
--

CREATE TABLE `registration_list` (
  `event_id` varchar(255) NOT NULL,
  `participants_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` varchar(255) NOT NULL,
  `doctor_id` varchar(255) NOT NULL,
  `timeslot` time NOT NULL,
  `reserved_id` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '1= reserved 0=vacant'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `consent` int(1) UNSIGNED DEFAULT NULL COMMENT '0= no 1= consent',
  `status` int(1) UNSIGNED DEFAULT 1 COMMENT '0= inactive 1= active',
  `image_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `contact`, `user_role`, `consent`, `status`, `image_id`) VALUES
('0111787458', 'Macintosh', 'mac@medical.uiu.ac.bd', '$2y$10$/XrwC4eCcTr2cnC5FUZnP.NGQ1OIrUmaluFyANlkoiOHbeiXneIG2', '', 'doctor', NULL, 1, ''),
('011193080', 'Safayed Bin Islam', 'sislam193080@bscse.uiu.ac.bd', '$2y$10$l3BjBt2nhB876D3qB8U6G.5GqNUmtXovCTI37c7l05a.hBzqpfAcy', '', 'student', NULL, 1, ''),
('011193081', 'Safayed Bin Islam', 'sislam193081@bscse.uiu.ac.bd', '$2y$10$/XrwC4eCcTr2cnC5FUZnP.NGQ1OIrUmaluFyANlkoiOHbeiXneIG2', '', 'student', NULL, 1, ''),
('011193087', 'Safayed Bin Islam', 'sislam193087@bscse.uiu.ac.bd', '$2y$10$2.0pKtxRh9Dk1Vq/5PIeiuDvxXnY73F5oEQ2rEhnwe9D5fEmgkjIe', '', 'student', NULL, 0, NULL),
('011193089', 'Safayed Bin Islam', 'sislam193089@bscse.uiu.ac.bd', '$2y$10$l3BjBt2nhB876D3qB8U6G.5GqNUmtXovCTI37c7l05a.hBzqpfAcy', '01749125723', 'student', 1, 1, ''),
('011193097', 'rabbi', 'sislam@cse.uiu.ac.bd', '$2y$10$/XrwC4eCcTr2cnC5FUZnP.NGQ1OIrUmaluFyANlkoiOHbeiXneIG2', '', 'teacher', NULL, 1, ''),
('011193099', 'Islam', 'sislam193099@bscse.uiu.ac.bd', '$2y$10$2.0pKtxRh9Dk1Vq/5PIeiuDvxXnY73F5oEQ2rEhnwe9D5fEmgkjIe', '', 'student', NULL, 1, NULL),
('011193123', 'rabbi', 'rabbi@cse.uiu.ac.bd', '$2y$10$/XrwC4eCcTr2cnC5FUZnP.NGQ1OIrUmaluFyANlkoiOHbeiXneIG2', '', 'teacher', NULL, 0, ''),
('011193134', 'sabbir', 'mrahaman193134@bscse.uiu.ac.bd', '$2y$10$2.0pKtxRh9Dk1Vq/5PIeiuDvxXnY73F5oEQ2rEhnwe9D5fEmgkjIe', '', 'student', NULL, 1, NULL),
('011193431', 'sabbir', 'mrahaman193431@bscse.uiu.ac.bd', '$2y$10$2.0pKtxRh9Dk1Vq/5PIeiuDvxXnY73F5oEQ2rEhnwe9D5fEmgkjIe', '', 'student', NULL, 1, NULL),
('011193498', 'efaz', 'efaz@cse.uiu.ac.bd', '$2y$10$l3BjBt2nhB876D3qB8U6G.5GqNUmtXovCTI37c7l05a.hBzqpfAcy', '01749125723', 'teacher', 1, 1, ''),
('011193645', 'sana', 'sana193645@bscse.uiu.ac.bd', '$2y$10$l3BjBt2nhB876D3qB8U6G.5GqNUmtXovCTI37c7l05a.hBzqpfAcy', '', 'student', NULL, 1, ''),
('0111977458', 'nurul', 'nurul@medical.uiu.ac.bd', '$2y$10$/XrwC4eCcTr2cnC5FUZnP.NGQ1OIrUmaluFyANlkoiOHbeiXneIG2', '', 'doctor', NULL, 1, ''),
('0117897458', 'nurul', 'nurul56@medical.uiu.ac.bd', '$2y$10$/XrwC4eCcTr2cnC5FUZnP.NGQ1OIrUmaluFyANlkoiOHbeiXneIG2', '', 'doctor', NULL, 1, ''),
('015256486', ' ', 'mrahman146789@bscse.uiu.ac.bd', '$2y$10$YL/Mi3rED8qUyV4iLArqReVGZHLqkDXbeAWc9hBfOZqxdWmyThExy', '', 'student', NULL, 1, NULL),
('0171897458', 'Usmani bin shamser', 'usmani@medical.uiu.ac.bd', '$2y$10$/XrwC4eCcTr2cnC5FUZnP.NGQ1OIrUmaluFyANlkoiOHbeiXneIG2', '', 'doctor', NULL, 1, ''),
('111111111', 'Safayed', 'sislam111111@admin.uiu.ac.bd', '123456', '', 'admin', NULL, 1, ''),
('211000555', 'Sudipto Mondol', 'smondol@medical.uiu.ac.bd', '$2y$10$7kdr.iDwKLiPqLaYd6Iah.wIdTn/iBQdK4on1IiBJjMAPK.qSG2e6', '', 'doctor', NULL, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_list`
--
ALTER TABLE `appointment_list`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `writer_id_FK` (`writer_id_FK`);

--
-- Indexes for table `blood_request`
--
ALTER TABLE `blood_request`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `writer_id` (`writer_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk` (`user_fk`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `user_fk` (`user_fk`),
  ADD KEY `presecription_id` (`presecription_id`),
  ADD KEY `schedule_id` (`schedule_id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_list`
--
ALTER TABLE `registration_list`
  ADD KEY `participants_id` (`participants_id`);

--
-- Indexes for table `schedule_list`
--
ALTER TABLE `schedule_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `reserved_id` (`reserved_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_list`
--
ALTER TABLE `appointment_list`
  MODIFY `appointment_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`writer_id_FK`) REFERENCES `user` (`id`);

--
-- Constraints for table `blood_request`
--
ALTER TABLE `blood_request`
  ADD CONSTRAINT `blood_request_ibfk_1` FOREIGN KEY (`writer_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`user_fk`) REFERENCES `user` (`id`);

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`user_fk`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `patient_ibfk_3` FOREIGN KEY (`presecription_id`) REFERENCES `prescription` (`id`),
  ADD CONSTRAINT `patient_ibfk_4` FOREIGN KEY (`schedule_id`) REFERENCES `schedule_list` (`id`);

--
-- Constraints for table `registration_list`
--
ALTER TABLE `registration_list`
  ADD CONSTRAINT `registration_list_ibfk_1` FOREIGN KEY (`participants_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `schedule_list`
--
ALTER TABLE `schedule_list`
  ADD CONSTRAINT `schedule_list_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `schedule_list_ibfk_2` FOREIGN KEY (`reserved_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
