USE mbs;

INSERT INTO
    mainMenuEntry (name, icon)
VALUES
    ("Start", "mdi-home-variant"),
    ("Events", "mdi-calendar-multiple"),
    ("Rückblick", ""),
    ("Jugend", ""),
    ("Über uns", "");

INSERT INTO
    subMenuEntry (name, mmeID)
VALUES
    ("Bezirksmusikfest", 1),
    ("Orchester Projekte", 2);

<<<<<<< HEAD
INSERT INTO articles (smeID) VALUES ("1"), ("2");
=======
INSERT INTO
    artikel (smeID)
VALUES
    ("1"),
    ("2");
>>>>>>> fce0b11730ff4e7efcae0ab6cda0ea55aaa7b95c

INSERT INTO
    components (artID, type, content, displayOrder)
VALUES
    (1, "title", "Test", 1),
    (
        1,
        "text",
        "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.",
        2
    );