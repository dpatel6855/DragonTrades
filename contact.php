<?php
session_start();
if($_SESSION["loggedin"] != true){
    echo 'not logged in';
    header("Location: DevamLogin.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--
Victory Template
http://www.templatemo.com/tm-507-victory
-->

        <title>Dragon Trades</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <html>
        
<body style="background-color:	#D8D8D8;">
  
</body>
</html>

        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <script src="main.js"></script>
        <script src="script.js"></script>
        <script src="myscripts.js"></script>

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js">
        </script>
        <link rel="stylesheet" href="style.css">
    </head>

<body>
    <div class="header">
        <div class="container">
            
            <img src="logo1.JPG" alt="" width="100" height="100">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-togglle" data-toggle="collapse" data-target="#main-nav">
                        <a href="index.php" class="navbar-brand scroll-top">Dragon Trades</a>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="sellBook.php">Sell Book</a></li>  <?php
                        if (array_key_exists('Logout', $_POST)) {
                            logout();
                        }

                        if ($_SESSION["loggedin"] = true) {

                            echo  '<li><a href="logout.php">Log Out</a></li>';
                        } else {
                            # code...
                            echo  '<li><a href="DevamLogin.php">Log In</a></li>';
                        }
                        ?>
                        <li><a href="checkout.php">Checkout</a></li>  
                    
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-heading">
                        <h2>Message</h2>
                    </div>
                    <form id="contact" action="db.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required>
                                </fieldset>
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required>
                                </fieldset>
                                <fieldset>
                                    <input name="phone" type="text" class="form-control" id="phone" placeholder="Your phone..." required>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required></textarea>
                                </fieldset>
                                <fieldset>
                                    
							<!-- <input type="submit" class="button" name="register" value="Sign Up"> -->
                                    <button type="submit" id="form-submit" name="savecontact" class="btn">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="section-heading contact-info">
                       <h1>About Us</h1>
      <h2> "If a BOOK is worth reading, it is WORTH buying."</h2>
  
  </h3>Thank you for choosing our website.</h3>
<h4>
  We work together to help and make life easier for Drexel Dragons by providing this website which will help everyone to find books they need easily. We are different than other website  because we don't only help to buy cheap books but you can also communicate with other people, make new friends etc.
    </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="map">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="map">                    
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3058.319144793345!2d-75.1921327845712!3d39.95661679141733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c64e4847c029%3A0xef32de4043c30f0!2sDrexel%20University!5e0!3m2!1sen!2sus!4v1606835464561!5m2!1sen!2sus" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


<footer>
 <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Copyright &copy; 2020 Dragon Trades</p>
                </div>
                <div class="col-md-4">
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="http://www.facebook.com/templatemo" target="_parent"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>Designed by <em>Drexel Students</em></p>
                </div>
            </div>
        </div>
    </footer>


    


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>