SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tblsubjects` (
  `Subject_ID` int(11) NOT NULL,
  `Subject_Code` varchar(100) NOT NULL,
  `Subject_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`Subject_ID`);

ALTER TABLE `tblsubjects`
  MODIFY `Subject_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
