USE mbs;
INSERT INTO
    mainMenuEntry (name, icon)
VALUES
    ("Start", "mdi-home-variant"),
    ("Events", "mdi-calendar-multiple"),
    ("Rückblick", "mdi-reload"),
    ("Jugend", "mdi-human-male-boy"),
    ("Über uns", "mdi-chat-question-outline");

INSERT INTO
    subMenuEntry (name, mmeID)
VALUES
    ("DEFAULT_Start", 1),
    ("Bezirksmusikfest", 2),
    ("Orchester Projekte", 3),
    ("Musikfeste", 3),
    ("Ausbildung", 4),
    ("Vorstand", 5);

INSERT INTO
    articles (smeID)
VALUES
    (1),
    (2),
    (2),
    (2),
    (3),
    (4),
    (5),
    (6),
    (6);

INSERT INTO
    components (artID, type, content, displayOrder)
VALUES
    (1, "title", "Start", 1),
    (1, "text", "Yeil", 2),

    (2, 'title', 'Bezirksmusikfest', 1),
    (2, 'text', 'Hallo', 2),

    (3, 'carousel', '["../assets/images/Eva.jpg", "../assets/images/Alfred.jpeg", "../assets/images/Ausschuss2018.JPG"]', 1),
    (3, "link", '{"href": "https://bibel.github.io/", "text": "Datenschutzerklärung"}', 2),

    (4, "table", '{"titles": ["Sölden", "27.07", "Tag des Klotz"], "data": [["6069", "9-8-2025", "Tag der Jungen & Jüngeren"], ["Sölden", "28.07.2024", "Bezirksmusikfest"], ["Haiming", "02.06", "Generanalversamlung"]]}', 1),
    (4, "text", "angaben ohne gewähr", 2),

    (5,'title', 'Urheberrechtshinweis', 1),
    (5, "link", '{"href": "https://bibel.github.io/EUe/ot/Gen_9.html", "text": "Datenschutzerklärung"}', 2),
    (5, "text", 'Gen 9,16; Gilt besonders im Juni', 3),

    (6, "title", "Es lebe die Musik", 1),
    (6, "text", "Hallo", 2),

    (7, "title", "Vorstand", 1),
    (7, "text", "Hallo", 2),
    
    (8, 'title', 'Jugendmarschierprobe 2023', 1),
    (8, 'text', 'Auch heuer waren wieder sehr viele marschierbegeisterte NachwuchsmusikantInnen dabei. Organisiert und durchgeführt von unseren Jugendreferenten Angi und Hannes sowie unserem Bezirksstabführer Thomas hatten alle Teilnehmenden wieder eine lehrreiche Probe und ein abwechslungsreiches Rahmenprogramm.', 2),

    
    (9, 'carousel', '["../assets/images/Eva.jpg", "../assets/images/Alfred.jpeg", "../assets/images/Ausschuss2018.JPG"], "../assets/images/Alfred.jpeg", "../assets/images/Alfred.jpeg"', 1),
    (9, 'text', 'Unsere Ehrenmitglieder (Alfred ist cool)', 2);
