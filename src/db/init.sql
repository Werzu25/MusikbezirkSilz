DROP DATABASE IF EXISTS mbs;
CREATE DATABASE IF NOT EXISTS mbs;
USE mbs;

CREATE TABLE menuEntry (
    meId INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255),
    icon VARCHAR(255),
    PRIMARY KEY (meId)
);

CREATE TABLE articles (
    artId INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255),
    meId INT,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (artId),
    FOREIGN KEY (meId) REFERENCES menuEntry(meId)
);

CREATE TABLE components (
    cmpId INT AUTO_INCREMENT NOT NULL,
    artId INT,
    type ENUM('text', 'table', 'link', 'carousel', 'media'),
    content TEXT,
    displayOrder INT,
    PRIMARY KEY (cmpId),
    FOREIGN KEY (artId) REFERENCES articles(artId)
);