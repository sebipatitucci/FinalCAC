<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
    <link rel="stylesheet" href="style-tickets.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <header>
        <div class="container">
            <div class="navbar-1">
                <img src="codoacodo.png" alt="Logo codo a codo" width="150" height="100">
                <p>Conf Bs As</p>
            </div>
            <div class="navbar-2">
                <a href="index.html">La conferencia</a>
                <a href="">Los oradores</a>
                <a href="">El lugar y la fecha</a>
                <a href="">Conviertete en orador</a>
                <a href="" id="buy-tickets">Comprar tickets</a>
            </div>
        </div>    
    </header> 

    <main>
        <div class="main-container">
            <div class="categorias">
                <h4 class="titulo-categorias">Estudiante</h4>
                <p>Tienen un descuento</p>
                <p class="porcentajes">80%</p>
                <p class="obligacion">* presentar documentación</p>
            </div>
            <div class="categorias trainee">
                <h4 class="titulo-categorias">Trainee</h4>
                <p>Tienen un descuento</p>
                <p class="porcentajes">50%</p>
                <p class="obligacion">* presentar documentación</p>
            </div>
            <div class="categorias junior">
                <h4 class="titulo-categorias">Junior</h4>
                <p>Tienen un descuento</p>
                <p class="porcentajes">15%</p>
                <p class="obligacion">* presentar documentación</p>
            </div>
        </div>
    </main>
    
    <section>

        <p id="venta">VENTA</p>
        <h2 id="titulo-valor">VALOR DE TICKET $200</h2>
        <form action="registro.php" method="POST">
            <input type="text" name="nombre" class="campos-nombre" id="nombre" placeholder="Nombre" required>
            <input type="text" name="apellido" class="campos-nombre" id="apellido" placeholder="Apellido" required>
            <input type="email" name="correo" class="campo-correo" id="correo" placeholder="Correo" required>
            <p class="section">Cantidad</p>
            <p class="section">Categoria</p>
            <input type="text" name="cantidad" class="cantidad" id="cantidad" placeholder="Cantidad" >
            <select name="categoria" id="options">
                <option value="estudiante">Estudiante</option>
                <option value="trainee">Trainee</option>
                <option value="junior">Junior</option>
            </select>
            <div class="container-resultado">
                <p>Total a Pagar: $<span id="resultado"></span></p>
            </div>
            <div id="error">
                <p>¡ERROR!</p><div id="cerrar">x</div>
                <p>Debe completar los campos para continuar</p>
            </div>
            <button class="btn-opciones" id="boton-borrar">Borrar</button>
            <button class="btn-opciones" id="boton-resumen">Resumen</button>
            <a href="datos.php" id="datos">Ver datos</a>
            
        </form>
    </section>

    <footer class="footer">
        <div class="container_footer">
            <a href="">Preguntas <br> frecuentes</a>
            <a href="">Contáctanos</a>
            <a href="">Prensa</a>
            <a href="">Conferencias</a>
            <a href="">Términos y <br>condiciones</a>
            <a href="">Privacidad</a>
            <a href="">Estudiantes</a>
        </div>
    </footer>



    <script src="script.js"></script>

 
</body>
</html>