<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title> 
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class = "login_main_container">
        <div class = "login_side">
            <div id = "my_logo">
                <img src="../assets/dark_logo_finale.png" alt="logo" class = "login_logo">
            </div>
            <div id = "the_bug">
                <img src="../assets/bug_fixing.svg" alt="logo" class = "fixing_logo">
            </div>
        </div>

        <form action="" class = "login_inputs">
            <div id = "header">
                <text id = "login_name">Login</text>
            </div>
            <input type="email" placeholder = "Email*" id = "email" style = "padding: 0 10px; width:100%; height:50px"> <br>
            <input type="password" placeholder = "Password*" id = "password" style = "padding: 0 10px; width:100%; height:50px">

            <div class = "checking">
                <label id = "remember" >
                    <input type="checkbox">Remember me
                </label>
                
                <a href="#" id = "forgot">
                    <span id = "forgot_password" style = "font-size:small">Forgot password?</span>
                </a> 
            </div>

            <div class = "now_login">
                <input type="submit" id = "confirm" name = LOGIN style = "font-size:1rem">
            </div>

            <h5 id ="final_hint">Don't have an account? <span>Register</span></h5>

        </form>
    </div>
</body>
</html>