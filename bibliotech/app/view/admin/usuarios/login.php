<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/app/stylelogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="encabezado">
        <div class="logo">
            <img src="/app/BIBLIOTECH.png" alt="Error al cargar la imagen">
        </div>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon"><i class="fas fa-bars"></i></label>
        <nav>
            <ul class="enlaces-nav">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Contactanos</a></li>
                <li><a class="btn" href="#"><button id="abrirPopupBtn">Registrate</button></a></li>
            </ul>            
        </nav>
    </header>
    <section class="form-login">
        <form action="http://localhost/Bibliotech/?C=loginController&M=login" method="post" class="formulario-registro">
            <img src="https://cdn-icons-png.flaticon.com/512/309/309492.png" alt="Error de conexión" width="100">
            <h4>Inicia sesión para ver más</h4>
            <h1>Usuario:</h1>
            <div id="es-relativo">
                <input class="controls" type="text" name="user" id="user" placeholder="Usuario">
            </div>
            <h1>Contraseña:</h1>
            <div class="contenedor-contraseña">
                <input class="controls" type="password" name="pass" id="pass" placeholder="Contraseña">
                <i class="fas fa-eye-slash" id="alternarContraseña"></i>
            </div>
            <input class="botones" type="submit" value="Iniciar Sesión">
        </form>
    </section>
    <div id="popup" class="popup">
        <div class="contenido-popup">
            <span class="btn-cerrar" id="cerrarPopupBtn">&times;</span>
            <img src="https://cdn-icons-png.flaticon.com/512/309/309492.png" alt="Error de conexión" width="100">
            <h2>Regístrate para ver más</h2>
            <form id="formularioRegistro">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
                
                <label for="contraseñaRegistro">Contraseña:</label>
                <input type="password" id="contraseñaRegistro" name="contraseñaRegistro" required>

                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" required>

                <label for="telefono">Teléfono:</label>
                <input type="number" id="telefono" name="telefono" required>

                <label for="correo">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" required>

                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" required>

                <button type="submit">Registrarse</button>
            </form>
        </div>
    </div>
      <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="/app/BIBLIOTECH.png" alt="Logo">
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="#">Términos y Condiciones</a></li>
                    <li><a href="#">Política de Privacidad</a></li>|
                </ul>
            </div>
            <div class="footer-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
      </footer>
    <script>
        document.getElementById('alternarContraseña').addEventListener('click', function () {
            const passwordField = document.getElementById('pass');
            const isPassword = passwordField.type === 'password';
            passwordField.type = isPassword ? 'text' : 'password';
            this.classList.toggle('fa-eye-slash', !isPassword);
            this.classList.toggle('fa-eye', isPassword);
        });

        document.getElementById('abrirPopupBtn').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'block';
        });

        document.getElementById('cerrarPopupBtn').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'none';
        });

        window.addEventListener('click', function(event) {
            if (event.target == document.getElementById('popup')) {
                document.getElementById('popup').style.display = 'none';
            }
        });

        document.getElementById('formularioRegistro').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('¡Formulario enviado!');
            document.getElementById('popup').style.display = 'none';
        });
        document.getElementById('menuIcon').addEventListener('click', function() {
        var enlacesNav = document.getElementById('enlacesNav');
        enlacesNav.classList.toggle('active');
        });
    </script>
</body>
</html>
