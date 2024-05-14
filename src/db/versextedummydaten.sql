Insert into template Values ('footer'), ('header'), ('image-carousel'), ('image-left'), ('image-right'), ('modal'), ('navbar');

# erstes ist tamplates, sinnvoll für wieder verwendung nachfolgendes sind beispiel einträge

Insert into mainMenuEntry (name, structure, icon) VALUES ('Leon X kleine Kinder', 1, 'mdi-human-male-child'), ('Raphi futanari', 2, 'mdi-thermostat');
Insert into subMenuEntry (name, structure, mainID) VALUES ('kleine Schwester',1 , 1),
    ('Kindergarten', 2, 1), ('Fette Dinger', 1, 2);

# mit php funktione getcwd();    
Insert into imgvid (fileURL) VALUES ('../assets/images/03_jugendcamp-mb-silz_online.jpg'), 
    ('../assets/images/Eva.jpg'), ('../assets/images/stacks-image-995e324.jpg'),
    ('../assets/images/stacks-image-dcf67d4'), ('../assets/images/f-ogo_RGB_HEX-58');
Insert into entry (structure, title, subtitle, text_entry, TemplateName, has_gallery, has_imgvid, is_table, subID) VALUES
    (1, 'Leon im Kindergarte', '', 'Hier sind bilder von leon beim letzen ausflug mit dem Kindergarten', 'image-carousel', true, false, false, 2),
    (1, 'Leon sext seine kleine Schwester', 'versextes bild zu beispiel', '', 'image-left', false, true, false, 1),
    (1, 'Raphaels saug geschichte', '', 'versexte schwänze in Raphaels haus', 'image-left', false, false, false, 3);
    

Insert into imgvid_entry (entryID, imgvidID) Values (2,1);
Insert into gallery (name, entryID) VALUES ('Leon und Kinder', 2);
Insert into galleryEntry (structure, imgvidID, galleryID) VALUES (1, 1, 1), (2, 2, 1), (1, 2, 1);