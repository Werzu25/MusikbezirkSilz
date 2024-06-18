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

-- Insert data into mainMenuEntry
INSERT INTO mainMenuEntry (name, icon) VALUES
                                           ("Start", "mdi-home-variant"),
                                           ("Events", "mdi-calendar-multiple"),
                                           ("Rückblick", "mdi-reload"),
                                           ("Jugend", "mdi-human-male-boy"),
                                           ("Über uns", "mdi-chat-question-outline"),
                                           ("Kontakt", "mdi-contact-mail"),
                                           ("Galerie", "mdi-image"),
                                           ("FAQ", "mdi-help-circle"),
                                           ("Mitgliedschaft", "mdi-account-group");

-- Insert data into subMenuEntry
INSERT INTO subMenuEntry (name, mmeId) VALUES
                                           ("Home", 1),
                                           ("Bezirksmusikfest", 2),
                                           ("Vorstand", 5),
                                           ("Ansprechpartner", 6),
                                           ("Veranstaltungen", 2),
                                           ("Archiv", 3),
                                           ("Jugendarbeit", 4),
                                           ("Geschichte", 5),
                                           ("Fotogalerie", 7),
                                           ("Fragen und Antworten", 8),
                                           ("Mitgliedschaft", 9);

-- Insert data into articles
INSERT INTO articles (smeId) VALUES
                                 (1), (2), (1), (1),
                                 (4), (5), (6), (7),
                                 (2), (3), (5), (1),
                                 (3), (7), (9), (10),
                                 (11);

-- Insert data into components
INSERT INTO components (artId, type, content, displayOrder) VALUES
                                                                (2, "text", '{"style":"font-size:20px;color: #ff0000;margin-left:20px", "text": "Bezirksmusikfest 2024"}', 1),
                                                                (2, "text", '{"style": "margin-left:20px", "text": "das bezirksmusikfest findet heuer vom 26. bis zum 28. juli in sölden statt."}', 2),
                                                                (2, "media", '{"type": "image", "content": "../assets/images/bezirksmusikfest2024.jpg"}', 3),
                                                                (1, "text", '{"style": "margin-left:20px;color: #ff0000", "text": "Generalversammlung 2023"}', 1),
                                                                (1, "text", '{"style": "margin-left:20px", "text": "Die Generalversammlung fand dieses Jahr in Umhausen statt"}', 2),
                                                                (1, "link", '{"style": "margin-left:20px !important", "href":"https://musikbezirk-silz.at/page-15/page-14/", "text": "Hier gehts zum Nachbericht"}', 3),
                                                                (3, "text", '{"style": "margin-left:20px;color: #ff0000", "text": "Vorschau 2024"}', 1),
                                                                (3, "table", '[["Sölden","27.07.2024","Tag der Jugend"],["Sölden","28.07.2024","Bezirkmusikfest"],["Haiming","06.10.2024","Generalversammlung des Musikbezirkes"]]', 2),
                                                                (4, "carousel", '["../assets/images/bezirksmusikfest2024.jpg","../assets/images/Eva.jpg","../assets/images/Ausschuss2018.JPG"]', 1),
                                                                (5, "text", '{"style": "margin-left:20px;color: #0000ff", "text": "Event Übersicht"}', 1),
                                                                (5, "link", '{"style": "margin-left:20px", "href":"https://musikbezirk-silz.at/events", "text": "Mehr Informationen zu unseren Veranstaltungen"}', 2),
                                                                (6, "text", '{"style": "margin-left:20px", "text": "Der Vorstand setzt sich aus folgenden Mitgliedern zusammen..."}', 1),
                                                                (6, "table", '[["Name","Position","Kontakt"],["Max Mustermann","Vorsitzender","max@musikbezirk-silz.at"],["Anna Beispiel","Schriftführerin","anna@musikbezirk-silz.at"]]', 2),
                                                                (7, "carousel", '["../assets/images/galerie1.jpg","../assets/images/galerie2.jpg","../assets/images/galerie3.jpg"]', 1),
                                                                (8, "text", '{"style": "margin-left:20px", "text": "Häufig gestellte Fragen..."}', 1),
                                                                (8, "link", '{"style": "margin-left:20px", "href":"https://musikbezirk-silz.at/faq", "text": "Hier finden Sie Antworten auf häufig gestellte Fragen"}', 2),
                                                                (9, "media", '{"type": "video", "content": "../assets/videos/geschichte.mp4"}', 1),
                                                                (10, "text", '{"style": "margin-left:20px;color: #ff0000", "text": "Generalversammlung 2022"}', 1),
                                                                (10, "text", '{"style": "margin-left:20px", "text": "Die Generalversammlung fand letztes Jahr in Umhausen statt"}', 2),
                                                                (10, "link", '{"style": "margin-left:20px", "href":"https://musikbezirk-silz.at/page-15/page-13/", "text": "Hier gehts zum Nachbericht"}', 3),
                                                                (4, "text", '{"style": "margin-left:20px", "text": "Informationen zur Jugendarbeit..."}', 1),
                                                                (4, "link", '{"style": "margin-left:20px", "href":"https://musikbezirk-silz.at/jugendarbeit", "text": "Mehr zur Jugendarbeit"}', 2),
                                                                (5, "text", '{"style": "margin-left:20px", "text": "Historischer Überblick..."}', 1),
                                                                (5, "link", '{"style": "margin-left:20px", "href":"https://musikbezirk-silz.at/geschichte", "text": "Mehr zur Geschichte"}', 2),
                                                                (11, "title", '{"style":"font-size:24px;color: #0000ff;margin-left:20px", "text": "Mitglied werden"}', 1),
                                                                (11, "text", '{"style": "margin-left:20px", "text": "Werden Sie Teil unseres Vereins! Wir freuen uns über neue Mitglieder, die sich aktiv einbringen möchten."}', 2),
                                                                (11, "text", '{"style": "margin-left:20px", "text": "Als Mitglied profitieren Sie von vielen Vorteilen und haben die Möglichkeit, das Vereinsleben aktiv mitzugestalten."}', 3),
                                                                (11, "link", '{"style": "margin-left:20px", "href":"https://musikbezirk-silz.at/mitglied-werden", "text": "Hier finden Sie das Anmeldeformular"}', 4);
