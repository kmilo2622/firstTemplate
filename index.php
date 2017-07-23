<?php include 'header.php'; ?>
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container-jumbotron">
        <div class="title">
            <h1>Tu Aliado Express</h1>
            <br>
            <p id="slogan"><em>"Si tu problema es el tiempo, <strong>Tu Aliado Express</strong> es la solución que necesitas, 
                <br>
                nosotros hacemos tus trámites y diligencias por tí"</em></p>
                <p>Llámanos, Nosotros te Ayudamos</p>
            </div>
            <br><br>
            <p id="button-start" ng-controller="navigationController">
                <a href="#contact" ng-click="changeClass(5)" class="btn btn-primary btn-lg smoothScroll" role="button">
                    Comenzar
                </a>
            </p>
        </div>
    </div>

    <div id="news"></div>
    <div class="container">

        <!-- Sección de Noticias -->
        <div class="col-md-12">
            <h2 class="text-center">Noticias Destacadas</h2>
            <hr>
            <?php for ($i = 1; $i <= 3; $i++): ?>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="" data-toggle="modal" data-target="#noticia<?php echo $i; ?>">
                            <div class="caption text-center">
                                <h3>Titulo <?php echo $i ?></h3>
                            </div>
                            <img src="http://becomeabetterphotographer.co.uk/wp-content/uploads/2014/05/landscape-focusing2.jpg" alt="Lights" style="width:100%">
                        </a>
                        <div class="caption">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <a href="#" data-toggle="modal" data-target="#noticia<?php echo $i; ?>">Leer Más...</a>
                            </p>
                        </div>
                    </div>
                </div>

                <?php include 'modals/notice.php' ?>
            <?php endfor; ?>
        </div>

        <hr>

    </div>

    <!-- Sección de Servicios -->

    <div id="services"></div>

    <div class="row services">

        <div class="container">
            <div class="col-md-12">
                <h2 class="text-center">Nuestros Servicios</h2>
                <hr>
                <!-- Inicio del Servicio -->
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="">
                            <div class="caption text-center">
                                <h3>Mensajería <br> <br></h3>
                                <br>
                            </div>
                            <img src="https://computernewagedotcom.files.wordpress.com/2015/06/mensajeria-instantanea1.png" class="img-circle img-service" alt="Cinque Terre" width="200" height="400">
                        </a>
                        <div class="caption">
                            <br>
                            <!-- Opcional -->
                            <!-- <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                <br>
                                <a href="">Leer Más...</a>
                            </p> -->
                        </div>
                    </div>
                </div>
                <!-- Final del Servicio -->

                <!-- Inicio del Servicio -->
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="">
                            <div class="caption text-center">
                                <h3>Trámites y Diligencias<br></h3>
                                <br>
                            </div>
                            <img src="http://elsalvador.eregulations.org/media/hojita_93.png" class="img-circle img-service" alt="Cinque Terre" width="200" height="400">
                        </a>
                        <div class="caption">
                            <br>
                            <!-- Opcional -->
                            <!-- <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                <br>
                                <a href="">Leer Más...</a>
                            </p> -->
                        </div>
                    </div>
                </div>
                <!-- Final del Servicio -->

                <!-- Inicio del Servicio -->
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="">
                            <div class="caption text-center">
                                <h3>Radicación de Facturas</h3>
                                <br>
                            </div>
                            <img src="http://www.riesgoymorosidad.com/wp-content/uploads/2008/07/facturas.jpg" class="img-circle img-service" alt="Cinque Terre" width="200" height="400">
                        </a>
                        <div class="caption">
                            <br>
                            <!-- Opcional -->
                            <!-- <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                <br>
                                <a href="">Leer Más...</a>
                            </p> -->
                        </div>
                    </div>
                </div>
                <!-- Final del Servicio -->

                <!-- Inicio del Servicio -->
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="">
                            <div class="caption text-center">
                                <h3>Trámites Empresariales</h3>
                                <br>
                            </div>
                            <img src="http://guatemala.eregulations.org/media/empresa_1.jpg" class="img-circle img-service" alt="Cinque Terre" width="200" height="400">
                        </a>
                        <div class="caption">
                            <br>
                            <!-- Opcional -->
                            <!-- <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                <br>
                                <a href="">Leer Más...</a>
                            </p> -->
                        </div>
                    </div>
                </div>
                <!-- Final del Servicio -->

                <!-- Inicio del Servicio -->
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="">
                            <div class="caption text-center">
                                <h3>Trámites Personales <br> <br></h3>
                                <br>
                            </div>
                            <img src="http://www.segelsoft.com/wp-content/uploads/2011/05/Empresa.jpg" class="img-circle img-service" alt="Cinque Terre" width="200" height="400">
                        </a>
                        <div class="caption">
                            <br>
                            <!-- Opcional -->
                            <!-- <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                <br>
                                <a href="">Leer Más...</a>
                            </p> -->
                        </div>
                    </div>
                </div>
                <!-- Final del Servicio -->

                <!-- Inicio del Servicio -->
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="">
                            <div class="caption text-center">
                                <h3>Radicación ante Entidades Públicas <br> <br></h3>
                            </div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Villahermosa.Palacio_de_Gobierno_01.JPG/1200px-Villahermosa.Palacio_de_Gobierno_01.JPG" class="img-circle img-service radicaciones" alt="Cinque Terre" width="200" height="400">
                        </a>
                        <div class="caption">
                            <!-- Opcional -->
                            <!-- <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                <br>
                                <a href="">Leer Más...</a>
                            </p> -->
                        </div>
                    </div>
                </div>
                <!-- Final del Servicio -->

                <!-- Inicio del Servicio -->
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="">
                            <div class="caption text-center">
                                <h3>Radicación ante Entidades Privadas <br> <br></h3>
                            </div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Palacio_De_La_Gobernaci%C3%B3n.JPG/1200px-Palacio_De_La_Gobernaci%C3%B3n.JPG" class="img-circle img-service radicaciones" alt="Cinque Terre" width="200" height="400">
                        </a>
                        <div class="caption">
                            <!-- Opcional -->
                            <!-- <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                <br>
                                <a href="">Leer Más...</a>
                            </p> -->
                        </div>
                    </div>
                </div>
                <!-- Final del Servicio -->

                <!-- Inicio del Servicio -->
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="">
                            <div class="caption text-center">
                                <h3>Mensajería para E-Commerce <br> <br></h3>
                            </div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Palacio_De_La_Gobernaci%C3%B3n.JPG/1200px-Palacio_De_La_Gobernaci%C3%B3n.JPG" class="img-circle img-service radicaciones" alt="Cinque Terre" width="200" height="400">
                        </a>
                        <div class="caption">
                            <!-- Opcional -->
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Final del Servicio -->
            </div>
        </div>
    </div>
    <div id="us"></div>
    <div class="row whoare">
        <div class="container">
            <div class="col-md-12">
                <h3 class="text-center">¿Quiénes Somos?</h3>
                <div class="col-md-12 text-center">
                    <br>
                    Tu Aliado Express esta conformado por un grupo de personas con experiencia de mas de 10 años en el campo de la mensajería y logística, contamos con un grupo humano altamente calificado, y apasionado por lo que hace, al que le gusta los grandes retos, nuestro lema es trabajar con calidad, pasión, honestidad y eficiencia, con el objetivo de satisfacer las necesidades de nuestros clientes.
                    <hr>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center">Nuestra Misión</h4>
                    <br>
                    <div class="text-center">
                        <img src="http://www.definicionabc.com/wp-content/uploads/Instituciones.jpg" class="img-rounded img-contact-index" alt="Cinque Terre" width="50%" height="50%">
                    </div>
                    <p>
                        Servir con calidad, pasión, honestidad, y eficiencia, en todos nuestros servicios, contando con personal altamente calificado en cada una de las áreas de nuestra empresa, con el objetivo de brindar satisfacción a nuestros clientes.
                    </p>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center">Nuestra Visión</h4>
                    <br>
                    <p>Ser reconocidos como una de las empresas líderes, por su alta calidad, pasión, honestidad, y eficiencia en los servicios prestados.</p>
                    <br>
                    <div class="text-center">
                        <img src="http://www.colegioceumurcia.es/Portals/2/ImagenesWEB/colegio-ceu-murcia-institucion.jpg" class="img-rounded img-contact-index" alt="Cinque Terre" width="50%" height="50%">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact"></div>
    <div class="row contact">

        <div class="container">

            <div class="col-md-12">
                <h3 class="text-center">Contáctanos</h3>
                <div class="col-md-6">
                    <form action="controllers/mail.php" method="post">
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="name">Apellido:</label>
                            <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="name">Apellido:</label>
                            <textarea class="form-control" name="name" rows="8" cols="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </form>
                </div>

                <div class="col-md-6">
                    <img src="http://vitalcorp.mx/wp-content/uploads/2015/04/head-contacto.jpg" class="img-rounded img-contact-index" alt="Cinque Terre" width="100%" height="auto">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Final de Jumbotron -->
    <?php include 'footer.php'; ?>
