<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is a website about Kaio">
    <meta name="keywords" content="Baby, newborn, toddler">
    <meta name="author" content="Leticia de Oliveira Leite">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Kaio's Pictures</title>
    <?php
    include 'external_libraries.html';
    ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Kaio's Pictures</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="second.php">Kaio's Pictures<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="column">
            <img src="img/.jpg">
            <img src=".jpg">
            <img src=".jpg">
            <img src=".jpg">
        </div>
        <div class="column">
            <img src=".jpg">
            <img src=".jpg">
        </div>
        <div class="column">
            <img src=".jpg">
            <img src=".jpg">
        </div>
    </div>
</body>

</html>