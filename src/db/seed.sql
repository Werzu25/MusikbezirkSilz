USE mbs;
INSERT INTO
    menuEntry (name, icon)
VALUES
    ("Start", "mdi-home-variant"),
    ("Events", "mdi-calendar-multiple"),
    ("Rückblick", "mdi-reload"),
    ("Jugend", "mdi-human-male-boy"),
    ("Über uns", "mdi-chat-question-outline"),
    ('Test dass funktioniert', '');

INSERT INTO
    articles (meID, name)
VALUES
    (1, "test");

INSERT INTO
    components (artID, type, content, displayOrder)
VALUES
    (1, "text", '{"style": "", "text": "Loremp  ipsum fick dich"}', 2);