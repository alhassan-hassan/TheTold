<?php
    include_once (dirname(__FILE__)).'/../classes/posts.php';

    function getPosts(){
        // Create new post object
        $post = new Post;
        // Run query
        $runQuery = $post->getPosts();
        $posts = array();

        // if results are returned, put each row into the same array
        // else there is no data
        if(empty($runQuery)){
            echo "no data";
        } else {
            while($record = $post->db_fetch()){
                $posts[] = $record;
            }
            return $posts;
        }
    }

    function getMyPosts(){
        // Create new post object
        $post = new Post;
        // Run query
        $runQuery = $post->getMyPosts();
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