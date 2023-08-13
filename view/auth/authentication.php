<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App của Phiêu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/css/main.css">
    <script src="../../assets/js/main.js"></script>
</head>

<body>
    <div class="background-auth">
        <img src="./../../assets/img/Background_authentication.jpg" alt="">
    </div>
    <div class="app-auth">
        <div class="app-form">
            <img src="../../assets/img/Banner_authentication.jpg" alt="">
            <div class="all-content">
                <div class="banner">
                    <img src="./../../assets/img/Logo_authentication.jpg" alt="">
                    <div class="title-under-logo">
                        <h2>Welcome to <br> THH Social Community</h2>
                    </div>
                </div>
                <form action="authentication_submit.php" method="post" class="register hidden">
                    <h3>Sign Up</h3>
                    <div class="email">
                        <label>Email:</label>
                        <input type="email" required placeholder="Input your email" name="email" id="email" onchange="validateEmail()">
                        <span id="email-required"></span>
                    </div>
                    <div class="password">
                        <label>Password:</label>
                        <input type="password" required placeholder="Input your password" name="password" id="password" onchange="validatePass()">
                        <div class="icon-eyes">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <span id="password-required"></span>
                    </div>
                    <div class="password-confirm">
                        <label>Password confirm:</label>
                        <input type="password" required placeholder="Input your password confirm" name="password_confirm" id="password_confirm" onchange="validatePassCFM()">
                        <div class="icon-eyes">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <span id="password-confirm-required"></span>
                    </div>
                    <div class="btn-sign-up">
                        <button type="submit" name="submit_register" onclick="signUp()">Sign up</button>
                    </div>
                    <div class="login-account">
                        <a class="remove_register">Already have an account? Login here</a>
                    </div>
                </form>
                <form action="authentication_submit.php" method="post" class="login">
                    <h3 class="heading">Sign In</h3>
                    <div class="email">
                        <label for="email">Email:</label>
                        <input type="text" required placeholder="Input your email" name="email" id="email-signin" onchange="validateEmailSgn()">
                        <span id="email-signin-required"></span>
                    </div>
                    <div class="password">
                        <label for="password">Password:</label>
                        <input type="password" required placeholder="Input your password" name="password" id="password-signin" onchange="validatePassSgn()">
                        <div class="icon-eyes">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <div class="text-forgot-pass">
                            <a class="forgot_password">Forgot your password?</a>
                        </div>
                        <span id="password-signin-required"></span>
                    </div>
                    <div class="btn-sign-in">
                        <button type="submit" name="submit_login" onclick="signIn()">Sign in</button>
                    </div>
                    <div class="text-link-register">
                        <a class="remove_login">Don't have an account? Sign up here</a>
                    </div>
                </form>
                <form action="authentication_submit.php" method="post" class="forgot-password">
                    
                </form>
            </div>
            <div class="Content-forgot-pass hidden">
                <div class="banner">
                    <img src="./../../assets/img/Logo_authentication.jpg" alt="">
                    <div class="under-logo">
                        <label for="email">Please input your email:</label>
                        <input type="email" placeholder="Input your Email">
                            <div class="button-send">
                                <button class="not-send">Cancel</button>
                                <button class="allow-send">Send</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
