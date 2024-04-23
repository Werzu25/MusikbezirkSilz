CREATE DATABASE IF NOT EXISTS MusikbezirkSilz;

USE MusikbezirkSilz;

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
    fileURL varchar(510),
);

CREATE TABLE IF NOT EXISTS subMenuEntry (
    subID INT NOT NULL AUTO_INCREMENT primary key,
    name varchar(30),
    order tinyint UNSIGNED
    mainID int,
    FOREIGN KEY (mainID) REFERENCES mainMenuEntry(mainID)
);

CREATE TABLE IF NOT EXISTS entry (
    entryID INT NOT NULL AUTO_INCREMENT primary key,
    order tinyint UNSIGNED,
    title varchar(255),
    subtitle varchar(255),
    text_entry text,
    TemplateName varchar(60),
    has_gallery BOOLEAN,
    has_imgvid BOOLEAN,
    is_table BOOLEAN,
    subID INT,
    galleryID INT,
    imgvidID INT,
    FOREIGN KEY (TemplateName) REFERENCES template(TemplateName),
    FOREIGN KEY (subID) REFERENCES  subMenuEntry (subID),
    FOREIGN KEY (galleryID) REFERENCES gallery(galleryID),
    FOREIGN KEY (imgvidID) REFERENCES imgvid(imgvidID)
);

CREATE TABLE IF NOT EXISTS galleryEntry (
    mainID INT NOT NULL AUTO_INCREMENT primary key,
    order tinyint UNSIGNED,
    imgvidID int NOT NULL,
    galleryID INT,
    FOREIGN KEY (imgvidID) REFERENCES imgvid(imgvidID),
    FOREIGN KEY (galleryID) REFERENCES gallery(galleryID)
);

CREATE TABLE IF NOT EXISTS Table_e (
    mainID INT NOT NULL AUTO_INCREMENT primary key,
    text_l TEXT,
    text_r TEXT,
    entryID int NOT NULL,
    FOREIGN KEY (entryID) REFERENCES entry(entryID)
);