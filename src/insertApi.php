<?php
include 'util.php';

$json = file_get_contents('php://input');
if (!empty($json)) {
    $data = json_decode($json, true);
    
    insertData($data);
} else {
    echo "Keine Daten erhalten.";
}

function insertData($data) {
    $smmeId = $data['articleID'];
    $articles = json_decode($data['container'], true);
    $components = json_decode($articles['content'], true);

    foreach ($articles as $article) {
        query("INSERT INTO articles (smmeId, articleId) VALUES ($smmeId," . $article["articleId"] . ")");
    }
    foreach ($components as $component) {
        query("INSERT INTO components (articleId, type, content) VALUES (" . $component["artId"] . $component["type"] . ", " . $component["content"] . ")");
    }   
}
?>