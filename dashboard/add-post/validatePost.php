<?php 
    session_start();
    include_once (dirname(__FILE__)).'/../../classes/posts.php';
    
    $post = new Post;
    $errors = 0;
    $image_errors = "";

    if (isset($_POST['post'])) {
        $brief = $_POST['problem-brief'];
        $description = $_POST['problem-description'];
        //image validation
        $target_dir = "images/";
        // file path
        $target_file = $target_dir.basename($_FILES["image"]["name"]);
        // image file type
        $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // check if image has been uploaded
        if(empty($_FILES["image"]["name"])){
            $errors += 1;
            $image_errors = "File cannot be empty";
        } else {
            // check if its an actual image
            $image_size =  getimagesize($_FILES["image"]["tmp_name"]);
            if ($image_size == false){
                $image_errors = "File is not an image";
                $errors += 1;
            }
            // limit file size to 10MB
            if ($_FILES["image"]["size"] > 10000000){
                $image_errors = "File size should be 10MB or less";
                $errors += 1;
            }
             // limit file type
            if($image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "gif"){
                $image_errors = "Sorry, only JPG, PNG & GIF files are allowed";
                $errors += 1;
            }

            // now upload the file if all requirements are fine
            if ($errors == 0 && $_POST['problem-brief'] && $_POST['problem-description']) {
                 // upload image
                $upload_image = move_uploaded_file($_FILES["image"]["tmp_name"], '../../'.$target_file);
                $make_post = $post-> makePost($_SESSION['user_id'], $brief, $description, $target_file);

                if (!$make_post) {
                    echo "post upload failed";
                } else {
                    sleep(2);
                    header("Location: ../confirm_add_post/confirm_upload.php");
                }
            }
        }
    }

?>
