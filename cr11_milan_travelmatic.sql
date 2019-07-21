-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 05:35 AM
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
-- Database: `cr11_milan_travelmatic`
--

-- --------------------------------------------------------

--
-- Table structure for table `evento`
--

CREATE TABLE `evento` (
  `eventId` smallint(3) NOT NULL,
  `eventName` varchar(30) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `website` varchar(30) DEFAULT NULL,
  `eventDate` date DEFAULT NULL,
  `eventTime` time NOT NULL,
  `price` smallint(4) DEFAULT NULL,
  `FK_location` smallint(3) DEFAULT NULL,
  `FK_eventtype` smallint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `evento`
--

INSERT INTO `evento` (`eventId`, `eventName`, `description`, `picture`, `address`, `website`, `eventDate`, `eventTime`, `price`, `FK_location`, `FK_eventtype`) VALUES
(1, 'Andrea Bocelli', 'Unforgetable experince hearing live this amazing singer.', 'http://www.andreabocelli.com/wp-content/uploads/sites/2/2014/07/Incanto1.jpg', 'Arsenija Carnojevica 58, 11070 Beograd', 'www.andreabocelli.com', '2013-10-05', '21:00:00', 60, 1, 1),
(2, 'Jamiroquai', 'Only words to descripe this concert is WOW', 'http://3.bp.blogspot.com/-14egye0MgLo/UdHO2bR3_JI/AAAAAAAAEoQ/GiDcvpsMjeU/s1600/Jamiroquai+131.JPG', 'Arsenija Carnojevica 58, 11070 Beograd', 'http://jamiroquai.com/', '2013-06-21', '21:00:00', 30, 1, 1),
(3, 'PSG vs FK Crvena Zvezda', 'Comeback of Red Star in Champions league after 20 years', 'http://www.bhrt.ba/wp-content/uploads/2018/10/psg_crvena_zvezda04102018.jpg', '24 Rue du Commandant Guilbaud,', 'https://en.psg.fr/', '2018-10-03', '20:45:00', 150, 4, 2),
(4, 'FC Sparta vs FK Crvena Zvezda', 'Great game, Crvena Zvezda goes further. Friendly atmoshpere on the stands and great fan experience.', 'http://static.mondo.rs/Picture/639929/jpeg/20170803_204414.jpg', 'Milady Horakove 1066/98, 170 82 Praha', 'https://sparta.cz/en/', '2017-08-03', '20:45:00', 15, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `eventtype`
--

CREATE TABLE `eventtype` (
  `eventtypeId` smallint(3) NOT NULL,
  `eventtype` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventtype`
--

INSERT INTO `eventtype` (`eventtypeId`, `eventtype`) VALUES
(1, 'concert'),
(2, 'sport');

-- --------------------------------------------------------

--
-- Table structure for table `gastro`
--

CREATE TABLE `gastro` (
  `gastroId` smallint(3) NOT NULL,
  `gastroName` varchar(30) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `website` varchar(200) DEFAULT NULL,
  `FK_location` smallint(3) DEFAULT NULL,
  `FK_gastrotype` smallint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gastro`
--

INSERT INTO `gastro` (`gastroId`, `gastroName`, `description`, `picture`, `address`, `phone`, `website`, `FK_location`, `FK_gastrotype`) VALUES
(1, 'Zlatno burence', 'Great grill, fresh salats and amazing dairy products. Staff is showing the great hospitality', 'https://10619-2.s.cdn12.com/rests/original/109_502713301.jpg', 'Gottschalkgasse 10, 1110 Wien', '+43 660 2304595', '', 2, 1),
(2, 'Potkovica', 'Excellent tatar steak, staff extremely friendly, atmosphere in restaurant reminds me of good old times, exquisite feeling, prices follow quality.', 'https://fastly.4sqi.net/img/general/width960/576623_bLzkMFPo4wM9t7AQaG2ROnVwlhYjtBhacfyLT-MaV3g.jpg', 'Golsvordijeva 20, 11000 Beograd', '+381 11 2436363', '', 1, 1),
(3, 'La Fontaine de Belleville', 'This relaxed corner cafe, run by the team from Belleville Brulerie, is quintessentially Parisian: The morning starts off calm, and by afternoon the place is bustling.', 'https://media.cntraveler.com/photos/5a8736c47211e1293261cf1f/master/w_767,c_limit/La-Fontaine-De-Belleville-67.jpg', '31-33 Rue Juliette Dodu, 75010 Paris', '+33 9 81 75 54 54', 'www.lafontainedebelleville.com', 4, 2),
(4, 'Cafe Central', 'Theres a reason Cafe Central is so popular with tourists. Just go. Seriously, in a city of great coffee houses, this might just be number one.', 'https://www.cafecentral.wien/inhalt/uploads/advocaat_cafecentral.jpg', 'Herrengasse 14, 1010 Wien', '+43 1 5333763', 'https://www.cafecentral.wien/en/', 2, 2),
(5, 'Alles Walzer Alles Wurst', 'Traditional austrian sauseges with awesome choise of hot spices. Must to try.', 'https://fcc.at/ef/img720/00846_2.jpg', 'Quellenstrasse 84, 1100 Wien', '+43 1 1111777', '', 2, 3),
(6, 'Spumoni gardens', 'Pizza to die for!', 'https://media-cdn.tripadvisor.com/media/photo-s/01/5c/a0/49/l-b-spumoni-gardens-exterior.jpg', '2725 86th St, Brooklyn, NY 11223', '+1 718 449 1230', 'http://www.spumonigardens.com/', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `gastrotype`
--

CREATE TABLE `gastrotype` (
  `gastroTypeId` smallint(3) NOT NULL,
  `gastroType` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gastrotype`
--

INSERT INTO `gastrotype` (`gastroTypeId`, `gastroType`) VALUES
(1, 'restaurant'),
(2, 'coffee house'),
(3, 'fast food'),
(4, 'beer house');

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
  `placeId` smallint(3) NOT NULL,
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

INSERT INTO `places` (`placeId`, `placeName`, `description`, `picture`, `address`, `website`, `FK_location`, `FK_placestype`) VALUES
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
  `userpass` varchar(30) DEFAULT NULL,
  `usermail` varchar(30) DEFAULT NULL,
  `userrole` varchar(30) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `userpass`, `usermail`, `userrole`) VALUES
(1, 'milica', 'milica', 'milica@yahoo.com', 'user'),
(2, 'milan', 'f7ec5dd17b3c4da1d646b7a5ef8df9', 'milan1983@yahoo.com', 'admin'),
(3, 'aleksandra', '85932645925c3455b11b6f7da4c87f', 'aleksandra@yahoo.com', 'user'),
(4, 'starinac', '2bba0d053eed118b565702ecb2eb36', 'starinac@yahoo.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`eventId`),
  ADD KEY `FK_location` (`FK_location`),
  ADD KEY `FK_eventtype` (`FK_eventtype`);

--
-- Indexes for table `eventtype`
--
ALTER TABLE `eventtype`
  ADD PRIMARY KEY (`eventtypeId`);

--
-- Indexes for table `gastro`
--
ALTER TABLE `gastro`
  ADD PRIMARY KEY (`gastroId`),
  ADD KEY `FK_location` (`FK_location`),
  ADD KEY `FK_gastrotype` (`FK_gastrotype`);

--
-- Indexes for table `gastrotype`
--
ALTER TABLE `gastrotype`
  ADD PRIMARY KEY (`gastroTypeId`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locationId`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`placeId`),
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
-- AUTO_INCREMENT for table `evento`
--
ALTER TABLE `evento`
  MODIFY `eventId` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `eventtype`
--
ALTER TABLE `eventtype`
  MODIFY `eventtypeId` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gastro`
--
ALTER TABLE `gastro`
  MODIFY `gastroId` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gastrotype`
--
ALTER TABLE `gastrotype`
  MODIFY `gastroTypeId` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `locationId` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `placeId` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `placestype`
--
ALTER TABLE `placestype`
  MODIFY `placesTypeId` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`FK_location`) REFERENCES `location` (`locationId`),
  ADD CONSTRAINT `evento_ibfk_2` FOREIGN KEY (`FK_eventtype`) REFERENCES `eventtype` (`eventtypeId`);

--
-- Constraints for table `gastro`
--
ALTER TABLE `gastro`
  ADD CONSTRAINT `gastro_ibfk_1` FOREIGN KEY (`FK_location`) REFERENCES `location` (`locationId`),
  ADD CONSTRAINT `gastro_ibfk_2` FOREIGN KEY (`FK_gastrotype`) REFERENCES `gastrotype` (`gastroTypeId`);

--
-- Constraints for table `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `places_ibfk_1` FOREIGN KEY (`FK_location`) REFERENCES `location` (`locationId`),
  ADD CONSTRAINT `places_ibfk_2` FOREIGN KEY (`FK_placestype`) REFERENCES `placestype` (`placesTypeId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
