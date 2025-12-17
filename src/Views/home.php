<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Home - WEB-250 MVC</title>
</head>

<body>
  <h1>Welcome to the Salamander MVC Project</h1>

  <p>This is the default landing page, rendered through <code>HomeController::index()</code>.</p>

  <p>This project demonstrates a simplified MVC workflow:</p>

  <ul>
    <li><strong>Routing</strong> (public/index.php)</li>
    <li><strong>Controllers</strong> (src/Controllers/...)</li>
    <li><strong>Views</strong> (src/Views/...)</li>
  </ul>

  <p>
  <ul>
    <li><a href="<?= APP_BASE ?>/salamanders">Salamanders page</a></li>
    <li><a href="<?= APP_BASE ?>/about">About page</a></li>
    <li><a href="<?= APP_BASE ?>/contact">Contact page</a></li>
  </ul>
  </p>
</body>

</html>
