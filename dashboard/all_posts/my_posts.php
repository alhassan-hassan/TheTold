<?php 
    // including the post controller
    include_once (dirname(__FILE__)).'/../../controllers/post_controller.php';

    // if user logs out, delete his session
    if (isset($_POST['loggin-out'])) {
        session_destroy();
    }

    // if user is not created, then redirect back to the login page
    if (!isset($_SESSION['user_created'])) {
        header("Location: ../../login/login.php");
    }

    // get all the posts
    $myPosts = getMyPosts();

    // creating a session that keeps track of each post's address
    $_SESSION['post_id'] = "";

    // redirect to the page and edit a post if the edit button is clicked
    if (isset($_POST['edit'])) {
        $_SESSION['post_id'] =  $_POST['edit'];
        header("Location: ../edit_post/edit_post.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posts</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous"
    >
    <link rel="stylesheet" href="my_posts.css?v=<?php echo time(); ?>">
</head>
<body>
    <!-- main content -->
    <div class = "post-main">

        <!-- getting the side bar -->
        <?php require_once "../../general/dashboard_default/dashboard_def.php";?>

        <!-- the header container -->
        <div class = 'main-content'>
            <div class = "header-content">
                <div class = "header">
                    <span id = "dashboard-header">Posts</span>
                    <div class = "user-power">
                        <div class="form-group has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                        <i class="far fa-user fa-lg"></i>
                        <i class="far fa-bell fa-lg" id = "noti-bell"></i>
                    </div>
                </div>
            </div>
            
            <!-- the form that displays all my posts -->
            <form method="post">
                <div class = "button-action">
                    <a href = "posts.php" id = "post-action2" >Public Posts</a>
                    <a href = "" id = "post-action1">My Posts</a>
                </div>
                
                <div class = "problems">   
                    <?php
                    // display all information in the database
                    if (empty($myPosts)) {
                        echo "<div style = 'text-align:center; color:red; margin-top:20%'>
                            NO RECORDS...
                        </div>";
                    } else{
                        foreach($myPosts as $key => $value){
                    ?>
                        <!-- each post -->
                        <div class = "private">
                            <div class = "a-bug">
                                <img src= <?="../../".$value['file']?> alt="no file"  id = "bug">
                                <div class = "brief_edit">
                                    <p id = "bug_name"><?= $value['brief']?></p>
                                    <button class = "edit-post" name = "edit" value = <?=$value['post_id']?>>
                                        <i class="far fa-edit fa-1x"></i>
                                    </button>
                                </div>
                                <div class = "particulars">
                                    <span id = "parti"><?= $value['lastname'].' '. $value['firstname']?></span>
                                    <span id = "parti"><?= $value['date']?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        }
                    ?>   
                </div>
            </form>
        </div> 
    </div> 
</body>
</html>