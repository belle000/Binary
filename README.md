/Users/belle/Downloads/books.sql-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 23, 2024 at 04:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/_!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT _/;
/_!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS _/;
/_!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION _/;
/_!40101 SET NAMES utf8mb4 _/;

--
-- Database: `binus_library`
--

---

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
`id` int(11) NOT NULL,
`subject_id` int(11) NOT NULL,
`title` varchar(255) NOT NULL,
`author` varchar(255) NOT NULL,
`created_at` timestamp NULL DEFAULT NULL,
`updated_at` timestamp NULL DEFAULT NULL,
`address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `subject_id`, `title`, `author`, `created_at`, `updated_at`, `address`) VALUES
(1, 1, 'C++ Crash Course A Fast-Paced Introduction', 'Josh Lospinoso', '2024-12-07 07:40:14', '2024-12-07 07:40:14', 'adibfuf'),
(6, 1, 'C++ How to Program, 10th edition, Global Edition (2017)', 'Paul Deitel, Harvey Deitel', '2024-12-23 08:47:57', '2024-12-23 08:47:57', 'C++ How to Program, 10th edition, Global Edition (2017) (Paul Deitel, Harvey Deitel).pdf'),
(7, 1, 'Introduction to C++ 500+ Difficulty-Scaled Solved Programming Exercises', 'George S. Tselikis', '2024-12-23 08:47:57', '2024-12-23 08:47:57', 'Introduction to C++ 500+ Difficulty-Scaled Solved Programming Exercises. (George S. Tselikis).pdf'),
(8, 1, 'Introduction to C++ Programming Concepts and Applications', 'John Keyser', '2024-12-23 08:47:57', '2024-12-23 08:47:57', 'Introduction to C++ Programming Concepts and Applications (John Keyser).pdf'),
(9, 1, 'Problem Solving and Program Design in C, Global Edition', 'Jeri R. Hanly, Elliot B. Koffman etc.', '2024-12-23 08:47:57', '2024-12-23 08:47:57', 'Problem Solving and Program Design in C, Global Edition (Jeri R. Hanly, Elliot B. Koffman etc.).pdf'),
(10, 2, 'A Beginners Guide to Discrete Mathematics', 'W.D. Wallis', '2024-12-23 08:52:38', '2024-12-23 08:52:38', 'A Beginners Guide to Discrete Mathematics (W.D. Wallis).pdf'),
(11, 2, 'Discrete Mathematics with Applications Fifth Edition', 'Susanna S. Epp', '2024-12-23 08:52:38', '2024-12-23 08:52:38', 'Discrete Mathematics with Applications Fifth Edition (Susanna S. Epp).pdf'),
(12, 2, 'Essential discrete mathematics for computer science', 'Lewis HARRY., Zax R.', '2024-12-23 08:52:38', '2024-12-23 08:52:38', 'Essential discrete mathematics for computer science (Lewis HARRY., Zax R.).pdf'),
(13, 2, 'Foundations of Discrete Mathematics with Algorithms and Programming', 'Sriraman Sridharan, R. Balakrishnan', '2024-12-23 08:52:38', '2024-12-23 08:52:38', 'Foundations of Discrete Mathematics with Algorithms and Programming (Sriraman Sridharan, R. Balakrishnan).pdf'),
(14, 2, 'Mathematics of Fuzzy Sets and Fuzzy Logic', 'Barnabas Bede', '2024-12-23 08:52:38', '2024-12-23 08:52:38', 'Mathematics of Fuzzy Sets and Fuzzy Logic (Barnabas Bede).pdf'),
(15, 7, 'Beyond Basic Statistics Tips, Tricks, and Techniques Every Data Analyst Should Know', 'Kristin H. Jarman', '2024-12-23 08:58:42', '2024-12-23 08:58:42', 'Beyond Basic Statistics Tips, Tricks, and Techniques Every Data Analyst Should Know (Kristin H. Jarman).pdf'),
(16, 7, 'Mathematical Statistics basic ideas and selected topics. Volume I', 'Bickel Peter J., Doksum Kjell A.', '2024-12-23 08:58:42', '2024-12-23 08:58:42', 'Mathematical Statistics basic ideas and selected topics. Volume I (Bickel Peter J., Doksum Kjell A.).pdf'),
(17, 7, 'Probability and statistics by example. Basic probability and statistics', 'Suhov Y., Kelbert M.', '2024-12-23 08:58:42', '2024-12-23 08:58:42', 'Probability and statistics by example. Basic probability and statistics (Suhov Y., Kelbert M.).pdf'),
(18, 7, 'Statistical Method for Quality Assurance', 'Stephen B.Vardeman., J. Marcus Jobe', '2024-12-23 08:58:42', '2024-12-23 08:58:42', 'STATIS~2.pdf'),
(19, 7, 'Statistical Methods An Introduction to Basic Statistical Concepts and Analysis', 'Cheryl Ann Willard', '2024-12-23 08:58:42', '2024-12-23 08:58:42', 'Statistical Methods An Introduction to Basic Statistical Concepts and Analysis (Cheryl Ann Willard).pdf'),
(20, 20, 'Algorithms in Bioinformatics Theory and Implementation', 'Paul A. Gagniuc', '2024-12-23 08:59:22', '2024-12-23 08:59:22', 'Algorithms in Bioinformatics Theory and Implementation (Paul A. Gagniuc).pdf'),
(21, 20, 'Python Programming for Biology Bioinformatics and Beyond', 'Tim J. Stevens, Wayne Boucher', '2024-12-23 08:59:22', '2024-12-23 08:59:22', 'Python Programming for Biology Bioinformatics and Beyond (Tim J. Stevens, Wayne Boucher).pdf'),
(22, 20, 'Bioinformatics Algorithms Techniques and Applications', 'Ion Mandoiu, Alexander Zelikovsky', '2024-12-23 08:59:22', '2024-12-23 08:59:22', 'Bioinformatics Algorithms Techniques and Applications (Wiley Series in Bioinformatics) (Ion Mandoiu, Alexander Zelikovsky).pdf'),
(23, 20, 'Computational Biology A Statistical Mechanics Perspective', 'Ralf Blossey', '2024-12-23 08:59:22', '2024-12-23 08:59:22', 'Computational Biology A Statistical Mechanics Perspective (Ralf Blossey).pdf'),
(24, 20, 'Concise Encyclopaedia of Bioinformatics and Computational Biology', 'John M. Hancock, Marketa J. Zvelebil', '2024-12-23 08:59:22', '2024-12-23 08:59:22', 'Concise Encyclopaedia of Bioinformatics and Computational Biology (John M. Hancock, Marketa J. Zvelebil).pdf'),
(25, 16, 'The Handbook of Academic Writing', 'Rowena Murray, Sarah Moore', '2024-12-23 09:00:10', '2024-12-23 09:00:10', 'The Handbook of Academic Writing (Rowena Murray, Sarah Moore).pdf'),
(26, 16, 'Research Methodology A Step-by-Step Guide for Beginners', 'Ranjit Kumar', '2024-12-23 09:00:10', '2024-12-23 09:00:10', 'Research Methodology A Step-by-Step Guide for Beginners (Ranjit Kumar).pdf'),
(27, 16, 'Engineering Research Methodology A Practical Insight for Researchers', 'Dipankar Deb, Rajeeb Dey, Valentina E. Balas', '2024-12-23 09:00:10', '2024-12-23 09:00:10', 'Engineering Research Methodology A Practical Insight for Researchers (Dipankar Deb, Rajeeb Dey, Valentina E. Balas).pdf'),
(28, 16, 'Research Methodologies for Beginners', 'Kitsakorn Locharoenrat', '2024-12-23 09:00:10', '2024-12-23 09:00:10', 'Research Methodologies for Beginners (Kitsakorn Locharoenrat).pdf'),
(29, 16, 'Research Methodology Methods and Techniques', 'C.R. Kothari', '2024-12-23 09:00:10', '2024-12-23 09:00:10', 'Research Methodology Methods and Techniques (C.R. Kothari).pdf'),
(30, 19, 'Cloud Computing Basics A Non-Technical Introduction', 'Anders Lisdorf', '2024-12-23 09:00:43', '2024-12-23 09:00:43', 'Cloud Computing Basics A Non-Technical Introduction (Anders Lisdorf).pdf'),
(31, 19, 'Data Security in Cloud Computing, Volume I', 'Giulio DAgostino', '2024-12-23 09:00:43', '2024-12-23 09:00:43', 'Data Security in Cloud Computing, Volume I (Giulio DAgostino).pdf'),
(32, 19, 'The Complete Cloud Computing Manual', 'Black Dog Media', '2024-12-23 09:00:43', '2024-12-23 09:00:43', 'The Complete Cloud Computing Manual (Black Dog Media).pdf'),
(33, 19, 'Security and Privacy for Big Data, Cloud Computing and Applications', 'Wei Ren, Lizhe Wang, Kim-Kwang Raymond Choo etc.', '2024-12-23 09:00:43', '2024-12-23 09:00:43', 'Security and Privacy for Big Data, Cloud Computing and Applications (Wei Ren, Lizhe Wang, Kim-Kwang Raymond Choo etc.).pdf'),
(34, 19, 'Learning Microsoft Azure Cloud Computing and Development Fundamentals', 'Jonah Carrio Andersson', '2024-12-23 09:00:43', '2024-12-23 09:00:43', 'Learning Microsoft Azure Cloud Computing and Development Fundamentals (Jonah Carrio Andersson).pdf'),
(35, 17, 'Mastering Java An Effective Project Based Approach including Web Development, Data Structures, GUI Programming and Object...', 'Michael B. White', '2024-12-23 09:01:15', '2024-12-23 09:01:15', 'Mastering Java An Effective Project Based Approach including Web Development, Data Structures, GUI Programming and Object... (Michael B. White).pdf'),
(36, 17, 'A Comprehensive Introduction to Object-Oriented Programming with Java, 1st Edition', 'C. Thomas Wu', '2024-12-23 09:01:15', '2024-12-23 09:01:15', 'A comprehensive introduction to object-oriented programming with Java, 1st Edition (C. Thomas Wu).pdf'),
(37, 17, 'Object-Oriented Software Engineering Using UML, Patterns, and Java', 'Bruegge, Bernd Dutoit, Allen H.', '2024-12-23 09:01:15', '2024-12-23 09:01:15', 'Object-Oriented Software Engineering Practical Software Development using UML and Java (Timothy Lethbridge, Robert Laganiere).pdf'),
(38, 17, 'A Functional Approach to Java (Second Early Release)', 'Ben Weidig', '2024-12-23 09:01:15', '2024-12-23 09:01:15', 'A Functional Approach to Java (Second Early Release) (Ben Weidig).pdf'),
(39, 17, 'Object-Oriented Software Engineering Practical Software Development using UML and Java', 'Timothy Lethbridge, Robert Laganiere', '2024-12-23 09:01:15', '2024-12-23 09:01:15', 'Object-oriented software engineering using UML, Patterns, and Java (Bruegge, Bernd Dutoit, Allen H.).pdf'),
(40, 6, 'Software Engineering for Embedded Systems', 'Robert Oshana, Mark Kraeling', '2024-12-23 09:02:11', '2024-12-23 09:02:11', 'Software Engineering for Embedded Systems (Robert Oshana, Mark Kraeling).pdf'),
(41, 6, 'Real-World Software Projects for Computer Science and Engineering Students', 'Varun Gupta, Anh Nguyen-Duc', '2024-12-23 09:02:11', '2024-12-23 09:02:11', 'Real-World Software Projects for Computer Science and Engineering Students (Varun Gupta, Anh Nguyen-Duc).pdf'),
(42, 6, 'Software Development for Engineers - with C, Pascal, C++, Assembly Language, Visual Basic, HTML, Java Script and Java', 'William J. Buchanan', '2024-12-23 09:02:11', '2024-12-23 09:02:11', 'Software Development for Engineers - with C, Pascal, C++, Assembly Language, Visual Basic, HTML, Java Script and Java (William J. Buchanan).pdf'),
(43, 6, 'Requirements Engineering for Software and Systems', 'Phillip A. Laplante', '2024-12-23 09:02:11', '2024-12-23 09:02:11', 'Requirements Engineering for Software and Systems (Phillip A. Laplante).pdf'),
(44, 6, 'Fundamentals of Software Architecture An Engineering Approach', 'Mark Richards, Neal Ford', '2024-12-23 09:02:11', '2024-12-23 09:02:11', 'Fundamentals of Software Architecture An Engineering Approach (Mark Richards, Neal Ford).pdf'),
(45, 8, 'Elementary Linear Algebra', 'Howard Anton, Anton Kaul', '2024-12-23 09:09:19', '2024-12-23 09:09:19', 'Elementary Linear Algebra (Howard Anton, Anton Kaul).pdf'),
(46, 8, 'Elementary Linear Algebra with Applications, Student Solutions Manual', 'Howard Anton, Chris Rorres', '2024-12-23 09:09:19', '2024-12-23 09:09:19', 'Elementary Linear Algebra with Applications, Student Solutions Manual (Howard Anton, Chris Rorres).pdf'),
(47, 8, 'Fundamentals of Linear Algebra', 'J. S. Chahal', '2024-12-23 09:09:19', '2024-12-23 09:09:19', 'Fundamentals of Linear Algebra (J. S. Chahal).pdf'),
(48, 8, 'Introduction to Linear Algebra', 'Gilbert Strang', '2024-12-23 09:09:19', '2024-12-23 09:09:19', 'Introduction to Linear Algebra (Gilbert Strang).pdf'),
(49, 8, 'Linear Algebra Done Right Solutions Manual', 'Sheldon Axler', '2024-12-23 09:09:19', '2024-12-23 09:09:19', 'Linear Algebra Done Right Solutions Manual (Sheldon Axler).pdf'),
(50, 9, 'Systems Analysis and Design: An Object-Oriented Approach with UML', 'Dennis, Alan, Wixom, Barbara, Tegarden, David', '2024-12-23 09:30:31', '2024-12-23 09:30:31', 'SYSTEM~1.pdf'),
(51, 9, 'Starting Out With Programming Logic and Design, 6e', 'Tony Gaddis', '2024-12-23 09:30:31', '2024-12-23 09:30:31', 'Starting Out With Programming Logic and Design, 6e (Tony Gaddis).pdf'),
(52, 9, 'Practical Methods for Optimal Control and Estimation Using Nonlinear Programming, Second Edition', 'John T. Betts', '2024-12-23 09:30:31', '2024-12-23 09:30:31', 'PRACTI~1.pdf'),
(53, 9, 'International Models of Changemaker Education: Programs, Methods, and Design', 'Viviana Alexandrowicz, Paul M. Rogers', '2024-12-23 09:30:31', '2024-12-23 09:30:31', 'INTERN~1.PDF'),
(54, 9, 'C++ Programming: Program Design including Data Structures', 'D.S. Malik', '2024-12-23 09:30:31', '2024-12-23 09:30:31', 'C++ Programming. Program Design including Data Structures (D.S. Malik).pdf'),
(55, 18, 'scikit-learn Cookbook', 'Julian Avila, Trent Hauck', '2024-12-23 09:31:54', '2024-12-23 09:31:54', 'https://mega.nz/file/Li4ykLgK#INImZ80r62UhDEzn-aDpTPpK_ZquBjRPfurCgqWKYvM'),
(56, 18, 'Machine Learning Fundamentals A Concise Introduction', 'Hui Jiang', '2024-12-23 09:31:54', '2024-12-23 09:31:54', 'https://mega.nz/file/LnQCFQza#a_VnVAlRBhnBMHCaTbw79jj7e7EXxTodT9B6yak3dbs'),
(57, 18, 'Machine Learning The Basics (Machine Learning Foundations, Methodologies, and Applications)', 'Alexander Jung', '2024-12-23 09:31:54', '2024-12-23 09:31:54', 'https://mega.nz/file/z3BHhTwS#WQk-JByGRJCQ7y2ydJo4tZpX6_31JY2tf0_Ct8PhNUA'),
(58, 18, 'Hands-On Machine Learning with Scikit-Learn and TensorFlow', 'Aurélien Géron', '2024-12-23 09:31:54', '2024-12-23 09:31:54', 'https://mega.nz/file/C7IylJpT#Jak-DDi_pbjKlu90nu9hQEeEkBVOjyoB2UHfVZWfYPk'),
(59, 18, 'AI and Machine Learning for Coders A Programmers Guide to Artificial Intelligence', 'Laurence Moroney', '2024-12-23 09:31:54', '2024-12-23 09:31:54', 'https://mega.nz/file/Oro3RLgJ#X5LwsJe6gCRKtmCR4_D0NQVPBaaKO0incCv7l7-tQ4s'),
(60, 26, 'Introduction to Computation Haskell, Logic and Automata (free, non-retail version, no cover)', 'D. Sannella, M Fourman, H. Peng and P. Wadler', '2024-12-23 09:32:23', '2024-12-23 09:32:23', 'https://mega.nz/file/fn5DwBCY#ZoGlPMmpYTH8nNFY1oz8gYl0SmE93jbeOETYGRIg6BA'),
(61, 26, 'An Introduction to Formal Languages and Automata [6th ed.]', 'Peter Linz', '2024-12-23 09:32:23', '2024-12-23 09:32:23', 'https://mega.nz/file/urQCwZKQ#WqnKE7mGc4Rorw-dcU-QiCC_ANZkdiczomJueC4bVJo'),
(62, 26, 'Automata Theory with Modern Applications', 'James A. Anderson', '2024-12-23 09:32:23', '2024-12-23 09:32:23', 'https://mega.nz/file/r65xgIjB#yGM2_-G3x-h4wtSStyBZfuzItDPAgMSbCc4rTjzrmqc'),
(63, 26, 'Introduction to Automata Theory, Languages, and Computation', 'etc.', '2024-12-23 09:32:23', '2024-12-23 09:32:23', 'https://mega.nz/file/eqoGQK6K#fi7ZLUD7vL9ZyOZDzcpPuLBiCIjzedf4Txq4RYyFzf4'),
(64, 26, 'Compilers Principles, Techniques, and Tools (for True Epub)', 'etc.', '2024-12-23 09:32:23', '2024-12-23 09:32:23', 'https://mega.nz/file/frRWwR6b#XM0WK-469vxVY-psfrAkSOJCVspN8Q-ZPe_BMGOEkcw'),
(65, 25, 'Deep Learning for Computer Vision with Python, Volume 3', 'Adrian Rosebrock', '2024-12-23 09:33:08', '2024-12-23 09:33:08', 'https://mega.nz/file/324AkChJ#-QoiMFNT-ObfDrnrTK7Wxi2RtcEYLuXk3wNh7q0xNRU'),
(66, 25, 'A Practical Introduction to Computer Vision with OpenCV', 'Kenneth Dawson-Howe', '2024-12-23 09:33:08', '2024-12-23 09:33:08', 'https://mega.nz/file/u2ZgFY6J#ZrdLynCxhbHEASrQwK5fBM_5nzMj50liaVEz5SLh94E'),
(67, 25, 'Algorithms for Image Processing and Computer Vision', 'J. R. Parker', '2024-12-23 09:33:08', '2024-12-23 09:33:08', 'https://mega.nz/file/iv4HGCKb#a-awGgSYp7h_0AtC16SsiA8YcEQzv03oVTac8cyjT8c'),
(68, 25, 'Programming Computer Vision with Python Tools and Algorithms for Analyzing Images', 'Jan Erik Solem', '2024-12-23 09:33:08', '2024-12-23 09:33:08', 'https://mega.nz/file/buxVxbrD#yTRDs8NrND0ipZo1BB_9chUdSgHN_uY1NgI333ylGYw'),
(69, 25, 'Practical Machine Learning for Computer Vision End-to-End Machine Learning for Images', 'Valliappa Lakshmanan, Martin Görner etc.', '2024-12-23 09:33:08', '2024-12-23 09:33:08', 'https://mega.nz/file/Hjhl3QYZ#KwTAOWxVdwZ3L6a96KBQtpqixghQ3cwRiHrrrRdvijU'),
(70, 23, 'Natural Language Processing A Machine Learning Perspective', 'Yue Zhang, Westlake University, Zhiyang Teng etc.', '2024-12-23 09:34:39', '2024-12-23 09:34:39', 'Natural Language Processing A Machine Learning Perspective (Yue Zhang, Westlake University Zhiyang Teng etc.).pdf'),
(71, 23, 'The Handbook of Computational Linguistics and Natural Language Processing', 'Alexander Clark, Chris Fox, Shalom Lappin', '2024-12-23 09:34:39', '2024-12-23 09:34:39', 'The Handbook of Computational Linguistics and Natural Language Processing (Alexander Clark, Chris Fox, Shalom Lappin).pdf'),
(72, 23, 'Handbook of Natural Language Processing, Second Edition (Chapman & Hall CRC Machine Learning & Pattern Recognition Series)', 'Nitin Indurkhya, Fred J. Damerau (Editors)', '2024-12-23 09:34:39', '2024-12-23 09:34:39', 'Handbook of Natural Language Processing, Second Edition (Chapman Hall CRC Machine Learning Pattern Recognition Series) (Nitin Indurkhya, Fred J. Damerau (Editors)).pdf'),
(73, 23, 'Natural Language Processing with Python Cookbook', 'Krishna Bhavsar, Pratap Dangeti', '2024-12-23 09:34:39', '2024-12-23 09:34:39', 'Natural Language Processing with Python Cookbook (Krishna Bhavsar, Pratap Dangeti).pdf'),
(74, 23, 'Natural Language Processing with Python', 'Steven Bird, Ewan Klein, Edward Loper', '2024-12-23 09:34:39', '2024-12-23 09:34:39', 'Natural Language Processing with Python (Steven Bird, Ewan Klein, Edward Loper).pdf'),
(75, 21, 'Battle Ready Laravel', 'Ashley Allen', '2024-12-23 09:34:39', '2024-12-23 09:34:39', 'Battle Ready Laravel (Ashley Allen).pdf'),
(76, 21, 'Laravel Queues in Action', 'Mohamed Said', '2024-12-23 09:34:39', '2024-12-23 09:34:39', 'Laravel queues in action (Mohamed Said).pdf'),
(77, 21, 'Easy Laravel 5 - A Hands On Introduction Using A Real World Project', 'W. Jason Gilmore', '2024-12-23 09:34:39', '2024-12-23 09:34:39', 'Easy Laravel 5 - A Hands On Introduction Using A Real World Project (W. Jason Gilmore).pdf'),
(78, 21, 'Learning Laravel 5 - Building Practical Applications', 'Nathan Wu', '2024-12-23 09:34:39', '2024-12-23 09:34:39', 'Learning Laravel 5 - Building Practical Applications (Nathan Wu).pdf'),
(79, 21, 'Laravel Up & Running', 'Matt Stauffer', '2024-12-23 09:34:39', '2024-12-23 09:34:39', 'Laravel Up Running (Matt Stauffer).pdf'),
(80, 22, 'Operating Systems Internals and Design Principles', 'Stallings, William', '2024-12-23 09:34:39', '2024-12-23 09:34:39', 'Operating systems internals and design principles (Stallings, William).pdf'),
(81, 22, 'Modern Operating Systems Global Edition', 'Bos Tanenbaum', '2024-12-23 09:34:39', '2024-12-23 09:34:39', 'Modern Operating Systems Global Edition (Bos Tanenbaum).pdf'),
(82, 22, 'Advanced Concepts In Operating Systems', 'Mukesh Singhal, Niranjan Shivaratri', '2024-12-23 09:34:39', '2024-12-23 09:34:39', 'Advanced Concepts In Operating Systems (Mukesh Singhal, Niranjan Shivaratri).pdf'),
(83, 22, 'Operating Systems Design and Implementation', 'Andrew S. Tanenbaum, Albert S. Woodhull', '2024-12-23 09:34:40', '2024-12-23 09:34:40', 'Operating Systems Design and Implementation (Andrew S. Tanenbaum, Albert S. Woodhull).pdf'),
(84, 22, 'Operating Systems Principles and Practice', 'Thomas Anderson, Michael Dahlin', '2024-12-23 09:34:40', '2024-12-23 09:34:40', 'Operating Systems Principles and Practice (Thomas Anderson, Michael Dahlin).pdf'),
(85, 24, 'Reproducible Research with R and RStudio', 'Christopher Gandrud', '2024-12-23 09:34:40', '2024-12-23 09:34:40', 'https://mega.nz/file/aiJ3zD6D#qc1g1JVrhBHDlwDLsf8Slie2DhUFWLWaolpi-xzWjT0'),
(86, 24, 'Hands-On Programming with R Write Your Own Functions and Simulations', 'Garrett Grolemund, Hadley Wickham', '2024-12-23 09:34:40', '2024-12-23 09:34:40', 'https://mega.nz/file/6240mLDB#qShD1NdstHI1oAp2INZcrrEXe6BlugNYBWk43UNSw60'),
(87, 24, 'Discovering Knowledge in Data An Introduction to Data Mining', 'Daniel T. Larose, Chantel D. Larose', '2024-12-23 09:34:40', '2024-12-23 09:34:40', 'https://mega.nz/file/v3gj1T7a#0_qkUOofKLrd_LS8UxElVh4ObfnMwpigBvxct8GTMlk'),
(88, 24, 'Data Mining Methods and Models', 'Daniel T. Larose', '2024-12-23 09:34:40', '2024-12-23 09:34:40', 'https://mega.nz/file/j2JFkQhS#_pXHTCwz_k-EW3fml6fhSMdVx5_RL-Ns24mgyv9tePQ'),
(89, 24, 'Data Mining Practical Machine Learning Tools and Techniques, Fourth Edition', 'Ian H. Witten, Eibe Frank, Mark A. Hall etc.', '2024-12-23 09:34:40', '2024-12-23 09:34:40', 'https://mega.nz/file/yzhAHSgY#Iz-YGFX7HtqPpGXG17nL_2VCKxk4DedQezvZKynRMwI'),
(90, 4, 'Calculus Made Easy', 'Silvanus P. Thompson, Martin Gardner', '2024-12-23 09:34:40', '2024-12-23 09:34:40', 'CALCUL~2.pdf'),
(91, 4, 'Calculus Early Transcendentals, 7th Edition', 'James Stewart', '2024-12-23 09:34:40', '2024-12-23 09:34:40', 'Calculus Early Transcendentals, 7th Edition (James Stewart).pdf'),
(92, 4, 'Calculus On Manifolds A Modern Approach To Classical Theorems Of Advanced Calculus', 'Michael Spivak', '2024-12-23 09:34:40', '2024-12-23 09:34:40', 'Calculus On Manifolds A Modern Approach To Classical Theorems Of Advanced Calculus (Michael Spivak).pdf'),
(93, 4, 'The Calculus Lifesaver', 'Adrian Banner', '2024-12-23 09:34:40', '2024-12-23 09:34:40', 'THECAL~1.pdf'),
(94, 4, 'Doing Math with Python Use Programming to Explore Algebra, Statistics, Calculus, and More', 'Amit Saha', '2024-12-23 09:34:40', '2024-12-23 09:34:40', 'Doing Math with Python Use Programming to Explore Algebra, Statistics, Calculus, and More (Amit Saha).pdf'),
(95, 3, 'A Common-Sense Guide to Data Structures and Algorithms Level Up Your Core Programming Skills', 'Jay Wengrow', '2024-12-23 09:35:35', '2024-12-23 09:35:35', 'A Common-Sense Guide to Data Structures and Algorithms Level Up Your Core Programming Skills (Jay Wengrow).pdf'),
(96, 3, 'C++ Programming. Program Design including Data Structures', 'D.S. Malik', '2024-12-23 09:35:35', '2024-12-23 09:35:35', 'C++ Programming. Program Design including Data Structures (D.S. Malik).pdf'),
(97, 3, 'Data Structures and Algorithms in C++', 'Adam Drozdek', '2024-12-23 09:35:35', '2024-12-23 09:35:35', 'Data Structures and Algorithms in C++ (Adam Drozdek).pdf'),
(98, 3, 'Data Structures and Algorithms Made Easy Data Structures and Algorithmic Puzzles', 'Narasimha Karumanchi', '2024-12-23 09:35:35', '2024-12-23 09:35:35', 'Data Structures and Algorithms Made Easy Data Structures and Algorithmic Puzzles (Narasimha Karumanchi).pdf'),
(99, 3, 'Data Structures Using C', 'Reema Thareja', '2024-12-23 09:35:35', '2024-12-23 09:35:35', 'Data structures using C (Reema Thareja).pdf'),
(100, 10, 'Making Sense of Data III A Practical Guide to Designing Interactive Data Visualizations', 'Glenn J. Myatt, Wayne P. Johnson', '2024-12-23 09:42:29', '2024-12-23 09:42:29', 'MAKING~1.pdf'),
(101, 10, 'The Basics of User Experience Design', 'Interaction Design Foundation', '2024-12-23 09:42:29', '2024-12-23 09:42:29', 'The Basics of User Experience Design (Interaction Design Foundation).pdf'),
(102, 10, 'Designing Web Interfaces', 'Bill Scott, Theresa Neil', '2024-12-23 09:42:29', '2024-12-23 09:42:29', 'DESIGN~1.pdf'),
(103, 10, 'Web Design Playground HTML + CSS the Interactive Way, 2nd Edition', 'Paul McFedries', '2024-12-23 09:42:29', '2024-12-23 09:42:29', 'Web Design Playground HTML + CSS the Interactive Way, 2nd Edition (Paul McFedries).pdf'),
(104, 11, 'Numerical Methods in Science and Engineering Theories with MATLAB, Mathematica, Fortran, C and Python Programs', 'Pramote Dechaumphai, N Wansophark', '2024-12-23 09:42:29', '2024-12-23 09:42:29', 'NUMERI~2.PDF'),
(105, 11, 'Introduction to Modern Scientific Programming and Numerical Methods', 'Lubos Brieda, Joseph Wang, Robert Martin', '2024-12-23 09:42:29', '2024-12-23 09:42:29', 'Introduction to C++ 500+ Difficulty-Scaled Solved Programming Exercises. (George S. Tselikis).pdf'),
(106, 11, 'Introduction to Computer Programming and Numerical Methods', 'Jocelyn O. Padallan', '2024-12-23 09:42:29', '2024-12-23 09:42:29', 'Introduction to Computer Programming and Numerical Methods (Jocelyn O. Padallan).pdf'),
(107, 11, 'Numerical Methods in Engineering with Python 3', 'Jaan Kiusalaas', '2024-12-23 09:42:29', '2024-12-23 09:42:29', 'Numerical Methods in Engineering with Python 3 (Jaan Kiusalaas).pdf'),
(108, 11, 'Python Programming and Numerical Methods', 'Qingkai Kong, Timmy Siauw, Alexandre Bayen', '2024-12-23 09:42:29', '2024-12-23 09:42:29', 'Python Programming and Numerical Methods (Qingkai Kong, Timmy Siauw, Alexandre Bayen).pdf'),
(109, 15, 'Algorithms Design Techniques and Analysis, 2nd Edition', 'M. H. Alsuwaiyel', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'Algorithms Design Techniques and Analysis, 2nd Edition (M. H. Alsuwaiyel).pdf'),
(110, 15, 'An Elementary Approach To Design And Analysis Of Algorithms', 'Lekh Raj Vermani, Shalini Vermani', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'An Elementary Approach To Design And Analysis Of Algorithms (Lekh Raj Vermani, Shalini Vermani).pdf'),
(111, 15, 'Introduction to Algorithms', 'Thomas H. Cormen, Charles E. Leiserson etc.', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'Introduction to Algorithms (Thomas H. Cormen, Charles E. Leiserson etc.).pdf'),
(112, 15, 'Introduction to the Design and Analysis of Algorithms', 'Levitin, Anany', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'Introduction to the design and analysis of algorithms (Levitin, Anany).pdf'),
(113, 15, 'The Design and Analysis of Computer Algorithms', 'etc.', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'The Design and Analysis of Computer Algorithms ( etc.).pdf'),
(114, 14, 'The Essential Turing: Seminal Writings in Computing, Logic, Philosophy, Artificial Intelligence, and Artificial Life: Plus The Secrets of Enigma', 'B. Jack Copeland (Editor)', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'THEESS~1.pdf'),
(115, 14, 'AI and Machine Learning for Coders A Programmers Guide to Artificial Intelligence', 'Laurence Moroney', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'AI and Machine Learning for Coders A Programmers Guide to Artificial Intelligence (Laurence Moroney).pdf'),
(116, 14, 'Artificial Intelligence for Humans, Volume 3', 'Jeff Heaton', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'Artificial Intelligence for Humans, Volume 3 (Jeff Heaton).pdf'),
(117, 14, 'Artificial Intelligence With an Introduction to Machine Learning', 'Richard E. Neapolitan, Xia Jiang', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'Artificial Intelligence With an Introduction to Machine Learning (Richard E. Neapolitan, Xia Jiang).pdf'),
(118, 14, 'Generative AI Navigating the Course to the Artificial General Intelligence Future', 'Musiol, Martin', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'Generative AI Navigating the Course to the Artificial General Intelligence Future (Musiol, Martin).pdf'),
(119, 5, 'The Language of SQL: How to Access Data in Relational Databases', 'Larry Rockoff', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'The Language of SQL How to Access Data in Relational Databases (Larry Rockoff).pdf'),
(120, 5, 'Database Technologies: Concepts, Methodologies, Tools, and Applications', 'John Erickson', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'Database Technologies Concepts, Methodologies, Tools, and Applications (John Erickson, John Erickson).pdf'),
(121, 5, 'Database Systems: Design, Implementation, Management', 'Carlos Coronel, Steven Morris', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'Database Systems Design, Implementation, Management (Carlos Coronel, Steven Morris).pdf'),
(122, 5, 'Concepts of Database Management (Sam 2007 Compatible Products)', 'Philip J. Pratt, Joseph J. Adamski', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'Concepts of Database Management (Sam 2007 Compatible Products) (Philip J. Pratt, Joseph J. Adamski).pdf'),
(123, 5, 'Advanced Database Query Systems: Techniques, Applications and Technologies', 'Li Yan', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'Advanced Database Query Systems Techniques, Applications and Technologies (Li Yan).pdf'),
(124, 13, 'A Textbook of Physical Chemistry, Volume VI Computational Aspects in Physical Chemistry, Third Edition', 'John Doe', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'ATEXTB~1.pdf'),
(125, 13, 'Applied Computational Physics', 'Joseph F. Boudreau, Eric S. Swanson', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'Applied Computational Physics (Joseph F. Boudreau, Eric S. Swanson) (Z-Library).pdf'),
(126, 13, 'Effective Computation in Physics Field Guide to Research with Python', 'Anthony Scopatz, Kathryn D. Huff', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'Effective Computation in Physics Field Guide to Research with Python (Anthony Scopatz, Kathryn D. Huff) (Z-Library).pdf'),
(127, 13, 'Fundamentals of Physics, Extended, Eighth Edition', 'David Halliday, Robert Resnick, Jearl Walker', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'Fundamentals of Physics, Extended, Eighth Edition (David Halliday, Robert Resnick, Jearl Walker) (Z-Library).pdf'),
(128, 13, 'Introductory Computational Physics', 'Andi Klein, Alexander Godunov', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'Introductory computational physics (Andi Klein, Alexander Godunov) (Z-Library).pdf'),
(129, 12, 'The Internet Book: Everything You Need to Know about Computer Networking and How the Internet Works, Fifth Edition', 'Douglas E. Comer', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'THEINT~1.pdf'),
(130, 12, 'Computer Networking A Top-Down Approach', 'James F. Kurose, Keith W. Ross', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'Computer Networking A Top-Down Approach (James F. Kurose, Keith W. Ross).pdf'),
(131, 12, 'Computer Networks', 'Andrew S. Tanenbaum', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'Computer Networks (Andrew S. Tanenbaum).pdf'),
(132, 12, 'Internet Infrastructure Networking, Web Services, and Cloud Computing', 'Richard Fox, Wei Hao', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'Internet Infrastructure Networking, Web Services, and Cloud Computing (Richard Fox, Wei Hao).pdf'),
(133, 12, 'Computer Programming', 'Jason Callaway', '2024-12-23 09:50:00', '2024-12-23 09:50:00', 'COMPUT~3.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
ADD PRIMARY KEY (`id`),
ADD KEY `subject_id` (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;
COMMIT;

/_!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT _/;
/_!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS _/;
/_!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION _/;
