SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE 'Person' (
  'id' int(11) NOT NULL,
  'name' varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO 'Person' ('id', 'name') VALUES
(1, 'Lilian'),
(2, 'Márcio'),
(3, 'André'),
(4, 'Cristine');
