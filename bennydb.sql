SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+05:30";


CREATE TABLE `users` (
    `fname` varchar(200) NOT NULL,
    `lname` varchar(200) NOT NULL,
    `mailid` varchar(200) NOT NULL,
    `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




