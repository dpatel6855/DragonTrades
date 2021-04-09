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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script src="js/main.js"></script>

    <link
        href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js">
    </script>
    <link rel="stylesheet" href="style.css">
  <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto;
            /* background-color: #C39482; */
            padding: 10px;
            /*background-image: url("img5.jpg");*/

            margin-top: 200px;
        }

        .grid-item {
            /* background-color: #C39482; */
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 20px;
            font-size: 30px;
            text-align: center;
        }

        .navbar {

            /* background-image: url("img4.jpg"); */
        }

        p {
            color: black;
        }

        a:hover {
            background-color: #D8D8D8;
            color: black;
        }

        .previous {
            background-color: #D8D8D8;
            color: black;
        }

        .next {
            background-color: #D8D8D8;
            color: black;
        }

        /* mystle */


        body {
            margin: 0;
        }

        .navbar {
            overflow: hidden;
            background-color: #C39482;
            ;
            position: fixed;
            top: 0;
            width: 100%;
        }


        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            background: #C39482;
            ;
            color: D8D8D8;
        }

        .main {
            padding: 16px;
            margin-top: 30px;
            height: 1500px;
            /* Used in this example to enable scrolling */
        }
    </style>
</head>

<body>



    <div class="navbar">
        <div class="header">
            <div class="container">

                <nav class="navbar navbar-inverse" role="navigation">
                    <img src="logo1.JPG" alt="Dragon Trade" width="100" height="100">
                    <div class="navbar-header">
                        <button type="button" id="nav-togglle">
                            <a href="index.php" class="navbar-brand scroll-top">Dragon Trades</a>


                        </button>
                    </div>
                    <!--/.navbar-header-->
                    <div id="main-nav" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="contact.php">Contact Us</a></li>

                            <li><a href="sellBook.php">Sell Book </a></li>
                            <li><a href="DevamLogin.php">Log In</a></li>
                            <li><a href="checkout.php">Checkout</a></li>

                        </ul>
                    </div>
                    <!--/.navbar-collapse-->
                    <section class="page-heading">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1>College of Computing & Informatics </h1>

                                </div>
                            </div>
                        </div>
                        <div id='message' style="display: none;">
                            <div class="alert alert-success">
                                <strong>Success!</strong>Your Item has been added too the cart.
                            </div>
                        </div>
                    </section>
                </nav>
                <!--/.navbar-->

            </div>
            <!--/.container-->
        </div>


    </div>

    <!--/.header-->


    <div class="main" style="margin-top: 100px;">

    <section class="services">
        <div class="container">
            <div class="row">

            <div class="grid-container">
                <div class="grid-item">
                    <div class="service-item">
                        <img src="CCI.jpg" alt="Books" width="100" height="105">

                        <h4 id="coc1-title">College of Computing & Informatics Book 1</h4>
                        <p>The book description is the pitch to the reader about why they should buy your book. </p>
                        <button style="height:20px;width:200px" id="coc1-button">Buy <i style="font-size:12px"
                                class="fa">&#xf07a;</i></button>
                        <button style="height:20px;width:200px" id="coc1-button-rent">Rent<i style="font-size:12px"
                                class="fa">&#xf07a;</i></button>
                        <a href="sellBook.php"><button style="height:20px;width:200px">Sell  Book<i style="font-size:12px"
                                class="fa">&#xf07a;</i></button></a>

                    </div>
                </div>
                <div class="grid-item">
                    <div class="service-item">
                        <img src="CCI.jpg" alt="Books" width="100" height="105">

                        <h4 id="coc2-title">College of Computing & Informatics Book 2</h4>
                        <p>The book description is the pitch to the reader about why they should buy your book. </p>
                        <button style="height:20px;width:200px" id="coc2-button">Buy <i style="font-size:12px"
                                class="fa">&#xf07a;</i></button>
                        <button style="height:20px;width:200px" id="coc2-button-rent">Rent<i style="font-size:12px"
                                class="fa">&#xf07a;</i></button>
                        <a href="sellBook.php"><button style="height:20px;width:200px">Sell  Book<i style="font-size:12px"
                                class="fa">&#xf07a;</i></button></a>

                    </div>
                </div>
                <div class="grid-item">
                    <div class="service-item">
                        <img src="CCI.jpg" alt="Books" width="100" height="105">

                        <h4 id="coc3-title">College of Computing & Informatics Book 3</h4>
                        <p>The book description is the pitch to the reader about why they should buy your book. </p>
                        <button style="height:20px;width:200px" id="coc3-button">Buy <i style="font-size:12px"
                                class="fa">&#xf07a;</i></button>
                        <button style="height:20px;width:200px" id="coc3-button-rent">Rent<i style="font-size:12px"
                                class="fa">&#xf07a;</i></button>
                        <a href="sellBook.php"><button style="height:20px;width:200px">Sell  Book<i style="font-size:12px"
                                class="fa">&#xf07a;</i></button></a>

                    </div>
                </div>
                <div class="grid-item">
                    <div class="service-item">
                        <img src="CCI.jpg" alt="Books" width="100" height="105">

                        <h4 id="coc4-title">College of Computing & Informatics Book 4</h4>
                        <p>The book description is the pitch to the reader about why they should buy your book. </p>
                        <button style="height:20px;width:200px" id="coc4-button">Buy <i style="font-size:12px"
                                class="fa">&#xf07a;</i></button>
                        <button style="height:20px;width:200px" id="coc4-button-rent">Rent<i style="font-size:12px"
                                class="fa">&#xf07a;</i></button>
                        <a href="sellBook.php"><button style="height:20px;width:200px">Sell  Book<i style="font-size:12px"
                                class="fa">&#xf07a;</i></button></a>

                    </div>
                </div>
                <div class="grid-item">
                    <div class="service-item">
                        <img src="CCI.jpg" alt="Books" width="100" height="105">

                        <h4 id="coc5-title">College of Computing & Informatics Book 5</h4>
                        <p>The book description is the pitch to the reader about why they should buy your book. </p>
                        <button style="height:20px;width:200px" id="coc5-button">Buy <i style="font-size:12px"
                                class="fa">&#xf07a;</i></button>
                        <button style="height:20px;width:200px" id="coc5-button-rent">Rent<i style="font-size:12px"
                                class="fa">&#xf07a;</i></button>
                        <a href="sellBook.php"><button style="height:20px;width:200px">Sell  Book<i style="font-size:12px"
                                class="fa">&#xf07a;</i></button></a>

                    </div>
                </div>
                <div class="grid-item">
                    <div class="service-item">
                        <img src="CCI.jpg" alt="Books" width="100" height="105">

                        <h4 id="coc6-title">College of Computing & Informatics Book 6</h4>
                        <p>The book description is the pitch to the reader about why they should buy your book. </p>
                        <button style="height:20px;width:200px" id="coc6-button">Buy <i style="font-size:12px"
                                class="fa">&#xf07a;</i></button>
                        <button style="height:20px;width:200px" id="coc6-button-rent">Rent<i style="font-size:12px"
                                class="fa">&#xf07a;</i></button>
                        <a href="sellBook.php"><button style="height:20px;width:200px">Sell  Book<i style="font-size:12px"
                                class="fa">&#xf07a;</i></button></a>

                    </div>
                </div>
                <div class="grid-item">
                    <div class="service-item">
                        <img src="CCI.jpg" alt="Books" width="100" height="105">

                        <h4 id="coc7-title">College of Computing & Informatics Book 7</h4>
                        <p>The book description is the pitch to the reader about why they should buy your book. </p>
                        <button style="height:20px;width:200px" id="coc7-button">Buy <i style="font-size:12px"
                                class="fa">&#xf07a;</i></button>
                        <button style="height:20px;width:200px" id="coc7-button-rent">Rent<i style="font-size:12px"
                                class="fa">&#xf07a;</i></button>
                        <a href="sellBook.php"><button style="height:20px;width:200px">Sell  Book<i style="font-size:12px"
                                class="fa">&#xf07a;</i></button></a>

                    </div>
                </div>
                <div class="grid-item">
                    <div class="service-item">
                        <img src="CCI.jpg" alt="Books" width="100" height="105">

                        <h4 id="coc8-title">College of Computing & Informatics Book 8</h4>
                        <p>The book description is the pitch to the reader about why they should buy your book. </p>
                        <button style="height:20px;width:200px" id="coc8-button">Buy <i style="font-size:12px"
                                class="fa">&#xf07a;</i></button>
                        <button style="height:20px;width:200px" id="coc8-button-rent">Rent<i style="font-size:12px"
                                class="fa">&#xf07a;</i></button>
                        <a href="sellBook.php"><button style="height:20px;width:200px">Sell  Book<i style="font-size:12px"
                                class="fa">&#xf07a;</i></button></a>

                    </div>
                </div>
                <div class="grid-item">
                    <div class="service-item">
                        <img src="CCI.jpg" alt="Books" width="100" height="105">

                        <h4 id="coc9-title">College of Computing & Informatics Book 9</h4>
                        <p>The book description is the pitch to the reader about why they should buy your book. </p>
                        <button style="height:20px;width:200px" id="coc9-button">Buy <i style="font-size:12px"
                                class="fa">&#xf07a;</i></button>
                        <button style="height:20px;width:200px" id="coc9-button-rent">Rent<i style="font-size:12px"
                                class="fa">&#xf07a;</i></button>
                        <a href="sellBook.php"><button style="height:20px;width:200px">Sell  Book<i style="font-size:12px"
                                class="fa">&#xf07a;</i></button></a>

                    </div>
                </div>
                <div>
                    <a href="#" class="previous">&laquo; Previous</a>
                    <a href="#" class="next">Next &raquo;</a>

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
                        <li><a rel="nofollow" href="http://www.facebook.com/templatemo" target="_parent"><i
                                    class="fa fa-facebook"></i></a></li>
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





    <script type="text/javascript">
        $(document).ready(function () {
            // navigation click actions 
            $('.scroll-link').on('click', function (event) {
                event.preventDefault();
                var sectionID = $(this).attr("data-id");
                scrollToID('#' + sectionID, 750);
            });
            // scroll to top action
            $('.scroll-top').on('click', function (event) {
                event.preventDefault();
                $('html, body').animate({ scrollTop: 0 }, 'slow');
            });
            // mobile nav toggle
            $('#nav-toggle').on('click', function (event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        // scroll function
        function scrollToID(id, speed) {
            var offSet = 0;
            var targetOffset = $(id).offset().top - offSet;
            var mainNav = $('#main-nav');
            $('html,body').animate({ scrollTop: targetOffset }, speed);
            if (mainNav.hasClass("open")) {
                mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                mainNav.removeClass("open");
            }
        }
        if (typeof console === "undefined") {
            console = {
                log: function () { }
            };
        }
    </script>
</div>
</body>

</html>