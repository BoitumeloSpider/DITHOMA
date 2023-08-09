
--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE register (
  ID INT AUTO_INCREMENT PRIMARY KEY,
  First_Name varchar(100) NOT NULL,
  Last_Name varchar(100) NOT NULL,
  Email varchar(100) NOT NULL,
  Password varchar(100) NOT NULL
 ) ;