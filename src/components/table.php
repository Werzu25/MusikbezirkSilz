<?php

function renderTable($table)
{
  echo ' <div class="container m-0 border-bottom-0">
<table class="table table-bordered border-black text-center">
  <thead>';
  for ($i = 0; $i < sizeof($table); $i++) {
    echo '<th scope="col" style="width: 20%;">' . $table[0][$i] . '</th>';
  }
  echo '</thead>
  <tbody>
   <tr>';
  for ($i = 1; $i < sizeof($table); $i++) {
    foreach ($table[$i] as $value) {
      echo '<td style="width: 20%;">' . $value . '</td>';
    }
    echo '</tr>';
  }
  echo '
  </tbody>
</table>
</div>';
}
