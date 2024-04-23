<?php
function fetchTable(string $table)
{
  $conn = new mysqli('localhost', getenv('USERNAME'), getenv('PASSWORD'), 'database');

  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }

  $sql = "SELECT * FROM $table";
  $result = $conn->query($sql);

  $tableData = [];
  while ($row = $result->fetch_assoc()) {
    $tableData[] = $row;
  }

  $conn->close();
  return $tableData;
}

function customSelect(string $sql)
{
  $conn = new mysqli('localhost', getenv('USERNAME'), getenv('PASSWORD'), 'database');

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
