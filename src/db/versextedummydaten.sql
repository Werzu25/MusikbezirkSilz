USE musikbezirksilz;
Insert into template Values ('image-carousel'), ('image-text'), ('navbar'), ('table'), ('text-with-link');

# erstes ist tamplates, sinnvoll für wieder verwendung nachfolgendes sind beispiel einträge

Insert into mainMenuEntry (name, structure, icon) VALUES ('Leon X kleine Kinder', 1, 'mdi-human-male-child'), ('Raphi futanari', 2, 'mdi-thermostat');
Insert into subMenuEntry (name, structure, mainID) VALUES ('kleine Schwester',1 , 1),
    ('Kindergarten', 2, 1), ('Fette Dinger', 1, 2);

# mit php funktione getc
Insert into imgvid (fileURL) VALUES ('../assets/images/03_jugendcamp-mb-silz_online.jpg'), 
    ('../assets/images/Eva.jpg'), ('../assets/images/stacks-image-995e324.jpg'),
    ('../assets/images/stacks-image-dcf67d4'), ('../assets/images/f-ogo_RGB_HEX-58'), ( 'https://www.youtube.com/watch?v=yxW-aM46Ph4');    

Insert into entry (structure, title, subtitle, text_entry, TemplateName, templateinfo, has_gallery, has_imgvid, is_table, subID) VALUES
    (1, 'Leon im Kindergarten', '', 'Hier sind bilder von leon beim letzen ausflug mit dem Kindergarten', 'image-carousel', '', true, false, false, 2),
    (1, 'Leon sext seine kleine Schwester', 'versextes bild zu beispiel', '', 'image-text', 'L', false, true, false, 1),
    (1, 'Raphaels saug geschichte', '', 'versexte schwänze in Raphaels haus', 'image-text', 'R',false, true, false, 3),
    (2, 'Leon im Kindergarten', 'abcdef', 'abcdef', 'image-text', 'Y', false, true, false, 2),
    (3, 'Leon im Kindergarten', 'abcdef', 'abcdef', 'table', "", false, false, true, 2),
    (4, 'Leon im Kindergarten', 'abcdef', 'abcdef', 'text-with-link', "url", false, false, false, 2);

Insert into imgvid_entry (entryID, imgvidID) Values (2,1), (3,2), (4,3), (5, 4),(4,5), (6,6);
Insert into gallery (name, entryID) VALUES ('Leon und Kinder', 2);
Insert into galleryEntry (structure, imgvidID, galleryID) VALUES (1, 1, 1), (2, 2, 1), (1, 2, 1);
Insert into table_e (entryID, text_l, text_m, text_r) VALUES (5, "leon gay", "am 19.09.2007 um 69 Uhr", "in der schule");