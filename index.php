<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/stylee1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
    <script type="text/javascript" src="js/code.js"></script>
</head>

<body>
    <header class="header">
        <a href="#" class="logo"></a>
        <div class="col img">
            <img src="img/logorecord.jpeg">
        </div>
    </header>
    <div class="container">
        <?php
            $pg = isset($_GET["pg"]) ? $_GET["pg"]:NULL;
            if(!$pg) require_once("views/Vind.php");
            if($pg=="111") require_once("views/Vlogin.php");
            if($pg=="112") require_once("views/Vregjug.php");
            if($pg=="113") require_once("views/Vregclb.php");
        ?>
    </div>
    <footer class="footer">
        <p>Tagebuch (c) Derechos Revervados</p>
    </footer>
</body>
</html>