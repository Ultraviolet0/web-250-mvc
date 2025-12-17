<?php
// src/Views/salamanders/index.php
//
// The View is responsible ONLY for displaying data as HTML.
// It receives the $salamanders variable from the controller.
// It should NOT talk directly to the database.
//
// We use htmlspecialchars() to prevent XSS (cross-site scripting) attacks,
// and nl2br() to keep line breaks in our text.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Salamanders</title>
</head>

<body>
    <h1>Salamanders</h1>
    <a href=".">Back to home</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Habitat</th>
                <th>Description</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($salamanders as $salamander): ?>
                <tr>
                    <td><?= htmlspecialchars($salamander['name']) ?></td>
                    <td><?= nl2br(htmlspecialchars($salamander['habitat'])) ?></td>
                    <td><?= nl2br(htmlspecialchars($salamander['description'])) ?></td>
                    <td><a href="<?= APP_BASE ?>/salamanders/show?id=<?= urlencode((string)$salamander['id']) ?>">Show</a></td>
                    <td><a href="<?= APP_BASE ?>/salamanders/edit?id=<?= urlencode((string)$salamander['id']) ?>">Edit</a></td>
                    <td><a href="<?= APP_BASE ?>/salamanders/delete?id=<?= urlencode((string)$salamander['id']) ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
