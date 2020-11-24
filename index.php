<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    
</head>
<body>
<div class="container">
<!-- Login Form Anfang     -->
<div class="row justify-content-center wrapper" id="login-box">
<div class="col-lg-10 my-auto">
    <div class="card-group myShadow">
    <div class="card rounded-left p-4" style="flex-grow:1.4;">
    <h1 class="text-center font-weight-bold text-primary">Sign in to Account</h1>
    <hr class="my-3">
    <form action="#" method="post" class="px-3" id="login-form">
        <div class="input-group input-group-lg form-group">
            <div class="input-group-prepend">
                <span class="input-group-text rounded-0">
                    <i class="far fa-envelope fa-lg"></i>
                </span>
            </div>
            <input type="email" name="email" id="email" class="form-control" rounded-0 placeholder="E-Mail" required>
        </div>
        <div class="input-group input-group-lg form-group">
            <div class="input-group-prepend">
                <span class="input-group-text rounded-0">
                    <i class="fas fa-key fa-lg"></i>
                </span>
            </div>
            <input type="password" name="password" id="password" class="form-control" rounded-0 placeholder="Password" required>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox float-left">
                <input type="checkbox" name="rem" class="custom-control-input" id="customCheck">
                <label for="customCheck" class="custom-control-label">Remember</label>
            </div>
            <div class="forgot float-right">
                <a href="#" id="forgot-link">Password vergessen</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <input type="submit" value="Sign In" id="login-btn" class="btn btn-primary btn-lg btn-block myBtn">
        </div>
    </form>
    </div>
    <div class="card justify-content-center rounded-right myColor p-4">
        <h1 class="text-center font-weight-bold text-white">Hallo Leute</h1>
        <hr class="my-3 bg-light myHr">
        <p class="text-center font-weight-bolder text-light lead">Gebe deine Daten ein und starte deine Reise mit uns!</p>
        <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="register-link">Sign Up</button>
    </div>
    </div>
</div>
</div>
<!-- Login Form Ende -->


<!-- Registrieren Form Start -->

<div class="row justify-content-center wrapper" id="register-box" style="display: none;>
<div class="col-lg-10 my-auto">
    <div class="card-group myShadow">
    <div class="card justify-content-center rounded-left myColor p-4">
        <h1 class="text-center font-weight-bold text-white">Willkommen zurück</h1>
        <hr class="my-3 bg-light myHr">
        <p class="text-center font-weight-bolder text-light lead">Melde dich mit deinen Daten ein</p>
        <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="login-link">Sign In</button>
    </div>
    <div class="card rounded-right p-4" style="flex-grow:1.4;">
    <h1 class="text-center font-weight-bold text-primary">Erstelle dein Account</h1>
    <hr class="my-3">
    <form action="#" method="post" class="px-3" id="register-form">
    <div class="input-group input-group-lg form-group">
            <div class="input-group-prepend">
                <span class="input-group-text rounded-0">
                    <i class="far fa-user fa-lg"></i>
                </span>
            </div>
            <input type="text" name="name" id="name" class="form-control" rounded-0 placeholder="Name" required>
        </div>
        <div class="input-group input-group-lg form-group">
            <div class="input-group-prepend">
                <span class="input-group-text rounded-0">
                    <i class="far fa-envelope fa-lg"></i>
                </span>
            </div>
            <input type="email" name="email" id="remail" class="form-control" rounded-0 placeholder="E-Mail" required>
        </div>
        <div class="input-group input-group-lg form-group">
            <div class="input-group-prepend">
                <span class="input-group-text rounded-0">
                    <i class="fas fa-key fa-lg"></i>
                </span>
            </div>
            <input type="password" name="password" id="rpassword" class="form-control" rounded-0 placeholder="Password" required minlength="5">
        </div>

        <div class="input-group input-group-lg form-group">
            <div class="input-group-prepend">
                <span class="input-group-text rounded-0">
                    <i class="fas fa-key fa-lg"></i>
                </span>
            </div>
            <input type="password" name="cpassword" id="crpassword" class="form-control" rounded-0 placeholder="Wiederhole Password" required minlength="5">
        </div>

        
        <div class="form-group">
            <input type="submit" value="Sign Up" id="register-btn" class="btn btn-primary btn-lg btn-block myBtn">
        </div>
    </form>
    </div>
    
    </div>
</div>
</div>

<!-- Registrieren Form Ende -->

<!-- Passwort Vergessen Form Anfang -->

<div class="row justify-content-center wrapper" id="forgot-box" style="display: none;">
<div class="col-lg-10 my-auto">
    <div class="card-group myShadow">
    <div class="card justify-content-center rounded-left myColor p-4">
        <h1 class="text-center font-weight-bold text-white">Password Reset</h1>
        <hr class="my-3 bg-light myHr">
        <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="back-link">Zurück</button>
    </div>
    <div class="card rounded-right p-4" style="flex-grow:1.4;">
    <h1 class="text-center font-weight-bold text-primary">Password vergessen</h1>
    <hr class="my-3">
    <p class="lead text-center text-secondary">Gib deine E-Mail ein, um neue Password zu erhalten. Password wird an deine E-Mail geschickt.</p>
    <form action="#" method="post" class="px-3" id="forgot-form">
        <div class="input-group input-group-lg form-group">
            <div class="input-group-prepend">
                <span class="input-group-text rounded-0">
                    <i class="far fa-envelope fa-lg"></i>
                </span>
            </div>
            <input type="email" name="email" id="femail" class="form-control" rounded-0 placeholder="E-Mail" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Reset Password" id="forgot-btn" class="btn btn-primary btn-lg btn-block myBtn">
        </div>
        </div>
        
    </form>
    </div>
   
    </div>
</div>
</div>

<!-- Passwort Vergessen Form Ende -->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#register-link").click(function(){
                $("#login-box").hide();
                $("#register-box").show();
            });

            $("#login-link").click(function(){
                $("#login-box").show();
                $("#register-box").hide();
            });

            $("#forgot-link").click(function(){
                $("#forgot-box").show();
                $("#login-box").hide();
            });

            $("#back-link").click(function(){
                $("#forgot-box").hide();
                $("#login-box").show();
            })
        });
    </script>
</body>
</html>