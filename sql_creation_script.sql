CREATE DATABASE `interface` /*!40100 DEFAULT CHARACTER SET latin1 */;

CREATE TABLE `fiscal_years` (
  `fiscal_year` int(4) NOT NULL,
  PRIMARY KEY (`fiscal_year`),
  UNIQUE KEY `fiscal_year_UNIQUE` (`fiscal_year`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `master_table` (
  `Passcode` varchar(15) NOT NULL,
  `fiscal_year` int(11) NOT NULL,
  `project` varchar(30) DEFAULT NULL,
  `BAC` int(11) DEFAULT NULL,
  `percent_complete` int(11) DEFAULT NULL,
  PRIMARY KEY (`Passcode`,`fiscal_year`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `passcode` (
  `passcode` varchar(15) NOT NULL,
  PRIMARY KEY (`passcode`),
  UNIQUE KEY `passcode_UNIQUE` (`passcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `project` (
  `project` varchar(20) NOT NULL,
  PRIMARY KEY (`project`),
  UNIQUE KEY `project_UNIQUE` (`project`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `interface`.`report` AS 
select `interface`.`master_table`.`Passcode` AS `Passcode`,
`interface`.`master_table`.`fiscal_year` AS `fiscal_year`,
`interface`.`master_table`.`project` AS `project`,truncate((`interface`.`master_table`.`BAC` / 100),2) AS `BAC`,
`interface`.`master_table`.`percent_complete` AS `percent_complete`,
truncate((((`interface`.`master_table`.`BAC` * `interface`.`master_table`.`percent_complete`) / 100) / 100),2) AS `EVM` 
from `interface`.`master_table`;

INSERT INTO `interface`.`fiscal_years`
(`fiscal_year`)
VALUES
(2017,2018);

INSERT INTO `interface`.`project`
(`project`)
VALUES
('Jet','Tank','Hovercraft');

INSERT INTO `interface`.`passcode`
(`passcode`)
VALUES
('<passcode>');



