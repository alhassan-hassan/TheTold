<?php 
     include_once (dirname(__FILE__)).'/../../controllers/user_controller.php';
     include_once (dirname(__FILE__)).'/../../classes/user.php';

     $post = new User;
     $allNotifications = getAllNotifications();

     if (isset($_POST['delete-notification'])){
         $post->deleteNotification($_POST['delete-notification']);
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
    <link rel="stylesheet" href="notifications.css?v=<?php echo time(); ?>">
    <title>Notifications</title>
</head>
<body>
    <div class = "home-page-main">
        <?php require_once "../../general/dashboard_default/dashboard_def.php";?>

        <div class = "main-content">
            <div class = "header-content">
                <div class = "header">
                    <span id = "dashboard-header"> Notifications</span>
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
            <div class = "content-info">
                <form method = "POST">
                    <?php 
                        foreach($allNotifications as $key => $value){
                    ?>
                        <div class = "notifications">
                            <div class = "notifi">
                                <div class = "name-section">
                                    <div class = "name"><?=$value['sender_name']?></div>
                                    <small><?=$value['date_']?></small>
                                </div>
                                <div class = "sub-delete">
                                    <div class = subject><?=$value['subject_']?></div>
                                    <button name = "delete-notification" class = "noti-delete" value = <?=$value['notification_id']?>>
                                        <i class="fas fa-trash" style = "color:rgba(0,0,0,0.5)"></i>
                                    </button>
                                </div>
                                <div class = "main">
                                    <?=$value['description_']?>  
                                </div>
                            </div>
                        </div>
                        <?php 
                    }?>
                </form>
            </div> 
        </div>   
    </div>
</body>
</html>