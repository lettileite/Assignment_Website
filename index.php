
<!DOCTYPE html> 
<html>
    <head>
            <meta charset="utf-8">
            <meta name="description" content="Bike Trips I want to do">
            <meta name="keywords" content="Bike, trip, Biketour">
            <meta name="author" content="Leticia de Oliveira Leite">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Bike Trips I want to do</title>
        
        <?php
            include 'external_libraries.html';
        ?>
       
        
    </head>
    <body>
        <header>
             
        </header>
        <section id="content"> 
            <div class="container">
                <h1>Content</h1>
                <div class="row">
                    <div class="col-6">
                        <p>
                            hello! This is Leticia
                        </p>
                    </div>
                    <div class="col-6">
                        <img src="img/download.jpeg" alt="bike">
                    </div>
                </div>
            </div>
            
        </section>

        <section id="video">
            <div class="container">
                <h1>My Video</h1>
                <div class="embed-responsive embed-responsive-16by9">
                    
                    <iframe class="responsive-iframe" src="video/sample1.mp4"type="video/mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-medi; gyroescope; picture-in-picture" allowfullscreen>
                    </iframe>
                    
                
                </div>
                
            </div>

        </section>

        <section id="contacts">
            
            <div class="container">
                <h1>
                    Contact Me
                </h1>
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