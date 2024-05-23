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

CREATE TABLE artikel (
    artId INT AUTO_INCREMENT NOT NULL,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    smeId INT,
    PRIMARY KEY (artId),
    FOREIGN KEY (smeId) REFERENCES subMenuEntry(smeId)
);

CREATE TABLE components (
    cmpId INT AUTO_INCREMENT NOT NULL,
    artId INT,
    type ENUM("img", 'yt', 'fb', 'text', 'title', 'subTitle', 'table', 'link', 'gallery', 'table'),
    content TEXT,
    displayOrder INT,
    PRIMARY KEY (cmpId),
    FOREIGN KEY (artId) REFERENCES artikel(artId)
);
