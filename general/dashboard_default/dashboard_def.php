<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Board</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard_def.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class = "dashboard-home">
        <div class = "menu-sidebar vh-100">
            <i class="fas fa-bars fa-lg"></i>
            <div class = "logoName">
                <img src="../../assets/koi.png" alt="logo" id = "com_logo">
                <span id = "comp_name">TheTold</span>
            </div>

            <div class = "home-option" onclick = "print()">
                <i class="fas fa-circle fa-xs active"></i>
                <i class="fas fa-home fa-2x"></i>
                <span class = "fas">Home</span>
            </div>

            <div class = "home-option">
                <i class="fas fa-circle fa-xs"></i>
                <i class="fas fa-plus-square fa-2x"></i>
                <span id = "add">Add Post</span>
            </div>

            <div class = "home-option posting">
                <i class="fas fa-circle fa-xs"></i>
                <i class="fas fa-database fa-2x"></i>
                <span id = "post">Posts</span>
            </div>

            <div class = "home-option">
                <i class="fas fa-circle fa-xs"></i>
                <i class="fas fa-cog fa-2x"></i>
                <span>Settings</span>
            </div>

            <div class = "home-option">
                <i class="fas fa-circle fa-xs"></i>
                <i class="fas fa-sign-out-alt fa-2x"></i>
                <span>Logout</span>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="dashboard_def.js"></script>
</body>
</html>