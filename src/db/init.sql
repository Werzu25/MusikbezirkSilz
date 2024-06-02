DROP DATABASE IF EXISTS mbs;
CREATE DATABASE IF NOT EXISTS mbs;
USE mbs;

CREATE TABLE mainMenuEntry (
    mmeId INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255),
    icon VARCHAR(255),
    PRIMARY KEY (mmeId)
);
CREATE TABLE subMenuEntry (
    smeId INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255),
    mmeId INT,
    PRIMARY KEY (smeId),
    FOREIGN KEY (mmeId) REFERENCES mainMenuEntry(mmeId)
);

CREATE TABLE articles (
    artId INT AUTO_INCREMENT NOT NULL,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    smeId INT,
    PRIMARY KEY (artId),
    FOREIGN KEY (smeId) REFERENCES subMenuEntry(smeId)
);

CREATE TABLE components (
    cmpId INT AUTO_INCREMENT NOT NULL,
    artId INT,
    type ENUM('text', 'title', 'table', 'link', 'carousel', 'mediaText'),
    content TEXT,
    displayOrder INT,
    PRIMARY KEY (cmpId),
    FOREIGN KEY (artId) REFERENCES articles(artId)
);


CREATE TABLE entries (
    entId INT AUTO_INCREMENT NOT NULL,
    artId INT,
    type ENUM('text', 'table', 'link', 'carousel'),
    content TEXT,
    cssClasses TEXT,
    style TEXT,
    displayOrder INT,
    PRIMARY KEY (entId),
    FOREIGN KEY (artId) REFERENCES articles(artId)
);

CREATE TABLE media (
    medId INT AUTO_INCREMENT NOT NULL,
    artId INT,
    cssClasses TEXT,
    style TEXT,spatial
    type ENUM('image', 'fbVideo', 'ytVideo'),
    path VARCHAR(255),
    PRIMARY KEY (medId),
    FOREIGN KEY (artId) REFERENCES articles(artId)
);

Create Table image (
    imgId INT AUTO_INCREMENT NOT NULL,
    medId INT,
    path VARCHAR(255),
    PRIMARY KEY (imgId),
    FOREIGN KEY (medId) REFERENCES media(medId)
);

Create Table fbVideo (
    fbVidId INT AUTO_INCREMENT NOT NULL,
    medId INT,
    link VARCHAR(255),
    PRIMARY KEY (fbVidId),
    FOREIGN KEY (medId) REFERENCES media(medId)
);
CREATE TABLE ytVideo (
    ytVidId INT AUTO_INCREMENT NOT NULL,
    medId INT,
    link VARCHAR(255),
    PRIMARY KEY (ytVidId),
    FOREIGN KEY (medId) REFERENCES media(medId)
);