<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Залишити відгук</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Обробка форми відгука та збереження в файл
        $name = $_POST['name'];
        $comment = $_POST['comment'];

        $review = "$name: $comment\n";
        file_put_contents('reviews.txt', $review, FILE_APPEND);
    }
    ?>
    <header class="header">
        <!-- Ваша шапка -->
    </header>
    <main class="content">
        <h2>Залишити відгук</h2>
        <form action="coments_form.php" method="post">
            <label for="name">Ім'я:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="comment">Ваш відгук:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>
            <br>
            <button type="submit">Відправити відгук</button>
        </form>
    </main>
    <div>
</body>
</html>

