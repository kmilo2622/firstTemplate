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
                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <a href="">
                                <div class="caption text-center">
                                    <h3>Servicio <?php echo $i ?></h3>
                                </div>
                                <img src="https://www.bbvaopenmind.com/wp-content/uploads/2015/09/BBVA-OpenMind-La-innovaci%C3%B3n-y-la-econom%C3%ADa-de-los-servicios.jpg" class="img-circle" alt="Cinque Terre" width="200" height="400">
                            </a>
                            <div class="caption">
                                <br>
                                <!-- Opcional -->
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    <br>
                                    <a href="">Leer Más...</a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    <div id="us"></div>
    <div class="row whoare">
        <div class="container">
            <div class="col-md-12">
                <h3 class="text-center">¿Quiénes Somos?</h3>
                <div class="col-md-6">
                    <h4>Nuestra Misión</h4>
                    <div class="text-center">
                        <img src="http://www.definicionabc.com/wp-content/uploads/Instituciones.jpg" class="img-rounded img-contact-index" alt="Cinque Terre" width="50%" height="50%">
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab minus quaerat, debitis officia suscipit consectetur deleniti ratione inventore provident, reprehenderit cumque, aperiam quibusdam repudiandae possimus architecto obcaecati hic et impedit.
                    </p>
                </div>
                <div class="col-md-6">
                    <h4>Nuestra Visión</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dolor vero amet cum soluta libero incidunt. Tempore aliquid, fuga consectetur id. Dolorum repudiandae similique ipsa sunt, excepturi, delectus repellendus? Beatae!</p>
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
