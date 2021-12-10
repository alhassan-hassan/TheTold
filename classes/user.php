<?php 
    //connect to database class
    require_once (dirname(__FILE__)).'/../database/db-connection.php';

    class User extends DB_Connection {
       
        // signing up action
        public function register($fname, $lname, $region, $dob, $email, $password) {
            $encrypted_pass = md5($password);
            $sql = "INSERT INTO `users`
                (`fName`, `lName`, `region`, `dob`, `email`, `password_`) 
                VALUES ('$fname','$lname', '$region', '$dob', '$email', '$encrypted_pass')";
            // now let's run the query
            return $this->db_query($sql);
        }
        // making a post
        public function makePost($user_id, $brief, $description, $date, $file) {
            $sql = "INSERT INTO `post`
                (`user_id`, `brief`, `description`, `date`, `file`) 
                VALUES ('$user_id','$brief', '$description', '$date', LOAD_FILE('$file'))";

            return $this->db_query($sql);
        }

        // get all public posts
        public function getPosts() {
            $sql = "SELECT * FROM `post`";
            return $this->db_query($sql);
        }

         // get only my posts
        public function getMyPosts() {
            $sql = "SELECT * FROM `post`";
            return $this->db_query($sql);
        }

        // get all notifications
        public function getNotifications() {
            $sql = "SELECT * FROM `notification` order by `date_`";
            return $this->db_query($sql);
        }

        // delete notification
        public function deleteNotification($notication_id){
            $sql = "DELETE FROM `notification` where `notification_id` = '$notication_id'";
            return $this->db_query($sql);
        }

        // asking a question
        public function helpRequest($user_id, $question) {
            $sql = "INSERT INTO `help_` (`user_id`, `question`)
                    VALUES($user_id, $question)";
            return $this->db_query($sql);
        }

        // verify user email
        public function verify_email($email){
            $sql = "SELECT * FROM `users` WHERE `email`='$email'";
            return $this->db_query($sql);
        }

        // loggin in
        public function login($email, $password) {
            $encrypted = md5($password);
            $sql = "SELECT `user_id` FROM `users` WHERE `email`='$email' and `password_` = '$password'";
            return $this->db_query($sql);
        }

    }

?>