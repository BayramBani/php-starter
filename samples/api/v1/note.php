<?php
try {
    require __DIR__ . './../core/DataBase.php';
    $conn = Database::connectMySql();
    $json = [];
    switch ($app->method) {

        case 'GET':
            if ($app->request_id != null) {
                $stmt = $conn->prepare("SELECT * FROM notes WHERE id = :id");
                $stmt->bindParam(':id', $app->request_id);
            } else {
                $stmt = $conn->prepare("SELECT * FROM notes");
            }
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $id = intval($row["id"]);
                $title = $row["title"];
                $content = $row["content"];
                $tmp = array(
                    'id' => $id,
                    'title' => $title,
                    'content' => $content
                );
                $json[] = $tmp;
            }
            unset($stmt);
            unset($conn);
            break;

        case 'POST':
            $json = array('method' => 'POST');
            break;

        default:
            $json = array('error' => 'undefined method !');
            break;
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
