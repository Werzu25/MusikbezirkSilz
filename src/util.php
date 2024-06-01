<?php
function select(string $sql)
{
  $conn = new mysqli('localhost', 'root', '', 'mbs');
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

function query($sql)
{
  $conn = new mysqli('localhost', 'root', '', 'mbs');
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }

  $conn->query($sql);

  $conn->close();
}

function renderArticle($components)
{
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
      case  'media':
        $media = json_decode($component['content'], true);
        renderMedia($media['type'], $media['content']);
        break;
    }
  }
  echo '</div>';
}
