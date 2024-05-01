<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="Proyecto nuevo.ico">
        <title> CAPIBARA STORE</title>
        <link rel="stylesheet" href="styleGeneral.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/8fa0212ec6.js" crossorigin="anonymous"></script>
    </head>

    <body>  
        <header>
            <div class="logo">
            <!--<img src="capibarax.gif"  class="imag">-->
            <img src="cover.jpg"  class="imag">
            </div>
            <audio controls>
                <source src="Capibara.mp4" type="audio/mp4">
            </audio>
            <nav>
                <ul>
                    <li><a href="index.php"> INICIO </a></li>
                    <p>---</p>
                    <li><a href="tienda.php">TIENDA</a></li>
                    <p>---</p>
                    <li><a href="#contact">CONTACTO</a></li>
                    <p>---</p>
                    <li>
                        <a href="iniciocapibara.php" class="boton-reg">Iniciar Sesion</a>
                    </li>
                </ul>
            </nav>
        </header>

        <aside>
            <div class="contenedor1">
                <img src="fotos index/FOT1.jpg" class="fotoPrincipal">
                <img src="fotos index/FOT2.jpg" class="fotoPrincipal">
                <img src="fotos index/FOT3.jpg" class="fotoPrincipal">
                <img src="fotos index/FOT4.jpg" class="fotoPrincipal">
            </div>
        </aside>

        <hr>
        
        <div id="conteCarrusel">     
            <div class="tarjeta" id="tarjeta-1">
                <div class="imgCarrusel" >
                    <img src="fotos index/img1.jpg">
                </div>
                <div class="flechasCarrusel">
                    <a href="#tarjeta-3">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <a href="#tarjeta-2">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="tarjeta" id="tarjeta-2">
                <div class="imgCarrusel">
                    <img src="fotos index/img2.jpg">
                </div>
                <div class="flechasCarrusel">
                    <a href="#tarjeta-1">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <a href="#tarjeta-3">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="tarjeta" id="tarjeta-3">
                <div class="imgCarrusel">
                    <img src="fotos index/img3.jpg">
                </div>
                <div class="flechasCarrusel">
                    <a href="#tarjeta-2">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <a href="#tarjeta-1">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <aside class="contacto">
            <div class="contenedor">
                <ul>
                <li>Moda con estilos unicos</li> 
                <li>Europa en Mendoza</li>
                <li>Elegí tu Outfit ideal</li>
                </ul>
            </div>
        </aside>

    <footer>
        <div class="contenedor">
            <ul>
            <li><a href="">&copy;CAPIBARA 2023</a></li>
            <li><a href=""> Aviso Legal</a></li>
            </ul>
            <div id="contact">
                <h1>Mensaje </h1>
                <h2>--</h2>
                <form action="">
                <label for="name"></label>
                <imput type ="text"id="name" name="name">
                <textarea name="message" id="message" cols="30" rows="1"></textarea>
                <input type="submit"class="enviarmensaje"  value="enviar mensaje">
                </form>
            </div>
        </div>
    </footer>

    <script src="Index.js"></script>


    </body>
</html>