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
require_once 'util.php';
require_once 'templates/header.php';
require_once 'templates/navbar.php';
require_once 'components/title.php';
require_once 'components/text.php';
require_once 'components/table.php';
require_once 'components/carousel.php';
require_once 'components/link.php';

if (isset($_REQUEST['sideId'])) {
  $smeID = $_REQUEST['sideId'];
} else {
  $smeID = 1;
}

$articles = select("SELECT * FROM articles WHERE smeID = $smeID");

foreach ($articles as $article) {
  $components = select(
    'SELECT * FROM components WHERE artID =' . $article['artId'] . ' ORDER BY displayOrder ASC'
  );
  echo '<div class="m-4 border p-1">';
  foreach ($components as $component) {
    $type = $component['type'];

    switch ($type) {
      case 'title':
        renderTitle($component['content']);
        break;
      case 'text':
        renderText($component['content']);
        break;
      case 'carousel':
        $imgs = json_decode($component['content']);
        renderCarousel($imgs);
        break;
      case 'link':
        $link = json_decode($component['content'], true);
        renderLink($link['href'], $link['text']);
        break;
      case 'table':
        $table = json_decode($component['content'], true);
        renderTable($table['data']);
        break;
      // case 'mediaText':
      //   $mediaText = json_decode($component["content"], true);
      //   $orientation = $mediaText["orienation"];
      //   if ($orientation == 'R') {
      //     mediaRight($mediaText["content"], $mediaText["link"], $mediaText["type"]);
      //   } elseif ($orientation == 'L') {
      //     mediaLeft($mediaText["content"], $mediaText["link"], $mediaText["type"]);
      //   }
      //   break;
    }
  }
  echo '</div>';
}

require_once 'templates/footer.php';
?>
</body>

</html>
