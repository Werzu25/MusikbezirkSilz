<?php
include 'util.php';
// insertApi.php

header('Content-Type: application/json');

// Get the raw POST data
$postData = file_get_contents("php://input");

// Decode the JSON data
$data = json_decode($postData, true);

if ($data !== null) {
    echo json_encode($data);
    insertData($data);
} else {
    echo json_encode(['error' => 'Invalid JSON data received']);
}

function insertData($data)
{
    $smeId = $data['smeId'];
    $content = $data['content'];
    foreach ($content as $container) {
        $artId = insertArticle($smeId);
        foreach ($container['containerContent'] as $component) {
            insertComponent($artId, $component);
        }
    }
}

// alle artikel mit componenten löschen
function deleteSubpageArticles($smeID)
{
    $articleids = select("SELECT artId FROM components WHERE artId = $smeID");
    foreach ($articleids as $articleid) {
        query('DELETE FROM components WHERE artId = ' . $articleid['artId']);
    }
    query("DELETE FROM articles WHERE smeId = $smeID");
}

function insertArticle($smeId)
{
    query("INSERT INTO articles (smeId) VALUES ($smeId)");
    return select("SELECT artId FROM articles WHERE smeId = $smeId ORDER BY artId DESC LIMIT 1")[0]['artId'];
}

function insertComponent($artId, $component)
{
    $type = $component['type'];
    $content = json_encode($component['entryContent'] ?? []);
    query("INSERT INTO components (artId, type, content) VALUES ($artId, '$type', '$content')");
}
?>