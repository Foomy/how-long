<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?= $title ?></title>

    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>
    <script src="js/bootstrap/bootstrap.js"></script>
    <script src="js/modules/utilities.js"></script>
    <script src="js/modules/main-form.js"></script>
</head>
<body>
    <header class="container">
        <div id="header-content" class="row m-2">
            <div class="col-2">
                <img src="https://placecats.com/150/150" alt="fancy logo" class="logo">
            </div>
            <div class="titles col-10">
                <h1><?= $title ?></h1>
                <?php if (isset($subTitle)): ?>
                <h2><?= $subTitle ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <nav id="main"></nav>

    <div id="content" class="container p-2">