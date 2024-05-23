DROP DATABASE IF EXISTS mbs;
CREATE DATABASE IF NOT EXISTS mbs;

USE mbs;

CREATE TABLE mainMenuEntry (
    mmeID INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255),
    icon VARCHAR(255),
    PRIMARY KEY (mmeID)
);
CREATE TABLE subMenuEntry (
    smeID INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255),
    mmeID INT,
    PRIMARY KEY (smeID),
    FOREIGN KEY (mmeID) REFERENCES mainMenuEntry(mmeID)
);

CREATE TABLE artikel (
    artID INT AUTO_INCREMENT NOT NULL,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    smeID INT,
    PRIMARY KEY (artID),
    FOREIGN KEY (smeID) REFERENCES subMenuEntry(smeID)
);

CREATE TABLE components (
    cmpID INT AUTO_INCREMENT NOT NULL,
    artID INT,
    type ENUM("img", 'yt', 'fb', 'text', 'title', 'subTitle', 'table', 'link', 'gallery', 'table'),
    content TEXT,
    displayOrder INT,
    PRIMARY KEY (cmpID),
    FOREIGN KEY (artID) REFERENCES artikel(artID)
);
