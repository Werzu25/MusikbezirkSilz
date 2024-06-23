<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Musikbezirk Silz</title>
  <link rel="icon" type="image/x-icon" href="/MusikbezirkSilz/assets/images/logo.png">
  <link href="/MusikbezirkSilz/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="/MusikbezirkSilz/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <link href="/MusikbezirkSilz/node_modules/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="/MusikbezirkSilz/assets/images/favicon.ico">
</head>
<body data-bs-theme="dark">

<?php
require_once 'util.php';
require_once 'templates/header.php';
require_once 'templates/navbar.php';
require_once 'components/text.php';
require_once 'components/table.php';
require_once 'components/carousel.php';
require_once 'components/link.php';
require_once 'components/media.php';

$smeId = 1; // Default to Home if not found

if (isset($_GET['subMenuName'])) {
  $subMenuName = urldecode(htmlspecialchars($_GET['subMenuName'], ENT_QUOTES, 'UTF-8'));
  $subMenuEntry = select('SELECT smeId FROM subMenuEntry WHERE name = "' . $subMenuName . '"');
  if (!empty($subMenuEntry)) {
    $smeId = $subMenuEntry[0]['smeId'];
  }
}

$articles = select("SELECT * FROM articles WHERE smeId = $smeId");
foreach ($articles as $article) {
  $components = select(
    'SELECT * FROM components WHERE artId =' .
      (int) $article['artId'] .
      ' ORDER BY displayOrder ASC'
  );
  echo '<div class="border rounded m-2 p-1 bg-body-tertiary mb-3 mt-3">';
  foreach ($components as $component) {
    render($component);
  }
  echo '</div>';
}

require_once 'templates/footer.php';
?>
</body>
<style>
    body {
        width: 100vw;
        padding: 0;
        margin: 0;
    }
</style>

</html>
