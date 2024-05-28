<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link href="../node_modules/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
</head>

<body>

<?php
require_once 'util.php';
require_once 'templates/static/header.php';
require_once 'templates/dynamic/navbar.php';
require_once 'wrappers/mediaContentWrapper.php';
require_once 'templates/dynamic/imageText.php';
require_once 'templates/dynamic/imageCarousel.php';

if (isset($_REQUEST['sideId'])) {
  $smeID = $_REQUEST['sideId'];
} else {
  $smeID = 1;
}

$articles = customSelect("SELECT * FROM articles WHERE smeID = $smeID");

foreach ($articles as $article) {
  $components = customSelect("SELECT * FROM components WHERE artID =" . $article["artId"] . " ORDER BY displayOrder ASC");
  foreach ($components as $component) {
    $type = $component["type"];
    
    switch ($type) {
      case "title":
        echo '<h5 class="card-title text-danger">' . $component["content"] . '</h5>';
        break;
      case "subTitle":
        break;
      case "text":
        break;
      case "img":
        break;
      case "yt":
        break;
      case "fb":
        break;
      case "img":
        break;
    }
  }
}

require_once 'templates/static/footer.php';
?>
</body>

</html>
