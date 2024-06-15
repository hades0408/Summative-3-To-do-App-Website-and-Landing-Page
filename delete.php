<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = $_POST['index'];
    array_splice($_SESSION['todos'], $index, 1);
    header('Location: delete.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Task - One Piece To-do App</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Delete an Existing Task</h1>
    </header>
    <section class="todo-list">
        <ul>
            <?php foreach ($_SESSION['todos'] as $index => $todo): ?>
                <li>
                    <?php echo htmlspecialchars($todo); ?>
                    <form method="POST" action="" class="delete-form">
                        <input type="hidden" name="index" value="<?php echo $index; ?>">
                        <button type="submit">Delete</button>
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
