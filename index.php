<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DMMMSU-NLUC FRTI</title>
    <link rel="icon" type="image" href="DMMMSU-Logo-Final-2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <nav class="navbar">
        <span class="hamburger-btn material-symbols-rounded">menu</span>
            <a href="#" class="logo">
                <img src="dmmmsu-logo.png" alt="logo">
                    <h2> Don MARIANO MARCOS MEMORIAL STATE UNIVERSITY</h2>
                    <h3> FISHERIES RESEARCH TRAINING INSTITUTE</h3>
            </a>
         
                <ul class="links">
                <li><a href="#" class="link">Home</a></li>
                <li><a href="#" class="linke">Research</a></li>
                <li><a href="#" class="linkq">Products</a></li>
                <li><a href="#" class="linkqw">History</a></li>
                <li><a href="terms.php" class="option">Terms & Conditions</a></li>
                <span class="close-btn material-symbols-rounded">close</span>
            </ul>
            <button class="login-btn"><i class="fas fa-user"></i>Login</button>
        </nav>
    </header>
    <div class="blur-bg-overlay"></div>
    <div class="form-popup">
        <span class="close-btn material-symbols-rounded">close</span>
        <div class="form-box login">
            <div class="form-details">
                <h2>Welcome Back</h2>
                <p>Please log in using your personal information to stay connected with us.</p>
            </div>
            <div class="form-content" id="login">
                <h2>LOGIN</h2>
                <form method="post" action="register.php"> 
                    <div class="input-field">
                        <input type="text" name="email" id="email" required >
                      <label for="email"> <i class="fas fa-envelope"></i>Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" id="password" required>
                        <label for="password"><i class="fas fa-lock"></i>Password</label>
                    </div>
                    <a href="#" class="forgot-pass-link">Forgot password?</a>
                    <button type="submit" value="login" name="login">Log In</button>
                    <p class="or">
                        --------------------or--------------------
                    </p>
                    <div class="icons">
                        <i class="fab fa-google"></i>
                        <i class="fab fa-facebook"></i>
                    </div>
                </form>
                <div class="bottom-link">
                    Don't have an account?
                    <a href="#" id="signup-link">Signup</a>
                </div>
            </div>
        </div>
        <div class="form-box signup">
            <div class="form-details">
                <h2>Create Account</h2>
                <p>To become a part of our community, please sign up using your personal information.</p>
            </div>
            <div class="form-content" id="signUp">
                <h2>SIGNUP</h2>
                <form method="post" action="register.php">
                         <div class="input-field">
                        <input type="text" name="fName" id="fName"required>
                         <label for="fName"><i class="fas fa-user"></i>Enter your Firstname</label>
                        </div>
                        <div class="input-field">
                            <input type="text"name="lName" id="lName" required>
                            <label for="lName"><i class="fas fa-user"></i>Enter your Lastname</label>
                            </div>
                         <div class="input-field">
                        <input type="text" name="email" id="email" required>
                        <label for="email"><i class="fas fa-envelope"></i>Enter your email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" id="password" required>
                        <label><i class="fas fa-lock" for="password"></i>Create password</label>
                    </div>
                    <button type="submit" value="signup" name="signUp">Sign In</button>
                </form> 
                <div class="bottom-link">
                    Already have an account? 
                    <a href="" id="login-link">Login</a>
                </div>
            </div>
        </div>
    </div>
</html>
