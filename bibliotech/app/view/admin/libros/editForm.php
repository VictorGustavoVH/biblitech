<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar libros</title>
    <link rel="stylesheet" href="/app/styleeditform.css">
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
    <section>
        <h1>Editar el registro de <?= $datos['Titulo'] ?></h1>
        <form action="http://localhost/bibliotech/?C=bookController&M=edit" method="post">
            <input type="hidden" name="isbn" value= <?= $datos['ISBN'] ?>>
            <div>
                <label for="nombre">Titulo</label>
                <input type="text" name="title" require value= <?= $datos['Titulo'] ?> >
            </div>
            <div>
                <label for="apellido">Autor</label>
                <input type="text" name="author" require value = <?= $datos['Autor'] ?>>
            </div>
            <div>
                <label for="edad">Editorial</label>
                <input type="text" name="edit" require value = <?= $datos['Editorial'] ?>>
            </div>
            <div>
                <label for="edad">Categoria</label>
                <input type="text" name="cat" require value = <?= $datos['Categoria'] ?>>
            </div>
            <div>
                <label for="correo">Año de publicacion</label>
                <input type="text" name="apublic" require value = <?= $datos['Año_publicacion'] ?>>
            </div>
            <div>
                <label for="fecha">Cantidad</label>
                <input type="number" name="cant" require value = <?= $datos['Cantidad'] ?>>
            </div>
            <div>
                <input type="submit" value="Editar">
            </div>
            <div>
                <a href="http://localhost/bibliotech?C=bookController&M=callIndex" class="botons">Volver</a>
            </div>
        </form>
    </section>
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
</body>
</html>