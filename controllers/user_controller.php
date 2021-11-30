<?php
    include_once (dirname(__FILE__)).'/../classes/user.php';

    function register_new_user($fname, $lname, $region, $dob, $email, $password) {
        $user = new User();

        $run_query = $user->register($fname, $lname, $region, $dob, $email, $password);
        
        // if successful
        if($run_query){
            return $run_query;
        }else{
            return false;
        }
    }

    function verify_email_fxn($email){
    // create a new instance of user object
    $user = new User;

    // run the query
    $run_query = $user->verify_email($email);

    // if successful
    if($run_query){
        // fetch data from database
        $user_email = $user->db_fetch();
        if(empty($user_email)){
            // if empty means the email isn't in the database already
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}
?>