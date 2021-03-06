-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2020 at 05:12 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

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
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `continent_code`) VALUES
('AD', 'Andorra, Principality of', 'EU'),
('AE', 'United Arab Emirates', 'AS'),
('AF', 'Afghanistan, Islamic Republic of', 'AS'),
('AG', 'Antigua and Barbuda', 'NA'),
('AI', 'Anguilla', 'NA'),
('AL', 'Albania, Republic of', 'EU'),
('AM', 'Armenia, Republic of', 'EU'),
('AN', 'Netherlands Antilles', 'NA'),
('AO', 'Angola, Republic of', 'AF'),
('AQ', 'Antarctica (the territory South of 60 deg S)', 'AN'),
('AR', 'Argentina, Argentine Republic', 'SA'),
('AS', 'American Samoa', 'OC'),
('AT', 'Austria, Republic of', 'EU'),
('AU', 'Australia, Commonwealth of', 'OC'),
('AW', 'Aruba', 'NA'),
('AX', 'Åland Islands', 'EU'),
('AZ', 'Azerbaijan, Republic of', 'EU'),
('BA', 'Bosnia and Herzegovina', 'EU'),
('BB', 'Barbados', 'NA'),
('BD', 'Bangladesh, People\'s Republic of', 'AS'),
('BE', 'Belgium, Kingdom of', 'EU'),
('BF', 'Burkina Faso', 'AF'),
('BG', 'Bulgaria, Republic of', 'EU'),
('BH', 'Bahrain, Kingdom of', 'AS'),
('BI', 'Burundi, Republic of', 'AF'),
('BJ', 'Benin, Republic of', 'AF'),
('BL', 'Saint Barthelemy', 'NA'),
('BM', 'Bermuda', 'NA'),
('BN', 'Brunei Darussalam', 'AS'),
('BO', 'Bolivia, Republic of', 'SA'),
('BQ', 'Bonaire, Sint Eustatius and Saba', 'NA'),
('BR', 'Brazil, Federative Republic of', 'SA'),
('BS', 'Bahamas, Commonwealth of the', 'NA'),
('BT', 'Bhutan, Kingdom of', 'AS'),
('BV', 'Bouvet Island (Bouvetoya)', 'AN'),
('BW', 'Botswana, Republic of', 'AF'),
('BY', 'Belarus, Republic of', 'EU'),
('BZ', 'Belize', 'NA'),
('CA', 'Canada', 'NA'),
('CC', 'Cocos (Keeling) Islands', 'AS'),
('CD', 'Congo, Democratic Republic of the', 'AF'),
('CF', 'Central African Republic', 'AF'),
('CG', 'Congo, Republic of the', 'AF'),
('CH', 'Switzerland, Swiss Confederation', 'EU'),
('CI', 'Cote d\'Ivoire, Republic of', 'AF'),
('CK', 'Cook Islands', 'OC'),
('CL', 'Chile, Republic of', 'SA'),
('CM', 'Cameroon, Republic of', 'AF'),
('CN', 'China, People\'s Republic of', 'AS'),
('CO', 'Colombia, Republic of', 'SA'),
('CR', 'Costa Rica, Republic of', 'NA'),
('CU', 'Cuba, Republic of', 'NA'),
('CV', 'Cape Verde, Republic of', 'AF'),
('CW', 'Curaçao', 'NA'),
('CX', 'Christmas Island', 'AS'),
('CY', 'Cyprus, Republic of', 'EU'),
('CZ', 'Czech Republic', 'EU'),
('DE', 'Germany, Federal Republic of', 'EU'),
('DJ', 'Djibouti, Republic of', 'AF'),
('DK', 'Denmark, Kingdom of', 'EU'),
('DM', 'Dominica, Commonwealth of', 'NA'),
('DO', 'Dominican Republic', 'NA'),
('DZ', 'Algeria, People\'s Democratic Republic of', 'AF'),
('EC', 'Ecuador, Republic of', 'SA'),
('EE', 'Estonia, Republic of', 'EU'),
('EG', 'Egypt, Arab Republic of', 'AF'),
('EH', 'Western Sahara', 'AF'),
('ER', 'Eritrea, State of', 'AF'),
('ES', 'Spain, Kingdom of', 'EU'),
('ET', 'Ethiopia, Federal Democratic Republic of', 'AF'),
('FI', 'Finland, Republic of', 'EU'),
('FJ', 'Fiji, Republic of the Fiji Islands', 'OC'),
('FK', 'Falkland Islands (Malvinas)', 'SA'),
('FM', 'Micronesia, Federated States of', 'OC'),
('FO', 'Faroe Islands', 'EU'),
('FR', 'France, French Republic', 'EU'),
('GA', 'Gabon, Gabonese Republic', 'AF'),
('GB', 'United Kingdom of Great Britain & Northern Ireland', 'EU'),
('GD', 'Grenada', 'NA'),
('GE', 'Georgia', 'EU'),
('GF', 'French Guiana', 'SA'),
('GG', 'Guernsey, Bailiwick of', 'EU'),
('GH', 'Ghana, Republic of', 'AF'),
('GI', 'Gibraltar', 'EU'),
('GL', 'Greenland', 'NA'),
('GM', 'Gambia, Republic of the', 'AF'),
('GN', 'Guinea, Republic of', 'AF'),
('GP', 'Guadeloupe', 'NA'),
('GQ', 'Equatorial Guinea, Republic of', 'AF'),
('GR', 'Greece, Hellenic Republic', 'EU'),
('GS', 'South Georgia and the South Sandwich Islands', 'AN'),
('GT', 'Guatemala, Republic of', 'NA'),
('GU', 'Guam', 'OC'),
('GW', 'Guinea-Bissau, Republic of', 'AF'),
('GY', 'Guyana, Co-operative Republic of', 'SA'),
('HK', 'Hong Kong, Special Administrative Region of China', 'AS'),
('HM', 'Heard Island and McDonald Islands', 'AN'),
('HN', 'Honduras, Republic of', 'NA'),
('HR', 'Croatia, Republic of', 'EU'),
('HT', 'Haiti, Republic of', 'NA'),
('HU', 'Hungary, Republic of', 'EU'),
('ID', 'Indonesia, Republic of', 'AS'),
('IE', 'Ireland', 'EU'),
('IL', 'Israel, State of', 'AS'),
('IM', 'Isle of Man', 'EU'),
('IN', 'India, Republic of', 'AS'),
('IO', 'British Indian Ocean Territory (Chagos Archipelago)', 'AS'),
('IQ', 'Iraq, Republic of', 'AS'),
('IR', 'Iran, Islamic Republic of', 'AS'),
('IS', 'Iceland, Republic of', 'EU'),
('IT', 'Italy, Italian Republic', 'EU'),
('JE', 'Jersey, Bailiwick of', 'EU'),
('JM', 'Jamaica', 'NA'),
('JO', 'Jordan, Hashemite Kingdom of', 'AS'),
('JP', 'Japan', 'AS'),
('KE', 'Kenya, Republic of', 'AF'),
('KG', 'Kyrgyz Republic', 'AS'),
('KH', 'Cambodia, Kingdom of', 'AS'),
('KI', 'Kiribati, Republic of', 'OC'),
('KM', 'Comoros, Union of the', 'AF'),
('KN', 'Saint Kitts and Nevis, Federation of', 'NA'),
('KP', 'Korea, Democratic People\'s Republic of', 'AS'),
('KR', 'Korea, Republic of', 'AS'),
('KW', 'Kuwait, State of', 'AS'),
('KY', 'Cayman Islands', 'NA'),
('KZ', 'Kazakhstan, Republic of', 'EU'),
('LA', 'Lao People\'s Democratic Republic', 'AS'),
('LB', 'Lebanon, Lebanese Republic', 'AS'),
('LC', 'Saint Lucia', 'NA'),
('LI', 'Liechtenstein, Principality of', 'EU'),
('LK', 'Sri Lanka, Democratic Socialist Republic of', 'AS'),
('LR', 'Liberia, Republic of', 'AF'),
('LS', 'Lesotho, Kingdom of', 'AF'),
('LT', 'Lithuania, Republic of', 'EU'),
('LU', 'Luxembourg, Grand Duchy of', 'EU'),
('LV', 'Latvia, Republic of', 'EU'),
('LY', 'Libyan Arab Jamahiriya', 'AF'),
('MA', 'Morocco, Kingdom of', 'AF'),
('MC', 'Monaco, Principality of', 'EU'),
('MD', 'Moldova, Republic of', 'EU'),
('ME', 'Montenegro, Republic of', 'EU'),
('MF', 'Saint Martin', 'NA'),
('MG', 'Madagascar, Republic of', 'AF'),
('MH', 'Marshall Islands, Republic of the', 'OC'),
('MK', 'Macedonia, The Former Yugoslav Republic of', 'EU'),
('ML', 'Mali, Republic of', 'AF'),
('MM', 'Myanmar, Union of', 'AS'),
('MN', 'Mongolia', 'AS'),
('MO', 'Macao, Special Administrative Region of China', 'AS'),
('MP', 'Northern Mariana Islands, Commonwealth of the', 'OC'),
('MQ', 'Martinique', 'NA'),
('MR', 'Mauritania, Islamic Republic of', 'AF'),
('MS', 'Montserrat', 'NA'),
('MT', 'Malta, Republic of', 'EU'),
('MU', 'Mauritius, Republic of', 'AF'),
('MV', 'Maldives, Republic of', 'AS'),
('MW', 'Malawi, Republic of', 'AF'),
('MX', 'Mexico, United Mexican States', 'NA'),
('MY', 'Malaysia', 'AS'),
('MZ', 'Mozambique, Republic of', 'AF'),
('NA', 'Namibia, Republic of', 'AF'),
('NC', 'New Caledonia', 'OC'),
('NE', 'Niger, Republic of', 'AF'),
('NF', 'Norfolk Island', 'OC'),
('NG', 'Nigeria, Federal Republic of', 'AF'),
('NI', 'Nicaragua, Republic of', 'NA'),
('NL', 'Netherlands, Kingdom of the', 'EU'),
('NO', 'Norway, Kingdom of', 'EU'),
('NP', 'Nepal, State of', 'AS'),
('NR', 'Nauru, Republic of', 'OC'),
('NU', 'Niue', 'OC'),
('NZ', 'New Zealand', 'OC'),
('OM', 'Oman, Sultanate of', 'AS'),
('PA', 'Panama, Republic of', 'NA'),
('PE', 'Peru, Republic of', 'SA'),
('PF', 'French Polynesia', 'OC'),
('PG', 'Papua New Guinea, Independent State of', 'OC'),
('PH', 'Philippines, Republic of the', 'AS'),
('PK', 'Pakistan, Islamic Republic of', 'AS'),
('PL', 'Poland, Republic of', 'EU'),
('PM', 'Saint Pierre and Miquelon', 'NA'),
('PN', 'Pitcairn Islands', 'OC'),
('PR', 'Puerto Rico, Commonwealth of', 'NA'),
('PS', 'Palestinian Territory, Occupied', 'AS'),
('PT', 'Portugal, Portuguese Republic', 'EU'),
('PW', 'Palau, Republic of', 'OC'),
('PY', 'Paraguay, Republic of', 'SA'),
('QA', 'Qatar, State of', 'AS'),
('RE', 'Reunion', 'AF'),
('RO', 'Romania', 'EU'),
('RS', 'Serbia, Republic of', 'EU'),
('RU', 'Russian Federation', 'EU'),
('RW', 'Rwanda, Republic of', 'AF'),
('SA', 'Saudi Arabia, Kingdom of', 'AS'),
('SB', 'Solomon Islands', 'OC'),
('SC', 'Seychelles, Republic of', 'AF'),
('SD', 'Sudan, Republic of', 'AF'),
('SE', 'Sweden, Kingdom of', 'EU'),
('SG', 'Singapore, Republic of', 'AS'),
('SH', 'Saint Helena', 'AF'),
('SI', 'Slovenia, Republic of', 'EU'),
('SJ', 'Svalbard & Jan Mayen Islands', 'EU'),
('SK', 'Slovakia (Slovak Republic)', 'EU'),
('SL', 'Sierra Leone, Republic of', 'AF'),
('SM', 'San Marino, Republic of', 'EU'),
('SN', 'Senegal, Republic of', 'AF'),
('SO', 'Somalia, Somali Republic', 'AF'),
('SR', 'Suriname, Republic of', 'SA'),
('SS', 'South Sudan', 'AF'),
('ST', 'Sao Tome and Principe, Democratic Republic of', 'AF'),
('SV', 'El Salvador, Republic of', 'NA'),
('SX', 'Sint Maarten (Netherlands)', 'NA'),
('SY', 'Syrian Arab Republic', 'AS'),
('SZ', 'Swaziland, Kingdom of', 'AF'),
('TC', 'Turks and Caicos Islands', 'NA'),
('TD', 'Chad, Republic of', 'AF'),
('TF', 'French Southern Territories', 'AN'),
('TG', 'Togo, Togolese Republic', 'AF'),
('TH', 'Thailand, Kingdom of', 'AS'),
('TJ', 'Tajikistan, Republic of', 'AS'),
('TK', 'Tokelau', 'OC'),
('TL', 'Timor-Leste, Democratic Republic of', 'AS'),
('TM', 'Turkmenistan', 'AS'),
('TN', 'Tunisia, Tunisian Republic', 'AF'),
('TO', 'Tonga, Kingdom of', 'OC'),
('TR', 'Turkey, Republic of', 'EU'),
('TT', 'Trinidad and Tobago, Republic of', 'NA'),
('TV', 'Tuvalu', 'OC'),
('TW', 'Taiwan', 'AS'),
('TZ', 'Tanzania, United Republic of', 'AF'),
('UA', 'Ukraine', 'EU'),
('UG', 'Uganda, Republic of', 'AF'),
('UM', 'US Minor Outlying Islands', 'OC'),
('US', 'United States of America', 'NA'),
('UY', 'Uruguay, Eastern Republic of', 'SA'),
('UZ', 'Uzbekistan, Republic of', 'AS'),
('VA', 'Holy See (Vatican City State)', 'EU'),
('VC', 'Saint Vincent and the Grenadines', 'NA'),
('VE', 'Venezuela, Bolivarian Republic of', 'SA'),
('VG', 'British Virgin Islands', 'NA'),
('VI', 'US Virgin Islands', 'NA'),
('VN', 'Vietnam, Socialist Republic of', 'AS'),
('VU', 'Vanuatu, Republic of', 'OC'),
('WF', 'Wallis and Futuna', 'OC'),
('WS', 'Samoa, Independent State of', 'OC'),
('XD', 'United Nations Neutral Zone', 'AS'),
('XE', 'Iraq-Saudi Arabia Neutral Zone', 'AS'),
('XS', 'Spratly Islands', 'AS'),
('XX', 'Disputed Territory', 'OC'),
('YE', 'Yemen', 'AS'),
('YT', 'Mayotte', 'AF'),
('ZA', 'South Africa, Republic of', 'AF'),
('ZM', 'Zambia, Republic of', 'AF'),
('ZW', 'Zimbabwe, Republic of', 'AF');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
