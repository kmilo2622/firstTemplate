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

    <!-- Sección de Nosotros -->

    <div id="news"></div>

    <?php include 'spaces/noticias.php'; ?>

    <!-- Sección de Servicios -->

    <div id="services"></div>

    <?php include 'spaces/servicios.php'; ?>

    <!-- Sección de Identidad Corporativa -->

    <div id="us"></div>

    <?php include 'spaces/us.php'; ?>

    <!-- Sección de Contacto -->

    <div id="contact"></div>

    <?php include 'spaces/contact.php'; ?>

    <!-- Final de Jumbotron -->
    <?php include 'footer.php'; ?>
