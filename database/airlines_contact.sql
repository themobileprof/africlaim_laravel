-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 31, 2020 at 05:18 AM
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

--
-- Dumping data for table `airlines_contact`
--

INSERT INTO `airlines_contact` (`id`, `country`, `airline`, `email`, `phone`, `url`, `created_at`, `updated_at`) VALUES
(2, 'Austria', 'Austrian Airlines', 'feedback@austrian.com', '+43 (0)5 1766 1000', 'http://www.austrian.com/', NULL, NULL),
(3, 'Belarus', 'Belavia', 'info@belavia.by', '17 220 2555', 'https://www.facebook.com/belavia', NULL, NULL),
(4, 'Belgium', 'Brussels Airlines', 'callcenter.en@brusselsairlines.com', '02 723 2362', 'http://www.brusselsairlines.com/', NULL, NULL),
(5, 'Bulgaria', 'BH Air', 'bhair@bhairlines.com', '+359 2 981 0189', 'http://www.bhairlines.com/', NULL, NULL),
(6, 'Bulgaria', 'Bulgaria Air', 'callfb@air.bg', '02 402 0400', 'http://www.air.bg/', NULL, NULL),
(7, 'Bulgaria', 'Bulgarian Air Charter', 'office@bgaircharter.com', '+359 2 978 7676', 'http://www.bgaircharter.com/', NULL, NULL),
(8, 'Croatia', 'Croatia Airlines', 'contact@croatiaairlines.hr', '', 'https://www.facebook.com/croatiaairlines', NULL, NULL),
(9, 'Croatia', 'Trade Air', 'fly@trade-air.com', '+385 1 626 5053', 'http://www.trade-air.com/', NULL, NULL),
(10, 'Czech Republic', 'CSA Czech Airlines', 'call.centre@csa.cz', '+420 239 007 007', 'http://www.czechairlines.com/', NULL, NULL),
(11, 'Denmark', 'Air Greenland', 'info@airgreenland.gl', '+299 34 34 34', 'https://www.facebook.com/airgreenland', NULL, NULL),
(12, 'Denmark', 'Atlantic Airways', 'booking@atlantic.fo', '(+298) 34 10 00', 'http://www.atlantic.fo/', NULL, NULL),
(13, 'Denmark', 'DAT', 'customerservice@dat.dk', '75 58 37 77', 'https://www.facebook.com/DAT', NULL, NULL),
(14, 'Denmark', 'Jet Time', 'passagerservice@jet-time.dk', '+45 32 46 73 00', 'http://www.jet-time.dk/', NULL, NULL),
(15, 'France', 'Air Caraïbes', 'reservation@aircaraibes.com', '', 'https://www.facebook.com/aircaraibes', NULL, NULL),
(16, 'France', 'Air Corsica', 'support-commercial@aircorsica.com', '', 'http://www.aircorsica.com/', NULL, NULL),
(17, 'France', 'Air France', 'mail.meda@airfrance.fr', '', 'https://www.facebook.com/Air-France', NULL, NULL),
(18, 'France', 'Twin Jet', 'Infolignes@twinjet.net', '+33 892 707 737', 'http://www.twinjet.fr/', NULL, NULL),
(19, 'Georgia', 'Georgian Airways', 'info@georgian-airways.com', '', 'https://www.facebook.com/GeoAirwayss', NULL, NULL),
(20, 'Germany', 'Condor', 'reservation.en@condor.com', '', 'http://www.condor.com/', NULL, NULL),
(21, 'Germany', 'Hahn Air', 'service@hahnair.com', '+49 6103 7331 200', 'http://www.hahnair.com/', NULL, NULL),
(22, 'Germany', 'Lufthansa', 'customer.relations@lufthansa.com', '', 'https://www.lufthansa.com/', NULL, NULL),
(23, 'Germany', 'Lufthansa CityLine', 'lh-cityline@dlh.de', '+49 (0)69 696 0', 'http://www.lufthansacityline.com/', NULL, NULL),
(24, 'Greece', 'Aegean Airlines', 'contact@aegeanair.com', '+30 210 626 1900', 'https://en.aegeanair.com/', NULL, NULL),
(25, 'Greece', 'Astra Airlines', 'sales@astra-airlines.gr', '+30 2310 489 390', 'http://www.astra-airlines.gr/', NULL, NULL),
(26, 'Greece', 'Ellinair', 'admin@ellinair.com', '+30 2311 224 700', 'http://www.ellinair.com/', NULL, NULL),
(27, 'Greece', 'Sky Express', 'sales@skyexpress.gr', '', 'http://www.skyexpress.gr/', NULL, NULL),
(28, 'Iceland', 'Air Atlanta Icelandic', 'info@airatlanta.com', '+354 458 4000', 'http://www.atlanta.is/', NULL, NULL),
(29, 'Iceland', 'Icelandair', 'sales@icelandair.is', '+354 50 50 100', 'https://www.facebook.com/Icelandair', NULL, NULL),
(30, 'Ireland', 'CityJet', 'info@cityjet.com', '+353 (0)1 870 0100', 'http://www.cityjet.com/', NULL, NULL),
(31, 'Italy', 'Air Dolomiti', 'customer-relations@airdolomiti.it', '045 860 5211', 'http://www.airdolomiti.eu/', NULL, NULL),
(32, 'Italy', 'Blue Panorama Airlines', 'contact@blue-panorama.com', '+39 6 9950 3111', 'https://airlinecontact.info/airline/Blue%20Panorama%20Airlines', NULL, NULL),
(33, 'Italy', 'Mistral Air', 'mistralbooking@posteitaliane.it', '06 9666 3333', 'http://www.mistralair.it/', NULL, NULL),
(34, 'Italy', 'Neos', 'linea@neosair.it', '', 'http://www.neosair.it/', NULL, NULL),
(35, 'Latvia', 'Air Baltic', 'info@airbaltic.lv', '06 720 7069', 'https://www.facebook.com/airBaltic', NULL, NULL),
(36, 'Latvia', 'SmartLynx Airlines', 'info@smart-lynx.com', '+371 6720 7392', 'http://www.smartlynx.aero/', NULL, NULL),
(37, 'Lithuania', 'Small Planet Airlines', 'info@smallplanet.aero', '05 255 5655', 'http://www.smallplanet.aero/', NULL, NULL),
(38, 'Luxembourg', 'Luxair', 'info@luxair.lu', '', 'https://www.facebook.com/luxair.lu', NULL, NULL),
(39, 'Malta', 'Air Malta', 'customercare.airmalta@airmalta.com', '+356 21 662 211', 'http://www.airmalta.com/', NULL, NULL),
(40, 'Moldova', 'Air Moldova', 'agency@airmoldova.md', '022 525 502', 'https://www.facebook.com/airmoldova', NULL, NULL),
(41, 'Netherlands', 'KLM', 'KLMCares@klm.com', '', 'https://twitter.com/klm', NULL, NULL),
(42, 'Norway', 'Widerøe', 'support@wideroe.no', '75 51 35 00', 'https://www.wideroe.no/', NULL, NULL),
(43, 'Poland', 'Enter Air', 'enterair@enterair.pl', '+48 22 355 15 70', 'https://www.enterair.pl/', NULL, NULL),
(44, 'Portugal', 'Azores Airlines', 'info@sata.pt', '296 209 700', 'http://www.azoresairlines.pt/', NULL, NULL),
(45, 'Portugal', 'Euro Atlantic Airways', 'reservationslis@euroatlantic.pt', '218 437 040', 'http://www.euroatlantic.pt/', NULL, NULL),
(46, 'Portugal', 'Hi Fly', 'hifly@hifly.aero', '211 143 500', 'https://www.facebook.com/hiflyairline', NULL, NULL),
(47, 'Portugal', 'Portugália Airlines', 'comunicacao@pga.pt', '217 656 000', 'http://www.portugalia-airlines.pt/', NULL, NULL),
(48, 'Portugal', 'White Airways', 'white@flywhite.com', '219 457 560', 'http://www.flywhite.com/', NULL, NULL),
(49, 'Romania', 'Carpatair', 'customer.service@carpatair.com', '256 306 933', 'http://www.carpatair.com/', NULL, NULL),
(50, 'Romania', 'Tarom', 'rezervari@tarom.ro', '', 'https://www.facebook.com/tarom.ro', NULL, NULL),
(51, 'Russia', 'Aurora', 'office@flyaurora.ru', '', 'http://www.flyaurora.ru/', NULL, NULL),
(52, 'Russia', 'Pobeda', 'feedback@pobeda.aero', '', 'http://www.pobeda.aero/', NULL, NULL),
(53, 'Russia', 'Red Wings Airlines', 'feedback@flyredwings.com', '', 'https://www.facebook.com/flyredwings', NULL, NULL),
(54, 'Russia', 'S7 Airlines', 'info@s7.ru', '', 'http://www.s7.ru/', NULL, NULL),
(55, 'Russia', 'Yamal Airlines', 'airway@yamal.aero', '+7 349 224 3910', 'https://www.yamal.aero/', NULL, NULL),
(56, 'Serbia', 'Air Serbia', 'callcenter@airserbia.com', '+381 11 311 21 23', 'http://www.airserbia.com/', NULL, NULL),
(57, 'Slovenia', 'Adria Airways', 'info@adria.si', '+386 (0)4 255 9000', 'http://www.adria.si/', NULL, NULL),
(58, 'Spain', 'Air Europa', 'clientes@air-europa.com', '', 'https://www.facebook.com/AirEuropa', NULL, NULL),
(59, 'Spain', 'AlbaStar', 'info@albastar.es', '971 575 072', 'http://albastar.es/', NULL, NULL),
(60, 'Spain', 'Binter Canarias', 'atencionclientes@bintercanarias.com', '902 875 787', 'https://www.facebook.com/bintercanarias', NULL, NULL),
(61, 'Spain', 'Evelop', 'reservas@evelop.com', '', 'http://evelop.com/', NULL, NULL),
(62, 'Spain', 'Iberia', 'clasica@iberia.es', '91 587 87 87', 'http://www.iberia.com/', NULL, NULL),
(63, 'Spain', 'Iberia Express', 'comunicacion@iberiaexpress.com', '', 'https://twitter.com/iberiaexpress', NULL, NULL),
(64, 'Spain', 'Wamos Air', 'reservas@wamosair.com', '', 'http://www.wamosair.com/', NULL, NULL),
(65, 'Sweden', 'Braathens Regional Airlines', 'kundcenter@flygbra.se', '0771 44 00 10', 'https://www.flygbra.se/', NULL, NULL),
(66, 'Sweden', 'Novair', 'kundservice@novair.se', '', 'https://www.novair.se/', NULL, NULL),
(67, 'Switzerland', 'Edelweiss Air', 'services@flyedelweiss.com', '', 'https://www.facebook.com/flyedelweiss', NULL, NULL),
(68, 'Switzerland', 'SkyWork Airlines', 'service@flyskywork.com', '031 810 18 18', 'http://flyskywork.com/', NULL, NULL),
(69, 'Switzerland', 'Swiss International Air Lines', 'info.ca@swiss.com', '+41 (0)61 582 3333', 'https://twitter.com/flyswiss', NULL, NULL),
(70, 'Turkey', 'Corendon Airlines', 'info@corendon-airlines.com', '242 310 9000', 'http://www.corendonairlines.com/', NULL, NULL),
(71, 'Turkey', 'Freebird Airlines', 'info@freebirdairlines.com', '212 663 7777', 'https://www.freebirdairlines.com/', NULL, NULL),
(72, 'Turkey', 'Onur Air', 'crm@onurair.com.tr', '+90 212 468 66 87', 'http://www.onurair.com/', NULL, NULL),
(73, 'Turkey', 'Pegasus Airlines', 'info@flypgs.com', '216 560 7000', 'https://www.facebook.com/pegasusairlines', NULL, NULL),
(74, 'Turkey', 'SunExpress', 'travelcenter@sunexpress.com', '0242 310 2626', 'https://www.facebook.com/SunExpressInternatio', NULL, NULL),
(75, 'Turkey', 'Tailwind Airlines', 'customer@tailwind.com.tr', '212 465 3737', 'https://instagram.com/tailwindofficial', NULL, NULL),
(76, 'Turkey', 'Turkish Airlines', 'info@thy.com', '212 463 63 63', 'https://www.facebook.com/turkishairlines', NULL, NULL),
(77, 'UK', 'Aurigny', 'res@aurigny.com', '01481 266444', 'https://www.facebook.com/aurignyairservices', NULL, NULL),
(78, 'UK', 'Blue Islands', 'customercare@blueislands.com', '01234 589200', 'https://www.blueislands.com/', NULL, NULL),
(79, 'UK', 'British Airways', 'bacustomerrelations@ba.com', '', 'https://www.facebook.com/britishairways', NULL, NULL),
(80, 'UK', 'Eastern Airways', 'customersupport@easternairways.com', '01652 680600', 'https://www.facebook.com/EasternAirways', NULL, NULL),
(81, 'UK', 'easyJet', 'customer.support@easyJet.com', '', 'https://www.facebook.com/easyJet', NULL, NULL),
(82, 'UK', 'Jet2.com', 'contactcentre@jet2.com', '', 'https://www.facebook.com/jet2', NULL, NULL),
(83, 'UK', 'Loganair', 'bookings@loganair.co.uk', '', 'http://www.loganair.co.uk/', NULL, NULL),
(84, 'UK', 'Skybus', 'sales@islesofscilly-travel.co.uk', '', 'https://www.facebook.com/islesofscillytravel', NULL, NULL),
(85, 'UK', 'Titan Airways', 'charter@titan-airways.co.uk', '01279 680616', 'http://www.titan-airways.com/', NULL, NULL),
(86, 'UK', 'Virgin Atlantic', 'customer.care@fly.virgin.com', '', 'https://www.facebook.com/virginatlantic', NULL, NULL),
(87, 'Ukraine', 'Air Urga', 'info2@urga.com.ua', '+380 (0)522 353 504', 'http://www.urga.com.ua/', NULL, NULL),
(88, 'Ukraine', 'Windrose', '7w@windrose.kiev.ua', '044 492 9787', 'http://windrose.aero/', NULL, NULL),
(90, 'US', 'Air Choice One', 'customerservice@airchoiceone.com', 'Phone: 866 435-9847', 'https://www.airchoiceone.com/', NULL, NULL),
(91, 'US', 'Air Sunshine', 'reservations@airsunshine.com', 'Phone: (954) 434-8900', 'https://www.airsunshine.com/', NULL, NULL),
(96, 'US', 'American Airlines', 'kurt.stache@aa.com', 'Frequent Flyer: Website', 'https://www.oneworld.com/', NULL, NULL),
(97, 'US', 'Atlantic Airlines', 'reservation@atlanticair.com', 'Phone: 800 879-0000', 'http://www.atlanticairlines.com/', NULL, NULL),
(98, 'US', 'Bering Air', 'reservations@beringair.com', 'Phone: (907) 443-5422', 'https://www.beringair.com/', NULL, NULL),
(99, 'US', 'Boutique Air', 'cs@boutiqueair.com', 'Phone: (415) 449-0505', 'https://www.boutiqueair.com/', NULL, NULL),
(102, 'US', 'Contour Airlines', 'customercare@contourairlines.com', '', 'http://www.contourairlines.com/', NULL, NULL),
(103, 'US', 'Delta Air Lines', 'charter@delta.com', 'Frequent Flyer: Website', 'https://www.skyteam.com/', NULL, NULL),
(104, 'US', 'Elite Airways', 'info@eliteairways.com', 'Phone: 877 393-2510', 'http://res.eliteairways.net/', NULL, NULL),
(110, 'US', 'Grand Canyon Airlines', 'res@grandcanyonairlines.com', 'Phone: (702) 638-3200', 'https://www.grandcanyonairlines.com/', NULL, NULL),
(113, 'US', 'iAero', 'info@flyiaero.com', '', 'https://www.iaeroairways.com/', NULL, NULL),
(114, 'US', 'JetBlue Airways', 'DearJetBlue@jetblue.com', 'Frequent Flyer: Website', 'https://www.jetblue.com/trueblue', NULL, NULL),
(115, 'US', 'Kenmore Air', 'customerservice@kenmoreair.com', 'Phone: 425 486-1257', 'https://www.kenmoreair.com/', NULL, NULL),
(118, 'US', 'Mokulele Airlines', 'info@mokulelehawaii.com', 'Phone: (808) 495-4188', 'http://www.mokuleleairlines.com/', NULL, NULL),
(120, 'US', 'Omni Air International', 'information@omniairintl.com', '', 'https://www.oai.aero/', NULL, NULL),
(122, 'US', 'Republic Airline', 'CustomerRelations@rjet.com', 'Phone: 317 484-6000', 'http://www.rjet.com/', NULL, NULL),
(123, 'US', 'Scenic Airlines', 'info@scenic.com', 'Phone: +1 702 638-3300', 'http://www.scenic.com/', NULL, NULL),
(124, 'US', 'Seaborne Airlines', 'guestrelations@silverairways.com', 'Phone: (787) 946-8741', 'https://www.seaborneairlines.com/', NULL, NULL),
(125, 'US', 'Silver Airways', 'guestrelations@silverairways.com', 'Phone: (954) 935-7587', 'http://www.silverairways.com/', NULL, NULL),
(130, 'US', 'Taquan Air', 'info@taquanair.com', 'Phone: (907) 225-8800', 'http://www.taquanair.com/', NULL, NULL),
(131, 'US', 'Trans States Airlines', 'info@transstates.net', 'Phone: (314) 222-4300', 'http://www.transstates.net/', NULL, NULL),
(132, 'US', 'United Airlines', 'eservice@united.com', 'Frequent Flyer: Website', 'https://www.staralliance.com/', NULL, NULL),
(133, 'US', 'Warbelows Air Ventures', 'fly@warbelows.com', 'Phone: (907) 474-0518', 'http://www.warbelows.com/', NULL, NULL),
(134, 'US', 'Ward Air', 'reservations@wardair.com', 'Phone: 907 789-9150', 'http://www.wardair.com/', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
