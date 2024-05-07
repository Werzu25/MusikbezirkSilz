<link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<link href="../node_modules/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />

<?php
require_once 'util.php';
require_once 'templates/static/header.php';
require_once 'templates/dynamic/navbar.php';
$image_left =  require_once 'templates/dynamic/image-left.php';
$image_left.renderImageLeft("test","etst","../assets/images/logo.png","0");
require_once 'templates/static/footer.php';
?>
<!doctype html
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
</body>

</html>
<style></style>