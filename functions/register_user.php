 <?php 
//connect to controller
    require_once (dirname(__FILE__)).'/../controllers/user_controller.php';
    require_once (dirname(__FILE__)).'/../signup_page/signup.php';

function validate() {
    // keep track of errors
    $errors = array();
    // check if the button has been clicked
    // grab form data
    $fname = $_POST['first-name'];
    $lname = $_POST['last-name'];
    $region = $_POST['region'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c-password'];

    // validate data
    // check if fields are empty
    if(empty($fname)){
        array_push($errors, "first name is requried");
    }
    
    if(empty($lname)){
        array_push($errors, "last name is requried");
    }

    if(empty($region)){
        array_push($errors, "region is requried");
    }
    
    if(empty($date)){
        array_push($errors, "date is requried");
    }
    if(empty($email)){
        array_push($errors, "email is requried");
    }
    if(empty($password)){
        array_push($errors, "password is requried");
    }

    // // check if email already exists
    $verify_email = verify_email_fxn($email);
    if(!$verify_email){
        array_push($errors, "email already exists");
    }

    // // check if fields are of appropriate length
    if(strlen($fname) > 100){
        array_push($errors, "first name must be shorter than 100 characters");
    }
    
    if(strlen($lname) > 100){
        array_push($errors, "last name must be shorter than 100 characters");
    }

    if(strlen($email) > 100){
        array_push($errors, "email must be shorter than 100 characters");
    }

    // // // check if passwords are the same
    if($password != $c_password){
        array_push($errors, "passwords need to match");
    }

    // validate email with regex
    $regex = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
    // set an error if not a valid email address
    if(!preg_match($regex, $email)){
        array_push($errors, "enter a valid email address");
    }


    $pattern = "/^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,20}$/";
    if (!preg_match($pattern, $password)) {
        array_push($errors, "Password must be atleast 8 with lowercase, uppercase and a special character.");
    }

    session_start();
    // store the errors inside session
    $_SESSION["errors"] = $errors;
}

