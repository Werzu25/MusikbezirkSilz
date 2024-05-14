
<?php


if (!function_exists('renderTable')) {
    function renderTable($tabletitle,$tableData)
    {
        echo ' <div class="container m-5 border-bottom-0">
<table class="table table-bordered border-black text-center">
  <thead>';
        for ($i = 0; $i < sizeof($tabletitle); $i++) {
            echo '<th scope="col" style="width: 20%;">' . $tabletitle[$i] . '</th>';
        }
        echo '</thead>
  <tbody>
   <tr>';
        for ($i = 0; $i < sizeof($tableData); $i++) {

            foreach ($tableData[$i] as $value) {
                echo '<td style="width: 20%;">' . $value . '</td>';
            }
            echo '</tr>';

        }
        echo '
  </tbody>
</table>
</div>';
    }
}



?>