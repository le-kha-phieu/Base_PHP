<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App của Phiêu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/css/main.css">
    <script src="../../assets/js/main.js"></script>
</head>

<body>
    <div class="app-auth">
        <div class="box-form">
            <div class="banner">
                <img src="./../../assets/img/Logo_authentication.jpg" alt="">
                <h2>Welcome to <br> THH Social Community</h2>
            </div>
            <form action="authentication_submit.php" method="post" class="register">
                <h3>Sign up</h3>
                <div class="item-form">
                    <p>Email:</p>
                    <input type="email" name="email" id="inputEmailReg" required placeholder="Input your email">
                    <span class="notify-error" id="notifyEmailRegister"></span>
                </div>
                <div class="item-form item-password">
                    <p>Password:</p>
                    <input type="password" name="password" id="inputPasswordReg" required placeholder="Input your password">
                    <i class="icon-eyes fa-solid fa-eye"></i>
                    <span class="notify-error" id="notifyPasswordRegister"></span>
                </div>
                <div class="item-form item-password">
                    <p>Password confirm:</p>
                    <input type="password" name="password_confirm" id="inputRePasswordReg" required placeholder="Input your password confirm">
                    <i class="icon-eyes fa-solid fa-eye"></i>
                    <span class="notify-error" id="notifyRePasswordRegister"></span>
                </div>
                <div class="btn-form item-form">
                    <button type="submit" name="submit_register" id="btnRegister">Sign up</button>
                </div>
                <div class="item-form">
                    <p id="showLogin">Already have an account? Login here</p>
                </div>
            </form>
            <form action="authentication_submit.php" method="post" class="login hidden">
                <h3>Sign in</h3>
                <div class="item-form">
                    <p>Email:</p>
                    <input type="email" name="email" id="inputEmail" placeholder="Input your email">
                    <span class="notify-error" id="notifyErrorEmail"></span>
                </div>
                <div class="item-form item-password">
                    <p>Password:</p>
                    <input type="password" name="password" id="inputPassword" placeholder="Input your password">
                    <i class="icon-eyes fa-solid fa-eye"></i>
                    <span class="notify-error" id="notifyErrorPassword"></span>
                    <p class="text-forgot-password">Forgot your password?</p>
                </div>
                <div class="btn-form item-form">
                    <button type="submit" name="submit_login" id="btnLogin">Sign in</button>
                </div>
                <div class="item-form">
                    <p id="showRegister">Don't have an account? Sign up here</p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
