-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 05:36 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_milan`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `locationId` smallint(3) NOT NULL,
  `location` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locationId`, `location`) VALUES
(1, 'Belgrade'),
(2, 'Vienna'),
(3, 'New York'),
(4, 'Paris'),
(5, 'Prague'),
(6, 'Amsterdam');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `placeIdPrimary` smallint(3) NOT NULL,
  `placeName` varchar(30) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `FK_location` smallint(3) DEFAULT NULL,
  `FK_placestype` smallint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`placeIdPrimary`, `placeName`, `description`, `picture`, `address`, `website`, `FK_location`, `FK_placestype`) VALUES
(1, 'Van Gogh', 'Step into Van Goghs world. Explore the worlds largest collection of works by Vincent van Gogh at the Van Gogh Museum in Amsterdam.', 'https://cdn.getyourguide.com/img/tour_img-336131-148.jpg', 'Museumplein 6, 1071 DJ Amsterdam', 'https://www.vangoghmuseum.nl/e', 6, 1),
(2, 'Nikola Tesla', 'The Nikola Tesla Museum is a science museum dedicated to honoring and displaying the life and work of Nikola Tesla.', 'http://ttnotes.com/images/nikola-tesla-museum-belgrade-3.jpg', 'Krunska 51, 11000 Beograd', 'https://nikolateslamuseum.org/', 1, 1),
(3, 'Casino Austria', 'The Vienna Casino in the heritage-listed Palais Esterhazy combines a unique atmosphere and pulsating entertainment on four levels.', 'https://www.casinosavenue.com/upload/photoCasino/6136_casino-austria-vienna.jpeg', 'Kaerntner Str. 41, 1010 Wien', 'https://www.casinos.at/de/wien', 2, 2),
(4, 'Casino Ambassador', 'The casino is relatively small. The casino Prague offers the classic table games such as Blackjack and Roulette and in addition Ultimate Texas Hold em.', 'https://cdn.bestcasinosin.com/wp-content/uploads/bu/Casino_AMBASSADOR_PRAHA_1.jpg', 'Vaclavske nam. 5-7, Praha 1', 'https://www.casinoambassador.cz/en/', 5, 2),
(5, 'Vuk Karadzic monument', 'Monument dedicated to Serbian philologist and linguist who was the major reformer of the Serbian language. Big part of his life he spend in Vienna.', 'https://austria-forum.org/attach/Bilder_und_Videos/Bilder_Wien/1030_Gedenktafeln/3686/scaled-675x900-1030_Rasumofskygasse_22_-_Vuk_Stefanovic_Karadzic-Denkmal_IMG_3686.jpg', 'Rasumofskygasse 22, 1030 Wien', '', 2, 3),
(6, 'Beogradski pobednik', 'One of the most famous works of Ivan Mestrovic. It is also one of the most visited tourist attractions in Belgrade and the citys most recognizable landmark.', 'https://www.serbia.com/wp-content/uploads/2013/07/800px-Kalemegdanska_terasa_Apr_20111.jpg', 'Kalemegdan 14, 11000 Beograd', '', 1, 3),
(7, 'NY Aquarium', 'The aquariums mission is to save wildlife and wild places worldwide through science, conservation action, education, and inspiring people to value nature.', 'https://c532f75abb9c1c021b8c-e46e473f8aadb72cf2a8ea564b4e6a76.ssl.cf5.rackcdn.com/2018/06/27/4viys3zpuw_9jdtjcf8ks__Julie_Larsen_Maher_4849_Exhibits_and_Details_OWS_AQ_05_11_18.jpg', '602 Surf Ave, Brooklyn, NY 112', 'https://nyaquarium.com/', 3, 4),
(8, 'Coney Island AP', 'When you vision Coney Island, you probably vision the amusement park. Coney Island is not only an amusement park, but a large fun place for family', 'https://static01.nyt.com/images/2009/02/17/nyregion/17coney_span.jpg', '1000 Surf Avenue, Brooklyn, NY', 'https://lunaparknyc.com/', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `placestype`
--

CREATE TABLE `placestype` (
  `placesTypeId` smallint(3) NOT NULL,
  `placesType` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `placestype`
--

INSERT INTO `placestype` (`placesTypeId`, `placesType`) VALUES
(1, 'museum'),
(2, 'casino'),
(3, 'monument'),
(4, 'fun');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` smallint(3) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `usermail` varchar(30) DEFAULT NULL,
  `userpass` varchar(300) DEFAULT NULL,
  `userrole` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `usermail`, `userpass`, `userrole`) VALUES
(2, 'milano', 'milan@gofuckyourself.com', '813d2fbb481e0a17bc053fcd720c5c', 'user'),
(3, 'serri', 'serri@yahoo.com', '2eab63ef5779541a23442a91eadb625dcc9e083fd857a58c6d7305d8132806ee', 'user'),
(4, 'milica', 'milica@yahoo.com', 'f50ccb98908dd89ef400372d10750d4c506bebdc34c8141e11d2fb962ebb1b5d', 'admin'),
(5, 'milance', 'milance@yahoo.com', '90203f154bd02f174f613e60375cfdedd29c9aa47f099ae0a47a6bc6e7587aa2', NULL),
(6, 'mirko', 'mirko@yahoo.com', 'f459842656172baba7092315ffee41c1dca1c4550c761d583887158b5a68bf58', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locationId`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`placeIdPrimary`),
  ADD KEY `FK_location` (`FK_location`),
  ADD KEY `FK_placestype` (`FK_placestype`);

--
-- Indexes for table `placestype`
--
ALTER TABLE `placestype`
  ADD PRIMARY KEY (`placesTypeId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `locationId` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `placeIdPrimary` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `placestype`
--
ALTER TABLE `placestype`
  MODIFY `placesTypeId` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
