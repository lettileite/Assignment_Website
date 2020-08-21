<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="This is a website about Kaio">
        <meta name="keywords" content="Baby, newborn, toddler">
        <meta name="author" content="Leticia de Oliveira Leite">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>Kaio&Ben</title>
        <?php
            include 'external_libraries.html';
        ?>
    </head>
  
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Kaio&Ben</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="second.php">Kaio and Ben<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container my-4"> <!--Bootstrap image grid is a simple construction which allows
         to create a responsive layout for your images.-->
            
            <div class="row"> <!--Grid row - All the pictures and grids goes inside one row-->
                <div class="col-lg-4 col-md-12 mb-4"> <!--Grid column - This -->
                <img src="20190530_203518 (2).jpg" class="img-fluid mb-4" alt="">

                <img src="IMG-20190106-WA0058.jpg" class="img-fluid mb-4" alt=""
                data-wow-delay="0.3s">
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4">

                <img src="IMG-20190125-WA0036 (2).jpg" class="img-fluid mb-4" alt=""
                data-wow-delay="0.1s">

                <img src="IMG-20190111-WA0032.jpg" class="img-fluid mb-4" alt=""
                data-wow-delay="0.4s">

            </div>

</div>
    </body>
</html>