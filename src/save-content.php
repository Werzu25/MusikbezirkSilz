<?php
$JsonContent = json_decode($_POST['content'], true);

$conn = new mysqli("localhost", "root", "", "mbs");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$articleId = $JsonContent['articleId'];
$pageContent = $JsonContent['content'];

foreach ($pageContent as $component) {
    $type = $component['type'];
    $content = json_encode($component['content']);
    if ($type == 'text') {
        $innerContent = json_encode($content['content']);
        insertComponent($content['cmpid'], $articleId, $type, $innerContent, $conn);
    } elseif ($type == 'container') {
        $innerContent = $content['content'];
        insertContainer($innerContent, $conn, $content['contId']);
        foreach ($innerContent as $innerComponent) {
            $innerType = $innerComponent['type'];
            $innerContent = json_encode($innerComponent['content']);
            insertComponent($innerComponent['cmpid'], $articleId, $innerType, $innerContent, $conn);
        }
    } else {
        insertComponent($content['cmpid'], $articleId, $type, $content, $conn);
    }
}

function insertComponent($cmpid, $articleId, $type, $content, $conn)
{
    $sql = $conn->prepare("INSERT INTO components (cmpid, articleId, type, content) VALUES (?, ?, ?, ?)");
    $sql->bind_param("siss", $cmpid, $articleId, $type, $content);
    if (!$sql->execute()) {
        die("Error executing query: " . $sql->error);
    }
}

function insertContainer($content, $conn,$contId)
{
    $sql = $conn->prepare("INSERT INTO containers ($contId,content) VALUES (?, ?)");
    $sql->bind_param("s", $contId, $content);
    if (!$sql->execute()) {
        die("Error executing query: " . $sql->error);
    }
}