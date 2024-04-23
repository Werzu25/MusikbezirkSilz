CREATE TABLE IF NOT EXISTS mainMenuEntry (
    mainID INT NOT NULL AUTO_INCREMENT primary key,
    name varchar(30),
    order tinyint UNSIGNED
);

CREATE TABLE IF NOT EXISTS template (
    TemplateName varchar(60) NOT NULL primary key,
);

CREATE TABLE IF NOT EXISTS gallery (
    galleryID INT NOT NULL AUTO_INCREMENT primary key,
    name varchar(255)
);

CREATE TABLE IF NOT EXISTS imgvid (
    imgvidID INT NOT NULL AUTO_INCREMENT primary key,
    fileURL TINYTEXT,
);

CREATE TABLE IF NOT EXISTS subMenuEntry (
    mainID INT NOT NULL AUTO_INCREMENT primary key,
    name varchar(30),
    order tinyint UNSIGNED
);

CREATE TABLE IF NOT EXISTS entry (
    mainID INT NOT NULL AUTO_INCREMENT primary key,
    order tinyint UNSIGNED

);

CREATE TABLE IF NOT EXISTS galleryEntry (
    mainID INT NOT NULL AUTO_INCREMENT primary key,
    order tinyint UNSIGNED,
    imgvidID int NOT NULL,
    galleryid INT
);

CREATE TABLE IF NOT EXISTS Table_e (
    mainID INT NOT NULL AUTO_INCREMENT primary key,
    text_l TEXT,
    text_r TEXT,

);