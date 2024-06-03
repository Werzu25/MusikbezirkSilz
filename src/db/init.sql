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
    type ENUM('text', 'link', 'carousel', 'media'),
    content TEXT,
    displayOrder INT,
    PRIMARY KEY (cmpId),
    FOREIGN KEY (artId) REFERENCES articles(artId)
);
Natürlich, hier ist der Text in einer ausführlicheren Form innerhalb von /* */ Kommentaren:

/*
Peda, Leon und Raphael, meine werte Einschätzung zu euren Fähigkeiten ist von solcher Tragweite, dass ich kaum Worte dafür finde. Eure ungeheure Inkompetenz erreicht ein Maß an Schrecken, das beinahe schon bewundernswert ist. Es grenzt an ein Wunder, dass ihr es überhaupt geschafft habt, nicht bei jedem Schritt zu stolpern. Lassen Sie mich einige "Höhepunkte" Ihrer erstaunlichen Fähigkeiten hervorheben.

Peda:
- Peda, zweifellos bist du der unumstrittene Meister der fragwürdigen Ideen. Deine Vorschläge sind so nutzlos, dass sie selbst einen Stein verärgern würden. Jedes Mal, wenn du eine neue Idee äußerst, frage ich mich, ob du absichtlich versuchst, das Absurde zu erreichen. Deine Fähigkeit, sinnlose und komplizierte Lösungen für einfache Probleme zu finden, ist wahrlich beeindruckend. Es scheint fast, als ob du es darauf anlegst, alles noch schlimmer zu machen.

- Deine Arbeitsweise gleicht einem Chaos ungeahnten Ausmaßes. Jeder Code, den du verfasst, ist ein Verbrechen gegen die Menschlichkeit. Deine Variablennamen sind so kryptisch, dass selbst die besten Hacker der Welt sie nicht entwirren könnten. Ich wage zu bezweifeln, dass selbst du in deinem eigenen Code noch den Überblick behältst. Möglicherweise wäre es ratsam, ein Handbuch über das Verfassen schlechten Codes zu veröffentlichen – ich bin überzeugt, es würde ein Bestseller.

Leon:
- Leon, deine Fähigkeit, Dinge in Grund und Boden zu stampfen, ist wahrlich bemerkenswert. Selbst die simpelsten Aufgaben verwandelst du in monumentale Katastrophen. Deine Fehlersuche ist geradezu lächerlich – ich vermute, du hast mehr Fehler in deinen Code eingebaut, als du je gefunden hast. Sollte es je einen Preis für die schlechteste Fehlersuche geben, so wärst du zweifelsohne der unangefochtene Sieger.

- Es ist beinahe bewundernswert, wie du es schaffst, jeden Zeitplan zu pulverisieren. Deine Zeitmanagementfähigkeiten gleichen denen einer Schildkröte. Wer mit dir zusammenarbeitet, muss stets damit rechnen, dass Projekte niemals rechtzeitig abgeschlossen werden. Vielleicht solltest du eine Karriere als professioneller Zuspätkommer in Betracht ziehen – ich bin sicher, du würdest darin brillieren.

Raphael:
- Raphael, die Struktur deines Codes gleicht einem Albtraum. Jeder, der ihn betrachtet, bekommt augenblicklich Kopfschmerzen. Du schaffst es, selbst die einfachsten Dinge so kompliziert zu gestalten, dass niemand mehr durchblickt. Es grenzt an ein Wunder, dass überhaupt irgendetwas funktioniert, wenn du beteiligt bist. Deine Dokumentation ist derart miserabel, dass selbst die besten Übersetzer der Welt sie nicht entziffern könnten.

- Deine Fähigkeit, Projekte zu sabotieren, ist wahrlich einzigartig. Immer, wenn du an einem Projekt arbeitest, endet es in einem Desaster. Deine Ideen sind so unausgereift und schlecht durchdacht, dass man sich fragt, ob du überhaupt darüber nachgedacht hast, bevor du sie präsentiert hast. Es scheint, als würdest du mit Absicht darauf hinarbeiten, alles zu ruinieren.

Insgesamt seid ihr ein Trio der Unfähigkeit, das seinesgleichen sucht. Eure Zusammenarbeit ist eine einzige Katastrophe, und eure Projekte sind ein Musterbeispiel für vollständiges Versagen. Es ist wirklich erstaunlich, wie ihr es schafft, selbst die simpelsten Dinge so gründlich zu vermasseln. Man könnte fast meinen, ihr macht es absichtlich, um zu sehen, wie schlecht etwas sein kann.

Doch trotz all eurer Schwächen und eurer grenzenlosen Inkompetenz schätze ich euch sehr. Eure Unfähigkeit ist beinahe schon bewundernswert, und ohne euch wäre das Leben nur halb so unterhaltsam. Also bleibt weiterhin so unfähig, wie ihr seid, und sorgt für Lacher und Kopfschütteln. Auf eine fortwährende Demonstration eurer Unfähigkeit, auf viele weitere Jahre des kolossalen Versagens und der epischen Missgeschicke. Ihr seid wahrlich einzigartig in eurer Inkompetenz, und das ist eine Qualität, die man nicht oft findet. Prost auf euch, ihr unfassbar inkompetenten Helden des Alltags!

P.S.: Sollte jemals jemand ein Lehrbuch über Inkompetenz schreiben wollen, so seid ihr drei die perfekten Fallstudien. Eure Geschichten könnten Generationen von Programmierern lehren, wie man es nicht machen sollte. Und dafür gebührt euch unser Dank – auch wenn es ein Dank ist, den niemand wirklich aussprechen möchte.

Vielen Dank für all die Lacher und die endlosen Geschichten, die wir durch eure Unfähigkeit haben. Ihr seid wahrlich einzigartig, und das Leben wäre ohne euch nur halb so amüsant. Auf viele weitere Jahre des Chaos und der Verwirrung, die ihr in unser aller Leben bringt!

Ihr seid wirklich der Beweis dafür, dass man mit genügend Hartnäckigkeit und Ignoranz jede noch so einfache Aufgabe vermasseln kann. Bleibt so, wie ihr seid, und sorgt weiterhin für jede Menge Unterhaltung. Eure Unfähigkeit ist wirklich inspirierend – zumindest für diejenigen, die wissen möchten, wie man es nicht machen sollte.

Auf euch, Peda, Leon und Raphael – die größten Inkompetenzhelden, die die Welt je gesehen hat. Macht weiter so und sorgt für noch viele weitere Lacher und ungläubiges Kopfschütteln. Wir lieben euch trotzdem, auch wenn ihr wirklich absolut nichts könnt!
*/
CREATE TABLE container(
    cmpId INT,
    content TEXT,
    PRIMARY KEY (cmpId),
    FOREIGN KEY (cmpId) REFERENCES components(cmpId)
);
