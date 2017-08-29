<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio | Tu Aliado Express</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Tu Aliado Express,
    TAE,
    Mandados,
    Envíos,
    Envíos en Bogotá,,
    Trámites,
    Trámites en Bogotá,
    Diligencias,
    Diligencias en Bogotá">
    <meta name="author" content="John Arij">
    <meta name="copyright" content="Tu Aliado Express">
    <meta name="description" content="Tu Aliado Express es una empresa de mensajería, trámites, mandados, diligencias, radicaciones, envíos y vueltas de la ciudad de Bogotá, Colombia. ¡Llámanos y nosotros haremos que tu tiempo sea de calidad!">

    <link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<script>
    $(document).ready(function(){

    //Validamos la localización actual de la página

    /*
    Esta función ha sido una de las más complicadas que he hecho hasta ahora
    en JavaScript y puedo jurar que no la he sacado de ningún lado sino que la
    cree por mi propia cuenta
    */

    var locationPage = location.toString();
    var partsOfLocation = locationPage.split('/');
    var parts = partsOfLocation[partsOfLocation.length-1];

    var last = parts.toString();

    console.log(parts);

    switch (last) {
        case "#home":
        $('#homeLink').addClass('active');
        $('#newsLink').removeClass('active');
        $('#servicesLink').removeClass('active');
        $('#usLink').removeClass('active');
        $('#contactLink').removeClass('active');
        break;
        case "#news":
        $('#newsLink').addClass('active');
        $('#homeLink').removeClass('active');
        $('#servicesLink').removeClass('active');
        $('#usLink').removeClass('active');
        $('#contactLink').removeClass('active');
        break;
        case "#services":
        $('#servicesLink').addClass('active');
        $('#homeLink').removeClass('active');
        $('#newsLink').removeClass('active');
        $('#usLink').removeClass('active');
        $('#contactLink').removeClass('active');
        break;
        case "#us":
        $('#usLink').addClass('active');
        $('#homeLink').removeClass('active');
        $('#newsLink').removeClass('active');
        $('#servicesLink').removeClass('active');
        $('#contactLink').removeClass('active');
        break;
        case "#contact":
        $('#contactLink').addClass('active');
        $('#homeLink').removeClass('active');
        $('#newsLink').removeClass('active');
        $('#servicesLink').removeClass('active');
        $('#usLink').removeClass('active');
        break;

    }

    var amountScrolled = 300;

    $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
            $('a.scrollToTop').fadeIn('slow');
        } else {
            $('a.scrollToTop').fadeOut('slow');
        }
    });


    // Este efecto me permite animar ciertos divs para que tengan un fade in
    // fue extraido de la siguiente url https://codepen.io/annalarson/pen/GesqK
    // Tengo que dar credito por ese gran aporte...

    /* Every time the window is scrolled ... */
    // $(window).scroll( function(){

    //     /* Check the location of each desired element */
    //     $('.showme').each( function(i){

    //         var bottom_of_object = $(this).position().top + $(this).outerHeight();
    //         var bottom_of_window = $(window).scrollTop() + $(window).height();

    //         /* If the object is completely visible in the window, fade it it */
    //         if( bottom_of_window > bottom_of_object ){

    //             $(this).animate({'opacity':'1'},2500);

    //         }

    //     });

    // });

});
</script>
<body ng-app="app">
    <header id="home">
        <!-- Barra de Navegación -->
        <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container-fluid" ng-controller="navigationController">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="#home">Tu Aliado Express</a> -->
                    <a class="navbar-left smoothScroll" href="#home" ng-click="changeClass(1)">
                        <img src="img/favicon.png" style="padding-top: 5px; padding-bottom: 5px;" width="50" height="50">
                        &nbsp; <strong style="color: black;">Tu Aliado Express</strong> &nbsp;
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li id="homeLink" class="active">
                            <a class="smoothScroll" href="#home" ng-click="changeClass(1)">Inicio</a>
                        </li>
                        <li id="newsLink">
                            <a class="smoothScroll" href="#news" ng-click="changeClass(2)">Noticias</a>
                        </li>
                        <li id="servicesLink">
                            <a class="smoothScroll" href="#services" ng-click="changeClass(3)">Servicios</a>
                        </li>
                        <li id="usLink">
                            <a class="smoothScroll" href="#us" ng-click="changeClass(4)">Nosotros</a>
                        </li>
                        <li id="contactLink">
                            <a class="smoothScroll" href="#contact" ng-click="changeClass(5)">Contacto</a>
                        </li>
                        <li>
                            <a class="" href="http://www.tualiadoexpress.com.co/blog" target="_blank">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Final de la barra de navegación -->
    </header>
