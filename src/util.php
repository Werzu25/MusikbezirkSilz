<?php
function select(string $sql)
{
  //$conn = new mysqli('localhost', getenv('USERNAME'), getenv('PASSWORD'), 'MusikbezirkSilz');
  $conn = new mysqli('localhost', 'root', '', 'mbs'); //TODO auf ENV vars umstellen
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }

  $result = $conn->query($sql);

  $tableData = [];
  while ($row = $result->fetch_assoc()) {
    $tableData[] = $row;
  }

  $conn->close();
  return $tableData;
}

function insert($sql)
{
  $conn = new mysqli('localhost', 'root', '', 'mbs'); //TODO auf ENV vars umstellen
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }

  $conn->query($sql);

  $conn->close();
}

function renderArticle($components) {
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
