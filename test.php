<?php
// Replace these variables with your database credentials
$host = 'localhost';
$dbname = 'todo_app';
$user = 'root';
$pass = '';

try {
    // Establish a database connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch data from the database
    $stmt = $pdo->query("SELECT * FROM todo_task");
    $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Iterate through each student
    foreach ($tasks as $task) {
        $taskId = $task['id'];
        $taskName = $task['title'];

        echo "Task ID: $taskId, Task Name: $taskName<br>";

        // Fetch grades for the current student
        $stmt = $pdo->prepare("SELECT * FROM task_categories WHERE task_id = :id");
        $stmt->bindParam(':id', $taskId);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Iterate through each grade for the current student
        foreach ($categories as $category) {
            $categoryId = $category['id'];
            $categoryValue = $category['category_name'];

            echo "  Category ID: $categoryId, Category Value: $categoryValue<br>";
        }

        echo "<hr>";
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$pdo = null;
?>