
<!DOCTYPE html>
<html>
  <head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chatbox</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.1/ckeditor5.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="popup.css">
    
  </head>
  <body>
    <header class="header">
        <img src="car-logo.png" id="logo">

        <nav class="navbar">
            <a href="http://localhost/Expert%20Garage/mainPage/ExpertGarage.php">Home</a>
            <a href="http://localhost/Expert%20Garage/mainPage/ExpertGarage.php">About us</a>
            <a href="http://localhost/Expert%20Garage/mainPage/ExpertGarage.php">Services</a>
            <a href="http://localhost/Expert%20Garage/mainPage/ExpertGarage.php">Expert</a>
            <a href="http://localhost/Expert%20Garage/mainPage/ExpertGarage.php">Feedback</a>
            
        </nav>
    </header>
    
    

    <div class="background-image">
    
        <section class="order" id="order">
            
        
            <form action="order.php" method="post">

                <div class="inputBox">
                    <div class="input">
                        <span>Your Name</span>
                        <input type="text" placeholder="Enter Your Name"  name="C_name" required="required"/>
                    </div>
                    <div class="input">
                        <span>Your Namber</span>
                        <input type="text" placeholder="Enter Your Number" name="Tel_number" required="required" />
                    </div>
                </div>
                <div class="inputBox">
                    <div class="input">
                        <span>Email Address</span>
                        <input type="text" placeholder="Enter your Email" name="C_Oder" />
                    </div>
                    <div class="input">
                        <span>Service Catagary</span>
                        <select name="dropdown">
                            <option value="option1">Vehicle Purchase and Selection</option>
                            <option value="option2">Vehicle Valuation and Appraisa</option>
                            <option value="option3">Vehicle Maintenance and Repair</option>
                            <option value="option3">Vehicle law</option>
                            
                          </select>
                    </div>
                </div>
                <div class="inputBox">
                    <div class="input">
                        <span></span>
                        <select name="dropdown">
                            <option value="option1">Physical</option>
                            <option value="option2">Virtual</option>
                          </select>>
                    </div>
                    <div class="input">
                        <span>date and time</span>
                        <input type="datetime-local" name="Date"/>
                    </div>
                </div>
                <div class="inputBox">
                    <div class="input">
                        <span>your address</span>
                        <textarea
                                name="Address"
                                placeholder="Enter Your Address"
                                id=""
                                cols="30"
                                rows="10"
                        ></textarea>
                    </div>
                    <div class="input">
                        <span>your message</span>
                        <textarea
                                name="Message"
                                placeholder="Enter Your Message"
                                id=""
                                cols="30"
                                rows="10"
                        ></textarea>
                    </div>
                </div>

                <div class="center">
                    <button class="btn" id="open-popup">send</button>
                   </div>
                   <div class="popup" id="popup">
                    <div class="overlay"></div>
                    <div class="popup-content">
                        <h2>Receive you message</h2>
                        <p>We have received your message and we are always working 
                            to provide a service that suits your needs.
                           
                          <p><b> We will give you a phone call for more information.Please check your phone and email.</b></p> 
                        </p>
                        <div class="controls">
                        <button class="close-btn">Close</button>    
                    </div>
                   </div>
                   </div>
        
            </div>
            
            </form>
<script src="popup.js"></script>
      </section>
    </div>

  </body>
</html>
