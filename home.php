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
            include("views/menu.php");
            if(!$pg){
                $pgdf = $mmenu->getPagDf();
                if($pgdf) $pg = $pgdf[0]['pagini'];
            }
        ?>
    </header>

    <div class="contenido">
        <?php
            $rut = validar($pg);
            if($rut){
                include($rut[0]['rutpag']);
            }else{
                echo "<h3>No cuentas con permisos de acceso</h3>";
            }
        ?>
            
        /* if(!$pg) require_once("views/Vini.php");
        if($pg=="101") require_once("views/Vini.php");
        if($pg=="102") require_once("views/Vinfo.php");
        if($pg=="103") require_once("views/Vevento.php");
        if($pg=="104") require_once("views/Vforma.php");
        if($pg=="105") require_once("views/Vcomen.php");
        if($pg=="106") require_once("views/Vtras.php");
        if($pg=="107") require_once("views/Vtorn.php");
        if($pg=="108") require_once("views/Vliga.php");
        if($pg=="109") require_once("views/Ventreno.php");
        if($pg=="110") require_once("views/Vamis.php");
        if($pg=="111") require_once("views/Vcrudentre.php");
        if($pg=="112") require_once("views/Vcrudamis.php");
        if($pg=="113") require_once("views/Vcomen2.php");

        if($pg=="401") require_once("views/Vadperfil.php");
        if($pg=="402") require_once("views/Vadnoti1.php");
        if($pg=="403") require_once("views/Vadnoti2.php");
        
        if($pg=="302") require_once("views/Vjuginfo.php");
        if($pg=="303") require_once("views/Vjugevento.php");
        if($pg=="304") require_once("views/Vjugaline.php");
        if($pg=="305") require_once("views/Vjugtorn.php");
        if($pg=="306") require_once("views/Vjugliga.php");
        if($pg=="307") require_once("views/Vjugamis.php");
        if($pg=="308") require_once("views/Vjugentreno.php");
        if($pg=="309") require_once("views/Vjugbus.php");
        if($pg=="310") require_once("views/Vjugequi.php"); */
        ?>
    </div>
    <footer class="footer">
        <?php include("views/footer.php"); ?>
    </footer>
</body>
</html>