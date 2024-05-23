DROP DATABASE IF EXISTS MusikbezirkSilz;
CREATE DATABASE IF NOT EXISTS MusikbezirkSilz;

USE MusikbezirkSilz;

CREATE TABLE mainMenuEntry (
    mmeID INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255),
    icon VARCHAR(255),
    displayOrder INT,
    PRIMARY KEY (mmeID)
);
CREATE TABLE subMenuEntry (
    smeID INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255),
    mmeID INT,
    displayOrder INT,
    PRIMARY KEY (smeID),
    FOREIGN KEY (mmeID) REFERENCES mainMenuEntry(mmeID)
);

CREATE TABLE artikel (
    artID INT AUTO_INCREMENT NOT NULL,
    creationDate TIMESTAMP,
    smeID INT,
    PRIMARY KEY (artID),
    FOREIGN KEY (smeID) REFERENCES subMenuEntry(smeID)
);

CREATE TABLE components (
    cmpID INT AUTO_INCREMENT NOT NULL,
    artID INT,
    type ENUM('imgL', 'imgR','ytL', 'ytR', 'fbL', 'fbR', 'text', 'title', 'subtitle', 'table', 'link', 'gallery', 'galleryEntry', 'tableEntry1'),
    content TEXT,
    displayOrder INT,
    PRIMARY KEY (cmpID),
    FOREIGN KEY (artID) REFERENCES artikel(artID)
);
