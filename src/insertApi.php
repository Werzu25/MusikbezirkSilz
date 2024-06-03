<?php
require_once 'util.php';
/*
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if ($data === null) {
    echo json_encode(["status" => "error", "message" => "Invalid JSON"]);
    exit();
}

$smeId = $data['smeId'];
$content = $data['content'];

$artId = query("INSERT INTO articles (smeId) VALUES ($smeId)");

foreach ($content as $item) {
    if (isset($item['entries'])) {
        $entries = $item['entries'];
        $type = $entries['type'];
        $content = $entries['content'];
        $cssClasses = $entries['cssClasses'];
        $style = $entries['style'];
        $displayOrder = $entries['displayOrder'];
        //Leon i hass die 
        query("INSERT INTO entries (artId, type, content, cssClasses, style, displayOrder) VALUES ($artId, '$type', '$content', '$cssClasses', '$style', $displayOrder)");
    }

    if (isset($item['media'])) {
        $media = $item['media'];
        $type = $media['type'];
        $cssClasses = $media['cssClasses'];
        $style = $media['style'];
        $location = $media['location'];
        
        query("INSERT INTO media (artId, type, cssClasses, style, location) VALUES ($artId, '$type', '$cssClasses', '$style', '$location')");
    }
}

echo json_encode(["status" => "success", "message" => "Daten erfolgreich eingefügt"]);
*/
// Still waiting for JSON example data LEON I BRUACH SIE
?>
