<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    if ($data && isset($data["content"])) {
        $content = $data["content"];

        // Guarda el contenido en un archivo (puedes generar un nombre de archivo único)
        file_put_contents("saved_content.txt", $content);

        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false]);
    }
}
?>

