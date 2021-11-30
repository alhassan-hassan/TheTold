<?php 
    if(isset($_POST['next'])) {
        header("Location: ../reset_pw/reset.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="verify.css?v=<?php echo time(); ?>">
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
            <form action="" method = "POST">
                <div class = "item">
                    <img src="../../assets/dark_logo_finale.png" id = "logo_f">
                </div>
                <div class = "item" id = "veri">
                    Verification
                </div>
                <div class = "item" id = "veri_detail">
                    Enter the Verification code we just sent 
                    you on your email address.
                </div>
                <div class = "item"  >
                    <input type="text" placeholder = "Enter code" id = inp_code name = "con_passw">
                </div>
                <div class = "item">
                    <button id = "next" name = "next"> Next</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>