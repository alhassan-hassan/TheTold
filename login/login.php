<?php

    // starting a session
    session_start();

    // requiring and importing the necessary files and classes
    require_once (dirname(__FILE__)).'/../classes/user.php';
    $user = new User;

    // setting the email and password fields to empty strings
    $email = "";
    $password = "";

    // set a session for any mistake that can occur after trying to login
    $_SESSION['faulty'] = "";

    if (isset($_POST['login'])) {
        $faulty = "";
        $email = $_POST['email'];
        $password = $_POST['password'];

        // tryl loggin in
        $login = $user->login($email, md5($password));
        $authentified = $user->db_fetch();
        
        // if information is retrieved, user logins
        if(!empty($authentified)) {
            // getting the user_id, as the user logins. This
            // helps in retrieving his or information
            $_SESSION['faulty'] = "";
            $_SESSION['user_id'] =  $authentified["user_id"];

            // this makes the user able to access other pages
            $_SESSION['user_created'] = "TRUE";

            // now redirects to the home page of the user
            sleep(1);
            header("Location: ../dashboard/home/home.php");
        }
        
        // if information don't match to any record in the database
        // inform the user that, the input provided is not valid.
        else {
            sleep(2);
            echo '<script>alert("Invalid email or password. Try again!")</script>';
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
                name = "email" value = <?=$email?>> <br>
            <input 
                type="password" placeholder = "Password*" id = "password" 
                style = "padding: 0 10px; width:100%; height:50px" name = "password"
                value = <?=$password?>>

            <div class = "checking">
                <label id = "remember" >
                    <input type="checkbox">Remember me
                </label>
            </div>

            <div class = "now_login">
                <input type="submit" id = "confirm" name = "login" style = "font-size:1rem" >
            </div>

            <h5 id ="final_hint">Don't have an account? <a  href = "../signup_page/signup.php" id = "register">Register</a ></h5>
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