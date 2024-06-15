<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = $_POST['task'];
    $_SESSION['todos'][] = $task;
    header('Location: create.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task - One Piece To-do App</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Create a New Task</h1>
    </header>
    <section class="todo-form">
        <form method="POST" action="">
            <input type="text" name="task" placeholder="New Task" required>
            <button type="submit">Add Task</button>
        </form>
    </section>
    <section class="back">
        <a href="index.php" class="back-button">Back to Features</a>
    </section>
    <footer>
        <p>&copy; 2024 One Piece To-do App By Ramirez</p>
    </footer>
</body>
</html>
