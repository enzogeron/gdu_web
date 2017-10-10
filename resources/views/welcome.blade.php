<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}" type="image/x-icon" />

    <title>GDU - Universidad Nacional de Salta</title>
    <meta name="description" content="Grupo de Desarrollo Universitario">
    <meta name="author" content="Grupo de Desarrollo Universitario">

    <meta property="og:description" content="Somos estudiantes de la Facultad de Ciencias Exactas, comprometidos con cambiar la realidad universitaria, implementando proyectos tecnológicos y sociales innovadores, en base a los conocimientos adquiridos por esta casa de altos estudios, para contrarrestar las problemáticas que atraviesa nuestra Universidad."/>
    <meta property="og:site_name" content="GDU"/>
    <meta property="og:url" content="http://gdu.unsa.edu.ar"/>
    <meta property="og:title" content="Grupo de Desarrollo Universitario | Universidad Nacional de Salta"/>
    <meta property="og:image" content="{{ url('images/gdu-unsa.jpg') }}"/>
    <meta property="fb:admins" content="1870004986617179"/>
    <meta property="author" content="Enzo Geron" />
    <meta property="keywords" content="estudiantes, equipo, grupo, unsa, informatica, programacion, programadores, club, amigos, facultad ciencias exactas"/>

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Preloader -->
    {!! Html::style('css/preloader.css') !!}
    <!-- <link rel="stylesheet" href="css/preloader.css" type="text/css" media="screen, print"/> -->

    <!-- Icon Font-->
    {!! Html::style('style.css') !!}
    {!! Html::style('css/owl.carousel.css') !!}
    {!! Html::style('css/owl.theme.default.css') !!}
    <!-- Animate CSS-->
    {!! Html::style('css/animate.css') !!}

    <!-- Bootstrap -->
    {!! Html::style('css/bootstrap.min.css') !!}

    <!-- Style -->
    {!! Html::style('css/style.css') !!}

    <!-- Responsive CSS -->
    {!! Html::style('css/responsive.css') !!}

    {!! Html::style('css/magnific-popup.css') !!}
    {!! Html::style('css/toastr.min.css') !!}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/lte-ie7.js"></script>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <header id="HOME" style="background-position: 50% -125px;">
        <div class="section_overlay">
           <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="images/logo.png" alt="GDU"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#HOME">Inicio</a></li>
                            <li><a href="#ABOUT">Sobre nosotros</a></li>
                            <li><a href="#PROJECTS">Proyectos</a></li>
                            <li><a class="popup-with-zoom-anim" href="#contact-dialog">Equipo</a></li>
                            <li><a href="#CONTACT">Contacto</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>

            <div id="contact-dialog" class="zoom-anim-dialog mfp-hide">
                <h1 class="text-center">HAY EQUIPO</h1>
                <br>
                <ul class="list-team">
                    <li><strong>CEO: </strong>Enzo Gerón</li>
                    <li>Dario Ledesma</li>
                    <li>Ezequiel Ramos</li>
                    <li>Gabriel Ramirez</li>
                    <li>Facundo Echenique</li>
                    <li>Miguel Perez</li>
                    <li>Nicolas Cuadra</li>
                    <li>Ana Mechaca</li>
                    <li>Fabian Salva</li>
                    <li>Walter Marmanillo</li>
                    <li>Wilson Colque</li>
                    <li>Pablo Alarcón</li>
                    <li>Emanuel Barboza</li>
                    <li>David Quispe</li>
                    <li>Sebastian Casimiro</li>
                </ul>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="home_text wow fadeInUp animated">
                            <img src="images/gdulogo.png">
                            <h2 class="title-main">Grupo de Desarrollo Universitario</h2><br>
                            <p>Te invitamos a participar en el <strong>"Club de Programadores"</strong> un nuevo espacio creado para participar en el desarrollo de proyectos tecnológicos, sociales e innovadores que beneficien a toda la comunidad universitaria.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <a class="image-popup-vertical-fit btn btn-default btn-plus" href="{{ url('images/club_de_programadores.jpg') }}" title="Club de Programadores 2017">SUMATE AL CLUB</a>
                    </div>
                </div>
            </div>
        </div> 

    </header>

    <section class="about_us_area" id="ABOUT">

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="title-main wow fadeInUp animated" data-wow-delay="0.5s">Estudiantes con un gran compromiso social</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4  wow fadeInLeft animated">
                    <p class="about_us_p">Somos estudiantes de la Facultad de Ciencias Exactas, comprometidos con cambiar la realidad universitaria, implementando proyectos tecnológicos y sociales innovadores, en base a los conocimientos adquiridos por esta casa de altos estudios, para contrarrestar las problemáticas que atraviesa nuestra Universidad.</p>
                </div>
                <div class="col-md-4  wow fadeInRight animated">
                    <p class="about_us_p">Uno de nuestros objetivos es apoyar a un importante grupo de estudiantes, en áreas directamente vinculadas con el campo de la Tecnología de la Información (IT), facilitando las tareas de investigación y desarrollo, mediante la concertación de proyectos multidisciplinarios.</p>
                </div>
                <div class="col-md-4  wow fadeInRight animated">
                    <p class="about_us_p">Fomentamos el desarrollo de investigaciones científicas, tanto básica como aplicadas, individuales o interdisciplinarias, principalmente en las áreas de la Ingeniería de Software, Informática Educativa, Robótica, Gestión de Tecnologías, Desarrollo Web y el Desarrollo de Aplicaciones para dispositivos móviles.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="row">
                <h2 class="text-center title-main wow fadeInUp" data-wow-delay="0.5s">Nos caracterizamos por ser</h2>
                <br><br>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="1s">
                        <i class="icon-pencil"></i>
                        <h2>Innovadores</h2>
                        <p>Desarrollamos soluciones informáticas para problemas frecuentes</p>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="2s">
                        <i class="icon-gears"></i>
                        <h2>Inclusivos</h2>
                        <p>Podés acercarte sin miedo y plantearnos tus ideas, proyectos y/o problemáticas</p>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="3s">
                        <i class="icon-camera"></i>
                        <h2>Creativos</h2>
                        <p>Somos creadores de contenido audiovisual y amantes del Marketing Digital.</p>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="4s">
                        <i class="icon-magnifying-glass"></i>
                        <h2>Divulgadores</h2>
                        <p>Promovemos el dictado de cursos, talleres, capacitaciones y la realización de jornadas informáticas</p>
                    </div>
                </div>

            </div>            
        </div>
    </section>
    
    <section class="work_area" id="PROJECTS">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="wow fadeInUp animated">
                        <h2 class="text-center title-main">Nuestros proyectos</h2>
                        <p>Agradecemos a todas las personas que nos brindaron su apoyo para que estos proyectos se conviertan en una realidad.</p>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="slider">
            <div class="slider-row">
            </div>
        </div>
        <br><br>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="images/gupi.jpg" alt="gupi">
                        <div class="image_overlay">
                            <h2>GUPI</h2>
                            <h4>Guía Universitaria Para Ingresantes</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="images/altoke.jpg" alt="altoke">
                        <div class="image_overlay">
                            <h2>Altoke</h2>
                            <h4>Altoke App - Fac. de Cs. Exactas</h4>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="images/becabibexa.jpg" alt="becas bibexa">
                        <div class="image_overlay">
                            <h2>Becas Bibexa</h2>
                            <h4>Capacitaciones a distancia</h4>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="row pad_top">
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="images/club_programadores.jpg" alt="club de programadores">
                        <div class="image_overlay">
                            <h2>Club de Programadores</h2>
                            <h4>Todo el mundo debería saber programar</h4>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="images/jes.jpg" alt="jornadas de emprendedores salteños">
                        <div class="image_overlay">
                            <h2>JES</h2>
                            <h4>Jornadas de Emprendedores Salteños</h4>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                </div>
            </div>           
        </div>
    </section>

    <section class="contact" id="CONTACT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="wow fadeInUp animated">
                        <h2 class="title-main wow fadeInUp" data-wow-delay="0.5s">COMUNÍCATE CON NOSOTROS</h2>
                        <p>Tenes alguna consulta, queres sumarte o necesitas ayuda, no dudes en ponerte en contacto con nosotros. Estamos para ayudarte.</p>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="container">
            <div class="row">

                <div class="col-md-3  wow fadeInLeft animated">
                    <div class="single_contact_info">
                        <h2>Celular</h2>
                        <p>387 4535 343 (Enzo Geron)</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Email</h2>
                        <p>gdu@exa.unsa.edu.ar</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Dirección</h2>
                        <p>Av. Bolivia 5150 - UNSa</p>
                    </div>
                </div>

                <div class="col-md-9  wow fadeInRight animated">
                    {!! Form::open(['route' => 'send.mail', 'method' => 'POST', 'class' => 'contact-form']) !!}
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su nombre*', 'required']) !!}
                                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su email*', 'required']) !!}
                                {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su numero de celular']) !!}
                            </div>
                            <div class="col-md-6">
                                {!! Form::textarea('message', null, ['class' => 'form-control', 'id' => 'message', 'placeholder' => 'Escriba su mensaje...*', 'rows' => '25', 'cols' => '10', 'required']) !!}
                                @captcha()
                                {!! Form::submit('Enviar', ['class' => 'btn btn-default submit-btn form_submit']) !!}                             
                            </div>
                        </div>
                    <span>* campos obligatorios {{ session()->get('notification') }}</span>
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </section>

    <footer>

        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="footer_logo   wow fadeInUp animated">
                            <img class="image-footer" src="{{ url('images/unsa_logo.png') }}" alt="Universidad Nacional de Salta">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center   wow fadeInUp animated">
                        <div class="social">
                            <h2>Seguinos en nuestras redes sociales</h2>
                            <ul class="icon_list">
                                <li><a href="https://www.facebook.com/gdusalta/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/gdusalta/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/gdusalta" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCNIpyP2kVM_Af3MkCJYWVxw" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="copyright_text   wow fadeInUp animated">
                            <p>&copy; 2017 GDU - Grupo de Desarrollo Universitario<br><a href="http://www.unsa.edu.ar/" target="_blank">Universidad Nacional de Salta</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/jquery.nicescroll.js') !!}
    {!! Html::script('js/owl.carousel.js') !!}
    {!! Html::script('js/wow.js') !!}
    {!! Html::script('js/script.js') !!}
    {!! Html::script('js/jquery.magnific-popup.min.js') !!}
    {!! Html::script('js/toastr.min.js') !!}

    <script type="text/javascript">
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.image-popup-vertical-fit').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-img-mobile',
                image: {
                    verticalFit: true
                }
            });
        });

        @if(session()->has('notification'))
            toastr.success("{{ session()->get('notification') }}");
        @endif
    </script>

</body>

</html>