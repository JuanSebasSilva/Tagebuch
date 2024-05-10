<?php require_once("models/dont.php"); ?>
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
                    <input type="text" placeholder="Usuario" name="usu" required>
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
        <p>Tagebuch (c) Derechos Revervados</p>
    </footer>
</body>
</html>