<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css?v=<?php echo time(); ?>">
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
            <div class = "item">
                <img src="../../assets/dark_logo_finale.png" id = "logo_f">
            </div>
            <div class = "item" id = "reset">
                Reset Password
            </div>
            <div class = "item"  >
                <input type="password" placeholder = "Password*" id = inp_pw name = "passw">
            </div>
            <div class = "item"  >
                <input type="password" placeholder = "Confirm Password*" id = inp_pw name = "con_passw">
            </div>
            <div class = "item">
                <button id = "next"> Next</button>
            </div>
        </div>
    </div>
</body>
</html>