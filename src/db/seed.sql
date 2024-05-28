USE mbs;

INSERT INTO
    mainMenuEntry (name, icon)
VALUES
    ("Start", "mdi-home-variant"),
    ("Events", "mdi-calendar-multiple"),
    ("Rückblick", ""),
    ("Jugend", ""),
    ("Über uns", ""),
    ("Haarpflege", "mdi-shampoo"),
    ("Glatzenfall", "mdi-hair-dryer");;

INSERT INTO
    subMenuEntry (name, mmeID)
VALUES
    ("Bezirksmusikfest", 1),
    ("Orchester Projekte", 2),
    ("Jugend", 4),
    ("Vorstand", 5),
    ("Geschichte", 5),
    ("Haarwäsche", 6),
    ("Verschmiertes Haar", 6),
    ("Glatzenfall Tipps", 7);

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
        "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.",
        2
    ),
    (2, "title", "Test2", 1),
    (
        2,
        "text",
        "Wenn du verschmieren mit Styling-Gel erwähnst, könnte es bedeuten, dass das Gel auf eine Weise aufgetragen wurde, die zu einem unordentlichen oder ungepflegten Aussehen führt. In der Regel wird Styling-Gel verwendet, um das Haar zu formen, zu definieren oder zu fixieren. Wenn es jedoch falsch angewendet wird oder zu viel verwendet wird, kann es dazu führen, dass das Haar fettig oder klebrig aussieht und sich nicht natürlich anfühlt.

Einige mögliche Gründe für ein verschmiertes Aussehen könnten sein:

    Übermäßige Verwendung: Zu viel Gel kann dazu führen, dass das Haar zusammenklebt und unordentlich aussieht, anstatt definiert und gestylt.
    Falsche Anwendung: Wenn das Gel nicht gleichmäßig verteilt wird oder nicht richtig in das Haar eingearbeitet wird, kann es zu Klumpenbildung oder ungleichmäßigem Auftrag führen.
    Zu schweres Gel: Manche Styling-Gele haben eine schwere Konsistenz, die das Haar beschweren kann, besonders bei feinem Haar. Dadurch kann das Haar flach und klebrig aussehen.

Insgesamt ist es wichtig, die richtige Menge an Styling-Produkt zu verwenden und es gleichmäßig zu verteilen, um ein gepflegtes Aussehen zu erzielen, ohne dass das Haar
verschmiert wirkt.",
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
        '{"href": "https://reintech.io/blog/php-json-encoding-decoding-web-services", "text": "nicht"}',
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
    (4, "title", "Glatzenfall", 1),
    (
        4,
        "text",
        "Glatzenfall, auch bekannt als Alopezie, kann viele Ursachen haben, einschließlich genetischer Faktoren, Stress und Ernährung. Es gibt viele Behandlungen und Strategien zur Bewältigung von Haarausfall, einschließlich Medikamenten, Haartransplantationen und Lifestyle-Änderungen.",
        2
    );