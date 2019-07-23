-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 01:13 PM
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
  `googlemaps` varchar(1000) NOT NULL,
  `eventDate` date DEFAULT NULL,
  `eventTime` time NOT NULL,
  `price` smallint(4) DEFAULT NULL,
  `FK_location` smallint(3) DEFAULT NULL,
  `FK_eventtype` smallint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `evento`
--

INSERT INTO `evento` (`eventId`, `eventName`, `description`, `picture`, `address`, `website`, `googlemaps`, `eventDate`, `eventTime`, `price`, `FK_location`, `FK_eventtype`) VALUES
(1, 'Andrea Bocelli', 'Unforgetable experince hearing live this amazing singer.', 'http://www.andreabocelli.com/wp-content/uploads/sites/2/2014/07/Incanto1.jpg', 'Arsenija Carnojevica 58, 11070 Beograd', 'www.andreabocelli.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.3641247475484!2d20.4191007151592!3d44.814146079098684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6561a8c27169%3A0x81b82df6278d741a!2s%C5%A0tark+Arena!5e0!3m2!1sen!2sat!4v1563847422282!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '2013-10-05', '21:00:00', 60, 1, 1),
(2, 'Jamiroquai', 'Only words to descripe this concert is WOW', 'http://3.bp.blogspot.com/-14egye0MgLo/UdHO2bR3_JI/AAAAAAAAEoQ/GiDcvpsMjeU/s1600/Jamiroquai+131.JPG', 'Arsenija Carnojevica 58, 11070 Beograd', 'http://jamiroquai.com/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.3641247475484!2d20.4191007151592!3d44.814146079098684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6561a8c27169%3A0x81b82df6278d741a!2s%C5%A0tark+Arena!5e0!3m2!1sen!2sat!4v1563847422282!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '2013-06-21', '21:00:00', 30, 1, 1),
(3, 'PSG vs FK Crvena Zvezda', 'Comeback of Red Star in Champions league after 20 years', 'http://www.bhrt.ba/wp-content/uploads/2018/10/psg_crvena_zvezda04102018.jpg', '24 Rue du Commandant Guilbaud,', 'https://en.psg.fr/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.877966216069!2d2.2499449153243685!3d48.84146637928584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09c765b19%3A0x1b255b5eaea8281b!2s24+Rue+du+Commandant+Guilbaud%2C+75016+Paris%2C+France!5e0!3m2!1sen!2sat!4v1563847577818!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '2018-10-03', '20:45:00', 150, 4, 2),
(4, 'FC Sparta vs FK Crvena Zvezda', 'Great game, Crvena Zvezda goes further. Friendly atmoshpere on the stands and great fan experience.', 'http://static.mondo.rs/Picture/639929/jpeg/20170803_204414.jpg', 'Milady Horakove 1066/98, 170 82 Praha', 'https://sparta.cz/en/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1809.6882907072363!2d14.414954990496957!3d50.099658701425085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b94da2ed37adf%3A0xa79f510fbc38f649!2sM.+Hor%C3%A1kov%C3%A9+1066%2F98%2C+170+00+Praha+7-Bubene%C4%8D%2C+Czechia!5e0!3m2!1sen!2sat!4v1563847631057!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '2017-08-03', '20:45:00', 15, 5, 2);

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
  `googlemaps` varchar(1000) NOT NULL,
  `FK_location` smallint(3) DEFAULT NULL,
  `FK_gastrotype` smallint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gastro`
--

INSERT INTO `gastro` (`gastroId`, `gastroName`, `description`, `picture`, `address`, `phone`, `website`, `googlemaps`, `FK_location`, `FK_gastrotype`) VALUES
(2, 'Potkovica', 'Excellent tatar steak, staff extremely friendly, atmosphere in restaurant reminds me of good old times, exquisite feeling, prices follow quality.', 'https://fastly.4sqi.net/img/general/width960/576623_bLzkMFPo4wM9t7AQaG2ROnVwlhYjtBhacfyLT-MaV3g.jpg', 'Golsvordijeva 20, 11000 Beograd', '+381 11 2436363', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.9159080070262!2d20.47425495072384!3d44.80290237899615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7a9fb87e5561%3A0x7fccb0cd44575ea1!2sGolsvordijeva+20%2C+Beograd+11000%2C+Serbia!5e0!3m2!1sen!2sat!4v1563850929322!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 1, 1),
(3, 'La Fontaine de Belleville', 'This relaxed corner cafe, run by the team from Belleville Brulerie, is quintessentially Parisian: The morning starts off calm, and by afternoon the place is bustling.', 'https://media.cntraveler.com/photos/5a8736c47211e1293261cf1f/master/w_767,c_limit/La-Fontaine-De-Belleville-67.jpg', '31-33 Rue Juliette Dodu, 75010 Paris', '+33 9 81 75 54 54', 'www.lafontainedebelleville.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.0785248675957!2d2.3662730508921737!3d48.87577957918757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e0aaaceced3%3A0xfb9d98982ab54d28!2s31+Rue+Juliette+Dodu%2C+75010+Paris%2C+France!5e0!3m2!1sen!2sat!4v1563851027280!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 4, 2),
(12, 'Zlatno burence', 'Great grill, fresh salats and amazing dairy products. Staff is showing the great hospitality', 'https://10619-2.s.cdn12.com/rests/original/109_502713301.jpg', 'Gottschalkgasse 10, 1110 Wien', '+43 660 2304595', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2660.683776938559!2d16.410052150862334!3d48.174175579124395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476da9f9d384d2c3%3A0x9cf8af2f6443b10e!2sGottschalkgasse+10%2C+1110+Wien!5e0!3m2!1sen!2sat!4v1563850977301!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 2, 1),
(13, 'Cafe Central', 'Theres a reason CafÃ© Central is so popular with tourists. Just go. Seriously, in a city of great coffee houses, this might just be number one.', 'https://www.cafecentral.wien/inhalt/uploads/advocaat_cafecentral.jpg', 'Herrengasse 14, 1010 Wien', '+4315333763', 'https://www.cafecentral.wien/en/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2658.784784312367!2d16.362897350863946!3d48.210761179127395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d0797f70c3b2f%3A0xad849f0f7a1f3993!2sHerrengasse+14%2C+1010+Wien!5e0!3m2!1sen!2sat!4v1563851065749!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 2, 2),
(14, 'Alles Walzer Alles Wurst', 'Traditional austrian sauseges with awesome choise of hot spices. Must to try', 'https://fcc.at/ef/img720/00846_2.jpg', 'Quellenstrasse 84, 1100 Wien', '', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2660.5966825406986!2d16.370476150862455!3d48.175853979124604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476da9cf681a2d29%3A0xd15e9900c400f31c!2sQuellenstra%C3%9Fe+84%2C+1100+Wien!5e0!3m2!1sen!2sat!4v1563851098045!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 2, 3),
(15, 'Spumoni gardens', 'Pizza to die for!', 'https://media-cdn.tripadvisor.com/media/photo-s/01/5c/a0/49/l-b-spumoni-gardens-exterior.jpg', '2725 86th St, Brooklyn, NY 11223', '+1 718 449 1230', 'http://www.spumonigardens.com/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3029.5927417517455!2d-73.98349814943788!3d40.59474407924343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c244551797161b%3A0x1eadabb74b6b3c00!2s2725+86th+St%2C+Brooklyn%2C+NY+11223%2C+USA!5e0!3m2!1sen!2sat!4v1563851143422!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 3, 3),
(17, 'Bierteufl', 'So many different beers to choose from. The schnitzel was amazing and there is both a smoking and non- smoking section. I would recommend!', 'https://www.gutekueche.at/img/adresse/2155/bierteufel.jpg', 'Ungargasse 5, 1030 Wien', '+431 7126503', 'https://www.bierteufl.at/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2659.1482531891734!2d16.383660850863635!3d48.20376027912677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d0773d0182c61%3A0xa64d3b91b6855e5b!2sUngargasse+5%2C+1030+Wien!5e0!3m2!1sen!2sat!4v1563851172241!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 2, 5),
(19, 'Samo pivo', 'big variety of beers, well informed staff knowing exactly what to offer to the customers, natural and laid-back atmosphere', 'https://s3.eu-central-1.amazonaws.com/apartmani-u-beogradu/uploads/firms/83/sr/main/kafic-samo-pivo-beograd-20.jpg', 'Balkanska 13, 11000 Beograd', '+38111109759', 'http://www.samopivo.rs/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.4785419834056!2d20.45833725072418!3d44.81181477899608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7aae89b12d45%3A0x579486946eb01780!2sBalkanska+13%2C+Beograd%2C+Serbia!5e0!3m2!1sen!2sat!4v1563851206501!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 1, 5);

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
(5, 'beer house');

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
  `googlemaps` varchar(1000) NOT NULL,
  `FK_location` smallint(3) DEFAULT NULL,
  `FK_placestype` smallint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`placeId`, `placeName`, `description`, `picture`, `address`, `website`, `googlemaps`, `FK_location`, `FK_placestype`) VALUES
(1, 'Van Gogh', 'Step into Van Goghs world. Explore the worlds largest collection of works by Vincent van Gogh at the Van Gogh Museum in Amsterdam.', 'https://cdn.getyourguide.com/img/tour_img-336131-148.jpg', 'Museumplein 6, 1071 DJ Amsterdam', 'https://www.vangoghmuseum.nl/e', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.6925215150864!2d4.8792156510446425!3d52.35786177968462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609efc01d9a43%3A0x3bb601a21fd30ec6!2sMuseumplein+6%2C+1071+DJ+Amsterdam%2C+Netherlands!5e0!3m2!1sen!2sat!4v1563849130153!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 6, 1),
(2, 'Nikola Tesla', 'The Nikola Tesla Museum is a science museum dedicated to honoring and displaying the life and work of Nikola Tesla.', 'http://ttnotes.com/images/nikola-tesla-museum-belgrade-3.jpg', 'Krunska 51, 11000 Beograd', 'https://nikolateslamuseum.org/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.8065483863184!2d20.46853995072392!3d44.80513097899609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7aa0e1faaabd%3A0x72fa88077e1c211d!2sKrunska+51%2C+Beograd+11000%2C+Serbia!5e0!3m2!1sen!2sat!4v1563849165972!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 1, 1),
(3, 'Casino Austria', 'The Vienna Casino in the heritage-listed Palais Esterhazy combines a unique atmosphere and pulsating entertainment on four levels.', 'https://www.casinosavenue.com/upload/photoCasino/6136_casino-austria-vienna.jpeg', 'Kaerntner Str. 41, 1010 Wien', 'https://www.casinos.at/de/wien', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2659.1128368504305!2d16.368599250863685!3d48.204442479126975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d079c3db99ba3%3A0x75c15aa7bb6f84b9!2sK%C3%A4rntner+Str.+41%2C+1010+Wien!5e0!3m2!1sen!2sat!4v1563849193911!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 2, 2),
(4, 'Casino Ambassador', 'The casino is relatively small. The casino Prague offers the classic table games such as Blackjack and Roulette and in addition Ultimate Texas Hold em.', 'https://cdn.bestcasinosin.com/wp-content/uploads/bu/Casino_AMBASSADOR_PRAHA_1.jpg', 'Vaclavske nam. 5-7, Praha 1', 'https://www.casinoambassador.cz/en/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.121208700076!2d14.422959650944211!3d50.08401747932548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b94ecf683759b%3A0x92b0a47b834ae9a3!2zVsOhY2xhdnNrw6kgbsOhbS4gODQwLzUsIDExMCAwMCBOb3bDqSBNxJtzdG8sIEN6ZWNoaWE!5e0!3m2!1sen!2sat!4v1563849264944!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 5, 2),
(5, 'Vuk Karadzic monument', 'Monument dedicated to Serbian philologist and linguist who was the major reformer of the Serbian language. Big part of his life he spend in Vienna.', 'https://austria-forum.org/attach/Bilder_und_Videos/Bilder_Wien/1030_Gedenktafeln/3686/scaled-675x900-1030_Rasumofskygasse_22_-_Vuk_Stefanovic_Karadzic-Denkmal_IMG_3686.jpg', 'Rasumofskygasse 22, 1030 Wien', 'http://www.viennatouristguide.at/Gedenktafeln/B_GT/K/karadzic_3gtX.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2659.127191363269!2d16.389656050863625!3d48.20416597912683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d076d90ad3327%3A0x6ace183d92bb1666!2sRasumofskygasse+22%2C+1030+Wien!5e0!3m2!1sen!2sat!4v1563849317100!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 2, 3),
(6, 'Beogradski pobednik', 'One of the most famous works of Ivan Mestrovic. It is also one of the most visited tourist attractions in Belgrade and the citys most recognizable landmark.', 'https://www.serbia.com/wp-content/uploads/2013/07/800px-Kalemegdanska_terasa_Apr_20111.jpg', 'Kalemegdan 14, 11000 Beograd', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2001.0926436438767!2d20.447847936246983!3d44.822127807631816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6565fcf0fd21%3A0xe5f38e0604602dc!2sBeogradski+pobednik!5e0!3m2!1sen!2sat!4v1563849547539!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 1, 3),
(7, 'NY Aquarium', 'The aquariums mission is to save wildlife and wild places worldwide through science, conservation action, education, and inspiring people to value nature.', 'https://c532f75abb9c1c021b8c-e46e473f8aadb72cf2a8ea564b4e6a76.ssl.cf5.rackcdn.com/2018/06/27/4viys3zpuw_9jdtjcf8ks__Julie_Larsen_Maher_4849_Exhibits_and_Details_OWS_AQ_05_11_18.jpg', '602 Surf Ave, Brooklyn, NY 112', 'https://nyaquarium.com/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3030.520581086471!2d-73.97706944943863!3d40.57426317924577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c244360f1e1371%3A0x45f54e3a5017dbdc!2sNew+York+Aquarium!5e0!3m2!1sen!2sat!4v1563849587438!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 3, 4),
(8, 'Coney Island AP', 'When you vision Coney Island, you probably vision the amusement park. Coney Island is not only an amusement park, but a large fun place for family', 'https://static01.nyt.com/images/2009/02/17/nyregion/17coney_span.jpg', '1000 Surf Avenue, Brooklyn, NY', 'https://lunaparknyc.com/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3030.474404177424!2d-73.98039074943856!3d40.57528267924553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24435e6b06a65%3A0x55fa06465f23ed71!2s1000+Surf+Ave%2C+Brooklyn%2C+NY+11224%2C+USA!5e0!3m2!1sen!2sat!4v1563849621310!5m2!1sen!2sat\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 3, 4);

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
  `userpass` varchar(300) DEFAULT NULL,
  `usermail` varchar(30) DEFAULT NULL,
  `userrole` varchar(30) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `userpass`, `usermail`, `userrole`) VALUES
(6, 'ronaldo', 'e24dd2210803b4737a9bd9e3163a4ca807b63201c3bc32b68fb122ca52efff36', 'ronaldo@yahoo.com', 'user'),
(7, 'messi', '1145fa52010bb26c17c6fc854beaa21fa41e7943c8b079e4d02671df03273214', 'messi@yahoo.com', 'user'),
(8, 'serri', '2eab63ef5779541a23442a91eadb625dcc9e083fd857a58c6d7305d8132806ee', 'serri@yahoo.com', 'user'),
(9, 'theodora', '6e83207fbc89d99ee010ec2cf03d8ea91d2d70187b98557a81d821c673c81176', 'theodora@yahoo.com', 'user'),
(10, 'theodora', '6d9455e707c0e1debf9c4010aeca76349eb8e9aff4f0970d2b5e1592ae3e3cf5', 'theodora123@yahoo.com', 'user'),
(11, 'david', '0f14089313b20c1723ec1d660b0aaa4f473cf5b321cd370f2d48b7bcf9a7b234', 'david123@yahoo.com', 'admin');

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
  MODIFY `gastroId` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `gastrotype`
--
ALTER TABLE `gastrotype`
  MODIFY `gastroTypeId` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `locationId` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `userId` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
