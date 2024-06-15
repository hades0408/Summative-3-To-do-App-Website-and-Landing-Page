<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Tasks - One Piece To-do App</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Include anime-style font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Read Existing Tasks</h1>
    </header>
    <section class="todo-list">
        <ul>
            <?php
            session_start();
            foreach ($_SESSION['todos'] as $index => $todo): ?>
                <li><?php echo htmlspecialchars($todo); ?></li>
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
