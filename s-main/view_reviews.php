<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Перегляд відгуків</title>
</head>
<body>
    <header class="header">
        <!-- Ваша шапка -->
    </header>
    <main class="content">
        <?php
        $reviews = file('reviews.txt');
        foreach ($reviews as $review) {
            echo "<p>$review</p>";
        }
        ?>
    </main>
    <div>
</body>
</html>
