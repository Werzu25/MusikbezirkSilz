USE mbs;

INSERT INTO
    mainMenuEntry (name, icon)
VALUES
    ("Start", "mdi-home-variant"),
    ("Events", "mdi-calendar-multiple"),
    ("Rückblick", ""),
    ("Jugend", ""),
    ("Über uns", ""),

INSERT INTO
    subMenuEntry (name, mmeID)
VALUES
    ("Bezirksmusikfest", 1),
    ("Orchester Projekte", 2),
    ("Jugend", 4),
    ("Vorstand", 5),
    ("Geschichte", 5);

INSERT INTO
    articles (smeID)
VALUES
    (1),
    (2),
    (2),
    (3),
    (4);

INSERT INTO
    components (artID, type, content, displayOrder)
VALUES
    (1, "title", "Test", 1),
    (
        1,
        "text",
        
	2
    ),
    (2, "title", "Test2", 1),
    (
        2,
        "text",
	"",
        2
    ),
    (
        1,
        "carousel",
        '["../assets/images/Eva.jpg", "../assets/images/Alfred.jpeg", "../assets/images/Ausschuss2018.JPG"]',
        3
    ),
    (
        3,
        "link",
        '{"href": "https://reintech.io/blog/php-json-encoding-decoding-web-services", "text": "Wir sind die Klotz Hannes Fangruppe"}',
        3
    ),
    (
        3,
        "table",
        '{"titles": ["test", "test1", "leon"], "data": [["abcd", "leon", "warum"], ["nox", "julian", "ju"], ["birgit", "komplett", "ja"]]}',
        4
    ),(3, "title", "Verschmiertes Haar", 1),
    (
        3,
        "text",
        "Verschmiertes Haar kann ein Zeichen für übermäßige Verwendung von Stylingprodukten sein. Es ist wichtig, die richtige Menge an Produkt zu verwenden und es gleichmäßig zu verteilen, um ein gepflegtes Aussehen zu erzielen.",
        2
    ),
    (4, "title", "", 1),
    (
        4,
        "text",
        "",
	2
    );
