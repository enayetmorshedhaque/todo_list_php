<?php

require_once('db_config.php');

class Connection
{

    public PDO $pdo;
    public function __construct()
    {
        global $host, $dbname, $username, $password;
        $this->pdo = new PDO("mysql:server=$host;dbname=$dbname", $username, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function get_categories()
    {
        $statement = $this->pdo->prepare("SELECT * FROM `categories`");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_used_categories()
    {
        $statement = $this->pdo->prepare("SELECT DISTINCT category_name FROM `task_categories`");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add_todo_task($todo_task)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Get form data
            $taskName = $_POST['task_name'];
            $taskDescription = $_POST['task_description'];
            $taskDueDate = $_POST['task_due_date'];
            $selectedCategories = isset($_POST['category']) ? $_POST['category'] : [];

            // Insert task details into the database
            $stmt = $this->pdo->prepare("INSERT INTO todo_task (title, description, due_date, create_date) VALUES (:title, :description, :task_due_date, :create_date)");

            $stmt->bindValue(':title', $taskName);
            $stmt->bindValue(':description', $taskDescription);
            $stmt->bindValue(':task_due_date', $taskDueDate);
            $stmt->bindValue(':create_date', date('Y-m-d'));
            $stmt->execute();

            // Get the ID of the inserted task
            $taskId = $this->pdo->lastInsertId();

            // Insert task categories into the task_categories table
            $stmt = $this->pdo->prepare("INSERT INTO task_categories (task_id, category_name) VALUES (:task_id, :category_name)");
            $stmt->bindValue(':task_id', $taskId);

            foreach ($selectedCategories as $categoryName) {
                $stmt->bindValue(':category_name', $categoryName);
                $stmt->execute();
            }
        }
        header('Location: ../../../index.html');
    }

    public function get_todo_list()
    {
        $statement = $this->pdo->prepare("SELECT t.id, t.title, t.description, t.create_date, tc.category_name
        FROM todo_task t
        JOIN task_categories tc ON t.id = tc.task_id");
        $statement->execute();

        $todo_task_data = array();
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $taskId = $row['id'];

            // Check if the task already exists in the result array
            if (!isset($todo_task_data[$taskId])) {
                $todo_task_data[$taskId] = array(
                    "id" => $row['id'],
                    "title" => $row['title'],
                    "description" => $row['description'],
                    "create_date" => $row['create_date'],
                    "category_name" => array(),
                );
            }

            // Add the category to the task
            $todo_task_data[$taskId]['category_name'][] = array("category_name" => $row['category_name']);
        }

        // Convert the associative array to indexed array
        $todo_task_data = array_values($todo_task_data);

        // Output the result
        return $todo_task_data;
    }

    public function remove_task()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];

            // Delete task from table
            $statement = $this->pdo->prepare("DELETE FROM todo_task WHERE id = :id");
            $statement->bindValue(':id', $id);
            $statement->execute();

            // Delete task category from table
            $statementCategory = $this->pdo->prepare("DELETE FROM task_categories WHERE task_id = :id");
            $statementCategory->bindValue(':id', $id);
            $statementCategory->execute();

            header("Location: ../../../index.html");
        }
    }
}

return new Connection();

?>