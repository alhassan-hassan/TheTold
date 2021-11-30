<?php

    session_start();

    require_once (dirname(__FILE__)).'/../classes/user.php';
    $user = new User;

    $_SESSION['faulty'] = "";
    if (isset($_POST['login'])) {
        $faulty = "";
        $email = $_POST['email'];
        $password = $_POST['password'];

        $login = $user->login($email, $password);
        $authentified = $user->db_fetch();
        $_SESSION['user_id'] =  $authentified["user_id"];

        if(!empty($authentified)) {
            $_SESSION['faulty'];
            sleep(1);
            //header("Location: ../dashboard/home/home.php");
        }
        else {
            $_SESSION['faulty'] = "Incorrect email or password. Try again!";
        }
    }
?>

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
                <img src="../assets/koi.png" alt="logo" class = "login_logo1">

                <span id = "co-name">TheTold</span>
            </div>
            <div id = "login-min">
                <p id = 'pave-in'>LOGIN</p>
            </div>
            <div id = "the_bug">
                <img src="../assets/bug_fixing.svg" alt="logo" class = "fixing_logo">
            </div>
        </div>

        <form method = "POST" class = "login_inputs" onsubmit = "return alertError();">
            <div id = "header">
                <text id = "login_name">Login</text>
            </div>
            <input 
                type="email" placeholder = "Email*" id = "email" 
                style = "padding: 0 10px; width:100%; height:50px" 
                name = "email" > <br>
            <input 
                type="password" placeholder = "Password*" id = "password" 
                style = "padding: 0 10px; width:100%; height:50px" name = "password">

            <div class = "checking">
                <label id = "remember" >
                    <input type="checkbox">Remember me
                </label>
                
                <a href="../authentification/forgot_pw/forgot_pw.php" id = "forgot">
                    <span id = "forgot_password" style = "font-size:small">Forgot password?</span>
                </a> 
            </div>

            <div class = "now_login">
                <input type="submit" id = "confirm" name = "login" style = "font-size:1rem" >
            </div>

            <h5 id ="final_hint">Don't have an account? <span>Register</span></h5>
        </form>
        <input type="hidden" id="custId" name="custId" value = <?= $_SESSION['faulty']?>>
    </div>

    <?php 
        $_SESSION['faulty'] = "";
    ?>

    <script>
        // const submit = document.getElementById('confirm').addEventListener('submit', alertError)

        function alertError() {
            setTimeout(function(){  }, 2000);
            const errorField = document.getElementById('custId');
            if (errorField.value !== ""){
                alert ("Incorrect email or password. Try again!");
                errorFiell.value = "";
            } 
        }
    </script>
</body>

</html>