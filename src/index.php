<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Musikbezirk Silz</title>
    <link rel="icon" type="image/x-icon" href="..w/assets/images/logo.png">
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link href="../node_modules/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
</head>

<body data-bs-theme="dark">

<?php
require_once 'util.php'; // Einbindung von Hilfsfunktionen
require_once 'templates/header.php'; // Einbindung des Header-Templates
require_once 'templates/navbar.php'; // Einbindung der Navigationsleiste
require_once 'components/text.php'; // Einbindung der Textkomponente
require_once 'components/table.php'; // Einbindung der Tabellenkomponente
require_once 'components/carousel.php'; // Einbindung der Karussellkomponente
require_once 'components/link.php'; // Einbindung der Linkkomponente
require_once 'components/media.php'; // Einbindung der Medienkomponente

if (isset($_REQUEST['artId'])) {
  $artId = $_REQUEST['artId']; // Abrufen der Artikel-ID aus der Anfrage
} else {
  $artId = 1; // Standard-Artikel-ID, falls keine in der Anfrage angegeben wurde
}

$components = select("SELECT * FROM components WHERE artId = $artId ORDER BY displayOrder ASC"); // Abrufen der Komponenten aus der Datenbank
renderArticle($components); // Rendern der Artikel mit den abgerufenen Komponenten

require_once 'templates/footer.php'; // Einbindung des Footer-Templates
?>

</body>

</html>
