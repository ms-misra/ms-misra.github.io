SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- Database: `Credit`

-- Table structure for table `transfers`
CREATE TABLE `Transfers` (
  `From_user` varchar(20) DEFAULT NULL,
  `To_user` varchar(20) DEFAULT NULL,
  `Credits` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Table structure for table `Users`
CREATE TABLE `Users` (
  `NAME` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(20) DEFAULT NULL,
  `CREDITS` int(11) DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table `Users`
INSERT INTO `Users` (`NAME`, `EMAIL`, `CREDITS`) VALUES
('Ayushi','ayushi@gmail.com',100),
('Abhinav','abhinav@gmail.com',100),
('Viresh','viresh@gmail.com',100),
('Pratima','pratima@gmail.com',100),
('Rahul','rahul@gmail.com',100),
('Tanya','tanya@gmail.com',100),
('Manya','manya@gmail.com',100),
('Adhiraj','adhiraj@gmail.com',100),
('Aditya','aditya@gmail.com',100),
('Saloni','saloni@gmail.com',100);
