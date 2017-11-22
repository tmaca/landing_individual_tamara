<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Huella</title>

    <!-- Bootstrap core CSS -->
    <link href="plugins/bootstrap/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="plugins/bootstrap/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="plugins/bootstrap/css/creative.css" rel="stylesheet">
    <!--font-awesome-->
    <link rel="stylesheet" href="plugins/bootstrap/lib/font-awesome/css/font-awesome.min.css">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Huella de Carbono</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Formulario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#video">Video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
                </li>
            </ul>
            <ul class="nav navbar-nav" >
                @guest
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="login">
                            <i class="fa fa-sign-in"></i>
                            Login
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="register">
                            <i class="fa fa-user-plus"></i>
                            Registro
                        </a>
                    </li>
                    @else
                        <li>
                            <a href="http://localhost/~jesus/Authentication/public/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i>
                                Cerrar Sesion
                            </a>
                            <form id="logout-form" action="logout" method="POST">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        @endguest
            </ul>
        </div>
    </div>
</nav>

<header class="masthead">
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="homeHeading">Huella de Carbono</h1>
            <hr>
            <p>
                El cambio climático, provocado por la emisión de Gases de Efecto Invernadero
                (en adelante GEI) y en especial del CO2, es el azote de nuestro tiempo y existen
                evidencias considerables de que la mayor parte del calentamiento global ha sido
                causado por las actividades humanas.</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Registrate</a>
        </div>
    </div>
</header>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">Únete a nosotros por un mundo más limpio</h2>
                <hr class="light">
                <p class="text-faded">Rellena el formulario para crearte una cuenta y empieza a reducir la contaminación</p>
                        <form class="form-block">
                            <div class="form-group">
                                <label for="text">Nombre</label>
                                <input type="text" class="form-control" id="nombre">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Contraseña</label>
                                <input type="password" class="form-control" id="pwd">
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Recordarme</label>
                            </div>

                        <button type="submit" class="btn btn-default btn btn-default btn-xl js-scroll-trigger" >Enviar</button>
                        </form>




        </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Nuestros servicios</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                    <h3>Calculadora de CO2</h3>
                    <p class="text-muted">Calculamos lo que tu centro puede contaminar</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                    <h3>Te ayudamos a mejorar</h3>
                    <p class="text-muted">Te creamos un plan de reducción de contaminación</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                    <h3>Irás viendo el progreso</h3>
                    <p class="text-muted">Con nuestro plan verás los cambios y el mundo te dará las gracias.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                    <h3>Cambiemos el mundo</h3>
                    <p class="text-muted">Cualquier pequeño cambio, ayuda.</p>
                </div>
            </div>
        </div>

    </div>


</section>

<section id="video">
<div class="containerVideo">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/5qCc_79dIh8?autoplay=1" frameborder="0" allowfullscreen class="video"></iframe>
    </iframe>
</div>
</section>
<!--
<section class="p-0" id="portfolio">
    <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
                    <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
                    <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
                    <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
                    <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
                    <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
                    <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
-->
<!--
<div class="call-to-action bg-dark">
    <div class="container text-center">
        <h2>Free Download at Start Bootstrap!</h2>
        <a class="btn btn-default btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
    </div>
</div>
-->

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading">Contacta con nosotros</h2>
                <hr class="primary">
                <p>Si tienes cualquier duda sobre nosotros no dudes en contactar con nosotros.</p></br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center">

                <i class="fa fa-phone fa-3x sr-contact"></i>
                <p>(+34) 943 12 34 56</p>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                <p>
                    <a href="mailto:your-email@your-domain.com">feedback@huelladecarbono.eus</a>
                </p>
            </div>
        </div>

    </div>
</section>

<!-- Bootstrap core JavaScript -->
<script src="plugins/bootstrap/vendor/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/vendor/popper/popper.min.js"></script>
<script src="plugins/bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="plugins/bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="plugins/bootstrap/vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="plugins/bootstrap/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="plugins/bootstrap/js/creative.min.js"></script>

</body>

</html>
