<!DOCTYPE php>
<php lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>
    <!-- Barra de navegación -->
    <?php include_once ('include/header.php') ?>
    <!-- Banner -->
    <?php include_once ('include/banner2.php') ?>


    <div class="container">
        <div class="columns">
            <div class="column is-two-fifths-desktop">
                <div class="slider" id="slider">
                    <div class="slider-img-container">
                        <img src="img/item-1.png" alt="camiseta" class="active slider-item">
                    </div>
                    <div class="slider-img-container">
                        <img src="img/item-2.png" alt="camiseta" class="slider-item">
                    </div>
                    <div class="slider-img-container">
                        <img src="img/item-5.png" alt="camiseta" class="slider-item">
                    </div>
                    <div class="slider-button-left slider-buttons" onclick="previus()">
                        <i class="zmdi zmdi-chevron-left zmdi-hc-3x"></i>
                    </div>
                    <div class="slider-button-right slider-buttons" onclick="next()">
                        <i class="zmdi zmdi-chevron-right zmdi-hc-3x"></i>
                    </div>
                </div>
            </div>
            <div class="column">
                <h3 class="is-size-4">Classic Sweatshirt</h3>
                <div class="course-rating-container">
                    <div class="rating-stars" style="--rating: 86%">
                    </div>
                </div>
                <p class=""> 3 comentarios | Compartir: <a class="icon-socials" href="#"><i
                            class="zmdi zmdi-facebook"></i></a>
                    <a class="icon-socials" href="#"><i class="zmdi zmdi-twitter"></i></a>
                    <a class="icon-socials" href="#"><i class="zmdi zmdi-instagram"></i></a>
                    <a class="icon-socials" href="#"><i class="zmdi zmdi-pinterest"></i></a>
                    <a class="icon-socials" href="#"><i class="zmdi zmdi-email"></i></a>
                </p>
                <h2 class="price is-size-4"><sup>$</sup>89.99</h2>
                <p class="has-text-grey"> <strong>Disponibilidad:</strong> En stock</p>
                <p class="has-text-grey"><strong>Código del procuto: </strong>#56843265</p>
                <p class="text-default">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
                    repellat,
                    sequi doloremque accusamus, voluptates nihil commodi necessitatibus, ullam
                    fugit ea a illo maxime repudiandae. Iusto totam nemo nam ullam officiis?</p>
                <form action="#" class="form-control">
                    <div class="columns is-multiline">
                        <div class="column is-one-third">
                            <label for="color">Color</label>
                            <select class="form-control-field" id="color">
                                <option value="#">Color 1</option>
                                <option value="#">Color 2</option>
                                <option value="#">Color 3</option>
                            </select>

                        </div>
                        <div class="column is-one-third">

                            <label for="size">Tamaño</label>
                            <select class="form-control-field" id="size">
                                <option value="#">Tamaño 1</option>
                                <option value="#">Tamaño 2</option>
                                <option value="#">Tamaño 3</option>
                            </select>
                        </div>
                        <div class="column is-one-third">
                            <label for="quality">Cantidad</label>
                            <input class="form-control-field" type="number">
                        </div>
                        <div class="column is-full is-marginless">
                            <button class="btn btn-default btn-outline"><i class="zmdi zmdi-shopping-cart"></i>
                                Agregar al carrito</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
    <div class="container">

        <div class="columns is-tablet">
            <div class="column">
                <div class="tabs-container">
                    <ul class="tabs" id="tabs">
                        <li class="tabs-item active-tab">Descripción</li>
                        <li class="tabs-item">Video</li>
                        <li class="tabs-item">Tamaños</li>
                        <li class="tabs-item">Envío y reembolso</li>
                        <li class="tabs-item">Comentarios</li>
                    </ul>
                    <div class="tabs-panels">
                        <div class="tab-panel active-panel">
                            <div class="container">
                                <div class="columns">
                                    <div class="column">
                                        <h2 class="is-size-4">Descripción</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, natus.
                                            Doloribus
                                            neque
                                            tempore
                                            qui saepe voluptate. eserunt nihil doloribus facilis quos eos, tempore magni
                                            iure magnam
                                            impedit
                                            reiciendis eligendi dignissimos.</p>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus nostrum
                                            ipsam
                                            officiis iste odit. Magnam corporis, assumenda ullam illum at voluptatem
                                            totam
                                            iure explicabo nesciunt sed neque officia odio in.
                                            Odit sunt harum expedita, sint quasi corporis provident dolorem animi
                                            excepturi,
                                            numquam possimus perferendis, natus sapiente hic temporibus? Temporibus,
                                            corporis. Optio quidem vel quod aspernatur eos itaque distinctio dolore
                                            blanditiis.
                                            Placeat magni similique laborum ipsa dolore, quia, labore necessitatibus,
                                            commodi rerum ad totam magnam vel officia culpa nobis! Voluptatum, ducimus
                                            veniam provident aliquam explicabo beatae neque odit voluptatem consequatur
                                            architecto!
                                            Expedita eos quia repellat quod ipsum architecto soluta, cum dolores officia
                                            sint sequi debitis culpa aperiam numquam fugiat libero! Illo, commodi!
                                            Minima
                                            pariatur sapiente qui eaque, delectus velit magnam adipisci?</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-panel">
                            <div class="container">
                                <div class="columns">
                                    <div class="column is-half">

                                        <div class="video-container">
                                            <iframe src="https://www.youtube.com/embed/MDgZLV6gqV0" frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="colulmn is-half">

                                        <h2 class="is-size-4">Video</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis,
                                            natus.
                                            Doloribus
                                            neque
                                            tempore
                                            qui saepe voluptate. eserunt nihil doloribus facilis quos eos, tempore
                                            magni
                                            iure magnam
                                            impedit
                                            reiciendis eligendi dignissimos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-panel">
                            <h2 class="is-size-4">Tamaños</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, natus. Doloribus
                                neque
                                tempore
                                qui saepe voluptate. eserunt nihil doloribus facilis quos eos, tempore magni iure
                                magnam
                                impedit
                                reiciendis eligendi dignissimos.</p>
                        </div>
                        <div class="tab-panel">
                            <h2 class="is-size-4">Envios y reembolsos</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, natus. Doloribus
                                neque
                                tempore
                                qui saepe voluptate. eserunt nihil doloribus facilis quos eos, tempore magni iure
                                magnam
                                impedit
                                reiciendis eligendi dignissimos.</p>
                        </div>
                        <div class="tab-panel">
                            <h2 class="is-size-4">Comentarios</h2>
                            <div class="container">
                                <div class="columns is-multiline">
                                    <div class="column is-full">
                                        <div class="comment-container">
                                            <img class="avatar" src="img/user-men.jpg" alt="">
                                            <div class="comment">
                                                <div class="course-rating-container">
                                                    <div class="rating-stars" style="--rating: 100%">
                                                    </div>
                                                    <h3 class="is-size-5">lorem</h3>
                                                </div>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam
                                                    nobis sed eveniet architecto iusto ex laborum, veniam facere.
                                                    Dolore ea repellendus possimus obcaecati, suscipit amet aut
                                                    quisquam
                                                    praesentium? Ea, enim!</p>
                                                <span class="text">7 de marzo 2019</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-full">
                                        <div class="comment-container">
                                            <img class="avatar" src="img/user-men.jpg" alt="">
                                            <div class="comment">
                                                <div class="course-rating-container">
                                                    <div class="rating-stars" style="--rating: 100%">
                                                    </div>
                                                    <h3 class="is-size-5">lorem</h3>
                                                </div>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam
                                                    nobis sed eveniet architecto iusto ex laborum, veniam facere.
                                                    Dolore ea repellendus possimus obcaecati, suscipit amet aut
                                                    quisquam
                                                    praesentium? Ea, enim!</p>
                                                <span class="text">7 de marzo 2019</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
    <?php include_once ('include/header.php') ?>
    <script src="js/main.js"></script>
</body>

</php>