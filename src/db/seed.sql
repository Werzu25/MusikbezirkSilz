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
    submenuentry (name, mmeid)
values
    ("default_start", 1),
    ("bezirksmusikfest", 2),
    ("vorstand", 5);

insert into
    articles (smeid)
values
    (1),
    (2);

insert into
    components (artId, type, content, displayorder)
values
    (2, "text", '{"style": "color: #ff0000", "text": "bezirksmusikfest 2024"}', 1),
    (2, "text", '{"style": "", "text": "das bezirksmusikfest findet heuer vom 26. bis zum 28. juli in sölden statt."}', 2),
    (2, "media", '{"type": "image", "content": "../assets/images/bezirksmusikfest2024.jpg"}', 3);