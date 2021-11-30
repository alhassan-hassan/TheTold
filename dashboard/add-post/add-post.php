<?php 
    include_once (dirname(__FILE__)).'/../../classes/user.php';
    
    $user = new User;

    if (isset($_POST['post'])) {
        $brief = $_POST['problem-brief'];
        $description = $_POST['problem-description'];
        $brief = $_POST['problem-brief'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add post</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="add-post.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class = "add-post-main">
        <?php require_once "../../general/dashboard_default/dashboard_def.php";?>

        <div class = 'main-content'>
            <div class = "header-content">
                <div class = "header">
                    <span id = "dashboard-header"> Add Post</span>
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
            
            <form method = "POST">
                <div class = "add-content">
                    <p id = "upload">Upload Post</p>
                    <hr>
                    <div class = "upload-section">
                        <div class = "up-sec">
                            <div class = "hints">
                                <i class="fas fa-cloud-upload-alt fa-3x"></i> <br>
                                <span id = "upload-hint">Drag file to upload</span>
                            </div>
                            <button id = "up-done">Choose file</button>
                        </div>
    
                        <div class = "up-sec1">
                            <span id = "problem-entry">Problem Brief</span> <br>
                            <input type="text" name = "problem-brief" id = "p-brief"><br>
    
                            <span id = "problem-entry"> Description</span> <br>
                            <textarea name="problem-description" id="p-description" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <button id = "finalize-upload" name = 'post'> POST</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>