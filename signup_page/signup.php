<?php 
    session_start();
    require_once (dirname(__FILE__)).'/../classes/user.php';
    include "validateForm.php";

    $user = new User;
    $validator = new Validate;

    // if form is sumbitted
    if (isset($_POST['submit'])){
        $fname = $_POST['first-name'];
        $lname = $_POST['last-name'];
        $region = $_POST['region'];
        $date = $_POST['date'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c-password'];

        // verifying all the fields of the form
        $firstname_error = $validator->nameFields($fname);
        $lastname_error = $validator->nameFields($lname);
        $dob_error = $validator->isEmpty($date);
        $email_error = $validator->verifyEmail($email);
        $password_error = $validator->strongPassword($password, $c_password);
        $con_password_error = $validator->matchPasswords($password, $c_password);

        // calling the static variable that stores the errors encountered
        GLOBAL $total_errors;

        //login only if no erros are encountered
        if ($total_errors == 0) {
            $verify_email = $user->verify_email($email);
            $user_email = $user-> db_fetch($verify_email);

            // if a query result is returned, it implies that there's a user
            if (!empty($user_email)) {
                sleep(1);
                echo '<script type ="text/JavaScript">';  
                echo 'alert("Email is already taken. Try again")'; 
                echo '</script>'; 
            } else{
                $user->register($fname, $lname, $region, $date, $email, $password); 
                sleep(1);
                header("Location: ../reg_successful/reg_successful.php");
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Told</title>
    <link rel="stylesheet" href="signup.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class = "signup-main">
        <div class = "signup-side">
            <div class = "logo-stuff">
                <img src="../assets/koi.png" alt="comp_logo" id = "signup-logo">
                <span id = "logo-name">TheTold</span>
            </div>
            <p id = "signup-go1">Sign Up</p>
            <p id = "welcome">WELCOME TO THETOLD</p>
            <p id = "brief">A system that allows Ghanaians to post
                environmental bugs for solutions to be 
                meted out at the national level.
            </p>
        </div>

        <div class = "signup-input">
            <form method = "POST">
                <div class = "order">
                    <p id = "signup-go">Sign Up</p>
                    <p id = "rule">Please make sure you fill out all required fields.</p>
                </div>
    
                <div class = "input_field">
                    <div class = "input_con">
                        <input type="text" placeholder = "First Name*" 
                            name = "first-name" class = "mb-1" id = "fname"
                            value = <?= $fname ?? ""?>>
                            <small class = "errordisplay"><?=$firstname_error ?? ""?></small>
                    </div>
                    <div class = "input_con">
                        <input type="text" placeholder = "Last Name*" 
                            name = "last-name" class = "mb-1" id = "lname"
                            value = <?= $lname ?? ""?>>
                        <small class = "errordisplay"><?=$lastname_error ?? ""?></small>
                    </div>
                </div>
                
                <div class = "input_field">
                    <div class = "input_con">
                        <select id="region" class = "mb-1" name = "region" id = "region">
                            <option value="Northern Region">Northern Region</option>
                            <option value="Greater Accra Region">Greater Accra</option>
                            <option value="Ashanti Region">Ashanti Region</option>
                            <option value="Volta Region">Volta Region</option>
                        </select>
                        <small class = "errordisplay"></small>
                    </div>
                    <div class = "input_con">
                        <input type="date" placeholder = "Date of Birth; DD/MM/YYYY*" 
                            name = "date" class = "mb-1" id = "date">
                        <small class = "errordisplay"><?=$dob_error ?? ""?></small>
                    </div>
                </div>
                
                <div class = "input_field1" class = "input_con_email">
                    <input type="email" placeholder = "Email*" 
                        name = "email" id = "email" class = "mb-1"
                        value = <?= $email ?? ""?>>
                    <small class = "errordisplay"><?=$email_error ?? ""?></small>
                </div>
                
                <div class = "input_field">
                    <div class = "input_con">
                        <input type="password" placeholder = "Password*" 
                            name = "password" class = "mb-1" id = "password"
                            value = <?= $password ?? ""?>>
                        <small class = "errordisplay"><?=$password_error ?? ""?></small>
                    </div>
                    <div class = "input_con">
                        <input type="password" placeholder = "Confirm Password*" 
                            name = "c-password" class = "mb-1" id = "c_password"
                            value = <?= $c_password ?? ""?>>
                        <small class = "errordisplay"><?=$con_password_error ?? ""?></small>
                    </div>
                </div>

                <div class = "submit1">
                    <input type = "submit" name = "submit" value = "Submit" id = "signup-submit">
                    <p id = "already">Already have an account? <a href="../login/login.php" id = "dive_in">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./signup.js"></script> -->
</body>
</html>