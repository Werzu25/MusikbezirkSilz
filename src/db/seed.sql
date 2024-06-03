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
    subMenuEntry (name, mmeId)
VALUES
    ("DEFAULT_Start", 1),
    ("Bezirksmusikfest", 2),
    ("Orchester Projekte", 3),
    ("Musikfeste", 3),
    ("Ausbildung", 4),
    ("Vorstand", 5);

INSERT INTO
    articles (smeId)
VALUES
    (1);

INSERT INTO
    components (artId, type, content, displayOrder)
VALUES
    (1, "text", '{"style": "", "text": "test"}', 2);