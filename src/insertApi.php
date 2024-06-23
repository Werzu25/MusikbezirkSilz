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
    deleteSubpageArticles($smeId); // Clean up old articles before inserting new ones
    foreach ($content as $container) {
        $artId = insertArticle($smeId);
        $displayOrder = 1; // Initialize display order
        foreach ($container['containerContent'] as $component) {
            insertComponent($artId, $component, $displayOrder);
            $displayOrder++;
        }
    }
}

// Delete all articles with components for a specific subpage entry
function deleteSubpageArticles($smeId)
{
    $articleIds = select("SELECT artId FROM articles WHERE smeId = $smeId");
    foreach ($articleIds as $article) {
        query('DELETE FROM components WHERE artId = ' . $article['artId']);
    }
    query("DELETE FROM articles WHERE smeId = $smeId");
}

// Insert a new article
function insertArticle($smeId)
{
    query("INSERT INTO articles (smeId) VALUES ($smeId)");
    return select("SELECT artId FROM articles WHERE smeId = $smeId ORDER BY artId DESC LIMIT 1")[0]['artId'];
}

// Insert a new component
function insertComponent($artId, $component, $displayOrder)
{
    $type = $component['type'];
    $content = json_encode($component['entryContent']);
    query("INSERT INTO components (artId, type, content, displayOrder) VALUES ($artId, '$type', '$content', $displayOrder)");
}
?>
