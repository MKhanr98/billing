-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 12:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cash`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `username`, `password`) VALUES
(1, 'Mkhan', 'mkhan@gmail.com', 'alisherkhan123');

-- --------------------------------------------------------

--
-- Table structure for table `allowance`
--

CREATE TABLE `allowance` (
  `id` int(11) NOT NULL,
  `cash` bigint(20) NOT NULL,
  `person` varchar(25) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allowance`
--

INSERT INTO `allowance` (`id`, `cash`, `person`, `date`, `description`) VALUES
(26, 5000, 'Ikram', '2023-03-09', 'Swat Visit'),
(27, 5000, 'Musa', '2023-03-09', 'Swat Visit');

-- --------------------------------------------------------

--
-- Table structure for table `cin`
--

CREATE TABLE `cin` (
  `id` int(11) NOT NULL,
  `cash` bigint(20) NOT NULL,
  `person` varchar(25) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL,
  `cheque` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cin`
--

INSERT INTO `cin` (`id`, `cash`, `person`, `date`, `description`, `cheque`) VALUES
(418, 50000, 'Sir Shahid', '2022-10-11', 'Initial Amount by Sir Shahid', 'Cash'),
(419, 50000, 'N/A', '2022-10-25', 'Safe City Mardan', 'Cash'),
(420, 100000, 'Dr Gul Muhammad', '2022-10-25', 'Cash from Dr Gul Muhammad', 'Cash'),
(421, 250000, 'Dr Gul Muhammad', '2022-11-11', 'Cash from Dr Gul Muhammad', 'Cash'),
(422, 100000, 'Dr Gul Muhammad', '2022-12-06', 'Cash from Dr Gul Muhammad', 'Cash'),
(423, 50000, 'Dr Gul Muhammad', '2022-12-16', 'Cash from Dr Gul Muhammad', 'Cash'),
(424, 70000, 'Sir Shahid', '2022-12-22', 'Cash from Sir Shahid', 'Cash'),
(425, 30000, 'Dr Gul Muhammad', '2022-12-27', 'Cash from Dr Gul Muhammad', 'Cash'),
(426, 30000, 'Dr Gul Muhammad', '2023-01-02', 'Cash from Dr Gul Muhammad', 'Cash'),
(427, 7000, 'Dr Gul Muhammad', '2023-01-02', 'Cash from Dr Gul Muhammad', 'Cash'),
(428, 100000, 'Dr Gul Muhammad', '2023-01-03', 'Cash from Dr Gul Muhammad', 'Cash'),
(429, 50000, 'Musa', '2023-01-03', 'Cash to Musa by Dr. Gul', 'Cash'),
(430, 50000, 'Dr Gul Muhammad', '2023-01-06', 'Cash from Dr Gul Muhammad', 'Cash'),
(431, 100000, 'Dr Gul Muhammad', '2023-01-09', 'Cash from Dr Gul Muhammad', 'Cash'),
(432, 50000, 'Dr Gul Muhammad', '2023-01-10', 'Cash from Dr Gul Muhammad', 'Cash'),
(433, 107000, 'Dr Gul Muhammad', '2023-01-16', 'Cash from Dr Gul Muhammad', 'Cash'),
(434, 100000, 'Dr Gul Muhammad', '2023-01-18', 'Cash from Dr Gul Muhammad', 'Cash'),
(435, 100000, 'Dr Gul Muhammad', '2023-01-23', 'Cash from Dr Gul Muhammad', 'Cash'),
(436, 10000, 'Azeem', '2023-01-24', 'Cash Paid to Azeem for BRT Project', 'Cash'),
(437, 100000, 'Dr Gul Muhammad', '2023-01-30', 'Cash from Dr Gul Muhammad', 'Cash'),
(438, 50000, 'Dr Gul Muhammad', '2023-02-07', 'Cash from Dr Gul Muhammad', 'Cash'),
(439, 100000, 'Dr Gul Muhammad', '2023-02-13', 'Cash from Dr Gul Muhammad', 'Cash'),
(440, 100000, 'Dr Gul Muhammad', '2023-02-20', 'Cash from Dr Gul Muhammad', 'Cash'),
(441, 500000, 'Dr Gul Muhammad', '2023-02-23', 'Cash from Dr Gul Muhammad', 'Cash'),
(442, 70000, 'Dr Gul Muhammad', '2023-02-23', 'Cash from Dr Gul Muhammad', 'Cash'),
(443, 400000, 'Dr Gul Muhammad', '2023-02-27', 'Cash from Dr Gul Muhammad', 'Cash'),
(444, 50000, 'Dr Gul Muhammad', '2023-03-06', 'Cash from Dr Gul Muhammad', 'Cash'),
(445, 100000, 'Dr Gul Muhammad', '2023-03-06', 'Cash from Dr Gul Muhammad', 'Cash'),
(446, 5000, 'Jehanzeb', '2023-03-06', 'Jehanzeb Loan Repayment', 'Cash'),
(447, 150000, 'Dr Gul Muhammad', '2023-03-09', 'Cash from Dr Gul Muhammad', 'Cash'),
(448, 60000, 'Dr Gul Muhammad', '2023-03-13', 'Cash from Dr Gul Muhammad', 'Cash'),
(449, 100000, 'Dr Gul Muhammad', '2023-03-20', 'Cash from Dr Gul Muhammad', 'Cash'),
(450, 100000, 'Dr Gul Muhammad', '2023-03-20', 'Cash from Dr Gul Muhammad', 'Cash'),
(451, 388000, 'CIS pvt. Limited', '2023-03-22', 'Cheque from CIS pvt. Limited', 'Cheque'),
(452, 227500, 'Dr Gul Muhammad', '2023-03-29', 'Cash from Dr Gul Muhammad', 'Cash'),
(453, 43400, 'Shahid Laiq', '2023-03-29', 'Cash from Shahid Laiq', 'Cash'),
(454, 250000, 'N/A', '2023-03-30', 'Bonus given to employees through cheques', 'Cheques'),
(455, 190000, 'Dr Gul Muhammad', '2023-03-31', 'Cash from Dr Gul Muhammad', 'Cash'),
(456, 5000, 'Jehanzeb', '2023-04-04', 'Jehanzeb Loan Repayment', 'Cash'),
(457, 125000, 'Dr Gul Muhammad', '2023-04-06', 'Cash from Dr Gul Muhammad', 'Cash'),
(458, 1290000, 'Dr Gul Muhammad', '2023-04-07', 'Cash from Dr Gul Muhammad', 'Cash'),
(459, 15000, 'Musa Khan', '2023-04-12', 'Cash from Musa Khan (Sir House Rent)', 'Cash'),
(460, 280000, 'N/A', '2023-04-14', 'ch 84 for dpo mardan', 'Cheque'),
(461, 350000, 'Dr Gul Muhammad', '2023-04-14', 'Cash from Dr Gul Muhammad', 'Cheque'),
(462, 140000, 'Dr Gul Muhammad', '2023-04-19', 'Cash from Dr Gul Muhammad', 'Cheque'),
(463, 100000, 'Dr Gul Muhammad', '2023-05-02', 'Cash from Dr Gul Muhammad', 'Cash'),
(464, 80000, 'Dr Gul Muhammad', '2023-05-03', 'Cash from Dr Gul Muhammad', 'Cash'),
(465, 35000, 'Dr Gul Muhammad', '2023-05-05', 'Cash from Dr Gul Muhammad', 'Cash'),
(466, 85000, 'Dr Gul Muhammad', '2023-05-08', 'Cash from Dr Gul Muhammad', 'Cash'),
(467, 280000, 'Dr Gul Muhammad', '2023-05-16', 'Cash from Dr Gul Muhammad', 'Cash'),
(468, 280000, 'Dr Gul Muhammad', '2023-05-18', 'Cash from Dr Gul Muhammad', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `cout`
--

CREATE TABLE `cout` (
  `id` int(11) NOT NULL,
  `cash` bigint(20) NOT NULL,
  `person` varchar(25) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cout`
--

INSERT INTO `cout` (`id`, `cash`, `person`, `date`, `description`) VALUES
(590, 1600, 'Sulaiman', '2022-10-11', 'Spare parts'),
(591, 150, 'Sulaiman', '2022-10-11', 'Fuel'),
(592, 2290, 'Sulaiman', '2022-10-11', 'BOK Deposite for WSSC Swat tender'),
(593, 300, 'Sulaiman', '2022-10-11', 'Stamp paper for WSSC Swat tender'),
(594, 80, 'Jehanzeb', '2022-10-11', 'Wssc swat tender binding'),
(595, 1000, 'Musa', '2022-10-12', 'WSSP Inauguration Visit Fuel'),
(596, 525, 'Jehanzeb', '2022-10-13', 'Tissue boxes'),
(597, 2100, 'Mansoor', '2022-10-13', 'ZONG MBB Recharge'),
(598, 2400, 'Ikram', '2022-10-14', 'Swat tender opening'),
(599, 1210, 'Jehanzeb', '2022-10-17', 'Regular items'),
(600, 500, 'Farhan', '2022-10-17', 'Fuel'),
(601, 4070, 'Musa', '2022-10-17', 'Kohat Visit'),
(602, 300, 'Mansoor', '2022-10-17', 'WSSP Visit Thursday'),
(603, 850, 'Sulaiman', '2022-10-18', 'CIS new stamp'),
(604, 960, 'Sulaiman', '2022-10-18', 'UPS Wire'),
(605, 530, 'Jehanzeb', '2022-10-19', 'Spray, Soap, Masking tape'),
(606, 8550, 'shahid', '2022-10-21', 'Collection of laptops'),
(607, 3650, 'Abdul Muneeb', '2022-10-24', 'Kohat Visit'),
(608, 1620, 'Sulaiman', '2022-10-24', 'WSSP Visits'),
(609, 2420, 'Jehanzeb', '2022-10-24', 'Jans Bakers'),
(610, 320, 'Mansoor', '2022-10-24', 'Office files purchase'),
(611, 500, 'Mansoor', '2022-10-24', 'WSSP Visit for cheque'),
(612, 50000, 'Musa', '2022-10-25', 'Safe city mardan'),
(613, 15400, 'Jehanzeb', '2022-10-25', 'Lunch'),
(614, 620, 'Jehanzeb', '2022-10-26', 'UNICEF Meeting Tea'),
(615, 1960, 'Jehanzeb', '2022-10-27', 'Sir Coffee'),
(616, 1510, 'Sulaiman', '2022-10-27', 'Stamp paper for WSSC Swat tender'),
(617, 700, 'Sulaiman', '2022-10-28', 'Javedabad-achar trip'),
(618, 900, 'Musa', '2022-11-01', 'Stamp paper for WSSC Swat tender'),
(619, 200, 'Sulaiman', '2022-11-01', 'BRT Chamkani'),
(620, 1000, 'Musa', '2022-11-02', 'Fuel wssp kpitb'),
(621, 590, 'Jehanzeb', '2022-11-03', 'Air freshner'),
(622, 1100, 'Musa', '2022-11-04', 'Mouse'),
(623, 320, 'Jehanzeb', '2022-11-07', 'mosquitto spray'),
(624, 1900, 'Arsalan', '2022-11-08', 'electrical components'),
(625, 4170, 'Arsalan', '2022-11-08', 'electrical components from Ali Express'),
(626, 1000, 'Musa', '2022-11-10', 'shoba bazar and arbab road fuel'),
(627, 600, 'Mansoor', '2022-11-10', '2 wssp visit'),
(628, 10000, 'Sarmad', '2022-11-14', 'Mardan Visit'),
(629, 500, 'Farhan', '2022-11-14', 'WSSP Visit'),
(630, 130000, 'Mansoor', '2022-11-15', 'Transferred to Mirza Mubashir Baiq, Lahore Import'),
(631, 8200, 'Mansoor', '2022-11-15', 'Transfer to Digilog for charger boxes'),
(632, 5970, 'Mansoor', '2022-11-17', 'IRP Visit and Chemical Collections ISB/RWP'),
(633, 160, 'Jehanzeb', '2022-11-17', 'Dish wash soap etc'),
(634, 1000, 'Musa', '2022-11-18', 'Fuel Saddar'),
(635, 720, 'Jehanzeb', '2022-11-21', 'Misc. items'),
(636, 23040, 'Shahid', '2022-11-21', 'DHL Duty Taxes'),
(637, 560, 'Sulaiman', '2022-11-22', 'Office UPS Batteries Acid'),
(638, 3340, 'Sulaiman', '2022-11-22', 'Field Visit WSSP'),
(639, 200, 'Arsalan', '2022-11-22', 'Masking tape for 3D printer'),
(640, 540, 'Sulaiman', '2022-11-28', 'Acrylic Sheet'),
(641, 1750, 'Musa', '2022-11-28', 'WSSC Kohat Visits'),
(642, 1940, 'musa', '2022-11-28', 'wssc kohat'),
(643, 1500, 'Mansoor', '2022-11-29', '32 GB Flash Drive (2)'),
(644, 700, 'Jehanzeb', '2022-12-01', 'Tea+Lunch'),
(645, 2400, 'Sulaiman', '2022-12-01', 'led lights for plants'),
(646, 350, 'Jehanzeb', '2022-12-02', 'Tissue boxes'),
(647, 14000, 'Asad', '2022-12-02', 'Salary'),
(648, 260, 'Sulaiman', '2022-12-05', 'Acrylic Sheet visit'),
(649, 33300, 'Sulaiman', '2022-12-05', 'UPS Batteries'),
(650, 3490, 'Arsalan', '2022-12-06', 'Temperature and Humidity Sensor'),
(651, 1210, 'Fazle Haq', '2022-12-06', 'E.coli project equipment'),
(652, 70000, 'Musa', '2022-12-06', 'Mardan Visit'),
(653, 6340, 'Sulaiman', '2022-12-06', 'Electrical work in NCAI'),
(654, 200, 'Jehanzeb', '2022-12-07', 'Post office'),
(655, 13000, 'Musa', '2022-12-08', 'Shoba Bazar'),
(656, 1500, 'Jehanzeb', '2022-12-08', 'Box files'),
(657, 5080, 'Sulaiman', '2022-12-09', 'Hardware items'),
(658, 2000, 'Sarmad', '2022-12-12', 'Mardan Visit'),
(659, 150, 'Jehanzeb', '2022-12-13', NULL),
(660, 500, 'Mansoor', '2022-12-13', 'Shoba Bazar'),
(661, 910, 'Jehanzeb', '2022-12-13', 'GIZ Visit'),
(662, 120, 'Jehanzeb', '2022-12-14', 'Launch Event'),
(663, 1310, 'Jehanzeb', '2022-12-15', 'Misc. items'),
(664, 40000, 'Musa', '2022-12-16', 'Safe city Mardan'),
(665, 4090, 'Arsalan', '2022-12-16', 'Electrical Equipment'),
(666, 5750, 'Sulaiman', '2022-12-16', 'Bricks and Cement work for plant incubators'),
(667, 12170, 'Musa', '2022-12-19', 'Mardan Visit'),
(668, 240, 'Jehanzeb', '2022-12-19', 'Chai'),
(669, 500, 'Farhan', '2022-12-20', 'WSSP'),
(670, 6000, 'Musa', '2022-12-20', 'Laptop repair'),
(671, 12500, 'Arsalan', '2022-12-20', 'Hardware items'),
(672, 100, 'Jehanzeb', '2022-12-20', 'Pakistan Post'),
(673, 4460, 'Fazle Haq', '2022-12-22', 'E. coli Project Hardware Components'),
(674, 2940, 'Musa', '2022-12-22', 'WSSM Visit'),
(675, 8000, 'Ikram', '2022-12-22', 'Swat Visit'),
(676, 15020, 'Sulaiman', '2022-12-22', 'Incubators'),
(677, 1700, 'Shahid', '2022-12-22', 'Brochure Pages'),
(678, 1500, 'Sulaiman', '2022-12-22', 'Incubator cover'),
(679, 4100, 'Fazle Haq', '2022-12-22', 'Cover Sheet'),
(680, 9500, 'Musa', '2022-12-26', 'WiFi router'),
(681, 7000, 'Abdul Muneeb', '2022-12-27', 'Multimeter'),
(682, 760, 'Jehanzeb', '2022-12-28', 'Stationery plus misc items'),
(683, 11300, 'Shahid', '2022-12-28', 'Chair repair'),
(684, 2000, 'Musa', '2022-12-29', 'Fuel'),
(685, 150, 'Sarmad', '2022-12-29', 'VC Office installation'),
(686, 15000, 'Asad', '2022-12-29', 'Swat Visit'),
(687, 660, 'Sulaiman', '2022-12-29', 'Tea+misc. item'),
(688, 2500, 'Musa', '2022-12-30', 'Musa Salary Balancing'),
(689, 2000, 'Azeem', '2023-01-02', 'CISNR misc items'),
(690, 580, 'Rahim', '2023-01-02', 'Seeds'),
(691, 1290, 'Jehanzeb', '2023-01-02', 'Misc. items'),
(692, 4650, 'Sulaiman', '2023-01-02', 'UART and Pick It'),
(693, 1560, 'Fahad', '2023-01-03', 'Cargo from Daewoo'),
(694, 1300, 'Sulaiman', '2023-01-03', 'Socket for kettle'),
(695, 240, 'Sulaiman', '2023-01-03', 'WSSP visit'),
(696, 800, 'Mansoor', '2023-01-03', 'USB/Stapler'),
(697, 56450, 'Azeem', '2023-01-03', 'Electrical Comps.'),
(698, 12000, 'Shahid', '2023-01-03', 'Panaflex printing'),
(699, 21160, 'Mansoor', '2023-01-04', 'University Tikka hut'),
(700, 51170, 'Musa', '2023-01-04', 'Electrocure boxes'),
(701, 800, 'Musa', '2023-01-04', 'Fuel'),
(702, 4000, 'Shahid', '2023-01-04', 'Tea'),
(703, 10000, 'Abdul Muneeb', '2023-01-05', 'Swat visit'),
(704, 1500, 'Sarmad', '2023-01-06', 'CCPO Office'),
(705, 2000, 'Rahim', '2023-01-06', 'Mushroom Seed'),
(706, 4650, 'Jehanzeb', '2023-01-06', 'Lunch'),
(707, 7000, 'Musa', '2023-01-06', 'SSD and Mouse'),
(708, 17410, 'Sulaiman', '2023-01-06', 'Hardware items'),
(709, 52700, 'Musa', '2023-01-09', 'Karkhano Market'),
(710, 11420, 'Samad', '2023-01-09', 'Batteries'),
(711, 8530, 'Azeem', '2023-01-09', 'Electrocure Testing board'),
(712, 7380, 'Musa', '2023-01-10', 'Batteries cells'),
(713, 3630, 'Sulaiman', '2023-01-10', 'Salary'),
(714, 2930, 'Arsalan', '2023-01-12', 'Resistor etc'),
(715, 120, 'Jehanzeb', '2023-01-13', NULL),
(716, 1000, 'Mansoor', '2023-01-16', 'WSSP 2 visits'),
(717, 14900, 'Azeem', '2023-01-16', 'Steel Sheets for Electrocures'),
(718, 1790, 'Jehanzeb', '2023-01-10', 'Guests tea'),
(719, 20000, 'Shahid', '2023-01-16', 'Toners etc'),
(720, 1960, 'Azeem', '2023-01-16', NULL),
(721, 1450, 'Jehanzeb', '2023-01-17', 'Box files, spray, tissue'),
(722, 7740, 'Musa', '2023-01-17', 'BRT'),
(723, 4550, 'Shahid', '2023-01-17', 'Power supply'),
(724, 2950, 'Shahid', '2023-01-17', 'SMD'),
(725, 5640, 'Shahid', '2023-01-17', 'Battery holder'),
(726, 48611, 'Arsalan', '2023-01-17', 'Digilog Electrical Components'),
(727, 2000, 'Shahid', '2023-01-18', 'Faheem Zafari Shield and TCS Charges'),
(728, 700, 'Jehanzeb', '2023-01-18', 'Jug for PM'),
(729, 6550, 'Azeem', '2023-01-18', 'Electrical components'),
(730, 440, 'Ikram', '2023-01-18', 'Agriculture trips'),
(731, 2600, 'Farhan', '2023-01-18', 'Pak bakers and HDMI Cable'),
(732, 1550, 'Jehanzeb', '2023-01-18', 'Chai plus tissue'),
(733, 8320, 'Jehanzeb', '2023-01-18', 'Lunch'),
(734, 33320, 'Musa', '2023-01-18', 'Karkhano Market'),
(735, 9700, 'Salman', '2023-01-20', 'E coli Project Hardware Components'),
(736, 13500, 'Wagma', '2023-01-20', 'Lunch'),
(737, 3000, 'Salman', '2023-01-20', 'E coli Project Hardware Components'),
(738, 28930, 'Musa', '2023-01-20', 'Safety equipment'),
(739, 950, 'Bilal', '2023-01-20', NULL),
(740, 9740, 'Azeem', '2023-01-24', 'Electrocure items'),
(741, 890, 'Jehanzeb', '2023-01-25', 'Misc. items'),
(742, 5660, 'Musa', '2023-01-25', 'Kohat Visit'),
(743, 9570, 'Shahid', '2023-01-25', 'Various Purchases'),
(744, 260, 'Amir', '2023-01-25', 'WSSC Swat TCS'),
(745, 840, 'Jehanzeb', '2023-01-26', 'Extension board plus stationary'),
(746, 1900, 'Farhan', '2023-01-26', 'Bakery and milk'),
(747, 15800, 'Azeem', '2023-01-26', 'Electrocure items'),
(748, 7470, 'Sulaiman', '2023-01-26', 'Electrocure items'),
(749, 27000, 'Musa', '2023-01-26', 'surge protectors'),
(750, 540, 'Fazle Haq', '2023-01-26', 'tape etc.'),
(751, 540, 'Jehanzeb', '2023-01-26', 'chai'),
(752, 740, 'Jehanzeb', '2023-01-30', 'Misc. items'),
(753, 13200, 'asad', '2023-01-30', 'Power logger Wires'),
(754, 9600, 'jehad', '2023-01-30', 'camera'),
(755, 840, 'Jehanzeb', '2023-01-30', 'chai bakery'),
(756, 27500, 'Musa', '2023-01-30', 'Bakht Zaman Electrical Services'),
(757, 15000, 'Musa', '2023-01-31', 'Mardan Visit'),
(758, 1240, 'Jehanzeb', '2023-01-31', 'Misc. items'),
(759, 7550, 'Farhan', '2023-01-31', 'Computer Acc.'),
(760, 850, 'Mansoor', '2023-02-01', 'Shawarma lunch'),
(761, 290, 'Jehanzeb', '2023-02-01', 'sweaper\'s tea'),
(762, 5360, 'Salman', '2023-02-02', 'Electrical Equipment'),
(763, 15000, 'Jehanzeb', '2023-02-02', 'Salary'),
(764, 650, 'Samad', '2023-02-03', 'e.coli project equipment'),
(765, 3752, 'Mansoor', '2023-02-04', 'Fuel and Lunch'),
(766, 3000, 'Abdul Muneeb', '2023-02-06', 'WSSP Repaired devices Installation'),
(767, 6590, 'shahid', '2023-02-06', 'arduino uno and sim 808'),
(768, 420, 'Arsalan', '2023-02-06', 'Lighter dock system for gps system'),
(769, 2000, 'Sarmad', '2023-02-06', 'taxi fares'),
(770, 6910, 'Sulaiman', '2023-02-06', 'brt field'),
(771, 250, 'Azeem', '2023-02-06', 'Transparent Tape'),
(772, 5750, 'Jehanzeb', '2023-02-07', 'Bakery and tea'),
(773, 2000, 'musa', '2023-02-07', 'fuel'),
(774, 10000, 'Ikram', '2023-02-07', 'Salary balancing'),
(775, 10000, 'Arsalan', '2023-02-07', 'Salary balancing'),
(776, 7500, 'Musa', '2023-02-07', 'Salary balancing'),
(777, 5000, 'Mansoor', '2023-02-07', 'Salary balancing'),
(778, 13000, 'Jehanzeb', '2023-02-13', 'loan'),
(779, 5440, 'Jehanzeb', '2023-02-13', NULL),
(780, 2010, 'Sulaiman', '2023-02-13', 'brt field'),
(781, 5440, 'musa', '2023-02-13', 'Mardan Visit'),
(782, 5000, 'Abdul Muneeb', '2023-02-13', 'wssp'),
(783, 1350, 'azeem', '2023-02-13', 'black box relay'),
(784, 1495, 'Jehanzeb', '2023-02-13', 'bakery'),
(785, 610, 'Jehanzeb', '2023-02-13', NULL),
(786, 3310, 'Jehanzeb', '2023-02-14', 'UNICEF Meeting Tea'),
(787, 2270, 'Sulaiman', '2023-02-14', 'Electrical Equipment'),
(788, 4030, 'Sulaiman', '2023-02-14', 'acrylic sheet'),
(789, 80, 'Jehanzeb', '2023-02-14', 'tape etc.'),
(790, 3500, 'shahid', '2023-02-14', 'power logger box'),
(791, 500, 'Farhan', '2023-02-14', 'Sticker sheet'),
(792, 8000, 'musa', '2023-02-15', 'Mardan Visit'),
(793, 140, 'Jehanzeb', '2023-02-15', 'markers'),
(794, 500, 'Azeem', '2023-02-15', 'Karkhano Market'),
(795, 950, 'Jehanzeb', '2023-02-15', 'Tissue boxes'),
(796, 350, 'Sulaiman', '2023-02-16', 'Electrical Equipment'),
(797, 100, 'salman', '2023-02-16', 'Electrical Equipment'),
(798, 17500, 'musa', '2023-02-16', 'nvr payment'),
(799, 2000, 'musa', '2023-02-16', 'fuel'),
(800, 700, 'arsalan', '2023-02-16', NULL),
(801, 370, 'azeem', '2023-02-16', NULL),
(802, 17000, 'Arsalan', '2023-02-20', 'gsm devices'),
(803, 480, 'Jehanzeb', '2023-02-20', 'chai'),
(804, 2400, 'Sulaiman', '2023-02-20', 'plants lights'),
(805, 28135, 'Sulaiman', '2023-02-20', 'Karkhano Market'),
(806, 850, 'farhan', '2023-02-20', 'fuel'),
(807, 17000, 'umar', '2023-02-20', 'arduino mega'),
(808, 200, 'farhan', '2023-02-20', 'tape'),
(809, 1000, 'musa', '2023-02-21', 'fuel'),
(810, 1020, 'Jehanzeb', '2023-02-21', 'Misc. items'),
(811, 7200, 'SALMAN', '2023-02-21', 'e.coli project equipment'),
(812, 700, 'Jehanzeb', '2023-02-21', NULL),
(813, 7500, 'dhl', '2023-02-21', 'circuits custom duty'),
(814, 15000, 'Arsalan', '2023-02-21', 'STM Boards'),
(815, 3940, 'umar', '2023-02-22', 'St link'),
(816, 610, 'Jehanzeb', '2023-02-22', 'coffee and milk'),
(817, 1220, 'Sulaiman', '2023-02-22', NULL),
(818, 3850, 'Arsalan', '2023-02-22', 'SIM 808 registration'),
(819, 8850, 'Rahim', '2023-02-23', 'plants pots'),
(820, 6220, 'Jehanzeb', '2023-02-23', 'tissue and dust bins'),
(821, 5000, 'Abdul Muneeb', '2023-02-23', 'Islamic Relief Field'),
(822, 496352, 'Mansoor', '2023-02-23', 'WSSC swat goods'),
(823, 27000, 'Sulaiman', '2023-02-23', 'Karkhano Market'),
(824, 38000, 'Mansoor', '2023-02-23', 'WSSC Goods Transportation'),
(825, 1000, 'musa', '2023-02-24', 'shoba bazar fuel'),
(826, 11490, 'Azeem', '2023-02-24', 'chargers'),
(827, 3100, 'Fazle Haq', '2023-02-24', 'ecoli project'),
(828, 2100, 'Mansoor', '2023-02-24', 'ZONG MBB Recharge'),
(829, 10750, 'ikram', '2023-02-27', 'swat delivery'),
(830, 1628, 'umar', '2023-02-27', 'pvc pipes'),
(831, 70, 'adil shah', '2023-02-27', 'ring bind'),
(832, 5000, 'Abdul Muneeb', '2023-02-28', 'Islamic Relief Field'),
(833, 925, 'Jehanzeb', '2023-02-28', 'Misc. items'),
(834, 62000, 'azeem', '2023-02-28', 'surge protectors'),
(835, 70, 'salman', '2023-02-28', 'gloves'),
(836, 1390, 'farhan', '2023-02-28', 'tcs'),
(837, 900, 'Farhan', '2023-02-28', 'bakery'),
(838, 240, 'Jehanzeb', '2023-03-01', 'chai'),
(839, 320, 'Jehanzeb', '2023-03-02', 'Misc. items'),
(840, 5390, 'Sulaiman', '2023-03-02', 'brt field'),
(841, 5720, 'Mansoor', '2023-03-03', 'Dr. Sohail Farewell Lunch'),
(842, 5500, 'umar', '2023-03-03', NULL),
(843, 1520, 'Sulaiman', '2023-03-03', NULL),
(844, 2000, 'Sulaiman', '2023-03-03', 'daily wage'),
(845, 3200, 'umar', '2023-03-02', 'temp and humidity sensor'),
(846, 12580, 'musa', '2023-03-06', 'swat visit'),
(847, 3000, 'Sarmad', '2023-03-06', 'Mardan Visit'),
(848, 130, 'samad', '2023-03-06', 'double tape'),
(849, 136440, 'Azeem', '2023-03-06', 'SPD and Chargers'),
(850, 5000, 'Abdul Muneeb', '2023-03-06', 'Islamic Relief Field'),
(851, 280, 'Jehanzeb', '2023-03-06', 'Duplicate key'),
(852, 15000, 'Jehanzeb', '2023-03-06', 'Jehanzeb Salary'),
(853, 6670, 'arsalan', '2023-03-06', 'gsm devices'),
(854, 2000, 'muneeb', '2023-03-06', 'daily wage brt field'),
(855, 5000, 'Mansoor', '2023-03-06', 'Salary balancing (Feb)'),
(856, 10000, 'Ikram', '2023-03-06', 'Salary balancing (feb)'),
(857, 7500, 'Musa', '2023-03-06', 'Salary balancing (feb)'),
(858, 10000, 'Arsalan', '2023-03-06', 'Salary balancing (feb)'),
(859, 1180, 'salman', '2023-03-06', 'Electrical Equipment'),
(860, 21150, 'arsalan', '2023-03-07', 'Electrical Equipment'),
(861, 4460, 'azeem', '2023-03-07', 'Electrical Equipment'),
(862, 41000, 'Mansoor', '2023-03-07', 'Camera DSLR'),
(863, 1000, 'Rahim', '2023-03-07', 'Soil'),
(864, 3750, 'azeem', '2023-03-09', 'acrylic sheet'),
(865, 2730, 'AZEEM', '2023-03-09', 'Electrical Equipment'),
(866, 1840, 'Jehanzeb', '2023-03-09', 'Stationary plus misc items'),
(867, 1700, 'Mansoor', '2023-03-09', 'visiting cards'),
(868, 1820, 'Jehanzeb', '2023-03-10', 'Stationary plus misc items'),
(869, 5000, 'Asad Ilyas', '2023-03-10', 'Tax Filing'),
(870, 23350, 'arsalan', '2023-03-10', NULL),
(871, 200, 'fahad', '2023-03-10', 'pc sent to gul haji for repair'),
(872, 2450, 'Jehanzeb', '2023-03-13', 'Printer page'),
(873, 7960, 'azeem', '2023-03-13', NULL),
(874, 5000, 'Abdul Muneeb', '2023-03-13', NULL),
(875, 230, 'adil shah', '2023-03-13', 'Stationary plus misc items'),
(876, 3338, 'arsalan', '2023-03-13', 'gsm devices'),
(877, 34300, 'fahad', '2023-03-13', 'pc repair and router'),
(878, 1990, 'Abdul Muneeb', '2023-03-13', 'gsm registration'),
(879, 805, 'Jehanzeb', '2023-03-14', 'Misc. items'),
(880, 300, 'Jehanzeb', '2023-03-14', 'envelopes'),
(881, 6730, 'azeem', '2023-03-15', 'battery holder & relays'),
(882, 270, 'Mansoor', '2023-03-15', 'tcs'),
(883, 280, 'Jehanzeb', '2023-03-15', 'key copy'),
(884, 950, 'Jehanzeb', '2023-03-15', 'Misc. items'),
(885, 6920, 'salman', '2023-03-15', 'e.coli project equipment'),
(886, 440, 'Jehanzeb', '2023-03-16', 'Tea and Samosa'),
(887, 1000, 'RAHIM', '2023-03-16', 'seed'),
(888, 1940, 'AZEEM', '2023-03-16', 'glue gun'),
(889, 3525, 'arsalan', '2023-03-16', 'batteries'),
(890, 80, 'Jehanzeb', '2023-03-16', 'binding'),
(891, 480, 'azeem', '2023-03-16', 'wire'),
(892, 4820, 'Sulaiman', '2023-03-17', 'Isb and BRT Field'),
(893, 3000, 'Abdul Muneeb', '2023-03-17', 'wssp field'),
(894, 4000, 'dr zeeshan', '2023-03-17', 'camera mic'),
(895, 16860, 'musa', '2023-03-01', NULL),
(896, 1200, 'Sulaiman', '2023-03-17', 'Cell'),
(897, 3000, 'Abdul Muneeb', '2023-03-20', 'wssp field'),
(898, 34900, 'salman', '2023-03-20', 'E coli Project Hardware Components'),
(899, 53405, 'arsalan', '2023-03-20', 'GSM MODULES'),
(900, 38000, 'Inayat', '2023-03-20', 'Signal Repeater'),
(901, 1000, 'Jehanzeb', '2023-03-21', 'Misc. items'),
(902, 500, 'Farhan', '2023-03-21', 'Fuel'),
(903, 140, 'samad', '2023-03-21', 'plastic gloves'),
(904, 2100, 'Shahbaz', '2023-03-22', 'ZONG MBB Recharge'),
(905, 16115, 'Sulaiman', '2023-03-22', 'green house'),
(906, 2850, 'farhan', '2023-03-22', 'camera receiving from daewoo'),
(907, 3000, 'Abdul Muneeb', '2023-03-22', 'Field Visit WSSP'),
(908, 6740, 'umar', '2023-03-22', 'step down charging power supply'),
(909, 250000, 'MUSA', '2023-03-22', 'SPD and BOXES'),
(910, 12960, 'Azeem', '2023-03-22', 'wires and nut bolts'),
(911, 720, 'Sufyan', '2023-03-22', 'Bakery'),
(912, 1400, 'Sufyan', '2023-03-22', 'swat'),
(913, 6000, 'Farhan', '2023-03-22', 'PTZ camera power supply'),
(914, 2020, 'shahid', '2023-03-24', 'camera receiving from daewoo'),
(915, 18880, 'Sulaiman', '2023-03-24', 'Hardware items'),
(916, 3000, 'Abdul Muneeb', '2023-03-27', 'Wssp field visit'),
(917, 3500, 'arsalan', '2023-03-27', 'GSM MODULES'),
(918, 2750, 'umar', '2023-03-27', 'gsm registration'),
(919, 34450, 'musa', '2023-03-27', 'tiger repair'),
(920, 2000, 'Niaz', '2023-03-28', 'GSM module registration'),
(921, 8700, 'arsalan', '2023-03-28', 'irf and e. coli equipment'),
(922, 2000, 'azeem', '2023-03-29', 'GSM module registration'),
(923, 130000, 'Mansoor', '2023-03-29', 'Eid Bonus'),
(924, 770, 'waleed', '2023-03-29', 'Electrical Equipment'),
(925, 1770, 'salman', '2023-03-29', 'Electrical Equipment'),
(926, 43950, 'Mansoor', '2023-03-30', 'Iftar party'),
(927, 2000, 'Abdul Muneeb', '2023-03-31', 'IRF'),
(928, 8820, 'Sulaiman', '2023-03-31', 'Electrical Equipment'),
(929, 64540, 'arsalan', '2023-03-31', 'GSM modules'),
(930, 3350, 'Azeem', '2023-03-31', 'Electrical Equipment'),
(931, 30116, 'arsalan', '2023-03-31', 'Digilog Electrical Components'),
(932, 590, 'Jehanzeb', '2023-03-31', 'Misc. items'),
(933, 250000, 'Mansoor', '2023-03-31', 'Bonus given to employees through cheques'),
(934, 19000, 'Asghar sb.', '2023-04-03', 'A4 pages'),
(935, 13120, 'arsalan', '2023-04-04', 'gsm modules'),
(936, 2000, 'abdul muneeb', '2023-04-04', 'Islamic Relief Field'),
(937, 16660, 'musa', '2023-04-04', 'Karkhano Market'),
(938, 1000, 'salman', '2023-04-04', 'E coli Project Hardware Components'),
(939, 2850, 'Azeem', '2023-04-05', NULL),
(940, 750, 'Abullah', '2023-04-05', 'COE Plants'),
(941, 22050, 'arsalan', '2023-04-05', 'battery cell'),
(942, 5075, 'sulaiman', '2023-04-06', 'Electrical Equipment'),
(943, 5370, 'arsalan', '2023-04-06', 'gsm modules'),
(944, 2000, 'Abdul Muneeb', '2023-04-07', 'wssp'),
(945, 17670, 'Sulaiman', '2023-04-07', 'electrical equipment'),
(946, 18090, 'shahid', '2023-04-07', 'GIZ Iftar'),
(947, 10010, 'salman', '2023-04-07', 'gsm modules'),
(948, 2710, 'Azeem', '2023-04-07', 'Electrical Equipment'),
(949, 1288700, 'Musa', '2023-04-07', 'TT (Niaz Muhammad) to China'),
(950, 2000, 'Abdul Muneeb', '2023-04-10', 'Wssp Field'),
(951, 69900, 'Azeem', '2023-04-10', 'Chargers'),
(952, 6850, 'musa', '2023-04-11', 'flowmeter installation'),
(953, 4470, 'Sulaiman', '2023-04-11', 'Field Visit WSSP'),
(954, 1100, 'Jehanzeb', '2023-04-11', 'gsm activation'),
(955, 250, 'Jehanzeb', '2023-04-11', 'Electrical Equipment'),
(956, 15000, 'Asad', '2023-04-11', 'Loan'),
(957, 7500, 'musa', '2023-04-11', 'salary balancing'),
(958, 2000, 'Abdul Muneeb', '2023-04-12', 'Wssp field'),
(959, 950, 'jehanzeb', '2023-04-13', 'tissue'),
(960, 2000, 'Abdul Muneeb', '2023-04-14', 'Field Visit WSSP'),
(961, 280000, 'musa', '2023-04-14', 'DPO Mardan'),
(962, 10040, 'azeem', '2023-04-14', 'office accessories'),
(963, 1700, 'musa', '2023-04-14', 'wssp field'),
(964, 11090, 'musa', '2023-04-17', 'flowmeter installation'),
(965, 840, 'jehanzeb', '2023-04-17', 'Locks and cell'),
(966, 2000, 'Sulaiman', '2023-04-17', 'Electrical Equipment'),
(967, 2200, 'asad', '2023-04-17', 'pipe samples'),
(968, 33400, 'arsalan', '2023-04-17', 'GSM MODULES'),
(969, 600, 'Jehanzeb', '2023-04-17', 'Glass cleaner'),
(970, 6800, 'Shahid', '2023-04-17', 'Daily Pakistan'),
(971, 7500, 'musa', '2023-04-18', 'flowmeter installation'),
(972, 34510, 'dhl', '2023-04-18', 'lcd modules'),
(973, 155030, 'Arsalan', '2023-04-18', 'Digilog Electrical Components'),
(974, 900, 'Sulaiman', '2023-04-18', 'spray and ups clips'),
(975, 8900, 'abdullah zargham', '2023-04-18', 'plants for coe pkants'),
(976, 1000, 'Farhan', '2023-04-18', 'fuel'),
(977, 300, 'shahbaz', '2023-04-18', 'peshawar tehsil visit'),
(978, 138000, 'Sulaiman', '2023-04-19', 'Equipment'),
(979, 3500, 'arsalan', '2023-04-26', 'personal equipment handed over to cisnr'),
(980, 350, 'Jehanzeb', '2023-04-26', 'Misc. items'),
(981, 50100, 'arsalan', '2023-04-26', 'GSM Modules'),
(982, 4700, 'azeem', '2023-04-26', 'Electrical Equipment'),
(983, 11170, 'azeem', '2023-04-27', 'Electrical Equipment'),
(984, 1700, 'Jehanzeb', '2023-04-27', 'Misc. items'),
(985, 3340, 'arsalan', '2023-04-27', 'GSM Module'),
(986, 1000, 'musa', '2023-04-28', 'fuel'),
(987, 450, 'Abdul Muneeb', '2023-04-28', 'wssp field'),
(988, 2730, 'Sulaiman', '2023-04-28', 'Electrical Equipment'),
(989, 2400, 'musa', '2023-04-28', 'water quality wires'),
(990, 2900, 'shahid', '2023-04-28', ''),
(991, 48000, 'dr zeeshan', '2023-04-28', 'plants'),
(992, 6871, 'ufone', '2023-04-28', ''),
(993, 2100, 'Mansoor', '2023-05-02', 'ZONG MBB Recharge'),
(994, 10725, 'asad', '2023-05-02', 'Electrical Equipment'),
(995, 750, 'salman', '2023-05-02', 'gloves'),
(996, 66354, 'arsalan', '2023-05-02', 'ethernet gps modem'),
(997, 18500, 'azeem', '2023-05-02', 'fuel level pipes'),
(998, 2680, 'musa', '2023-05-03', 'drill bits'),
(999, 12900, 'musa', '2023-05-03', 'bus bars'),
(1000, 500, 'musa', '2023-05-03', 'pda visit'),
(1001, 1600, 'Sulaiman', '2023-05-03', 'AC stand for water quality'),
(1002, 400, 'Musa', '2023-05-03', 'CDA Field driver lunch'),
(1003, 11800, 'arsalan', '2023-05-05', 'fuel sensors'),
(1004, 33860, 'Sulaiman', '2023-05-05', 'tool box'),
(1005, 31110, 'arsalan', '2023-05-05', 'cell, ethernet etc'),
(1006, 22030, 'Shahid', '2023-05-05', 'Transport'),
(1007, 1000, 'Farhan', '2023-05-05', 'fuel'),
(1008, 950, 'jehanzeb', '2023-05-08', 'Dr. Zeeshan Project'),
(1009, 9400, 'samad', '2023-05-08', 'e.coli project equipment'),
(1010, 12000, 'umar', '2023-05-08', 'antenna'),
(1011, 7500, 'musa', '2023-05-08', 'salary balancing'),
(1012, 20100, 'Azeem', '2023-05-15', ''),
(1013, 250, 'dr zeeshan', '2023-05-15', 'Seeds'),
(1014, 1950, 'dr zeeshan', '2023-05-15', 'E coli Project Hardware Components'),
(1015, 1720, 'jehanzeb', '2023-05-15', ''),
(1016, 1000, 'dr zeeshan', '2023-05-15', 'ignite visit'),
(1017, 30700, 'sadaan', '2023-05-15', 'Wallets'),
(1018, 500, 'adil shah', '2023-05-15', 'binding and copies'),
(1019, 20000, 'unknown', '2023-05-15', ''),
(1020, 20690, 'sadaan', '2023-05-15', 'pda training visit'),
(1021, 120220, 'shabir', '2023-05-16', 'CTs'),
(1022, 660, 'Jehanzeb', '2023-05-16', 'Misc. items'),
(1023, 570, 'Abdul Muneeb', '2023-05-17', 'brt + wssp visit'),
(1024, 200000, 'Musa', '2023-05-18', 'Sent Alam Khan for Kalam Optical Fiber Installation'),
(1025, 1375, 'Jehanzeb', '2023-05-18', 'tea items'),
(1026, 690, 'Jehanzeb', '2023-05-18', 'Misc. items'),
(1027, 2000, 'sadaan', '2023-05-18', 'PDA visit transport'),
(1028, 350, 'abdullah zargham', '2023-05-19', 'wifi module for coe plants'),
(1029, 55000, 'azeem', '2023-05-19', ''),
(1030, 5000, 'maham', '2023-05-19', 'e.coli experimentation'),
(1031, 3000, 'arsalan', '2023-05-19', '3D printer filament'),
(1032, 1000, 'Jehanzeb', '2023-05-19', ''),
(1033, 280, 'Jehanzeb', '2023-05-19', 'Pakistan Post'),
(1034, 100, 'Samad', '2023-05-22', 'Masking tape for 3D printer'),
(1035, 2000, 'samad', '2023-05-22', 'ethanol');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`) VALUES
(169, 'Abdul Muneeb'),
(170, 'Abdullah Zargham'),
(171, 'Abullah'),
(172, 'Adil Shah'),
(173, 'Amir'),
(174, 'Arsalan'),
(175, 'Asad'),
(176, 'Asad Ilyas'),
(177, 'Asghar Sb.'),
(178, 'Azeem'),
(179, 'Bilal'),
(180, 'Dhl'),
(181, 'Dr Zeeshan'),
(183, 'Fahad'),
(184, 'Farhan'),
(185, 'Fazle Haq'),
(186, 'Ikram'),
(187, 'Inayat'),
(188, 'Jehad'),
(189, 'Jehanzeb'),
(190, 'Maham'),
(191, 'Mansoor'),
(192, 'Muneeb'),
(193, 'Musa'),
(194, 'Niaz'),
(195, 'Rahim'),
(196, 'Sadaan'),
(197, 'Salman'),
(198, 'Samad'),
(199, 'Sarmad'),
(200, 'Shabir'),
(201, 'Shahbaz'),
(202, 'Shahid'),
(203, 'Sufyan'),
(204, 'Sulaiman'),
(205, 'Ufone'),
(206, 'Umar'),
(207, 'Unknown'),
(208, 'Wagma'),
(209, 'Waleed'),
(210, 'Dr.Gul Muhammad');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `cash` bigint(20) NOT NULL,
  `person` varchar(25) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `cash`, `person`, `date`, `description`) VALUES
(45, 270, 'Dr.Gull Muhammad', '2022-10-28', 'Manto'),
(46, 250, 'Dr.Gull Muhammad', '2022-10-31', 'Beef pulao'),
(47, 70, 'Dr.Gull Muhammad', '2022-11-01', 'Chole'),
(48, 320, 'Dr.Gull Muhammad', '2022-11-04', 'lunch'),
(49, 70, 'Dr.Gull Muhammad', '2022-11-04', 'lunch'),
(50, 150, 'Dr.Gull Muhammad', '2022-11-04', 'lunch'),
(51, 170, 'Dr.Gull Muhammad', '2022-11-04', 'lunch'),
(52, 70, 'Dr.Gull Muhammad', '2022-11-07', 'lunch'),
(53, 105, 'Dr.Gull Muhammad', '2022-11-11', 'lunch'),
(54, 500, 'Dr.Gull Muhammad', '2022-11-21', 'Chicken and Russian Salad'),
(55, 410, 'Dr.Gull Muhammad', '2022-11-28', 'lunch'),
(56, 165, 'Dr.Gull Muhammad', '2022-11-28', 'lunch'),
(57, 130, 'Dr.Gull Muhammad', '2022-11-28', 'Amrood'),
(58, 220, 'Dr.Gull Muhammad', '2022-11-29', 'lunch'),
(59, 95, 'Dr.Gull Muhammad', '2022-11-30', 'Lunch'),
(60, 290, 'Dr.Gull Muhammad', '2022-12-01', 'lunch'),
(61, 920, 'Dr.Gull Muhammad', '2022-12-05', 'Kabab'),
(62, 80, 'Dr.Gull Muhammad', '2022-12-06', 'lunch'),
(63, 270, 'Dr.Gull Muhammad', '2022-12-06', 'Lunch and tea'),
(64, 170, 'Dr.Gull Muhammad', '2022-12-06', 'tea'),
(65, 220, 'Dr.Gull Muhammad', '2022-12-13', 'Lunch'),
(66, 70, 'Dr.Gull Muhammad', '2022-12-15', 'Amrood'),
(67, 30, 'Dr.Gull Muhammad', '2022-12-16', 'corn'),
(68, 80, 'Dr.Gull Muhammad', '2022-12-16', 'chole'),
(69, 190, 'Dr.Gull Muhammad', '2022-12-19', 'Lunch'),
(70, 80, 'Dr.Gull Muhammad', '2022-12-20', 'chole'),
(71, 80, 'Dr.Gull Muhammad', '2022-12-22', 'lunch'),
(72, 7220, 'Dr.Gull Muhammad', '2022-12-26', 'Kashmir Trip'),
(73, 380, 'Dr.Gull Muhammad', '2022-12-26', 'Lunch'),
(74, 5870, 'Dr.Gull Muhammad', '2022-12-26', 'Niaz Kashmir Trip'),
(75, 240, 'Dr.Gull Muhammad', '2022-12-28', 'lunch'),
(76, 190, 'Dr.Gull Muhammad', '2022-12-28', 'lunch'),
(77, 270, 'Dr.Gull Muhammad', '2022-12-30', 'Lunch'),
(78, 250, 'Dr.Gull Muhammad', '2023-01-02', 'lunch'),
(79, 1060, 'Dr.Gull Muhammad', '2023-01-02', 'december tea'),
(80, 4600, 'Dr.Gull Muhammad', '2023-01-02', 'Electrical Work in home'),
(81, 90, 'Dr.Gull Muhammad', '2023-01-02', 'Madam Wagma Tea'),
(82, 370, 'Dr.Gull Muhammad', '2023-01-18', 'kabab shwarma'),
(83, 540, 'Dr.Gull Muhammad', '2023-01-24', 'lunch'),
(84, 1200, 'Dr.Gull Muhammad', '2023-02-02', 'Sir Tea for January 2023'),
(85, 510, 'Dr.Gull Muhammad', '2023-02-13', 'Lunch'),
(86, 620, 'Dr.Gull Muhammad', '2023-02-16', 'burger'),
(87, 180, 'Dr.Gull Muhammad', '2023-02-17', 'lunch'),
(88, 520, 'Dr.Gull Muhammad', '2023-02-20', 'lunch'),
(89, 150, 'Dr.Gull Muhammad', '2023-02-27', 'lunch'),
(90, 500, 'Dr.Gull Muhammad', '2023-02-28', 'lunnch'),
(91, 1620, 'Dr.Gull Muhammad', '2023-03-01', 'tea'),
(92, 620, 'Dr.Gull Muhammad', '2023-03-01', 'chief burger'),
(93, 220, 'Dr.Gull Muhammad', '2023-03-02', 'lunch'),
(94, 570, 'Dr.Gull Muhammad', '2023-03-07', 'lunch'),
(95, 130, 'Dr.Gull Muhammad', '2023-03-09', 'lunch'),
(96, 80, 'Dr.Gull Muhammad', '2023-03-09', 'chai'),
(97, 500, 'Dr.Gull Muhammad', '2023-03-09', 'lunch'),
(98, 60, 'Dr.Gull Muhammad', '2023-03-10', 'lunch'),
(99, 120, 'Dr.Gull Muhammad', '2023-03-10', 'lunch'),
(100, 1540, 'Dr.Gull Muhammad', '2023-03-10', 'jehanzeb khata'),
(101, 749, 'Dr.Gull Muhammad', '2023-04-04', 'super card'),
(102, 2874, 'Dr.Gull Muhammad', '2023-04-12', 'Storm fiber paid by musa'),
(103, 250, 'Dr.Gull Muhammad', '2023-04-26', 'Chicken piece'),
(104, 300, 'Dr.Gull Muhammad', '2023-04-26', 'fruit salad'),
(105, 1016, 'Dr.Gull Muhammad', '2023-04-27', 'Kachehri Visit'),
(106, 650, 'Dr.Gull Muhammad', '2023-05-02', 'Lunch and tea'),
(107, 400, 'Dr.Gull Muhammad', '2023-05-05', 'lunch'),
(108, 60, 'Dr.Gull Muhammad', '2023-05-05', 'lighter'),
(109, 960, 'Dr.Gull Muhammad', '2023-05-05', 'coffee'),
(110, 450, 'Dr.Gull Muhammad', '2023-05-05', 'everyday milk'),
(111, 20100, 'Dr.Gull Muhammad', '2023-05-17', 'cygnus repair'),
(112, 2770, 'Dr.Gull Muhammad', '2023-05-18', 'Internet bill (home)'),
(113, 635, 'Dr.Gull Muhammad', '2023-05-19', 'Chicken Piece');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `cash` bigint(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL,
  `person` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `id` int(11) NOT NULL,
  `cash` bigint(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL,
  `person` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`id`, `cash`, `date`, `description`, `person`) VALUES
(13, 12940, '2022-12-21', 'WSSM Visit', 'Musa'),
(14, 27590, '2022-12-26', 'TMA Mansehra', 'Mansoor'),
(15, 7000, '2023-01-02', 'TMA Mansehra return Fuel', 'Dr. Gul'),
(16, 40620, '2023-01-12', 'CDA Visit', 'Mansoor'),
(17, 17950, '2023-01-16', 'WSSA and TMA Abbottabad Visit', 'Mansoor'),
(18, 2300, '2023-01-16', 'Mobil Oil (Mansehra Trip)', 'Musa'),
(19, 72000, '2023-02-27', 'nust ai tech verse', 'shahid'),
(20, 100000, '2023-02-27', 'Multan Visit', 'shahid'),
(21, 17500, '2023-03-09', 'CDA Visit', 'shahid'),
(22, 38310, '2023-03-17', 'Abbottabad and Mansehra Visit', 'Musa'),
(23, 11000, '2023-03-20', 'lahore', 'shahid'),
(24, 11000, '2023-03-20', 'islamabad', 'shahid'),
(25, 4350, '2023-03-20', 'mardan', 'Musa'),
(26, 9590, '2023-03-27', 'CDA Visit', 'bilal'),
(27, 26000, '2023-04-26', 'islamabad and mardan visit', 'shahid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allowance`
--
ALTER TABLE `allowance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cin`
--
ALTER TABLE `cin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cout`
--
ALTER TABLE `cout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `allowance`
--
ALTER TABLE `allowance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `cin`
--
ALTER TABLE `cin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=469;

--
-- AUTO_INCREMENT for table `cout`
--
ALTER TABLE `cout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1036;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
