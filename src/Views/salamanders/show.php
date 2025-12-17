<?php
// src/Views/salamanders/show.php
//
// Displays a single salamander passed in via $salamander.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Salamander Details</title>
</head>

<body>
    <h1><?= htmlspecialchars($salamander['name']) ?></h1>

    <p>
        <strong>Habitat:</strong><br>
        <?= nl2br(htmlspecialchars($salamander['habitat'])) ?>
    </p>

    <p>
        <strong>Description:</strong><br>
        <?= nl2br(htmlspecialchars($salamander['description'])) ?>
    </p>

    <p><a href="<?= APP_BASE ?>/salamanders">Back to list</a></p>

</body>

</html>
