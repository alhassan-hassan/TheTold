<?php
    session_start();

    // if user logs out, delete his session
    if (isset($_POST['loggin-out'])) {
        session_destroy();
    }

    // if user is not created, then redirect back to the login page
    if (!isset($_SESSION['user_created'])) {
        header("Location: ../../login/login.php");
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
    <link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class = "home-page-main">
        <?php require_once "../../general/dashboard_default/dashboard_def.php";?>

        <div class = "main-content">
            <div class = "header-content">
                <div class = "header">
                    <span id = "dashboard-header"> Dashboard</span>
                    <div class = "user-power">
                        <div class="form-group has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                        <i class="far fa-user fa-lg"></i>
                        <i class="far fa-bell fa-lg" id = noti-bell></i>
                    </div>
                </div>
            </div>      
    
            <div class = "content-info">
                <div class = "port">
                    <div class = "option" id = "problem">
                        <div class = "icon">
                            <i class="fas fa-plus-square fa-3x iconic"></i>
                        </div>
                        <div id = "p-deal" class = "option-child">
                            Upload Problem
                        </div>
                    </div>
                    <div class = "option" id = "my-post">
                        <div class = "icon">
                            <i class="far fa-window-restore fa-3x iconic"></i>
                        </div>
                        <div id = "up-deal" class = "option-child">
                            My Posts
                        </div>
                    </div>
                </div>
                        
                <div class = "port">
                    <div class = "option" id = "public-post">
                        <div class = "icon">
                            <i class="fas fa-database fa-3x iconic"></i>
                        </div>
                        <div id = "pp-deal" class = "option-child">
                            All  Public Posts
                        </div>
                    </div>
                    <div class = "option" id = "help">
                        <div class = "icon">
                            <i class="fas fa-bullhorn fa-3x iconic"></i>
                        </div>
                        <div id = "h-deal" class = "option-child">
                            Announcement
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- redirect to notification page if notification bell is pressed -->
    <script>
        const noti = document.getElementById('noti-bell');
        noti.addEventListener("click", alertHi);

        function alertHi(){
            window.location = "../notifications/notifications.php"         
        }

        // upload a post
        document.getElementById("problem").addEventListener("click", makeAPost)

        function makeAPost(){
            window.location = "../add-post/add-post.php"         
        }

        // view public posts
        document.getElementById("public-post").addEventListener("click", viewPosts)

        function viewPosts(){
            window.location = "../all_posts/posts.php"         
        }
        
        // view my posts
        document.getElementById("my-post").addEventListener("click", myPosts)

        function myPosts(){
            window.location = "../all_posts/my_posts.php"         
        }
        
        // view my posts
        document.getElementById("help").addEventListener("click", notification)

        function notification(){
            window.location = "../notifications/notifications.php"         
        }
    </script>
</body>
</html>