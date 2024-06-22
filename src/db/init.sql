DROP DATABASE IF EXISTS mbs;
CREATE DATABASE IF NOT EXISTS mbs;
USE mbs;

-- Create the mainMenuEntry table
CREATE TABLE mainMenuEntry (
                               mmeId INT AUTO_INCREMENT NOT NULL,
                               name VARCHAR(255),
                               icon VARCHAR(255),
                               PRIMARY KEY (mmeId)
);

-- Create the subMenuEntry table
CREATE TABLE subMenuEntry (
                              smeId INT AUTO_INCREMENT NOT NULL,
                              name VARCHAR(255),
                              rendererInNavbar BOOLEAN,
                              mmeId INT,
                              PRIMARY KEY (smeId),
                              FOREIGN KEY (mmeId) REFERENCES mainMenuEntry(mmeId)
);

-- Create the articles table
CREATE TABLE articles (
                          artId INT AUTO_INCREMENT NOT NULL,
                          creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                          smeId INT,
                          PRIMARY KEY (artId),
                          FOREIGN KEY (smeId) REFERENCES subMenuEntry(smeId)
);

-- Create the components table
CREATE TABLE components (
                            cmpId INT AUTO_INCREMENT NOT NULL,
                            artId INT,
                            type ENUM('text', 'title', 'table', 'link', 'carousel', 'media'),
                            content TEXT,
                            displayOrder INT,
                            PRIMARY KEY (cmpId),
                            FOREIGN KEY (artId) REFERENCES articles(artId)
);