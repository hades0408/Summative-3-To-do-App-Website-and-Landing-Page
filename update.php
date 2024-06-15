<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = $_POST['index'];
    $task = $_POST['task'];
    $_SESSION['todos'][$index] = $task;
    header('Location: update.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Task - One Piece To-do App</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Update an Existing Task</h1>
    </header>
    <section class="todo-list">
        <ul>
            <?php foreach ($_SESSION['todos'] as $index => $todo): ?>
                <li>
                    <form method="POST" action="" class="update-form">
                        <input type="text" name="task" value="<?php echo htmlspecialchars($todo); ?>" required>
                        <input type="hidden" name="index" value="<?php echo $index; ?>">
                        <button type="submit">Update</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="back">
        <a href="index.php" class="back-button">Back to Features</a>
    </section>
    <footer>
        <p>&copy; 2024 One Piece To-do App By Ramirez</p>
    </footer>
</body>
</html>
