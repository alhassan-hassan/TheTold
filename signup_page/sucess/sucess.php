<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sucess.css?v=<?php echo time(); ?>">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
</head>
<body>
    <div class="main_suc">
        <div class = "main_info">
            <div class = "item">
                <i class="far fa-check-circle fa-3x"></i>
            </div>
            <div class = "item" id = "info">Signed Up Sucessfully </div>
            <div class = "item">
                <button id = "next" onclick = "home()"> Next</button>
            </div>
        </div>
    </div>

    <script>
        function home() {
	  window.location.href = "../../dashboard/home/home.php"
    }
</script>
</body>
</html>