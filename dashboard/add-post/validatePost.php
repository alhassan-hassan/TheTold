<?php 
    include_once (dirname(__FILE__)).'/../../classes/posts.php';

    // if user logs out, delete his session
    if (isset($_POST['loggin-out'])) {
        session_destroy();
    }

    // if user is not created, then redirect back to the login page
    if (!isset($_SESSION['user_created'])) {
        header("Location: ../../login/login.php");
    }
    
    $post = new Post;
    $errors = 0;
    
    if (isset($_POST['post'])) {
        $brief = $_POST['problem-brief'];
        $description = $_POST['problem-description'];

        // declaring sessions for the error messages if upload is not successful.
        $_SESSION['image_errors'] = ""; 
        $_SESSION['brief'] = ""; 
        $_SESSION['description'] = ""; 

        // error message if the problem field is empty
        if ($brief === "") {
            $_SESSION['brief'] = "This is a required field."; 
        }
        
        // error message if the problem description is empty
        if ($description === "") {
            $_SESSION['description'] = "This is a required field."; 
        }
        //image validation
        $target_dir = "images/";
        // file path
        $target_file = $target_dir.basename($_FILES["image"]["name"]);
        // image file type
        $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // check if image has been uploaded
        if(empty($_FILES["image"]["name"])){
            $errors += 1;
            $_SESSION['image_errors'] = "File cannot be empty";
        } else {
            // check if its an actual image
            $image_size =  getimagesize($_FILES["image"]["tmp_name"]);
            if ($image_size == false){
                $_SESSION['image_errors'] = "File is not an image";
                $errors += 1;
            }
            // limit file size to 10MB
            if ($_FILES["image"]["size"] > 100000000){
                $_SESSION['image_errors'] = "File size should be 10MB or less";
                $errors += 1;
            }
             // limit file type
            if($image_file_type != "jpg" && $image_file_type != "png" && 
                $image_file_type != "gif" && $image_file_type != "jpeg"){
                $_SESSION['image_errors'] = "Sorry, only JPG, PNG & GIF files are allowed";
                $errors += 1;
            }

            // now upload the file if all requirements are fine
            if ($errors == 0 && $_POST['problem-brief'] && $_POST['problem-description']) {
                 // upload image
                $upload_image = move_uploaded_file($_FILES["image"]["tmp_name"], '../../'.$target_file);
                $make_post = $post-> makePost($_SESSION['user_id'], $brief, $description, $target_file);
                
                sleep(2);
                header("Location: ../confirm_add_post/confirm_upload.php");
            } else {
                sleep(2);
                header("Location: ../upload_fail/upload_fail.php");
            }
        }
    }

?>
