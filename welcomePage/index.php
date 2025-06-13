<?php
include_once '../conn.php';
session_start();

// Handle registration
if (isset($_POST['register'])) {
    $full_name = mysqli_real_escape_string($connect, $_POST['full_name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    
    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Insert into database
    $query = "INSERT INTO users (full_name, email, password) 
              VALUES ('$full_name', '$email', '$hashed_password')";
    
    if (mysqli_query($connect, $query)) {
        $message = "Registration successful! Please login.";
        $message_class = "success-message";
    } else {
        $message = "Error: " . mysqli_error($connect);
        $message_class = "error-message";
    }
}

// Handle login
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($connect, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        
        if (password_verify($password, $user['password'])) {
            // Login successful
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['full_name'] = $user['full_name'];
            $_SESSION['email'] = $user['email'];
            
            // Redirect to dashboard or home page
            header("Location: http://localhost/Expert%20Garage/mainPage/ExpertGarage.php");
            exit();
        } else {
            $login_error = "Invalid email or password";
        }
    } else {
        $login_error = "Invalid email or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expert Garage - Car Service & Maintenance</title>
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Link Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: #f5f5f5;
            overflow-x: hidden;
        }
        
        header {
                position: fixed;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 10%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
            backdrop-filter: blur(10px);
        }
        
        .logo {
            height: 50px;

        }

        .social {
        margin-left: 1000px; 
        margin-bottom: -5px;
      
        }

        
        .social a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background: transparent;
            border: 2px solid #b74b4b;
            border-radius: 50%;
            font-size: 20px;
            color: #b74b4b;
            text-decoration: none;
            margin: 0 8px;
            transition: 0.5s;
margin-right: 5px;
        }
        
        .social a:hover {
            background: #ff6b00;
            color: #fff;
            box-shadow: 0 0 15px #ff6b00;
        }
        
        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80') no-repeat center center/cover;
            display: flex;
            align-items: center;
            padding: 0 10%;
            overflow: hidden;
            transition: background-image 5s ease;
        }
        
        .text {
            max-width: 600px;
            color: #fff;
            z-index: 1;
        }
        
        .text h4 {
            font-size: 28px;
            font-weight: 500;
            margin-bottom: 15px;
            color: #ff6b00;
        }
        
        .text h1 {
            font-size: 60px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 15px;
        }
        
        .text span {
            color: #ff6b00;
        }
        
        .text p {
            font-size: 18px;
            margin-bottom: 30px;
            max-width: 500px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 35px;
            background: #b74b4b;
            color: #fff;
            border-radius: 30px;
            font-size: 18px;
            font-weight: 500;
            text-decoration: none;
            transition: 0.3s;
            border: 2px solid #b74b4b;
            cursor: pointer;
        }
        
        .btn:hover {
            background: transparent;
            color: #ff6b00;
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(255, 107, 0, 0.4);
        }
        
        .section {
            position: fixed;
            top: 0;
            right: -100%;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            transition: 0.5s;
            backdrop-filter: blur(10px);
        }
        
        .section.active {
            right: 0;
        }
        
        .wrapper {
            position: relative;
            width: 400px;
            background: #fff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }
        
        .icon-close {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 24px;
            color: #333;
            cursor: pointer;
            transition: 0.3s;
        }
        
        .icon-close:hover {
            color: #b74b4b;
            transform: rotate(90deg);
        }
        
        .logreg-box {
            width: 100%;
        }
        
        .form-box {
            display: none;
        }
        
        .form-box.active {
            display: block;
        }
        
        .logreg-title {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .logreg-title h2 {
            font-size: 32px;
            color: #333;
        }
        
        .logreg-title p {
            font-size: 16px;
            color: #777;
            margin-top: 10px;
        }
        
        .input-box {
            position: relative;
            width: 100%;
            height: 50px;
            margin: 25px 0;
            border-bottom: 2px solid #ddd;
        }
        
        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            font-size: 16px;
            padding: 0 35px 0 5px;
            color: #333;
        }
        
        .input-box label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            font-size: 16px;
            color: #777;
            pointer-events: none;
            transition: 0.3s;
        }
        
        .input-box input:focus ~ label,
        .input-box input:valid ~ label {
            top: -5px;
            font-size: 14px;
            color:#b74b4b;
        }
        
        .input-box .icon {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
            color: #777;
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            font-size: 14px;
        }
        
        .remember-forgot label {
            display: flex;
            align-items: center;
            color: #777;
            cursor: pointer;
        }
        
        .remember-forgot label input {
            margin-right: 5px;
            accent-color:#b74b4b;
        }
        
        .remember-forgot a {
            color: #b74b4b;
            text-decoration: none;
        }
        
        .remember-forgot a:hover {
            text-decoration: underline;
        }
        
        .logreg-link {
            text-align: center;
            margin-top: 25px;
            font-size: 14px;
            color: #777;
        }
        
        .logreg-link a {
            color: #b74b4b;
            text-decoration: none;
            font-weight: 600;
            margin-left: 5px;
        }
        
        .logreg-link a:hover {
            text-decoration: underline;
        }
        
        .media-options {
            margin-top: 25px;
        }
        
        .media-options a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 50px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 15px;
            color: #333;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
        }
        
        .media-options a:hover {
            background: #f5f5f5;
        }
        
        .media-options a i {
            font-size: 24px;
            margin-right: 10px;
        }
        
        .media-options a:first-child i {
            color: #db4437;
        }
        
        .media-options a:last-child i {
            color: #4267B2;
        }
        
        .error-message {
            color: #ff3860;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            background: #ffeef0;
            text-align: center;
        }
        
        .success-message {
            color: #23d160;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            background: #effaf0;
            text-align: center;
        }
        
        .user-info {
            position: absolute;
            top: 20px;
            right: 20px;
            color: white;
            font-size: 16px;
            display: none;
        }
        
        .user-info.active {
            display: block;
        }
        
        .user-info span {
            color: #ff6b00;
            font-weight: 600;
        }
        
        .logout-btn {
            background: transparent;
            border: none;
            color: #ff6b00;
            cursor: pointer;
            font-weight: 600;
            margin-left: 10px;
        }
        
        @media (max-width: 768px) {
            .text h1 {
                font-size: 40px;
            }
            
            .wrapper {
                width: 90%;
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <img src="img/car-logo.png" class="logo" alt="Expert Garage Logo">
            <div class="social">
                <div class = "icon">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
                
            </div>
        </nav>
    </header>
    
    <div class="hero">
        <div class="text">
            <h4>Welcome to </h4>
            <h1>Expert <br> <span>Garage</span></h1>
            <p>Your Journey, Our Expertise - Premium car service and maintenance</p>
            <a href="#" class="btn open-login">Sign In</a>
        </div>
        
        <div class="user-info <?php echo isset($_SESSION['user_id']) ? 'active' : ''; ?>">
            Welcome, <span><?php echo isset($_SESSION['full_name']) ? $_SESSION['full_name'] : ''; ?></span>
            <button class="logout-btn" onclick="logout()">Logout</button>
        </div>
    </div>

    <section class="section">
        <div class="wrapper">
            <span class='icon-close'>
                <i class="bx bx-x"></i>
            </span>
            <div class="logreg-box">
                <!-- login -->
                <div class="form-box login active">
                    <div class="logreg-title">
                        <h2>Login</h2>
                        <p>Please login to use the platform</p>
                    </div>
                    
                    <?php if (isset($login_error)): ?>
                        <div class="error-message"><?= $login_error ?></div>
                    <?php endif; ?>

                    <form action="" method="POST">
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-envelope'></i></span>
                            <input type="email" name="email" required>
                            <label>Email</label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                            <input type="password" name="password" required>
                            <label>Password</label>
                        </div>

                        <div class="remember-forgot">
                            <label> <input type="checkbox">Remember Me</label>
                            <a href="#">Forget Password</a>
                        </div>

                        <button type="submit" name="login" class="btn">Login</button>

                        <div class="logreg-link">
                            <p>Don't have an Account?<a href="#" class="register-link">  Register</a></p>
                        </div>
                    </form>
                </div>

                <!-- register -->
                <div class="form-box register">
                    <div class="logreg-title">
                        <h2>Registration</h2>
                        <p>Please provide the following to verify your identity</p>
                    </div>
                    
                    <?php if (isset($message)): ?>
                        <div class="<?= $message_class ?>"><?= $message ?></div>
                    <?php endif; ?>

                    <form action="" method="POST">
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-user'></i></span>
                            <input type="text" name="full_name" required>
                            <label>Full Name</label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-envelope'></i></span>
                            <input type="email" name="email" required>
                            <label>Email</label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                            <input type="password" name="password" required>
                            <label>Password</label>
                        </div>

                        <div class="remember-forgot">
                            <label> <input type="checkbox" required>I agree to the terms & conditions</label>
                        </div>

                        <button type="submit" name="register" class="btn">Register</button>

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
    
    <!-- Link Icons -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    
    <script>
        // Hero background animation
        let heroBg = document.querySelector('.hero');
        let backgrounds = [
            'url(img/bg.jpg)',
            'url(img/bg-light.jpg)',
            'url(https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80)'
        ];
        
        let currentBg = 0;
        
        setInterval(() => {
            heroBg.style.backgroundImage = backgrounds[currentBg];
            currentBg = (currentBg + 1) % backgrounds.length;
        }, 3000);
        
        // Login/Register Form Toggle
        const section = document.querySelector('.section');
        const openLoginBtn = document.querySelector('.open-login');
        const iconClose = document.querySelector('.icon-close');
        const loginForm = document.querySelector('.form-box.login');
        const registerForm = document.querySelector('.form-box.register');
        const loginLink = document.querySelector('.login-link');
        const registerLink = document.querySelector('.register-link');
        
        openLoginBtn.addEventListener('click', (e) => {
            e.preventDefault();
            section.classList.add('active');
            loginForm.classList.add('active');
            registerForm.classList.remove('active');
        });
        
        iconClose.addEventListener('click', () => {
            section.classList.remove('active');
        });
        
        registerLink.addEventListener('click', (e) => {
            e.preventDefault();
            loginForm.classList.remove('active');
            registerForm.classList.add('active');
        });
        
        loginLink.addEventListener('click', (e) => {
            e.preventDefault();
            registerForm.classList.remove('active');
            loginForm.classList.add('active');
        });
        
        // Auto open register form if there's a message
        <?php if (isset($message)): ?>
            document.addEventListener('DOMContentLoaded', function() {
                section.classList.add('active');
                loginForm.classList.remove('active');
                registerForm.classList.add('active');
            });
        <?php endif; ?>
        
        // Auto open login form if there's a login error
        <?php if (isset($login_error)): ?>
            document.addEventListener('DOMContentLoaded', function() {
                section.classList.add('active');
                loginForm.classList.add('active');
                registerForm.classList.remove('active');
            });
        <?php endif; ?>
        
        // Logout function
        function logout() {
            // Create a form to submit logout request
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '';
            
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'logout';
            input.value = '1';
            
            form.appendChild(input);
            document.body.appendChild(form);
            form.submit();
        }
    </script>
    
    <?php
    // Handle logout
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit();
    }
    ?>
</body>
</html>