<?php 
    include_once (dirname(__FILE__)).'/../../classes/posts.php';

    // if user is not created, then redirect back to the login page
    if (!isset($_SESSION['user_created'])) {
        header("Location: ../../login/login.php");
    }

    // creating an instance of the post class.
    $post = new Post;
    $brief = ""; $description = ""; $error = "";

    // form submitted
    if (isset($_POST['submit'])){
        $brief = $_POST['brief']; 
        $description = $_POST['description']; 
        if ($brief === "" || $description === "") {
         $error = "Please fill out all fields";
        } else {
            $post-> editMyPosts($_SESSION['post_id'], $brief, $description);
            sleep(2);
            header("Location: ../all_posts/my_posts.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="edit_post.css?v=<?php echo time(); ?>">
    <title>Notifications</title>
</head>
<body>
    <div class = "editForm">
        <form method="post" class = "form_edit">
            <div class = "header">
                <img src="../../assets/koi.png" id = "edit-logo">
                <div id = "the-told">TheTold</div>
            </div>

            <div class = "main-form-content">
                <div class = "brief-des">
                    <label for="brief">Brief</label>
                    <input type="text" id="brief" name="brief">
                </div>
                <div class = "brief-des">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="50" rows="3" name = "description"></textarea>
                </div>

                <div id = "submit1">
                    <input type="submit" name = "submit" id = "submit" value = "Make Update">
                </div>
                <small><?=$error?></small>
            </div>
        </form>
    </div>
</body>
</html>