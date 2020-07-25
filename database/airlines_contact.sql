-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2020 at 10:08 AM
-- Server version: 8.0.20-0ubuntu0.19.10.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `africlaim`
--

-- --------------------------------------------------------

--
-- Table structure for table `airlines_contact`
--

CREATE TABLE `airlines_contact` (
  `id` int NOT NULL,
  `country` varchar(191) NOT NULL,
  `airline` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `url` varchar(191) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airlines_contact`
--

INSERT INTO `airlines_contact` (`id`, `country`, `airline`, `email`, `phone`, `url`) VALUES
(2, 'Austria', 'Austrian Airlines', 'feedback@austrian.com', '+43 (0)5 1766 1000', 'http://www.austrian.com/'),
(3, 'Belarus', 'Belavia', 'info@belavia.by', '17 220 2555', 'https://www.facebook.com/belavia'),
(4, 'Belgium', 'Brussels Airlines', 'callcenter.en@brusselsairlines.com', '02 723 2362', 'http://www.brusselsairlines.com/'),
(5, 'Bulgaria', 'BH Air', 'bhair@bhairlines.com', '+359 2 981 0189', 'http://www.bhairlines.com/'),
(6, 'Bulgaria', 'Bulgaria Air', 'callfb@air.bg', '02 402 0400', 'http://www.air.bg/'),
(7, 'Bulgaria', 'Bulgarian Air Charter', 'office@bgaircharter.com', '+359 2 978 7676', 'http://www.bgaircharter.com/'),
(8, 'Croatia', 'Croatia Airlines', 'contact@croatiaairlines.hr', '', 'https://www.facebook.com/croatiaairlines'),
(9, 'Croatia', 'Trade Air', 'fly@trade-air.com', '+385 1 626 5053', 'http://www.trade-air.com/'),
(10, 'Czech Republic', 'CSA Czech Airlines', 'call.centre@csa.cz', '+420 239 007 007', 'http://www.czechairlines.com/'),
(11, 'Denmark', 'Air Greenland', 'info@airgreenland.gl', '+299 34 34 34', 'https://www.facebook.com/airgreenland'),
(12, 'Denmark', 'Atlantic Airways', 'booking@atlantic.fo', '(+298) 34 10 00', 'http://www.atlantic.fo/'),
(13, 'Denmark', 'DAT', 'customerservice@dat.dk', '75 58 37 77', 'https://www.facebook.com/DAT'),
(14, 'Denmark', 'Jet Time', 'passagerservice@jet-time.dk', '+45 32 46 73 00', 'http://www.jet-time.dk/'),
(15, 'France', 'Air Caraïbes', 'reservation@aircaraibes.com', '', 'https://www.facebook.com/aircaraibes'),
(16, 'France', 'Air Corsica', 'support-commercial@aircorsica.com', '', 'http://www.aircorsica.com/'),
(17, 'France', 'Air France', 'mail.meda@airfrance.fr', '', 'https://www.facebook.com/Air-France'),
(18, 'France', 'Twin Jet', 'Infolignes@twinjet.net', '+33 892 707 737', 'http://www.twinjet.fr/'),
(19, 'Georgia', 'Georgian Airways', 'info@georgian-airways.com', '', 'https://www.facebook.com/GeoAirwayss'),
(20, 'Germany', 'Condor', 'reservation.en@condor.com', '', 'http://www.condor.com/'),
(21, 'Germany', 'Hahn Air', 'service@hahnair.com', '+49 6103 7331 200', 'http://www.hahnair.com/'),
(22, 'Germany', 'Lufthansa', 'customer.relations@lufthansa.com', '', 'https://www.lufthansa.com/'),
(23, 'Germany', 'Lufthansa CityLine', 'lh-cityline@dlh.de', '+49 (0)69 696 0', 'http://www.lufthansacityline.com/'),
(24, 'Greece', 'Aegean Airlines', 'contact@aegeanair.com', '+30 210 626 1900', 'https://en.aegeanair.com/'),
(25, 'Greece', 'Astra Airlines', 'sales@astra-airlines.gr', '+30 2310 489 390', 'http://www.astra-airlines.gr/'),
(26, 'Greece', 'Ellinair', 'admin@ellinair.com', '+30 2311 224 700', 'http://www.ellinair.com/'),
(27, 'Greece', 'Sky Express', 'sales@skyexpress.gr', '', 'http://www.skyexpress.gr/'),
(28, 'Iceland', 'Air Atlanta Icelandic', 'info@airatlanta.com', '+354 458 4000', 'http://www.atlanta.is/'),
(29, 'Iceland', 'Icelandair', 'sales@icelandair.is', '+354 50 50 100', 'https://www.facebook.com/Icelandair'),
(30, 'Ireland', 'CityJet', 'info@cityjet.com', '+353 (0)1 870 0100', 'http://www.cityjet.com/'),
(31, 'Italy', 'Air Dolomiti', 'customer-relations@airdolomiti.it', '045 860 5211', 'http://www.airdolomiti.eu/'),
(32, 'Italy', 'Blue Panorama Airlines', 'contact@blue-panorama.com', '+39 6 9950 3111', 'https://airlinecontact.info/airline/Blue%20Panorama%20Airlines'),
(33, 'Italy', 'Mistral Air', 'mistralbooking@posteitaliane.it', '06 9666 3333', 'http://www.mistralair.it/'),
(34, 'Italy', 'Neos', 'linea@neosair.it', '', 'http://www.neosair.it/'),
(35, 'Latvia', 'Air Baltic', 'info@airbaltic.lv', '06 720 7069', 'https://www.facebook.com/airBaltic'),
(36, 'Latvia', 'SmartLynx Airlines', 'info@smart-lynx.com', '+371 6720 7392', 'http://www.smartlynx.aero/'),
(37, 'Lithuania', 'Small Planet Airlines', 'info@smallplanet.aero', '05 255 5655', 'http://www.smallplanet.aero/'),
(38, 'Luxembourg', 'Luxair', 'info@luxair.lu', '', 'https://www.facebook.com/luxair.lu'),
(39, 'Malta', 'Air Malta', 'customercare.airmalta@airmalta.com', '+356 21 662 211', 'http://www.airmalta.com/'),
(40, 'Moldova', 'Air Moldova', 'agency@airmoldova.md', '022 525 502', 'https://www.facebook.com/airmoldova'),
(41, 'Netherlands', 'KLM', 'KLMCares@klm.com', '', 'https://twitter.com/klm'),
(42, 'Norway', 'Widerøe', 'support@wideroe.no', '75 51 35 00', 'https://www.wideroe.no/'),
(43, 'Poland', 'Enter Air', 'enterair@enterair.pl', '+48 22 355 15 70', 'https://www.enterair.pl/'),
(44, 'Portugal', 'Azores Airlines', 'info@sata.pt', '296 209 700', 'http://www.azoresairlines.pt/'),
(45, 'Portugal', 'Euro Atlantic Airways', 'reservationslis@euroatlantic.pt', '218 437 040', 'http://www.euroatlantic.pt/'),
(46, 'Portugal', 'Hi Fly', 'hifly@hifly.aero', '211 143 500', 'https://www.facebook.com/hiflyairline'),
(47, 'Portugal', 'Portugália Airlines', 'comunicacao@pga.pt', '217 656 000', 'http://www.portugalia-airlines.pt/'),
(48, 'Portugal', 'White Airways', 'white@flywhite.com', '219 457 560', 'http://www.flywhite.com/'),
(49, 'Romania', 'Carpatair', 'customer.service@carpatair.com', '256 306 933', 'http://www.carpatair.com/'),
(50, 'Romania', 'Tarom', 'rezervari@tarom.ro', '', 'https://www.facebook.com/tarom.ro'),
(51, 'Russia', 'Aurora', 'office@flyaurora.ru', '', 'http://www.flyaurora.ru/'),
(52, 'Russia', 'Pobeda', 'feedback@pobeda.aero', '', 'http://www.pobeda.aero/'),
(53, 'Russia', 'Red Wings Airlines', 'feedback@flyredwings.com', '', 'https://www.facebook.com/flyredwings'),
(54, 'Russia', 'S7 Airlines', 'info@s7.ru', '', 'http://www.s7.ru/'),
(55, 'Russia', 'Yamal Airlines', 'airway@yamal.aero', '+7 349 224 3910', 'https://www.yamal.aero/'),
(56, 'Serbia', 'Air Serbia', 'callcenter@airserbia.com', '+381 11 311 21 23', 'http://www.airserbia.com/'),
(57, 'Slovenia', 'Adria Airways', 'info@adria.si', '+386 (0)4 255 9000', 'http://www.adria.si/'),
(58, 'Spain', 'Air Europa', 'clientes@air-europa.com', '', 'https://www.facebook.com/AirEuropa'),
(59, 'Spain', 'AlbaStar', 'info@albastar.es', '971 575 072', 'http://albastar.es/'),
(60, 'Spain', 'Binter Canarias', 'atencionclientes@bintercanarias.com', '902 875 787', 'https://www.facebook.com/bintercanarias'),
(61, 'Spain', 'Evelop', 'reservas@evelop.com', '', 'http://evelop.com/'),
(62, 'Spain', 'Iberia', 'clasica@iberia.es', '91 587 87 87', 'http://www.iberia.com/'),
(63, 'Spain', 'Iberia Express', 'comunicacion@iberiaexpress.com', '', 'https://twitter.com/iberiaexpress'),
(64, 'Spain', 'Wamos Air', 'reservas@wamosair.com', '', 'http://www.wamosair.com/'),
(65, 'Sweden', 'Braathens Regional Airlines', 'kundcenter@flygbra.se', '0771 44 00 10', 'https://www.flygbra.se/'),
(66, 'Sweden', 'Novair', 'kundservice@novair.se', '', 'https://www.novair.se/'),
(67, 'Switzerland', 'Edelweiss Air', 'services@flyedelweiss.com', '', 'https://www.facebook.com/flyedelweiss'),
(68, 'Switzerland', 'SkyWork Airlines', 'service@flyskywork.com', '031 810 18 18', 'http://flyskywork.com/'),
(69, 'Switzerland', 'Swiss International Air Lines', 'info.ca@swiss.com', '+41 (0)61 582 3333', 'https://twitter.com/flyswiss'),
(70, 'Turkey', 'Corendon Airlines', 'info@corendon-airlines.com', '242 310 9000', 'http://www.corendonairlines.com/'),
(71, 'Turkey', 'Freebird Airlines', 'info@freebirdairlines.com', '212 663 7777', 'https://www.freebirdairlines.com/'),
(72, 'Turkey', 'Onur Air', 'crm@onurair.com.tr', '+90 212 468 66 87', 'http://www.onurair.com/'),
(73, 'Turkey', 'Pegasus Airlines', 'info@flypgs.com', '216 560 7000', 'https://www.facebook.com/pegasusairlines'),
(74, 'Turkey', 'SunExpress', 'travelcenter@sunexpress.com', '0242 310 2626', 'https://www.facebook.com/SunExpressInternatio'),
(75, 'Turkey', 'Tailwind Airlines', 'customer@tailwind.com.tr', '212 465 3737', 'https://instagram.com/tailwindofficial'),
(76, 'Turkey', 'Turkish Airlines', 'info@thy.com', '212 463 63 63', 'https://www.facebook.com/turkishairlines'),
(77, 'UK', 'Aurigny', 'res@aurigny.com', '01481 266444', 'https://www.facebook.com/aurignyairservices'),
(78, 'UK', 'Blue Islands', 'customercare@blueislands.com', '01234 589200', 'https://www.blueislands.com/'),
(79, 'UK', 'British Airways', 'bacustomerrelations@ba.com', '', 'https://www.facebook.com/britishairways'),
(80, 'UK', 'Eastern Airways', 'customersupport@easternairways.com', '01652 680600', 'https://www.facebook.com/EasternAirways'),
(81, 'UK', 'easyJet', 'customer.support@easyJet.com', '', 'https://www.facebook.com/easyJet'),
(82, 'UK', 'Jet2.com', 'contactcentre@jet2.com', '', 'https://www.facebook.com/jet2'),
(83, 'UK', 'Loganair', 'bookings@loganair.co.uk', '', 'http://www.loganair.co.uk/'),
(84, 'UK', 'Skybus', 'sales@islesofscilly-travel.co.uk', '', 'https://www.facebook.com/islesofscillytravel'),
(85, 'UK', 'Titan Airways', 'charter@titan-airways.co.uk', '01279 680616', 'http://www.titan-airways.com/'),
(86, 'UK', 'Virgin Atlantic', 'customer.care@fly.virgin.com', '', 'https://www.facebook.com/virginatlantic'),
(87, 'Ukraine', 'Air Urga', 'info2@urga.com.ua', '+380 (0)522 353 504', 'http://www.urga.com.ua/'),
(88, 'Ukraine', 'Windrose', '7w@windrose.kiev.ua', '044 492 9787', 'http://windrose.aero/'),
(90, 'US', 'Air Choice One', 'customerservice@airchoiceone.com', 'Phone: 866 435-9847', 'https://www.airchoiceone.com/'),
(91, 'US', 'Air Sunshine', 'reservations@airsunshine.com', 'Phone: (954) 434-8900', 'https://www.airsunshine.com/'),
(96, 'US', 'American Airlines', 'kurt.stache@aa.com', 'Frequent Flyer: Website', 'https://www.oneworld.com/'),
(97, 'US', 'Atlantic Airlines', 'reservation@atlanticair.com', 'Phone: 800 879-0000', 'http://www.atlanticairlines.com/'),
(98, 'US', 'Bering Air', 'reservations@beringair.com', 'Phone: (907) 443-5422', 'https://www.beringair.com/'),
(99, 'US', 'Boutique Air', 'cs@boutiqueair.com', 'Phone: (415) 449-0505', 'https://www.boutiqueair.com/'),
(102, 'US', 'Contour Airlines', 'customercare@contourairlines.com', '', 'http://www.contourairlines.com/'),
(103, 'US', 'Delta Air Lines', 'charter@delta.com', 'Frequent Flyer: Website', 'https://www.skyteam.com/'),
(104, 'US', 'Elite Airways', 'info@eliteairways.com', 'Phone: 877 393-2510', 'http://res.eliteairways.net/'),
(110, 'US', 'Grand Canyon Airlines', 'res@grandcanyonairlines.com', 'Phone: (702) 638-3200', 'https://www.grandcanyonairlines.com/'),
(113, 'US', 'iAero', 'info@flyiaero.com', '', 'https://www.iaeroairways.com/'),
(114, 'US', 'JetBlue Airways', 'DearJetBlue@jetblue.com', 'Frequent Flyer: Website', 'https://www.jetblue.com/trueblue'),
(115, 'US', 'Kenmore Air', 'customerservice@kenmoreair.com', 'Phone: 425 486-1257', 'https://www.kenmoreair.com/'),
(118, 'US', 'Mokulele Airlines', 'info@mokulelehawaii.com', 'Phone: (808) 495-4188', 'http://www.mokuleleairlines.com/'),
(120, 'US', 'Omni Air International', 'information@omniairintl.com', '', 'https://www.oai.aero/'),
(122, 'US', 'Republic Airline', 'CustomerRelations@rjet.com', 'Phone: 317 484-6000', 'http://www.rjet.com/'),
(123, 'US', 'Scenic Airlines', 'info@scenic.com', 'Phone: +1 702 638-3300', 'http://www.scenic.com/'),
(124, 'US', 'Seaborne Airlines', 'guestrelations@silverairways.com', 'Phone: (787) 946-8741', 'https://www.seaborneairlines.com/'),
(125, 'US', 'Silver Airways', 'guestrelations@silverairways.com', 'Phone: (954) 935-7587', 'http://www.silverairways.com/'),
(130, 'US', 'Taquan Air', 'info@taquanair.com', 'Phone: (907) 225-8800', 'http://www.taquanair.com/'),
(131, 'US', 'Trans States Airlines', 'info@transstates.net', 'Phone: (314) 222-4300', 'http://www.transstates.net/'),
(132, 'US', 'United Airlines', 'eservice@united.com', 'Frequent Flyer: Website', 'https://www.staralliance.com/'),
(133, 'US', 'Warbelows Air Ventures', 'fly@warbelows.com', 'Phone: (907) 474-0518', 'http://www.warbelows.com/'),
(134, 'US', 'Ward Air', 'reservations@wardair.com', 'Phone: 907 789-9150', 'http://www.wardair.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airlines_contact`
--
ALTER TABLE `airlines_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airlines_contact`
--
ALTER TABLE `airlines_contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
