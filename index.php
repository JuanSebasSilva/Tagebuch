<!DOCTYPE html>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Tagebuch</title>
</head>
<body>
    <?php
        include("models/conexion.php");
        $pg = isset($_REQUEST['pg']) ? $_REQUEST['pg']:NULL;
    ?>
    <header class="header">
        <a href="#" class="logo"></a>
        <div class="col img">
            <img src="img/logorecord.jpeg">
        </div>
    </header>
    <div class="container menu">
        <div class="wrapper">
            <form action="models/control.php" method="POST">
                <h1>Iniciar Sesión</h1>
                <div class="input-box">
                    <input type="email" placeholder="Usuario" name="usu" required>
                    <i class='bx bx-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Contraseña" name="con" required>
                    <i class='bx bx-lock-alt'></i>
                </div>
                <?php
                    $error = isset($_GET['error']) ? $_GET['error']:NULL;
                    if($error=='Ok') echo "<span class='dtinv'>Datos Invalidos</span>";
                ?>
                <div class="remember-forgot">
                    <label><input type="checkbox">Recordar</label>
                    <a href="#">Has olvidado tu contraseña?</a>
                </div>
                <button class="btn" onclick="home()">Ingresar</button>
                <div class="register-link"><center> 
                    <p>No tienes una cuenta? <a href="index.php?pg=112">Registrate</a></p>
                </center></div>
            </form>
        </div>
    </div>
    <footer class="footer">
        <?php include("views/footer.php"); ?>
    </footer>

    <script type="text/javascript" src="js/code.js"></script>
</body>
</html>