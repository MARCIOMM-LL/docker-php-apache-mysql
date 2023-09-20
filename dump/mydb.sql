SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE myDb;

CREATE TABLE Person (
    id int,
    name varchar(20)
);

INSERT INTO Person (id, name) VALUES
(1, 'Lilian'),
(2, 'Márcio'),
(3, 'André'),
(4, 'Cristine');

select * from Person;
