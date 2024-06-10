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
    global $conn;
    
    $articleID = $data['articleID'];
    $content = $data['content'];

    $sql = "INSERT INTO articles (name, smeId) VALUES ('$articleID', NULL)";
    $conn->query($sql);
    $articleId = $conn->insert_id;

    foreach ($content as $component) {
        $type = $component['type'];
        $content = json_encode($component['content']);
        $sql = "INSERT INTO components (artId, type, content, displayOrder) VALUES ('$articleId', '$type', '$content', NULL)";
        $conn->query($sql);
    }

    echo "Daten drinn";
}
?>
