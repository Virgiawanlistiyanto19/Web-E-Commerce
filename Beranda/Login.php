<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="layout/login_style.css"/>
</head>
<body>
    <div class="main-container">
        <div class="left-section" id="leftSection">
            <h1>Welcome!</h1>
            <p>Enter Your Email and Password to Continue</p>
        </div>
        <div class="right-section">
            <div class="container active" id="signIn">
                <h1 class="form-title">Login</h1>
                <form method="post" action="register.php">
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="username" name="username" placeholder="Username" required />
                    </div>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                    </div>
                    <div class="links">
                        <div class="forgot password">
                            <button id="forgotPassword" type="button">Forgot Password?</button>
                        </div>
                    </div>
                    <input type="submit" class="btn" value="Sign In" name="signIn" >
                </form>
                <p class="or">---------- or ----------</p>
                <div class="icons">
                    <i class="fab fa-google"></i>
                    <i class="fab fa-instagram"></i>
                </div>
                <div class="links">
                    <p>Don't have an account?</p>
                    <button id="signUpButton" type="button">Sign Up</button>
                </div>
            </div>

            <div class="container" id="signup">
                <h1 class="form-title">Register</h1>
                <form method="post" action="register.php">
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="user_id" placeholder="ID" required />
                    </div>
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required />
                    </div>
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required />
                    </div>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                    </div>
                    <input type="submit" class="btn" name="signUp" value="Sign Up" />
                </form>
                <p class="or">---------- or ----------</p>
                <div class="icons">
                    <i class="fab fa-google"></i>
                    <i class="fab fa-instagram"></i>
                </div>
                <div class="links">
                    <p>Already have an account?</p>
                    <button id="signInButton" type="button">Sign In</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const signUpButton = document.getElementById("signUpButton");
        const signInButton = document.getElementById("signInButton");
        const signInForm = document.getElementById("signIn");
        const signUpForm = document.getElementById("signup");
        const leftSection = document.getElementById("leftSection");

        signUpButton.addEventListener("click", function () {
            signInForm.classList.remove("active");
            signUpForm.classList.add("active");
            leftSection.querySelector("h1").textContent = "Welcome!";
            leftSection.querySelector("p").textContent =
                "Register an account first to login";
        });

        signInButton.addEventListener("click", function () {
            signUpForm.classList.remove("active");
            signInForm.classList.add("active");
            leftSection.querySelector("h1").textContent = "Welcome!";
            leftSection.querySelector("p").textContent =
                "Enter Your Email and Password to Continue";
        });
    </script>
</body>
</html>
