<?php
include 'util.php';
include 'templates/header.php';
//include 'templates/navbar.php';

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

echo $templateName;


switch ($templateName) {
  case 'image-left':
    $title = $entrys['title'];
    $content = $entrys['text_entry'];
    $picture = $entrys['picture'];
    $time = /*$entrys['time']*/0;
    include 'templates/image-left.php';

    renderImageLeft($title, $content, $picture, $time);
    break;
  case 'image-right':
    $title = $entrys['title'];
    $content = $entrys['content'];
    $picture = $entrys['picture'];
    $time = /*$entrys['time']*/0;
    include 'templates/image-right.php';

    renderImageRight($title, $content, $picture, $time);
    break;
}

include 'template/footer.php';