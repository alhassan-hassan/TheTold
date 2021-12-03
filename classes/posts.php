<?php 
    //connect to database class
    require_once (dirname(__FILE__)).'/../database/db-connection.php';

    class Post extends DB_Connection {
        
        public function makePost($user_id, $brief, $description, $image_path) {
            $sql = "INSERT INTO `post` (`user_id`, `brief`, `description_`, `date_`, `file_content`)
                VALUES ('$user_id', '$brief', '$description', 'NOW()', '$image_path')";

            return $this->db_query($sql);
        }

        // get all public posts
        public function getPosts() {
            $sql = "SELECT fName as 'firstname', lName as 'lastname',
                brief, description_ as 'description', 
                date_ as 'date', file_content as 'file' from post P, users U
                where U.user_id = P.user_id;";
            return $this->db_query($sql);
        }

         // get only my posts
        public function getMyPosts() {
            $sql = "SELECT fName as 'firstname', lName as 'lastname', brief, description_ as
             'description', date_ as 'date', file_content as 'file' from post P, users U 
             where U.user_id = P.user_id and U.user_id = '$_SESSION[user_id]'";
            return $this->db_query($sql);
        }
    }

?>