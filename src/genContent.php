<?php
include 'util.php';
include 'templates/header.php';
include 'templates/navbar.php';

if (isset($_REQUEST['sideId'])) {
  $sideId = $_REQUEST['sideId'];
} else {
  $sideId = 0;
}

$entrys = customSelect("SELECT * FROM entry WHERE entry.subID = $sideId");

$templateName = $entrys['TemplateName'];

switch ($templateName) {
  case 'template1':
    // renderTemplate1(TODO PARAMENTER EINFÜGEN);
    break;
  case 'template2':
    // renderTemplate2(TODO PARAMENTER EINFÜGEN);
    break;
  case 'template3':
    // renderTemplate3(TODO PARAMENTER EINFÜGEN);
    break;
}

include 'template/footer.php';
