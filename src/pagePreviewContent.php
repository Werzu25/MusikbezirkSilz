<?php
require_once './util.php';

$smeId = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode($_POST["smeId"], true);
    if (isset($data['smeId'])) {
        $smeId = $data['smeId'];
    }
}

$articles = select("SELECT * FROM articles WHERE smeId = $smeId");
foreach ($articles as $article) {
    $components = select(
        'SELECT * FROM components WHERE artId =' .
        $article['artId'] .
        ' ORDER BY displayOrder ASC'
    );
    echo '<div class="previewContainer loadedContainer">';
    foreach ($components as $component) {
        render($component);
    }
    echo '</div>';
}
?>