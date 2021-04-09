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

    <link rel="stylesheet" href="css/cart.css">

    <link
        href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js">
    </script>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="header">
        <div class="container">

            <img src="logo1.JPG" alt="Dragon Trade" width="1000" height="1000">
            <nav class="navbar navbar-inverse" role="navigation">
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

                        <li><a href="sellBook.php">Sell Book </a></li>  <?php
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

                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>


    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Shopping Cart</h1>

                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="row">
            <!-- <h1>Shopping Cart</h1> -->

            <div class="shopping-cart">

                <div class="column-labels">
                    <label class="product-details">Product</label>
                    <label class="product-price">Type</label>
                    <label class="product-price">Price</label>
                    <label class="product-quantity">Quantity</label>
                    <label class="product-removal">Remove</label>
                    <label class="product-line-price">Total</label>
                  </div>
                <div id="cart-items">

                </div>
                <div class="totals">
                    <div class="totals-item">
                      <label>Grand Total </label>
                      <div class="totals-value" id="cart-subtotal">0.00</div>
                    </div>
                   
                    
                  </div>

                <button class="checkout" id="clear-all">Clear</button>

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





    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/cart.js"></script>


</body>

</html>