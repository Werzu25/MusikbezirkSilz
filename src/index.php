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
require_once 'templates/static/header.php';
require_once 'templates/dynamic/navbar.php';
require_once 'templates/dynamic/imageCarousel.php';
require_once 'templates/dynamic/table.php';
require_once 'templates/dynamic/mediaText.php';

if (isset($_REQUEST['sideId'])) {
  $smeID = $_REQUEST['sideId'];
} else {
  $smeID = 1;
}

$articles = customSelect("SELECT * FROM articles WHERE smeID = $smeID");

foreach ($articles as $article) {
  $components = customSelect(
    'SELECT * FROM components WHERE artID =' . $article['artId'] . ' ORDER BY displayOrder ASC'
  );
  echo '<div class="m-4 border p-1">';
  foreach ($components as $component) {
    $type = $component['type'];

    switch ($type) {
      case 'title':
        echo '<h5 class="card-title text-danger text-decoration-underline">' . $component['content'] . '</h5>';
        break;
      case 'text':
        echo $component['content'];
        break;
      case 'carousel':
        $imgs = json_decode($component['content']);
        renderImageCarousel($imgs);
        break;
      case 'link':
        $link = json_decode($component['content'], true);
        echo '<p><a class="link-opacity-100" href=' .
          $link['href'] .
          '>' .
          $link['text'] .
          '<a/></p>';
        break;
      case 'table':
        $table = json_decode($component['content'], true);
        renderTable($table['titles'], $table['data']);
        break;
      case 'mediaText':
        $mediaText = json_decode($component['content'], true);
        $orientation = $mediaText['orienation'];
        if ($orientation == 'R') {
          mediaRight($mediaText['content'], $mediaText['link'], $mediaText['type']);
        } elseif ($orientation == 'L') {
          mediaLeft($mediaText['content'], $mediaText['link'], $mediaText['type']);
        }
        break;
    }
  }
  echo '</div>';
}

require_once 'templates/static/footer.php';
?>
</body>

</html>
