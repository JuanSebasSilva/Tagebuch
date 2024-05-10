<center >
    <div class="wrapper">
        <form action="">
            <h1>Iniciar Sesión</h1>
            <div class="input-box">
                <input type="text" placeholder="Usuario" required>
                <i class='bx bx-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Contraseña" required>
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
</center>