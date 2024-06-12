<?php require_once("models/dont.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="js/code.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Tagebuch</title>
</head>

<body>
    <?php
        include("models/conexion.php");
        $pg = isset($_REQUEST['pg']) ? $_REQUEST['pg']:NULL;
    ?>
    <header class="header-menu">
        <?php
            include("views/header.php");
        ?>
    </header>

    <div class="contenido">
        <div class="row">
            <div class="col-2" style="background: #fff">
                <?php
                    include("views/menu.php");
                    if(!$pg){
                        $pgdf = $mmenu->getPagDf();
                        if($pgdf) $pg = $pgdf[0]['pagini'];
                    }
                ?>
            </div>
            <div class="col">
                <?php
                    $rut = validar($pg);
                    if($rut){
                        include($rut[0]['rutpag']);
                    }else{
                        echo "<h3>No cuentas con permisos de acceso</h3>";
                    }
                ?>
            </div>
        </div>
    </div>
    <footer class="footer">
        <?php include("views/footer.php"); ?>
    </footer>
</body>
</html>