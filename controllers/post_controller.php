<?php
    include_once (dirname(__FILE__)).'/../classes/user.php';

    function getPosts(){
        // Create new post object
        $post = new User;

        // Run query
        $runQuery = $post->post();
        $posts = array();

        if(empty($runQuery)){
            echo "no data";
        } else {
            while($record = $post->db_fetch()){
                $posts[] = $record;
            }
            return $posts;
        }
    }

    function getEachPost($term){
        // Create new post object
        $post = new Post;

        // Run query
        $runQuery = $post->getPost($term);
        $posts = array();

        if(empty($runQuery)){
            echo "no data";
        } else {
            while($record = $post->db_fetch()){
                $posts[] = $record;
            }
            return $posts;
        }
    }
?>