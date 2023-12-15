<?php

$connection = require_once '../connection/connection.php';

$id = $_POST['id'] ?? '';

if ($id) {
    $connection->update_note($id, $_POST);
} else {
    $connection->add_todo_task($_POST);
}

?>