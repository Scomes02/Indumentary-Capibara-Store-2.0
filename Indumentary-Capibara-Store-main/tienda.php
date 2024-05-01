<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="Proyecto nuevo.ico">
        <title> CAPIBARA STORE - TIENDA</title>
        <link rel="stylesheet" href="styleGeneral.css">
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <header>
            <div class="logo">
            <img src="cover.jpg"  class="imag">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php"> INICIO </a></li>
                    <p>---</p>
                    <li><a href="tienda.php">TIENDA</a></li>
                    <p>---</p>
                    <li><a href="#contact">CONTACTO</a></li>
                    <p>---</p>
                    <li>
                        <button class="boton-reg"><a href="iniciocapibara.php">Iniciar Sesión</a></button>
                    </li>
                </ul>

                <div class="container-icon">
                    <div class="container-cart-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-cart">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                          </svg>     
                    
                        <div class="count-products">
                            <span id="contador-productos">0</span>
                        </div>
                    </div>
                    <div class="container-cart-products hidden-cart">
                    <div class="row-product">
                        <div class="cart-product">
                            <div class="info-cart-product">
                                <span class="cantidad-carrito-producto">  </span>
                                <p class="titulo-procuto-carrito"></p>
                                <span class="precio-producto-carrito"></span>
                            </div>
                            <!-- Botón de eliminar unidad del carrito -->
                            <button class="btn-remove-unit">X</button>
                        </div>
                    </div>
                    <div class="cart-total">
                        <h3>Total</h3>
                        <span class="total-pagar"></span>
                    </div>
                </div>

                </div>
            </nav>
        </header>
        <hr>
        <h1>REMERAS</h1>
        <hr>
        <div class="container_items">
            <div class="grid-imagen">
                <figure>
                    <img src="fotos tienda/remera1.jpg" alt="producto"/>
                </figure>
                <div class="info_producto">
                    <h2>Remera Capibara XS</h2>
                    <p class="precio">$2500</p>
                    <button class="btn-add-cart">Agregar al carrito</button>
                </div>
            </div>
            <div class="grid-imagen">
                <figure>
                    <img src="fotos tienda/remera2.jpg" alt="producto"/>
                </figure>
                <div class="info_producto">
                    <h2>Remera Capibara S</h2>
                    <p class="precio">$3490</p>
                    <button class="btn-add-cart">Agregar al carrito</button>
                </div>

            </div>
            <div class="grid-imagen">
                <figure>
                    <img src="fotos tienda/remera3.jpg" alt="producto"/>
                </figure>
                <div class="info_producto">
                    <h2>Remera Capibara M</h2>
                    <p class="precio">$4500</p>
                    <button class="btn-add-cart">Agregar al carrito</button>
                </div>

            </div>
            <div class="grid-imagen">
                <figure>
                    <img src="fotos tienda/remera4.jpg" alt="producto"/>
                </figure>
                <div class="info_producto">
                    <h2>Remera Capibara L</h2>
                    <p class="precio">$5620</p>
                    <button class="btn-add-cart">Agregar al carrito</button>
                </div>

            </div>
            <div class="grid-imagen">
                <figure>
                    <img src="fotos tienda/remera5.jpg" alt="producto"/>
                </figure>
                <div class="info_producto">
                    <h2>Remera Capibara XL</h2>
                    <p class="precio">$6500</p>
                    <button class="btn-add-cart">Agregar al carrito</button>
                </div>

            </div>
            <div class="grid-imagen">
                <figure>
                    <img src="fotos tienda/remera6.jpg" alt="producto"/>
                </figure>
                <div class="info_producto">
                    <h2>Remera Capibara XL</h2>
                    <p class="precio">$6500</p>
                    <button class="btn-add-cart">Agregar al carrito</button>
                </div>

            </div>
            <div class="grid-imagen">
                <figure>
                    <img src="fotos tienda/remera7.jpg" alt="producto"/>
                </figure>
                <div class="info_producto">
                    <h2>Remera Capibara XL</h2>
                    <p class="precio">$6500</p>
                    <button class="btn-add-cart">Agregar al carrito</button>
                </div>

            </div>
            <div class="grid-imagen">
                <figure>
                    <img src="fotos tienda/remera8.jpg" alt="producto"/>
                </figure>
                <div class="info_producto">
                    <h2>Remera Capibara XL</h2>
                    <p class="precio">$6500</p>
                    <button class="btn-add-cart">Agregar al carrito</button>
                </div>

            </div>
            <div class="grid-imagen">
                <figure>
                    <img src="fotos tienda/remera9.jpg" alt="producto"/>
                </figure>
                <div class="info_producto">
                    <h2>Remera Capibara XL</h2>
                    <p class="precio">$6500</p>
                    <button class="btn-add-cart">Agregar al carrito</button>
                </div>

            </div>
        </div>    
<!-- //////////////////////////////////////////////////////-->
        <hr>
        <h2>PANTALONES</h2>
        <hr>
<!-- ///////////////////////////////////////////////////// -->
<div class="container_items2">
    <div class="grid-imagen2">
        <figure>
            <img src="fotos tienda/pantalon1.jpg" alt="producto"/>
        </figure>
        <div class="info_producto">
            <h2>Pantalon Capibara 34</h2>
            <p class="precio">$2500</p>
            <button class="btn-add-cart">Agregar al carrito</button>
        </div>
    </div>
    <div class="grid-imagen2">
        <figure>
            <img src="fotos tienda/pantalon2.jpg" alt="producto"/>
        </figure>
        <div class="info_producto">
            <h2>Pantalon Capibara 40</h2>
            <p class="precio">$3490</p>
            <button class="btn-add-cart">Agregar al carrito</button>
        </div>

    </div>
    <div class="grid-imagen2">
        <figure>
            <img src="fotos tienda/pantalon3.jpg" alt="producto"/>
        </figure>
        <div class="info_producto">
            <h2>Pantalon Capibara 54</h2>
            <p class="precio">$4500</p>
            <button class="btn-add-cart">Agregar al carrito</button>
        </div>

    </div>
    <div class="grid-imagen2">
        <figure>
            <img src="fotos tienda/pantalon4.jpg" alt="producto"/>
        </figure>
        <div class="info_producto">
            <h2>Pantalon Capibara 50</h2>
            <p class="precio">$5620</p>
            <button class="btn-add-cart">Agregar al carrito</button>
        </div>

    </div>
    <div class="grid-imagen2">
        <figure>
            <img src="fotos tienda/pantalon5.jpg" alt="producto"/>
        </figure>
        <div class="info_producto">
            <h2>Pantalon Capibara 38</h2>
            <p class="precio">$6500</p>
            <button class="btn-add-cart">Agregar al carrito</button>
        </div>

    </div>
    <div class="grid-imagen2">
        <figure>
            <img src="fotos tienda/pantalon6.jpg" alt="producto"/>
        </figure>
        <div class="info_producto">
            <h2>Pantalon Capibara 40</h2>
            <p class="precio">$6500</p>
            <button class="btn-add-cart">Agregar al carrito</button>
        </div>

    </div>
    <div class="grid-imagen2">
        <figure>
            <img src="fotos tienda/pantalon7.jpg" alt="producto"/>
        </figure>
        <div class="info_producto">
            <h2>Pantalon Capibara 48</h2>
            <p class="precio">$6500</p>
            <button class="btn-add-cart">Agregar al carrito</button>
        </div>

    </div>
    <div class="grid-imagen2">
        <figure>
            <img src="fotos tienda/pantalon8.jpg" alt="producto"/>
        </figure>
        <div class="info_producto">
            <h2>Pantalon Capibara 36</h2>
            <p class="precio">$6500</p>
            <button class="btn-add-cart">Agregar al carrito</button>
        </div>

    </div>
    <div class="grid-imagen2">
        <figure>
            <img src="fotos tienda/pantalon9.jpg" alt="producto"/>
        </figure>
        <div class="info_producto">
            <h2>Pantalon Capibara 42</h2>
            <p class="precio">$6500</p>
            <button class="btn-add-cart">Agregar al carrito</button>
        </div>

    </div>
</div>    
        <footer>
            <div class="contenedor">
                <ul>
                <li><a href="">&copy;CAPIBARA 2023</a></li>
                <li><a href=""> Aviso Legal</a></li>
                </ul>
                <div id="contact">
                    <h3>Mensaje </h3>
                    <h4>--</h4>
                    <form action="">
                    <label for="name"></label>
                    <imput type ="text"id="name" name="name">
                    <textarea name="message" id="message" cols="30" rows="1"></textarea>
                    <input type="submit"class="enviarmensaje"  value="enviar mensaje">
                    </form>
                </div>
            </div>
        </footer>
        <script src="tienda.js"></script>
    </body>
    
</html>