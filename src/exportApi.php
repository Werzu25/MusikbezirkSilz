<?php
/*require_once 'util.php';

header('Content-Type: application/json');

$smeId = isset($_GET['smeId']) ? (int)$_GET['smeId'] : null;

if ($smeId === null) {
    echo json_encode(["status" => "error", "message" => "smeId is required"]);
    exit();
}

$articles = query("SELECT * FROM articles WHERE smeId = $smeId");

$content = [];
foreach ($articles as $article) {
    $artId = $article['artId'];

    $entries = query("SELECT * FROM entries WHERE artId = $artId");

    $entryData = [];
    foreach ($entries as $entry) {
        $entryData[] = [
            "type" => $entry['type'],
            "content" => $entry['content'],
            "cssClasses" => $entry['cssClasses'],
            "style" => $entry['style'],
        ];
    }

    $media = query("SELECT * FROM media WHERE artId = $artId");

    $mediaData = [];
    foreach ($media as $mediaItem) {
        $mediaData[] = [
            "type" => $mediaItem['type'],
            "cssClasses" => $mediaItem['cssClasses'],
            "style" => $mediaItem['style'],
            "location" => $mediaItem['location']
        ];
    }

    $content[] = [
        "entries" => $entryData,
        "media" => $mediaData
    ];
}

$response = [
    "smeId" => $smeId,
    "content" => $content
];

echo json_encode($response);*/

//LEON I BRAUCH DIE EXAMPLE JSON
//Ohne die kann i nix machen
?>
