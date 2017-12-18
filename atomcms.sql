-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-15 13:09:01
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atomcms`
--

-- --------------------------------------------------------

--
-- 表的结构 `pages`
--

CREATE TABLE `pages` (
  `id` mediumint(9) NOT NULL,
  `user` mediumint(9) DEFAULT '0',
  `slug` varchar(300) NOT NULL,
  `label` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `header` varchar(300) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `pages`
--

INSERT INTO `pages` (`id`, `user`, `slug`, `label`, `title`, `header`, `body`) VALUES
(2, 2, 'about-us', 'About', 'About Us', 'About AtomCMS', '<p><img style="float: right; width: 320px; height: 240px; margin-left: 10px;" src="images/sample.jpg" /> Evacuations have been ordered in coastal towns and communities of the Whitsundays and Burdekin council areas in north Queensland as Tropical Cyclone Debbie bears down, with authorities warning of damaging tidal surges. Late on Sunday afternoon, Burdekin Shire Council announced residents in coastal communities around Ayr would be directed to evacuate as soon as possible. Media player: "Space" to play, "M" to mute, "left" and "right" to seek. VIDEO: North Qld residents urged to finish preparations for Cyclone Debbie, check on neighbours (ABC News) Tropical Cyclone Debbie is likely to cross the Queensland coast as the worst cyclone since Yasi hit as a category five in 2011, the Bureau of Meteorology (BOM) warned. The system remains on track to be a severe category four cyclone when it makes landfall on Tuesday morning "somewhere near Ayr", BOM Queensland regional director Bruce Gunn said at a media briefing with the Premier on Sunday morning. Mr Gunn said winds of up to 250 kilometres per hour and significant tidal surges could be expected. At 7:00pm AEST on Sunday, the category-two system was estimated to be 440 kilometres east north-east of Townsville and 330km east-north-east of Bowen, moving west south-west at 7 kilometres per hour.</p>'),
(19, 1, 'home', 'Home', 'Home Page', 'Home Page', '<h2 id="toc-introduction" style="color: #333333; font-family: \'Open Sans\'; margin: 1.3em 0px 0.7em; clear: both; max-width: 85%; font-size: 24.3px;">Introduction</h2>\r\n<p style="margin: 0.4em 0px 0.8em; color: #555555; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 18px;">A powerful feature that makes JavaScript unique is its ability to work asynchronously via callback functions. Assigning async callbacks let you write event-driven code but it also makes tracking down bugs a hair pulling experience since the JavaScript is not executing in a linear fashion.</p>\r\n<p style="margin: 0.4em 0px 0.8em; color: #555555; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 18px;">Luckily, now in Chrome DevTools, you can view the&nbsp;<strong>full</strong>&nbsp;call stack of asynchronous JavaScript callbacks!</p>');

-- --------------------------------------------------------

--
-- 表的结构 `settings`
--

CREATE TABLE `settings` (
  `id` varchar(200) NOT NULL,
  `label` varchar(200) NOT NULL,
  `value` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `settings`
--

INSERT INTO `settings` (`id`, `label`, `value`) VALUES
('debug-status', 'Debug Status', '1'),
('site-title', 'Site Title', 'AtomCMS 2.0');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` mediumint(9) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `first` varchar(200) NOT NULL,
  `last` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `avatar`, `first`, `last`, `email`, `password`, `status`) VALUES
(1, '', 'Alan', 'Quandt', 'jkds@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(2, '1492261604156.jpg', 'Jiawei', 'Zheng', 'jiawei@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(3, '', 'John', 'Rainey', 'john@adfd.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1),
(4, '', 'John', 'Doe', 'john@doe.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `pages`
--
ALTER TABLE `pages`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
