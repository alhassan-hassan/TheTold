<?php 
    session_start();
    //connect to database class
    require_once (dirname(__FILE__)).'/../database/db-connection.php';

    class Post extends DB_Connection {
        
        // make a post
        public function makePost($user_id, $brief, $description, $image_path) {
            $sql = "INSERT INTO `post` (`user_id`, `brief`, `description_`, `file_content`)
                VALUES ('$user_id', '$brief', '$description', '$image_path')";

            return $this->db_query($sql);
        }

        // get all public posts
        public function getPosts() {
            $sql = "SELECT fName as 'firstname', lName as 'lastname',
                brief, description_ as 'description', 
                date_ as 'date', file_content as 'file' from post P, users U
                where U.user_id = P.user_id order by P.date_ desc;";
            return $this->db_query($sql);
        }

         // get only my posts
        public function getMyPosts() {
            $sql = "SELECT post_id, fName as 'firstname', lName as 'lastname', brief, description_ as
                'description', date_ as 'date', file_content as 'file' from post P, users U 
                where U.user_id = P.user_id and U.user_id = '$_SESSION[user_id]' order by P.date_ desc";
            return $this->db_query($sql);
        }

        // edit My post
        public function editMyPosts($post_id, $brief, $description) {
            $sql = "UPDATE `post` SET `brief`='$brief',`description_`='$description' 
                WHERE `post_id` = '$post_id'";
            return $this->db_query($sql);
        }
    }

?>