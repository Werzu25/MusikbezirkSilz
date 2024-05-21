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
include 'templates/dynamic/imageText.php';

if (isset($_REQUEST['sideId'])) {
  $sideId = $_REQUEST['sideId'];
} else {
  $sideId = 1;
}
$amountOfEntrys = customSelect("SELECT COUNT(*) FROM entry WHERE entry.subID = $sideId")[0][
  'COUNT(*)'
];
$AllEntry = customSelect("SELECT * FROM entry WHERE entry.subID = $sideId");
echo $amountOfEntrys; // DEBUG
for ($i = 0; $i < $amountOfEntrys; $i++) {
  $templateName = $AllEntry[$i]['TemplateName'];
  $entrys = $AllEntry[$i];
  switch ($templateName) {
    case 'image-text':
      $entryInfo = $entrys['templateinfo'];
      if ($entryInfo == 'R') {
        $entryId = $entrys['entryID'];
        $pictureId = customSelect(
          "SELECT * FROM imgvid_entry WHERE imgvid_entry.entryID = $entryId"
        )[0]['imgvidID'];
        $picture = customSelect("SELECT * FROM imgvid WHERE imgvid.imgvidID = $pictureId")[0][
          'fileURL'
        ];

        $title = $entrys['title'];
        $content = $entrys['text_entry'];
        $time = $entrys['crdate'];
        mediaLeft($title, $content, $picture, $time, MediaType::Image);
        break;
      } elseif ($entryInfo == 'L') {
        $entryId = $entrys['entryID'];
        $pictureId = customSelect(
          "SELECT * FROM imgvid_entry WHERE imgvid_entry.entryID = $entryId"
        )[0]['imgvidID'];
        $picture = customSelect("SELECT * FROM imgvid WHERE imgvid.imgvidID = $pictureId")[0][
          'fileURL'
        ];

        $title = $entrys['title'];
        $content = $entrys['text_entry'];
        $time = $entrys['crdate'];
        mediaRight($title, $content, $picture, $time, MediaType::Image);
        break;
      } else {
        echo 'Template Info not in L or R';
      }
  }
}

require_once 'templates/static/footer.php';
?>
</body>

</html>
<style></style>