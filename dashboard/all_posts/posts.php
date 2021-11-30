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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="posts.css?v=<?php echo time(); ?>">

</head>
<body>
    <div class = "post-main">
        <?php require_once "../../general/dashboard_default/dashboard_def.php";?>

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
                        <i class="far fa-bell fa-lg"></i>
                    </div>
                </div>
            </div>
            
            <div class = "button-action">
                <button id = "post-action1">My Posts</button>
                <button id = "post-action2">Public Posts</button>
            </div>
            
            <div class = "problems">
                <div class = "my_posts">
                    <div class = "post-column">
                        <div class = "a-bug">
                            <img src="road.jpg" alt="bug" id = "bug">
                            <p id = "bug_name">Bad Roads</p>
                            <div class = "particulars">
                                <span id = "parti">Alhassan Hassan</span>
                                <span id = "parti">12th Aug. 2021</span>
                            </div>
                        </div>
                        <div class = "a-bug">
                            <img src="road.jpg" alt="bug" id = "bug">
                            <p id = "bug_name">Bad Roads</p>
                            <div class = "particulars">
                                <span id = "parti">Alhassan Hassan</span>
                                <span id = "parti">12th Aug. 2021</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class = "post-column">
                        <div class = "a-bug">
                            <img src="road.jpg" alt="bug" id = "bug">
                            <p id = "bug_name">Bad Roads</p>
                            <div class = "particulars">
                                <span id = "parti">Alhassan Hassan</span>
                                <span id = "parti">12th Aug. 2021</span>
                            </div>
                        </div>
                        <div class = "a-bug">
                            <img src="road.jpg" alt="bug" id = "bug">
                            <p id = "bug_name">Bad Roads</p>
                            <div class = "particulars">
                                <span id = "parti">Alhassan Hassan</span>
                                <span id = "parti">12th Aug. 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
</body>
</html>