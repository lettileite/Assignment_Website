<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="This is a website about Kaio">
    <meta name="keywords" content="Baby, newborn, toddler">
    <meta name="author" content="Leticia de Oliveira Leite">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="js/script.js"></script>
    <title>Kaio's WebPage</title>
    <!-- http://localhost/assignment_Website/index.php -->

    <?php
    include 'external_libraries.html';
    ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Kaio's Web</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="second.php">Kaio and Ben</a>
                </li>
            </ul>
        </div>
    </nav>
    <header>
        <div class="header-photo">
            <img src="img/Books_Kaio_Leticia.jpg" alt="Kaio watching TV">
        </div>
    </header>
    <section id="aboutKaio">
        <!--section about Kaio. Content about him.-->
        <div class="container p-6 my-3 border">
            <h1>About Kaio</h1>
            <p>Hello! I am Kaio Spencer Leite. I was born in 06th Septmber, 2018.

                This page is all about Kaio

                When click in Kaio and Ben more pictures.
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
            <div class="embed-responsive embed-responsive-21by9">

                <iframe class="responsive-iframe" src="video/sample1.mp4" type="video/mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-medi; gyroescope; 
                    picture-in-picture" allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    <section id="contacts" class="jumbotron">

        <div class="container mt-3">
            <h1>
                Contact Me
            </h1>
            <p>
                Would you like to send me a message?
            </p>
            <form onsubmit="return printData()">
                Name: <input type="text" name="full_name" id="id_full_name">
                <br><br>
                Email: <input type="text" name="email" id="id_email">
                <script>
                    //if wit choose type = email javascript will validate for you
                </script>
                <br><br>
                Message: <input type="message" name="msgr" id="id_msgr" rows="10">
                <br><br>
                <input type="submit" value="Send data" />
            </form>
            <p id="demo"></p>
            <script>
                /*functions work as event handlers. Here the
                        onsubmit event is being handles by the below function*/

                function printData() {
                    var full_name = document.getElementById("id_full_name").value;
                    var msgr = document.getElementById("id_msgr").value;
                    var email = document.getElementById("id_email").value;

                    //if either fullname or password do not have a value,
                    //this alert dialogue will show up
                    if (!full_name || !msgr || !email) {
                        alert("Please fill your name and password and email correctly!");
                    }

                    //if both have a value, then it will display it in the paragraph
                    else {
                        //This 'if' will only execute if email is correct formated
                        //it calls a function which validates any email address
                        //passes as a parameter to it
                        if (validateEmail(email)) {
                            var message = "Your name is " + full_name + " and password is " + password + ".";
                            document.getElementById("demo").innerHTML = message;
                            alert(message);
                        }
                        //The alert dialogue will show up if email format is incorrect
                        else {
                            alert("Please ensure your email is correctly formated");
                        }
                    }
                    return false;
                }

                function validateEmail(email_address) {
                    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return re.test(String(email_address).toLowerCase());
                }
                //printData(); //normal function call
                //how do I called when the event has been triggerd
            </script>
        </div>

    </section>

    <footer>
        <!-- START Copyright -->
        <div class="footer-copyright">© 2020 Copyright:
            <a href="#"> KaiosWeb.com</a>
        </div>
        <!-- END Copyright -->
    </footer>
</body>

</html>