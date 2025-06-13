<?php
include_once '../conn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="Sevcice.css">
    <link rel="stylesheet" href="footer.css">
    <title>Service</title>
</head>
<body>
    <header class="header">
        <img src="img/car-logo.png" id="logo">

        <nav class="navbar">
            <a href="http://localhost/Expert%20Garage/mainPage/ExpertGarage.php">Home</a>
            <a href="http://localhost/Expert%20Garage/mainPage/ExpertGarage.php">About us</a>
            <a href="http://localhost/Expert%20Garage/mainPage/ExpertGarage.php">Services</a>
            <a href="http://localhost/Expert%20Garage/mainPage/ExpertGarage.php">Expert</a>
            <a href="http://localhost/Expert%20Garage/mainPage/ExpertGarage.php">Feedback</a>
            
        </nav>
    </header>


    <section class="section1">
        <div class="about-us">
        <div class="main-img">
            <img src="img/service.png" alt="" srcset="">
        </div>

        <div class="text">
            <h2>Vehicle Purchase and Selection</h2>
            <hr>
            <p>Expert Advice: Providing guidance on the best vehicle for specific needs, considering factors like budget, lifestyle, and intended use.
                <br>
                <br>
                Market Analysis: Researching and recommending suitable vehicles based on current market trends, features, and pricing.
                <br>
                <br>
                Negotiation Assistance: Helping clients negotiate the best deals with dealerships or private sellers.
                
            </p>

            <div class="last-text">
                <div class="text1">
                    <h3>500+</h3>
                    <h5>Services given</h5>
                </div>

                <div class="text2">
                    <h3>20k</h3>
                    <h5>Happy Clients</h5>
                </div>
            </div>
        </div>
        </div>
    </section>



    <section class="home">
        <div class="home-img">
            <img src="img/e1.png" alt="">
        </div>
        <div class="home-content">
            <h1>Hi, It's <span>John</span></h1>
            <h3 class="typing-text">I'm a <span></span></h3>
            <p>Experience: 10 years in fleet management and vehicle procurement 
                <br>Skills: Fleet optimization, vehicle selection, cost analysis, and negotiation</p>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <a href="http://localhost/Expert%20Garage/chatbox/chatBox.php" class="btn">Hire Now</a>
        </div>
    </section>

    <section class="home">
        <div class="home-img">
            <img src="img/e2.png" alt="">
        </div>
        <div class="home-content">
            <h1>Hi, It's <span>Sarah</span></h1>
            <h3 class="typing-text">I'm a <span></span></h3>
            <p>10 years in vehicle procurement and fleet management 
                <br>Skills: Vehicle selection, cost analysis, and fleet optimization</p>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <a href="http://localhost/Expert%20Garage/chatbox/chatBox.php" class="btn">Hire Now</a>
        </div>
    </section>

    <section class="home">
        <div class="home-img">
            <img src="img/e3.png" alt="">
        </div>
        <div class="home-content">
            <h1>Hi, It's <span>David</span></h1>
            <h3 class="typing-text">I'm a <span></span></h3>
            <p>15 years in automotive industry and vehicle consulting 
                <br>Skills: Vehicle inspection, warranty review, and maintenance planning</p>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <a href="http://localhost/Expert%20Garage/chatbox/chatBox.php" class="btn">Hire Now</a>
        </div>
    </section>

     <!-- footer -->
     <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Expert Garage pvt Ltd ,Badulla</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>057-5523156</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>expertgarage@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="img/car-logo.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                elit,Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Expert</a></li>
                                <li><a href="#">Rivews</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2024, All Right Reserved <a href="">Hasindu</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>