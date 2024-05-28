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
  $sideId = $_REQUEST['sideId'];
} else {
  $sideId = 1;
}

// TODO

require_once 'templates/static/footer.php';
?>
</body>

</html>
