CREATE DATABASE book;


CREATE TABLE author(
author_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
author_name VARCHAR(15) NOT NULL ,
author_last_name VARCHAR(20) NOT NULL ,
PRIMARY KEY(author_id)
);

CREATE TABLE editorial(
editorial_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
editorial_name VARCHAR(20) NOT NULL,
editorial_web VARCHAR(100) NOT NULL,
PRIMARY KEY(editorial_id)
);

CREATE TABLE books(
book_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
autor_id SMALLINT UNSIGNED NOT NULL,
editorial_id SMALLINT UNSIGNED NOT NULL,
book_title VARCHAR(50) NOT NULL,
book_isbn VARCHAR(12) NOT NULL,
book_description TEXT NOT NULL,
book_chapter SMALLINT UNSIGNED NOT NULL ,
book_pages SMALLINT UNSIGNED NOT NULL ,
book_cover CHAR(255) NOT NULL,
book_type_text VARCHAR(100) NOT NULL,
book_date DATE NOT NULL,
PRIMARY KEY(book_id)
);