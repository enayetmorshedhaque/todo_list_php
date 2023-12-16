<?php

// Replace these variables with your actual database credentials
$host = "localhost";
$dbname = "todo_app";
$username = "root";
$password = "";

// Establish a database connection using PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

try {
    $sql = "SELECT task_id, category_name FROM task_categories";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Fetch all rows as an associative array
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $taskData = array();
    foreach ($rows as $row) {
        $task_id = $row['task_id'];
        $category_name = $row['category_name'];
        $taskData[$task_id][] = $category_name;
    }

    // Display the data in separate cards
    foreach ($taskData as $task_id => $categories) {
        echo "<div class='card'>";
        echo "<h2>Task ID: $task_id</h2>";

        foreach ($categories as $category) {
            echo "<p>$category</p>";
        }

        echo "</div>";
    }
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}

?>