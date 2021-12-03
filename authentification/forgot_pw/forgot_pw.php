<?php 
    if(isset($_POST['next'])) {
            header("Location: ../verify_code/verify.php");
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forgot_pw.css?v=<?php echo time(); ?>">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
</head>
<body>
    <div class="main_pw">
        <div class = "main_info">
            <form action="" method = "POST" class = "form_fp">
                <div class = "item">
                    <img src="../../assets/dark_logo_finale.png" id = "logo_f">
                </div>
                <div class = "item" id = "reset">
                    Reset Password
                </div>
                <div class = "item" id = "info">
                    Enter email to reset your password
                </div>
                <div class = "item"  >
                    <input type="text" placeholder = "Email*" id = inp_email>
                </div>
                <div class = "item">
                    <button id = "next" name= "next"> Next</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>