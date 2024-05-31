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
