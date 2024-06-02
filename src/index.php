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
require_once 'components/text.php';
require_once 'components/table.php';
require_once 'components/carousel.php';
require_once 'components/link.php';
require_once 'components/media.php';

if (isset($_REQUEST['artId'])) {
  $artId = $_REQUEST['artId'];
} else {
  $artId = 1;
}

$components = select("SELECT * FROM components WHERE artId = $artId ORDER BY displayOrder ASC");
renderArticle($components);

require_once 'templates/footer.php';
?>
</body>

</html>
