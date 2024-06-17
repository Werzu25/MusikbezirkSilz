<?php
// Funktion zum Ausführen einer SELECT-Abfrage und Rückgabe der Ergebnisse als assoziatives Array
function select(string $sql)
{
  // Verbindung zur Datenbank herstellen
  $conn = new mysqli('localhost', 'root', '', 'mbs');
  // Bei Verbindungsfehler abbrechen und Fehlermeldung ausgeben
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }

  // SQL-Abfrage ausführen
  $result = $conn->query($sql);

  // Daten in ein Array speichern
  $tableData = [];
  while ($row = $result->fetch_assoc()) {
    $tableData[] = $row;
  }

  // Verbindung schließen und Ergebnis zurückgeben
  $conn->close();
  return $tableData;
}

// Funktion zum Ausführen einer allgemeinen SQL-Abfrage (z.B. INSERT, UPDATE, DELETE)
function query($sql)
{
  // Verbindung zur Datenbank herstellen
  $conn = new mysqli('localhost', 'root', '', 'mbs');
  // Bei Verbindungsfehler abbrechen und Fehlermeldung ausgeben
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }

  // SQL-Abfrage ausführen
  $conn->query($sql);

  // Verbindung schließen
  $conn->close();
}

function render($component)
{
  $type = $component['type'];

  echo '<div id="' . $component['cmpId'] . '">';
  switch ($type) {
    case 'text':
      $text = json_decode($component['content'], true);
      renderText($text);
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
      $table = json_decode($component['content']);
      renderTable($table);
      break;
    case 'media':
      $media = json_decode($component['content'], true);
      renderMedia($media['type'], $media['content']);
      break;
  }
  echo '</div>';
}
