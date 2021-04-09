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
        
<body style="background-color:	#85C1E9;">
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
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: #C39482;
  padding: 10px;
}
.grid-item {
  background-color: #C39482;
  
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
</style>
</head>
<body>
  <div class="header">
        <div class="container">
          <a href="">
            <img src="logo.jpeg" alt="" width="200" height="200">
          </a>
            
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="sellBook.php">Sell Book</a></li>
                        <li><a href="logIN.html">Log In</a></li>
                        <li><a href="DevamLogin.html">Devam Log In</a></li>
                        
                        
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->
<div class="grid-container">
  <div class="grid-item">
  	<div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="AnuWesCO.html">
                        <img src="CCI.jpg" alt="Breakfast" width="100" height="105">
                        <html>

                        <h4>Antoinette Westphal COMAD </h4>
                        </a>
                    </div>
                </div>
  </div>
  <div class="grid-item">
  	<div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="Art&Sci.html">
                        <img src="CCI.jpg" alt="Breakfast" width="100" height="105">
                        <h4>Arts and Sciences</h4>
                        </a>
                    </div>
                </div>
  </div>
  <div class="grid-item">
  	<div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="LeBowColl.html">
                        <img src="CCI.jpg" alt="Breakfast" width="100" height="105">
                        <h4>Bennett S. LeBow Coll. of Bus.</h4>
                        </a>
                    </div>
                </div>
  </div>  
  <div class="grid-item">
  	<div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="CenterForCivic.html">
                        <img src="CCI.jpg" alt="Breakfast" width="100" height="105">
                        <h4>Center for Civic Engagement</h4>
                        </a>
                    </div>
                </div>
  </div>
  <div class="grid-item">
  	<div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="schOfEntrpreneurship.html">
                        <img src="CCI.jpg" alt="Breakfast" width="100" height="105">
                        <h4>Close Sch of Entrepreneurship</h4>
                        </a>
                    </div>
                </div>
  </div>
  <div class="grid-item">
  	<div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="collegeOfCCI.html">
                        <img src="CCI.jpg" alt="Breakfast" width="100" height="105">
                        <h4>Col of Computing & Informatics</h4>
                        </a>
                    </div>
                </div>
  </div>  
  <div class="grid-item">
  	<div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="collegeOfEngineering.html">
                        <img src="CCI.jpg" alt="Breakfast" width="100" height="105">
                        <h4>College of Engineering</h4>
                        </a>
                    </div>
                </div>
  </div>
  <div class="grid-item">
  	<div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="DornsifeSchOfPublicHealth.html">
                        <img src="CCI.jpg" alt="Breakfast" width="100" height="105">
                        <h4>Dornsife Sch of Public Health</h4>
                        </a>
                    </div>
                </div>
  </div>
  <div class="grid-item">
  	<div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="GoodwinCollOfProFStudies.html">
                        <img src="CCI.jpg" alt="Breakfast" width="100" height="105">
                        <h4>Goodwin Coll of Prof Studies</h4>
                        </a>
                    </div>
                </div>
  </div>
  <div class="grid-item">
  	<div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="miscellaneous.html">
                        <img src="CCI.jpg" alt="Breakfast" width="100" height="105">
                        <h4>Miscellaneous</h4>
                        </a>
                    </div>
                </div>
  </div> 
  <div class="grid-item">
  	<div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="nursing&HealthProfessions.html">
                        <img src="CCI.jpg" alt="Breakfast" width="100" height="105">
                        <h4>Nursing & Health Professions</h4>
                        </a>
                    </div>
                </div>
  </div> 
  <div class="grid-item">
  	<div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="pennoniHonorsCollege.html">
                        <img src="CCI.jpg" alt="Breakfast" width="100" height="105">
                        <h4>Pennoni Honors College</h4>
                        </a>
                    </div>
                </div>
  </div> 
  <div class="grid-item">
  	<div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="SchOfBiomedEngr,Sci&Hlth.html">
                        <img src="CCI.jpg" alt="Breakfast" width="100" height="105">
                        <h4>Sch.of Biomed Engr,Sci & Hlth</h4>
                        </a>
                    </div>
                </div>
  </div> 
  <div class="grid-item">
  	<div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="schoolOfEducation.html">
                        <img src="CCI.jpg" alt="Breakfast" width="100" height="105">
                        <h4>School of Education</h4>
                        </a>
                    </div>
                </div>
  </div> 
</div>

</body>
</html>

