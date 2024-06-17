use mbs;

insert into
    mainmenuentry (name, icon)
values
    ("Start", "mdi-home-variant"),
    ("Events", "mdi-calendar-multiple"),
    ("Rückblick", "mdi-reload"),
    ("Jugend", "mdi-human-male-boy"),
    ("Über uns", "mdi-chat-question-outline");

insert into
    submenuentry (name, mmeId)
values
    ("Home", 1),
    ("Bezirksmusikfest", 2),
    ("Vorstand", 5);

insert into
    articles (smeId)
values
    (1),
    (2),
    (1),
    (1);

insert into
    components (artId, type, content, displayorder)
values
    (2, "text", '{"style":"font-size:20px;color: #ff0000;margin-left:20px", "text": "Bezirksmusikfest 2024"}', 1),
    (2, "text", '{"style": "margin-left:20px", "text": "das bezirksmusikfest findet heuer vom 26. bis zum 28. juli in sölden statt."}', 2),
    (2, "media", '{"type": "image", "content": "../assets/images/bezirksmusikfest2024.jpg"}', 3),
    (1, "text", '{"style": "margin-left:20px;color: #ff0000", "text": "Generalversammlung 2023"}', 1),
    (1, "text", '{"style": "margin-left:20px", "text": "Die Generalversammlung fand dieses Jahr in Umhausen statt"}', 2),
    (1, "link", '{"style": "margin-left:20px", "href":"https://musikbezirk-silz.at/page-15/page-14/", "text": "Hier gehts zum Nachbericht"}', 3),
    (3, "text", '{"style": "margin-left:20px;color: #ff0000", "text": "Vorschau 2024"}', 1),
    (3, "table", '[["Sölden","27.07.2024","Tag der Jugend"],["Sölden","28.07.2024","Bezirkmusikfest"],["Haiming","06.10.2024","Generalversammlung des Musikbezirkes"]]', 2),
    (4,"carousel",'["../assets/images/bezirksmusikfest2024.jpg","../assets/images/Eva.jpg","../assets/images/Ausschuss2018.JPG"]',1);
