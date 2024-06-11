DROP DATABASE IF EXISTS mbs;
CREATE DATABASE IF NOT EXISTS mbs;
USE mbs;
-- leon falsche namen
CREATE TABLE mainMenuEntry (
    mmeId INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255),
    icon VARCHAR(255),
    PRIMARY KEY (mmeId)
);
CREATE TABLE subMenuEntry ( -- article
    smeId INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255),
    mmeId INT,
    PRIMARY KEY (smeId),
    FOREIGN KEY (mmeId) REFERENCES mainMenuEntry(mmeId)
);

CREATE TABLE articles ( -- container
    artId INT AUTO_INCREMENT NOT NULL,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    smeId INT,
    PRIMARY KEY (artId),
    FOREIGN KEY (smeId) REFERENCES subMenuEntry(smeId)
);

CREATE TABLE components ( -- entry
    cmpId INT AUTO_INCREMENT NOT NULL,
    artId INT,
    type ENUM('text', 'title', 'table', 'link', 'carousel', 'media'),
    content TEXT,
    displayOrder INT,
    PRIMARY KEY (cmpId),
    FOREIGN KEY (artId) REFERENCES articles(artId)
);