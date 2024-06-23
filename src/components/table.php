<?php

function renderTable($table)
{
  echo ' <div class="container m-0 border-bottom-0 w-100">
    <table class="table table-bordered border-black text-center">
      <thead>';
  foreach ($table[0] as $title) {
    echo '<th scope="col" style="width: 20%;">' .
      htmlspecialchars($title, ENT_QUOTES, 'UTF-8') .
      '</th>';
  }
  echo '</thead>
      <tbody>
       <tr>';
  for ($i = 1; $i < sizeof($table); $i++) {
    foreach ($table[$i] as $value) {
      echo '<td style="width: 20%;">' . htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . '</td>';
    }
    echo '</tr>';
  }
  echo '
      </tbody>
    </table>
    </div>';
}
?>
