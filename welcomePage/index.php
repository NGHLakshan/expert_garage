<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>

    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Link File CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sing.css">

     <!-- Link Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <nav>
            <img src="img/car-logo.png" class="logo" alt="">
            
            <div class="social">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </nav>
    </header>
    
    <div class="hero">

        <div class="text">
            <h4>Welcome to </h4>
            <h1>Expert <br> <span>Garage</span></h1>
            <p>Your Journey, Our Expertise</p>
            <a href="#" class="btn">Sign In</a>
        </div>
    </div>

    <section class="section">
        <div class="wrapper">
            <span class='icon-close'>
                <i class="bx bx-x"></i>
            </span>
            <div class="logreg-box">

                 <!-- login -->
                <div class="form-box login">
                    <div class="logreg-title">
                        <h2>Login</h2>
                        <p>Please loging to use the platform</p>
                    </div>

                    <form action="#">
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-envelope'></i></span>
                            <input type="email" required>
                            <label>Email</label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                            <input type="password" required>
                            <label>Password</label>
                        </div>

                        <div class="remember-forgot">
                            <label> <input type="checkbox">Remember Me</label>
                            <a href="#">Forget Password</a>
                        </div>

                        <button type="submit" class="btn">Login</button>

                        <div class="logreg-link">
                            <p>Don't have an Account?<a href="#"class="register-link">Register</a></p>
                        </div>
                    </form>
                </div>


                <!-- regester -->
                <div class="form-box register">
                    <div class="logreg-title">
                        <h2>Registration</h2>
                        <p>Please provide the following to verity your identity</p>
                    </div>

                    <form action="#">
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-user'></i></span>
                            <input type="text" required>
                            <label>Full Name</label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-envelope'></i></span>
                            <input type="email" required>
                            <label>Email</label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                            <input type="password" required>
                            <label>Password</label>
                        </div>

                        <div class="remember-forgot">
                            <label> <input type="checkbox">I agree to the terms & conditions</label>
                        </div>

                        <button type="submit" class="btn">Register</button>

                        <div class="logreg-link">
                            <p>Already have an Account?<a href="#"class="login-link">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>

            <div class="media-options">
                <a href="#">
                    <i class='bx bxl-google'></i>
                    <span>Login with Google</span>
                </a>
                <a href="#">
                    <i class='bx bxl-facebook'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>

        </div>

    </section>
    <script src="register.js"></script>

    <script>
        let heroBg = document.querySelector('.hero');

        setInterval(() => {
            heroBg.style.backgroundImage = "url(img/bg-light.jpg)"
            
            setTimeout(() => {
                heroBg.style.backgroundImage = "url(img/bg.jpg)"
            }, 1000);
        }, 2200);

        
        
    </script>
</body>
</html>