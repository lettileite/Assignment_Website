<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="This is a website about Kaio">
    <meta name="keywords" content="Baby, newborn, toddler">
    <meta name="author" content="Leticia de Oliveira Leite">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="js/script.js"></script>
    <title>Kaio's WebPage</title>
    <!-- http://localhost/assignment_Website/index.php -->

    <?php
    include 'external_libraries.html';
    ?>
</head>

<body>
    <header>
        <?php include 'header.html'
        ?>
    </header>
    <header>

    </header>
    <section id="aboutKaio">
        <!--section about Kaio. Content about him.-->
        <div class="container p-6 my-3 border">
            <h1>About Kaio</h1>
            <p>Hello! I am Kaio Spencer Leite. I was born in 06th Septmber, 2018.
                <br>
                This page is all about Kaio.
                <br>
                When click in Kaio and Ben more pictures.
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Repudiandae nemo nisi eos alias aliquam mollitia commodi est,
                necessitatibus cupiditate, natus maxime minus optio odio voluptatum recusandae.
                Dolor ipsam iusto tempora!
                
            </p>
        </div>
    </section>
    <section id="video">
        <div class="container mt-5">
            <h1>Kaio's Video</h1>
            <div class="embed-responsive embed-responsive-4by3">

                <iframe class="responsive-iframe" src="video/sample1.mp4" type="video/mp4" frameborder="0" allow="accelerometer; encrypted-medi; gyroescope; 
                    picture-in-picture" allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>
    <br><br>
    <section id="contact-us" class="jumbotron">
        <div class="container mt-3">
            <h2>
                Contact Me
            </h2>
            <p>
                Would you like to send me a message?
            </p>
            <div class="container">
                <div class="contact-us-form">
                    <div class="contact-form">
                        <form id="contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name" id="fname">
                                <small>Error message</small>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name" id="lname">
                                <small>Error message</small>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Contact No." id="contactnum">
                                <small>Error message</small>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" id="email">
                                <small>Error message</small>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message" id="message"></textarea>
                                <small>Error message</small>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>

    <footer class="page-footer font-small light pt-2">
        <?php include 'footer.html';
        ?>
        <script src="js/contactUsValidation.js"></script>
    </footer>

</body>

</html>