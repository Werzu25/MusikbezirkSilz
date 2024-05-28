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
    (3, "title", "Sis", 1),
    (
        3,
        "text",
        "dddddddddddddxxxxxxxxxxxdddddddoolllllccc::::;,'..................',,,,,,,;;;:;,,,,''''''''.............  .............',,,;::llllllcccccc:;;;:clloooodddxxkkkkxxddoooddddxxxxxxxxxxxxxxxxxxxxxxddddxxxx
ddddddddddddddxxxxxxxxxxdddddddoollcc::::::;,,'................',,,;;;;,,;;;;;,,,'..'',,'..........           ...........',,;:::ccclllc:::cc:;;;;:clloooddxxkkkxxddoooddddxxxxxxxxxxxxxxxxxxxxxxxddddxxx
ddddddddddddddxxxxxxxxxxxdddddoollcccccc::;,'..................',,,,;;;,;:;',;;,'''''''..........                    .....'',;;::::cclcc::::cc:;,,,;:clloddxxkkxxddooodddxxxxxxxxxxxxxxxxxxxxxxxxdddxxxx
odddddxxddddddxxkxxxxxxxxdddddoolcccccc::,'......................'',,,,;::,'',,,',,,'''.....'.....  ...                ....',,;;::c::ccccc::::::;;,,,;;cloddxxxxxddooodddxxxxxxxxxxxxxxxxxxxxxxxddddxxxx
ooddddxxxddddddxxxxxxxxxxdddooollcccc:;,'.................  ......'',,,;::;,,;;;,,,,,,,,',,,''................. .       ....',,;;::::::cccc:::;,,;;;,,',:cooodxxdddooddddxxxxxxxxxxxxxxxxxxxxxxxddddxxxx
oooddxxxxddddddxxxxxxxxxxddoollllcc:;,''.'',''''''.......   ....'',,;;;:cccc::::::::ccc::::;;,''''..................    ......',;::c:::::ccccc:;,,;::,,,,;:clodddddooodddxxxxxxxxxxxxxxxxxxxxxxxxxdddxxx
oooddxxxdddollloddddxxxxddooollllc:,''''',;,''''.......   ....',;::cllllollooooooooooddoolcc:::::;,,,,,,'''''..................',;:ccc:::::::cc:;,,;::;,,,,;:looddooooddddxxxxxxxxxxxxxxxxxxxxxxxxdddxxx
oooddxxxddol:::clloddxxxddooolccc:,''''',,,,''.............';:clloodddxxxxxxxxxxxkxxxxxdddoolllllccllloollllc:;,'...............',:cllcc:::::ccc::,,;:c:,',;;:clooooooddddxxxxxxxxxxxxxxxxxxxxxxxddddxxx
oooddxxxxdolc:::clodddddddoollc:;,,''''',,,,''.........',;:lloddxxxkkkkkkOOOkkkkOOOkkkkkxxxxddddddddxxxkxxxxddolc:;,'............',:clllc:::clllcc:;,;cc:;,,,;:cloooooddddxxxxxxxxxxxxxxxxxxxxxxddddxxxx
oooddxxxxddollccclddddddddooolc;,'''.',,,,'..........';:cloddxxxkkkOOOOOOOOOOOOOOOOOOOOOkkkkkkkxxkkkkkkkkkkkkkxxdddolc;,........'',,:cllllcccllllccc:;;::c:;;;:cclooooodddddxxxxxxxxxxxxxxxxxxxxddddxxxx
oooddxxxxdddoooooddddddddooooc:;,''''''''.....'....';clodxxxkkkkOOOOOOOOOOOOOOOOO0OOOO00OOOOOOOOOOOOOOOOOOOOkkkkkkkxxdol:;'....',,,,;:loooolcclllcccc::::clc:::cc:clooodddddxxxxxxxxxxxxxxxxxxxxddddxxxx
oooodxxxxxdddddxxxxxxddddooolc:;,'''''...........';clddxxxkkOOOOOOOOOOO00000000000OO000000000OOOOOOOOOOOOOOOOOkkOkkkkkxdolc:,..',;;;;:clooolcllllllllllc:clllc:::::cloddddddxxxxxxxxxxxxxxxxxxxdddddxxxx
oooodxxxxxddddxxxxxxxddoddoolc:,''''.........''',:lodxxkkkkOOOOOOOOOO000000000000000000000000000000000000000OOOOOOOOOOkkxddoc;'';;;::cclodoolclllollllllcclooolccccccloddddddxxxxxxxxxxxxxxxxxxxxxxxxxxx
oooodxxxxxdddddxxxxxxdddddooc:;,''..........',;:clddxkkkkOOOOOOOOO00000000000000000000000000000000000000000000000OOOOOOkkkkxdl:,;:ccclllooooollllooolllllccloddllcccccloddddddxxxxxxxxxxxxxxxxxddxxxxxxx
ooooddxxxxddoddxxxxxddddxdolc:,''..........';:clodxxkkkOOOOOOOOO0000000000000000000000000000000000000000000000000OOOOOOOOOkkkxdc::clllllloooddooloodolccllllodxdlccclccloodddddxxxxxxxxxxxxxxxdddddxxxxx
ooooddxxxxxddodxxxxxdddxxdol:,'....    ...',;clodxxkkkOOOOOOO00000000000000000000000000000KKKKKKKKKKKKKKKKK00000000OOOOOOOOOOkkdc:clolllooooddddoloddolcclolodxxdlccccclloddxdddddxxxxxxxxxxxxxdddxxxxxx
oooodddxxxxddoddxxxxxddxdoc:,'....   .....';:loxxxkkOOOOOOO0000000KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK0000OOOOOOOOkdc:cllloooooooddddooddooc:cloodxxxdlcccclllodddddddxxxxxxxxxxxxxxddxxxxxx
oooooddxxxxxdoddxxxxddddoc:;,'...    ....',:codxkkkOOOOO000000000KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK0000OOOOkkxo::clloooooooodddoodddolc:cloddxxxdlllclllodddddddxxxxxxxxxxxxxddddxxxxx
oooooddxxxxxdoodxxxdddooll:,'..      ....,;:ldxxkkOOOOO00000000000KKKKKKKKKKKKKXKKKKKKXXXXKXXXXKKKKKKKKKKKKKKKKKKKKKKK0000OOOkkkdl:ccllooodoolodddooooool::cloodxxxddolllooodddddddxxxxxxxxxxddddddxxxxx
oooooddxxxxxddddxxxdoooolc:,..       ...';:loxxkkkOOOOOO00000000KKKKKKKKKKKKXXXXXKKKXXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKKKKK0000OOOkkkoc:ccclloooollooooollollc::cloodddddoolooooddddddddxxxxxxxxdddddddxxxxx
oooooddxxxxxdddddddoooool:,..        ..',:lodxkkkOOOOOOO000000KKKKKKKKKKKKXXXXXXXKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKKKK000OOOOOkxl::::cllloolcloooolllllc:;;:lloooooooooooooddddxxddxxxxxxxxxxxdddxxxxx
oooooddxxxxxxddddoooooooc;'.         ..';coddxkkOOOOOOOO0000000KKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKK0000OOOOOkoc;,,;::ccllccllllooolcc:;;;:cllloooooddddoddddxxxddxxxxxxxxxxxdxxxxxx
ooooodddxxxxddddoooooool:;'.        ..',:ldxxkkOOOO000O0000000000KKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKKK000000OOOOkdl:;,;;;::cccc:::clollccc:;;;;:ccclooodddddddddxxxxddxxxxxxxxxxdxxxxxx
ooooooddxxxxdddooooooolc:;.        ...';codxxkOOOOOOOOO0000000000KKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKKKK0000000000OOOOxoc:;,,,;:::c:::::cllcc:::;;,;;::clooodddddddddxxxkxdxxxxxxxxxxxxxxxxx
ooloooddxxxxdddoooooollc:,.        ...,codxxkkOOOOOOOO000000000000KKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKK000000000000OOxool:,,,,;;:::;;:::clcc:::;;,,,,;;:lloodxdddddxxxxkxxxxxxxxxxxxxdxxxxx
ooloooddxxxxxddooooolccc;.         ...;ldxxkkOOOOOOO000000000000000000KKKKKKKKKXXXXXXXXXXXXXXXXNNNNXXXXXXXKKKKKKKKK00000000000000Okddoc,'''',;::;;;;;::cc:;;;;,,,,;;;:lllodddddxxxdxxxxxxxxxxxxxxxxxxxxx
ooooooddxxxxddoolllllcc:,.         ..,codxkkkOOOOO0000000000000000K00KKKKKKKKKKKXXXXXXXXXXXXXXXXNNXXXXXKKKKKKKKKKK000000000000000OOkxdo:'.''',;;;;;;;;;::;;;;;;,,,;;;;cllooddddxxxddxxxxxxxxxxxxxxxxxxxx
ooooooddxxxxdolllllcc::;'.         ..;ldxxkkOOOOOOOO000000000KKKKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXKKKKKKKKKKKK000000000000000OOkxxdl,....',;;;;,;;;;;;;;;;;,'',,,;:llooddxxdxxxdxxxxxxxxxxxxxxxxxxxx
ooooooddxxxddolcclc::;;,.         ..,:oxxkkkOOOOOOOOO00000000KKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKKKKKKKK0000000000000000Okxxdo:'...'',;;,,,,,,,;;;;;;,''',,,;clodddxxddxxxxxxxxxxxxxxxxxxxxxxx
ooooooddxxdddlccccc:;,,'.         ..;ldxxkkkkkkkkkkOOO00000KKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKKKKKKKK0000000000000000Okxxdoc;'...'',,,,,,,,,,;;,,;;,''',,;:looddxxxddxxxxxxxxxxxxxxxxxxxxxx
ooooooddxxddocccccc:,''..         .'codddddddddxxxxxkkkkkkO000KKKKKKKKKKXXXNNNNNNXXXXXXXXXXXXXXXXXXXXXXXKKKKKKKKKK0000000000000000OOxxxdoc,.....'',,,''''',,,,,,,'''',;:clodxxxxxdxxxdxxxxxxxxxxxxxxxxxx
doooooddxdoolcccccc;,...          .;loolccloooddddooooooddxxkOO000KKKKKKXXNNNNNNNXXXXXXXXXXXNNNNXXXXXXXXXKKKKKKKKK0000000000000000OOkxxxdl;.......',,''''',,,,,,''''',,;clodxxkkxxxxdddxxxxxxxxxxxxxxxxx
ddooooddxdollcc:::;;,...         .'clcccclodddxxxddolllloooodxxkkOO00KKKXXNNNNXXXXXXXXXXXXNNNNNNNNXXXXKXXXKKKKKKK0000000000000000OOOkxxxdo:'.......'','..',,,,,,''''''',:lodxxxkxxdxddddxxkkxxddxxxxxxxx
dddooodddoooc:::;,,,'...         .;cccldxkkkOOOO00OOkxdddoooooodxkkkO0KKKXXXXXXKKKKXXXXNNNNNNNNNXXXKKKXKK000OOkkkkkkkkkkkkkkOOO00OOkkxxdddl;.........'''..'',,,''''''.',:cldxxxkkxdxxddddxkkkxxddxxxxxxx
ddddoodddool:::;,,,'...         .';:codxkO0000000KK0000OOkxxdddddxxkkO00KKKXXKKKKKKKXXXNNXXXXXXXKKKKKK0OOkkxdddddddddddxxxddddxkOOOkkkxxddoc,.........'''...'','''''...,;:coxxxkkxxxxddddxxkkxxxddxxxxxx
ddddooooddoc::;,''''...        ..;:coxkOOOOOOO000000000000OOkkkxxxxxkOO000KKKKKKKKKKXXXXXXKKKKK00000OOkxxxxdooooooollloooooolllodxxkkkkxdddo:'.........''...'''''''....';:codxxkkkxxxxdddxxkkkkxxxxxxxxx
ddddooodddl:::;'.',,..  .'..   .,;:cdOOOOOOOOOOkkkkxxxxxxxxxkkOOOkkxxkOO00000K00KKKKKXXXKK000000OOOOOkkxxxdddddddddxxxxxxxxdollcloddxxkxdoddl;..........''...'''''.....',;:oxxxkkxxxxxddddxxkkkkxxxxxxxx
dddoooddxdc:;;,'..''....,c:.  .':cclxO0OkkkkxddolllllcllloooddxkOOOkkxkkO0000000KKKKKKKKK00000OOOOOkkkkkkkkkkkOO00000KKKK00OOkxolllloxxxdoodo:'..........'......''......',:ldxxkkxxxxxdddxxxkOOkxxxxxxxx
dddooddxdo:;;,,'.......,cc:....;looxkO0kxddoc;;,,,,,,'':lc:ccldxxkkkkkkkOO00000KKKKKKKKK0000OOOOOOOOOOOOOOO00000KKKKKKKKKKKK00Okxdlccoddddoool:'.................'......',:lddxkkkxxxxxddxxxxkkkxxxxxxxx
dddooddddl::;,'''......cxdc'..,ldddkkOOkdl:,'..':loc:;,lxl::clodxxkkkxxkkOO0000KKKXXKK000OOOOOOOO0000000OOkkkkkkOO000000KKKKK000Oxdlccodddddolc;'.......................',:loddkkkxxxxddddxxxkkkkxxxxxxx
dddoodddoc;;;,','.....,dOxc'.'cdxxxkkOOOkxlcllccllcccccllllodkkxxxkkkxxxkOOOO00KKKKKK00OOOOOOOO00000OOkkxxddoolccloodxkOO00000000Oxocclddddddol:,.......................',;clodxkkkxxxdodddxxkxkkkxxxxxx
ddooodddoc:;,'''......:xOdc,.,ldxxkkOOOOOkkxkkxxxddodddxxxddxxxxxxxkkxxkOOOOO00KKKK000OOOOOkkOOOOOOkkkxxxdlc::;;;,,;;::loxkO00000Okdoccoddddddol:,......................',;:lodxkkkxxxdodddxxxxkkkkxxxxx
ddooooddoc;;,'''.....'lkkdl,':oxxxkkOO000O000OOOOOOOOOOOOOkOkkkkkkkkkkkOOOkkO000KK00OOOOOOkkOO00OOOkkxxdxxdoc::dd;.''...,:ldkOOO0OOkxollodddddol:;'..  ..................';:lodxkOOkxxxoodxxxxxxkkkkxxxx
ddddddddoc;,,,''.....,oxxdo;,coxxxkkOO000000000000000OO00000OOOOOOkOOOOOOkkkO000000OOOkOOOkkO000OkkxxxddkOkdolclc;::::;'..':dkkkOOOOkxooodxxxdol:;'..   .................';:lodxkkkkxxxooddxxxxxkkkkkkxx
ddddddddoc:;,,,'''''':dxkkd:;ldxxkkOO000000000000000000000000000OO0OOOOOkkkOO00000OOOkkkOOOO00000OOOOkkkxxxxxdddollllllc:;,:oxkkO00OOkxddxxxxdolc;'...     ..............';:lodxkOkkkkxooddxxxxxxkkkkkxx
ddddddddol:;,,,,,',',cdkO0klcodxxkkOO0000000000OOO00000000000000000OOOkkkkOO000000OOOkkkOOO00000000OOOOOOOOOOOOOkkxxkkxxxxdxkOOO000OOkxxxxxxxdooc;'...      ....'........';:cldxkkkkkkxooddxxxxxxxxkkkxx
ddddddddol:;;;,,,,,,,cx0K0OdlodxkkOOO000000000000000000000KKK0000OOOOOkkkOO0000000OOkkkkOO00000O0000000OOOO000000OOOOOOOOOOOOOOO0000Okkxxxxxxxdoc:'...      ..;clllllc,'';::cldxkkkkkkxoodddxxxxxxxxxkxx
ddddddddol::;;;,,;,,,oOKKK0xodxkkkOOOO0000000000000000KKKKKKK0000OOOOkkkOO0000000OOOOkkkOOO0000000000000000000K0000000000000000000000Okkkkkxxxdoc:,...      .:dkkkkkkxl:;;::cldxkkkkkkxooddddxxxxxxxxxxx
ddddddddolc:::;,,;;,:dO0000xddxkkOOOOOO00000000KKKKKKKKKKKKKK0000OOOOkkOO00000000OOOOOOkOOO000KKK000000000000KKKKKKK000KK0000000000000OOkkkkxxdol:,'.......':dOOkxxxxdl:;:::coxxkkkkkkxooddddddxxxxxxxxx
dddddddddlcc::;,,;;;:dkkOOkxdxkkkOOOOOO000000KKKKKKKKKKKKKKKK00000OOkkkO000000000OOOOOOOOOO000KKKKKK00000000O000000000KKKK000000000OOOOkkkkkxxdol:,'....'codxkOkddxkOko::::codxxxkkkkOkolloddddxxxxxxxxx
dddddddxdolcc:;;;;;;:okkkkxddxkkkkOOOO0000KKKKKKKKXXXXXXXXKKKK00OOOkkOOO00000000OOOOOOOOOOO0000KKKKKKKK00000OOOOOO000000KK000000000OOkkkkkkkxxxdl:,'....;dOOOOOOkxkO0koc:::coxxkkkkkkkxlcloddddxxxxxxxxx
xxdddxxxddolcc::;;,,:okOOOkddxxkkkOOO0000KKKKKKKKXXXXXXXXKKKKK0OOkkkOOO00000000OOOOOOOO00000000KKKKKKKKKK00000000000000000000000000OOkkkkkkkxxdol:,'...,lxOO0KK0Oxk0Oxlc:ccldxkkkkkkkkxl:loddddxxkkkkxxx
xddddxxxddollccc:;,;coxO00OxxxxxkkOO00000KKKKKKKKXXKKKKKK00000OkkkkOOOO0000000OOOOOOOOO00000000KKKKKKKKKKKKK0K0000000000000000000000OOkkkkkxxdooc:;,'',lxkOKKKK0kxk0OdlcccloxxxkkkOOOOxc:cloddxxxxkkkkxx
dddddxkkxxdoollccc:;cdkO00kxdxxxkOOO00000000KKKKKKKK000OOOOOOOOOOkOOOO0000000OOOOOOkkOO00000000KKKKKKKKKKKKKKKKKKKK000000000000000OOOOkkkxxxddolc:;;;;cdxO0KKKK0OkOOkdl::cloxkkkkOOOOkdc;:lodddxxxxkkkxx
oodddxkkkxxxdollllc:cdO000kddxxkkOOO0000000000000000OOOOOOOOOOOOOOOOOO00KKK0000OOOkkkkOOOOOO00KKKKKKKKKKXXXXXKKKKKKKKK0000000000000OOOOkkxxddoolc::ccldxkO00KKKKOOOOxoc:clodxkkkOOOOOkdc;:loodxxxxxkkkkx
oooddxkkkkkxddooooollxO000kdddxkkOOOO000000000000OOOOO00000OkkOOOkkOO00KKKKKKK00OOOkkkOOOOOO000KKKKKKKKXXXXXXXXKKKKKKKK00000000000OOOOkkxxddoolllllldxk00000KKKK0OOkxoc:coddxxkkOOO0Okdc;;clodxxxxxxkkkx
oodddkkkkkkkxxdddddodk0000kdddxkkOOOO000000000OOOkOO0000000OkxxxxxkkO0000KKKK00OOOOOOOOOOOkkO000000KKKKXXXXXXXXXXKKKKKK00000000000OOOkkkxdoooolloodxxk0KXKKKKKKKKOkxddlcldddxkkOOO000Od:,;cloodxxxkkkkkk
ooodxkkkkkkkkkxxddxddxO000kdddxkkOOOOO0000OOOOkkkOO000000000OkxxxddxkOO000000OOOOOOOOOOOOOkkkO000OO000KKKXXXXXXXXKKKKK000000000000OOkkkxddooooooodxkOO0XXXKKKKKK0kdoddolooddxOOOOO000Od:,;cllodxxxxkkkkk
ooodxkkkkkOOOOOkxxxxxxkOOkxddxxkkkOOOOOOOOOkkkkkOOOO000000000OOkkkxddxkOOOOOOkkxxxxxxkkkOOkkk00000OOOO00KKKKXXKKKKK000000000OOOOOOOOkkxxdoooooooddxO000XXKK00KK0OdooxxdoddddxOOOkkO00Od:,;:cloodxxxxkkxx
ooodxkkkOOOOO000kkkkkkxdxkxdddxkkOOOOOOOOOkkkkkOOOOOOOO0000000OOOOOkxdxxxkkkxdddxxxkkOOkkxkkO0KKKKK0OOOO000KKKKKKK0000000000OOOOOOOkkxxddooooooodxk000KKK000000OxddxkkxxxxxxkOOOOOO00Od:;;:clooodxxxxkxx
ooodxkkOOOOO00000kkOOOdodddddxxkkOOOOOOOOkkkkOOOOOOOOOOOOOOO00OOOOOOOkxxddddxkO00000000OOOO0000KKKKKK0OOO000000000000000000OOOOOOOkkkxddoooooooddkOOO0KK0OO00OkxdxxkkkxxxkkkkOO0OOO0K0d:;;:clodoodxxxkkk
doodkkOOOOO00OO0K0O0KOxkkddddxkkOO00000OOkkkOOOkkkkOOOOOOOOO0000000OOOOOkkkkO0000000000000000000KKKKK00OOOO000000000000OOOOOOOOOOOkkxxddooooooodkOOkO0KK0000OkxxxkkkkkxxkOOOkOO0OO0KK0d:;;:clodoodxxxkkk
dooxkOOOOOOO0Okk0000KOkkkxdoddkkOO000000OOOOOOOkkkkkkOOOOOOO00000000KKKKKK000KK000000000000000000000000OOkkOO00000000OOOOOOOOOkkkkkxxdddoooooooxOOkO0KKK0OOOOkxxkkkkkkkxxO0OOOOOOO0KKOo:;;::loooddxxxkkk
dodxkkOOOOOOOOxdk00KXKOkkxdoodxkOO0000000OO0000OkxxkkkkkOOOOO0000000KKKKKKKKKKKKKK00000000000OO0000000OOOkkkkOOOOOOOOOOOOOOOOkkkkkxxddddoooooodkO000KXKK0OOOkxxxOkkkkkkxxO00OOOOOO0KKko:;;;:cloooddxxkkk
dddxkkkkOOOOOkdlokOKXXKOxdooodxkkOO00KKK000000OkxdoooooddxxkkkkOOO00KKKKKKKKKKKKKKK0000000000OOOOOOOOOOOOOOkkkkOOOOOOOOOOOOOOkkkkxxxddddooolodxO00KKKKKK0OOkxxxkOkkkkkxxxO00OkOOO0KKKko:;;;::loooodxxkkO
ddxxkkkkOOOOOxoccok0KKKKkollodxkkOO00KKKK00KKKK0kdollclcclddddxxxkkkOO0KKKKKKKKK000000000000OOOOOOOOOOOOO00OOkkkkOOOOOOOOOOOkkkkkxxxdddooolooxO00KKKKKKK0OxddxkOkkkOkxxxkOOOOOkOO0KKKko:;,;::clloodxkkkO
dxxxxxkkkkkOkxoc:cok00OOOdccodxkOOO00KKKKKKKKKKK0OxddxkdddkkkxxxxdddxxkO000000OOOOOO000000OOOOOOOOOOOOOO00000OOkkOOOOO0OOOOOOOkkxxxxdddoollodk00KKKKKKK0OxdxkkkkkkOOkxdxkkOOOOOOO0KKKxl:;,,::ccllodxkkkO
dxxxxxxkkxxkkdl:;:ld00xdxxlcloxkOOO000KKXKKKKKKKK0kxddxkO0KK0000OkkkkkkkxxxxkkxxxxxxxxxkkkOOOOOOOkkkkOOOO000000OOO00000OOOOOOOkkkxxxdddoolldO000000K00OxoodxxxkkkkOOxddxxkkkkkOO00KX0xc:;,,;::cloodxkkkk
ddxxxxxxxxxxxoc::::cdxdllolccoxkOOO000KKXXKKKKKKK00kxooxOKXNXXXNXKKXXXK0OO00000OkkkxxdddxdddxxxxxxxxkkOOO000000OO000000OOOOOOOkkkxxddoollldk0KK00OOkxooloddddxxxxkkxddddxkkkxxkO00KKOdc:;;;;::clooddxkkk
ddddddxxxddddl:;;:::looocccc:coxkOOO00KKKKKKK000000OkxddxOKXXXNNNNNNWWWNXXNWNNNXKKXKK00KK0kkOOkkxdolodkO000000000KK000OOOOOOOOkkxxddoollloxkOOOkxdoolllooodddxxxxkkdlloddxkkxxkOO0K0ko:;;;;;;::cloddxkkk
ddddddddddddoc:,,;;;clllccc:;;cdkOOOO00KKKKKK000000OOkxddxOOO0KXXXXNNNNNNNNNNNNNXNNNXXXNXXKXXXK0OxddxxkO000K000KKKK000OOOOOOOOkkxxdoollccoxo:,,,,;lxdllooooodddddddlllloddkkxxxkk0K0xl:;;;;,;;::cldddxkk
xxddooddooool:;,,,,,:cc::;;;;;;ldkOOkO00KKKKK0000000OOkxxxxxxkOO0KKXXNNNNNNNNNXXXNNXXXXXK00K0Okxxxk0000000KKKKKKKK000OOOOOO0OOkkxddollc;:ox:...,;:dOdccllllloddooolccclooddxxdxxO00Oxc;;::;;;;::clodxxkO
kkdooooollolc;,',,',;:c:;,;;;;,;lxOOkkO00KKKK000000OOOOkkkxkkkkkO00O00KKKXXKKXXKKKKK0000OOOOxdxkO0KKKKK000KKKKKKKK000OOOO000OOkxdoolcc;';dl...,::cxOocccccllodooollccclloodddddxO00ko:;;:::;;;::clodxxkk
kkkxollcclc:;,''''',;:c:;;,;;,'',lxOkkkO000KK0000000OOOOOOOOOOOOOOOOOOOOO00OO00OOkkkkkkxxxxxxkO00KKKKKKKKKKKKKKKK0000OO00000Okxdoolc:;',okc..';::o00o::::cclooloolc::clllooooodxO0Oxl:;;::;;;;;:cclddxxk
xxkxdlccc::;:;,,,'',;;;,,;;;;,'..;okOkkkO00000000000OOOO00000000OOOO00000000OOOkkkxxxxxxxxkkOO0000KKKKKKKKKKKKKK000OOO00000Okdolllc::,'cOO:..,::cx0kc:::cllooolllc:::clllooolloxkkxo:;;;::;,,;;::cldddxk
xxxdolcc:::cooc::;,,,,'',,,,,'....,okOkkkOO00000000000000000KKK0000000000KKKK0OOkkkkxxkkkOO0000000KKKKKKKKKKKK000OOOO00K00Okdollcc::;'.cOd,.';:coOOo::;:cllooolc::;;::llllllllodxxoc;;;;::;,,;;::coddddk
xddolc:;:::clolllc:;'.'''''''......,okOkxkOO000000000000000KKKKKKKKKK0000000000OOOO00O0000000000000KKKKKKKKKK000OOOO00000Okdllccc:::,..:xl'';::cxOdccc::ccllllc:;;;;;:clllllclodxdl:;;;;:::,;;;::codddxx
xdollllc:;;;::::::::;,,,''..........,okkxxkOO00000000000000KKKKKKKKKKKKXXKKKKKKKK0000000000000000000KKKKKKKK000OkkO00000Oxolccc:::::.  'c:'';;:coo::::::ccccc:;,,'',;:ccllcccclddl:;;;;;::;,,;;::cloddxx
dolc::::;;;;;;;;;,,;;;;,''...........'lkkxdkOO0000000000000KKKKKKKKXXXXXXXXXXXKKKKKK000000000000000KKKKKKK000OkkO00000Okxoccc::::cc,.  .';,,;;:c:;;;::::cc::;;,''.',;:ccllcccclol:;,,;;;::;,,;;::clodxxx
ccc:;,'''...''''''''''''''.........   'cxxddkO000000000000000KKKKKKXXXXXXXXXXXKKKKK0000000000000000KKKK0000OOkO00KK00Okdlccc:::clo:.    .';;::;;,,;;;::::;;,,''...',;:clllccccll:;,,,,;:::;;;;;:cclodxkx
lcc:;,'..........................      .:oddxkO000000000000000KKKKKXXXXXXXXXKKKKKKK00000000000K00K0KKK0000OkO0KKK000Oxolccc:;:lodl'      ..,;:;,,,,;;;::;,,''....'',;:cccc:::cc:,,,,',;::::;;;::lllodxkx
ooolc;,,'................         ....  .,lodxOOO00000000000000KKKKKXXXXXXKKKKKKKKK00000000000000000000OOkOO0KKK00Okdolcc:::codxd:.       ..';;,,'',,,;,,,'.......',,:ccc::::c:,,,,'',;;:cc:;::clooodkkx
oooolc:;,''........             ......   .';cdkkO00000000000000KKKKKXXXXXKKKKKKKKK00000000000000000OOOkkkO0KKK00Okxollc::ccodxxxo,.       .',;,,'..'''''''.......'',;::c:;;:::,,'''',;;:clc:::cloooodkkk
oooooolcc:;;,''.......         ......... ...':dkkOO000000000KKKKKXXXXXXXXKKKKK0000000000K00000000OkkxxkO0KKK00Okxdolc:::codxxxxdc.........';:;,'................'',;;::::;;;,,''..',;:::clc:::clodoodxkk
ooooooolllcc::;,'.............................:oxkOOO000000KKKKKKXXXXXXXXXXKKK0000000000000000OOkkxxkk00KK00Okkxdoc::clodxxkkkxo;.....''''';::;,'... ..........'',,;;;;:;;,'..'..'',:c:cllc:::codddodxxk
doooooollllccc:;,''.............''.............,ldxkOOO0000KKKKKKKKKXXXXXXXXKKK00000000000OOOOkxdxkO000000Okkxdocc:clodxxkkkkxdc.....','''.',::,'..   .....',''',;;::;;,'........',:cc:lolc::cloddddodxk
dooooolllllcccc::;;,,,,'......''',''.......';,..':oxkkOOO00000000KKKKKKKKKKKKKK000000000OOOOkxddkO0000OOOkkxdolcclodxxxkkOkkkxo;.   ..''.....',;,'.........'',,,,,,,,'...........';lc:clolc:cloodxdddxkk
dooooollllccccc:::;;;;;,''''',,,;;,,,,,'....;:;'..,:odxkOOO00000000000000KKKK00000000OOOkkxdddkO00OOkkkxxdollllldxxxkkkkOOOkxdl;.    ..........',,,,'''''''''''''...............';cl:;colc::clodxxdddxkk
oooooollllccccc::::;;;;,'.',,,,;;;;;;,,'....,clc;...';cldxkkkOOOOOOOO00000000000OOOOkkxxdoodxkOOkkxxdddollllodxxkkkkkkOOOOkxddo:..      ..   ....''',,,,,','''.................';cl:;:lolc::lodxxxdddkkk
oooooollllcccc::::::;;,''.'',,,,;;;;;;,'....':oooc,.....';:llodxxxkkkkkOOOOOOkkkkxxdoolloddxxxdddoollllllodxkkkkkkkOOOOOOkxxxxo;.            ..'''...........................';:cc:::lollcccloddddddxkkk
oooooollllcccc::::;;;;;,'.'',,,;;;;;;;'.    .;odddoc;,'.......',;;:cclloodddooolc:::::cllloooooolllooodxkkOOOkkOOOOOOOOOkkkkxdl,.             .,;:;;,'.....................',:llc::cllllccclodddddxxkkkk
oooooollllcccc:::;;;;;,,'.'',,,;;;;;;,.      'ldxdddollcc:,'...........'',,,,,,',,;:cccccllooooooodxxxkkOOOOOOOOOOOOOOOOOOkkxdl;.            ...,;cc:;,'.................',;looc:;clolccccloddddddxxkkkk
",
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