SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE author(
    id_author int(11) NOT NULL,
     firstName VARCHAR(250),
      lastName VARCHAR(250),
      email VARCHAR(250),
      passeword VARCHAR(250),
      PRIMARY KEY (id_author));

CREATE TABLE article(
    id_article int(11) NOT NULL,
    title VARCHAR(250),
    content VARCHAR(250),
    img VARCHAR(250),
    date_poste date,
    PRIMARY KEY (id_article));
 
CREATE TABLE category(
    id_category int(11) NOT NULL,
    name_category VARCHAR(250),
    PRIMARY KEY (id_category));

