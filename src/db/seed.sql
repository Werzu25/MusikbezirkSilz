use mbs;

insert into
    mainmenuentry (name, icon)
values
    ("start", "mdi-home-variant"),
    ("events", "mdi-calendar-multiple"),
    ("rückblick", "mdi-reload"),
    ("jugend", "mdi-human-male-boy"),
    ("über uns", "mdi-chat-question-outline");

insert into
    submenuentry (name, mmeId)
values
    ("default_start", 1),
    ("bezirksmusikfest", 2),
    ("vorstand", 5);

insert into
    articles (smeId)
values
    (1),
    (2);

insert into
    components (artId, type, content, displayorder)
values
    (2, "text", '{"style": "color: #ff0000", "text": "bezirksmusikfest 2024"}', 1),
    (2, "text", '{"style": "", "text": "das bezirksmusikfest findet heuer vom 26. bis zum 28. juli in sölden statt."}', 2),
    (2, "media", '{"type": "image", "content": "../assets/images/bezirksmusikfest2024.jpg"}', 3);

insert into
    components (artId, type, content, displayorder)
values
    (1, "text", '{"style": "color: #ff0000", "text": "Generalversammlung 2023"}', 1),
    (1, "text", '{"style": "", "text": "Die Generalversammlung fand dieses Jahr in Umhausen statt"}', 2),
    (1, "link", '{"style": "", "href":"https://musikbezirk-silz.at/page-15/page-14/", "text": "Hier gehts zum Nachbericht"}', 3);

insert into
    components (artId, type, content, displayorder)
values
    (1, "text", '{"style": "color: #ff0000", "text": "Vorschau 2024"}', 1),
    (1, "table", '{"data": [["Sölden","27.07.2024","Tag der Jugend"],["Sölden","28.07.2024","Bezirkmusikfest"],["Haiming","06.10.2024","Generalversammlung des Musikbezirkes"]]}', 2);
