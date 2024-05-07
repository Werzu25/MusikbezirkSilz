<?php
include 'util.php';
include 'templates/static/header.php';
//include 'templates/dynamic/navbar.php';

if (isset($_REQUEST['sideId'])) {
  $sideId = $_REQUEST['sideId'];
} else {
  $sideId = 0;
  header('Location: index.php');
}

$entrys = customSelect("SELECT * FROM entry WHERE entry.subID = $sideId");

if(count($entrys) == 0){
  header('Location: index.php');
}
$entrys = $entrys[0];

$templateName = $entrys['TemplateName'];

switch ($templateName) {
  case 'image-left':
    $title = $entrys['title'];
    $content = $entrys['text_entry'];
    $pictureId = $entrys['imgvidID'];
    $picture = customSelect("SELECT * FROM imgvid WHERE imgvid.imgvidID = $pictureId")[0]['fileURL'];
    $time = /*$entrys['time']*/0;
    include 'templates/dynamic/image-text.php';
    renderImageLeft($title, $content, $picture, $time);
    break;

  case 'image-right':
    $title = $entrys['title'];
    $content = $entrys['text_entry'];
    $pictureId = $entrys['imgvidID'];
    $picture = customSelect("SELECT * FROM imgvid WHERE imgvid.imgvidID = $pictureId")[0]['fileURL'];
    $time = /*$entrys['time']*/0;
    include 'templates/dynamic/image-right.php';
    renderImageRight($title, $content, $picture, $time);
    break;
}

include 'template/footer.php';