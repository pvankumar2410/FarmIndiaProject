-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2021 at 07:24 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imgsql`
--

-- --------------------------------------------------------

--
-- Table structure for table `upimg`
--

CREATE TABLE `upimg` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upimg`
--

INSERT INTO `upimg` (`id`, `img`, `name`, `dat`) VALUES
(7, '549526698', 'Algicides', 'Control algae in lakes, canals, swimming pools, water tanks, and other sites '),
(8, '279595586', 'Antifouling agents', 'Kill or repel organisms that attach to underwater surfaces, such as boat bottoms '),
(9, '106490779', 'Antimicrobials', 'Kill microorganisms (such as bacteria and viruses) '),
(10, '45787233', 'Attractants', 'Attract pests (for example, to lure an insect or rodent to a trap). (However, food is not considered a pesticide when used as an attractant.) '),
(11, '192763112', 'Biopesticides', 'Biopesticides are certain types of pesticides derived from such natural materials as animals, plants, bacteria, and certain minerals '),
(12, '460632695', 'Biocides', 'Kill microorganisms '),
(13, '249819229', 'Disinfectants and sanitizers', 'Kill or inactivate disease-producing microorganisms on inanimate objects '),
(14, '891236922', 'Fungicides', 'Kill fungi (including blights, mildews, molds, and rusts) '),
(15, '786019136', 'Fumigants', 'Produce gas or vapor intended to destroy pests in buildings or soil '),
(16, '327518679', 'Herbicides', 'Kill weeds and other plants that grow where they are not wanted '),
(17, '809118571', 'Insecticides', 'Kill insects and other arthropods '),
(18, '283483397', 'Miticides', 'Kill mites that feed on plants and animals '),
(19, '617837688', 'Microbial pesticides', 'Microorganisms that kill, inhibit, or out compete pests, including insects or other microorganisms '),
(20, '834713907', 'Molluscicides', 'Kill snails and slugs'),
(21, '664168124', 'Nematicides', 'Kill nematodes (microscopic, worm-like organisms that feed on plant roots) '),
(22, '187689629', 'Ovicides', 'Kill eggs of insects and mites '),
(23, '597775154', 'Pheromones', 'Biochemicals used to disrupt the mating behavior of insects'),
(24, '455190300', 'Repellents', 'Repel pests, including insects (such as mosquitoes) and birds '),
(26, '886692481', 'Rodenticides', 'Control mice and other rodents'),
(27, '42435591', 'Slimicides', 'Kill slime-producing microorganisms such as algae, bacteria, fungi, and slime molds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upimg`
--
ALTER TABLE `upimg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upimg`
--
ALTER TABLE `upimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
