
<!DOCTYPE html> 
<html>
    <head>
            <meta charset="utf-8">
            <meta name="description" content="This is a website about Kaio">
            <meta name="keywords" content="Baby, newborn, toddler">
            <meta name="author" content="Leticia de Oliveira Leite">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Kaio na Web</title>
        
        <?php
            include 'external_libraries.html';
        ?>
         
        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Kaio and Ben</a>
                    </li>
                </ul>
            </div>
        </nav>
        <header>
            <section id="content"> 
                <div class="container">
                    <h1>Kaio's Pictures</h1>
                    <div class="row">
                        <div class="col-6">
                            <p>
                                Hello! I am Kaio Spencer Leite. I was born in  .
                            </p>
                        </div>
                        <div class="col-6">
                            <img src="img/watchingTV.jpg" alt="Kaio watching TV">
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <section id="content"> 
                <div class="container">
                    <h1>Kaio's Pictures</h1>
                    <div class="row">
                        <div class="col-6">
                            <p>
                                Hello! I am Kaio Spencer Leite. I was born in  .
                            </p>
                        </div>
                        <div class="col-6">
                            <img src="img/watchingTV.jpg" alt="Kaio watching TV">
                        </div>
                    </div>
                </div>
            </section>      

        <section id="video">
            <div class="container">
                <h1>Kaio's Video</h1>
                <div class="embed-responsive embed-responsive-16by9">
                    
                    <iframe class="responsive-iframe" src="video/sample1.mp4"type="video/mp4"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-medi; gyroescope; 
                    picture-in-picture" allowfullscreen>
                    </iframe>
                    
                
                </div>
                
            </div>

        </section>

        <section id="contacts">
                
                <div class="container">
                    <h1>
                        Contact Me
                    </h1>
                    <p>
                        Would you like to send me a message?
                    </p>
                    <form action="#">
                        <div class="form-group">
                            <label for="Name"> Name </label>
                                <input type="text" class="form-control" name="contact-name" placeholder="Enter your name">
                                </input>
                        </div>
                        <div class="form-group">
                            <label for="Email"> Email </label>
                                <input type="email" class="form-control" name="contact-email" placeholder="Enter your email">
                                </input>
                        </div>
                        <div class="form-group">
                            <label for="PhoneNumber"> Phone Number </label>
                                <input type="number" class="form-control" name="contact-phonenumber" placeholder="Enter your phone number">
                                </input>
                        </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </section>
            
        <footer>

        </footer>
    </body>

</html>