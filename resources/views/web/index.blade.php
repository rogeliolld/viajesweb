<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ColRaices</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" />

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('web/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css" rel="stylesheet" />
    <link href="{{ asset('web/css/style.css') }}" rel="stylesheet" />
   

    <!--Css customs-->
    <link href="{{ asset('web/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('web/css/slider/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('web/css/destino.css') }}" rel="stylesheet" />
    

    <!-- Owl Stylesheets -->
    <link href="{{ asset('web/assets/plugins/owlcarousel/docs/assets/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('web/assets/plugins/owlcarousel/docs/assets/owlcarousel/assets/owl.theme.default.css') }}" rel="stylesheet" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="{{ asset('web/assets/plugins/owlcarousel/docs/assets/owlcarousel/owl.carousel.js') }}"></script>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <img src="{{ asset('web/assets/img/logo.jpg') }}" class="img-fluid" />
            </a>
            <button
                class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto col-11">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3  js-scroll-trigger"
                            href="#destinos">Destinos</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3  js-scroll-trigger"
                            href="#planes">Planes</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3  js-scroll-trigger"
                            href="#contact">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead bg-primary text-white text-center">
        <div class="d-flex align-items-center flex-column">
            <div class="timeline">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        {{$i=0}}
                        @foreach ($slider as $slide)
                        {{$i++}}
                      
                        <div class="swiper-slide" style="background-image: url({{asset('storage').'/'.$slide->foto}})"
                            data-year="{{$i}}">
                            <div class="swiper-slide-content"><span class="timeline-year">¿Quieres descubrir la vida?
                                </span>
                                <h4 class="timeline-title">TU VIAJE INICIA  <br /><span
                                        class="titulo-naranja">AQUÍ</span></h4>
                                <p class="timeline-text">Solo debes elegir</p>
                                <p class="timeline-text">Destino <br /> Presupuesto<br /> y con quien viajar</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Section-->
    <section class="page-section portfolio destinos" id="destinos">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <span class="barra">&nbsp;</span>
            <div class="titulos">

                <h5 class="text-center leyenda">{{$pagina1->leyenda}}</h5>
                <h3 class="text-center titulo">{{$pagina1->titulo}}</h3>
            <h3 class="text-center subtitulo">{{$pagina1->subtitulo}}</h3>
            </div>

            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center mt-4 mb-4">
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title icono"><i class="{{$pagina1->icono1}}"></i></h5>
                            <p class="card-text">{{$pagina1->icondes1}}</p>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title icono"><i class="{{$pagina1->icono2}}"></i></h5>
                            <p class="card-text">{{$pagina1->icondes2}}</p>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title icono"><i class="{{$pagina1->icono3}}"></i> </h5>
                            <p class="card-text">{{$pagina1->icondes3}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <span class="barra">&nbsp;</span>

            <div class="container">
                <h3 class="titulo">{{$pagina2->titulo}}</h3>
                <h2 class="subtitulo">{{$pagina2->subtitulo}}</h2>
                <p class="text-center p-5">{{$pagina2->descripcion}}</p>
            </div>

        </div>
    </section>
    <section class="services-area  services-padding galeria-destino">
        <div class="container">
            <div class="row">
                <div class="col-12 m-auto text-center">

                    <button class="btn btn-default filter-button" data-filter="colombia">Colombia</button>
                    <button class="btn btn-default filter-button" data-filter="chile">Chile</button>
                    <button class="btn btn-default filter-button" data-filter="argentina">Argentina</button>
                    <button class="btn btn-default filter-button" data-filter="eeuu">EEUU</button>
                    <button class="btn btn-default filter-button" data-filter="brazil">Brazil</button>
                    <button class="btn btn-default filter-button" data-filter="ecuador">Ecuador</button>
                </div>

                <div class="owl-carousel owl-theme">

                    <div class="gallery_product filter colombia">
                        <div class="item">
                            <div class="col-4">
                                <h2 class="img-text align-items-center">Bogotá</h2>
                                <div class="clearfix"></div>
                            </div>
                            
                            <img src="{{ asset('web/assets/img/bogota.jpg') }}" class="img-fluid">
                        </div>
                    </div>

                    <div class="gallery_product filter colombia ">
                        <div class="item">
                            <div class="col-4">
                                <h2 class="img-text">Cali</h2>
                                <div class="clearfix"></div>
                            </div>
                            <img src="{{ asset('web/assets/img/cali.jpg') }}" class="img-fluid">

                        </div>
                    </div>
                    <div class="gallery_product filter colombia">
                        <div class="item">
                            <div class="col-4">
                                <h2 class="img-text">Cartagena</h2>
                                <div class="clearfix"></div>
                            </div>
                            <img src="{{ asset('web/assets/img/cartagena.jpg') }}" class="img-fluid">
                        </div>
                    </div>
                    <div class="gallery_product filter colombia">
                        <div class="item">
                            <div class="col-4">
                                <h2 class="img-text">Medellin</h2>
                                <div class="clearfix"></div>
                            </div>
                            <img src="{{ asset('web/assets/img/medellin.jpg') }}" class="img-fluid">
                        </div>
                    </div>


                </div>
                <div class="owl-carousel owl-theme">
                    <div class="gallery_product filter chile">
                        <div class="item">
                            <div class="col-4">
                                <h2 class="img-text">Medellin</h2>
                                <div class="clearfix"></div>
                            </div>
                            <img src="assets/img/medellin.jpg" class="img-fluid">
                        </div>
                    </div>

                </div>
                <div class="owl-carousel owl-theme">
                    <div class="gallery_product filter argentina">
                        <div class="item">
                            <div class="col-4">
                                <h2 class="img-text">Medellin</h2>
                                <div class="clearfix"></div>
                            </div>
                            <img src="assets/img/medellin.jpg" class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Planes-->
    <section class="page-section planes mb-0" id="planes">
        <div class="container">
            <span class="barra">&nbsp;</span>

            <div class="titulos">

                <h5 class="text-center leyenda">{{$paginaplanes->leyenda}}</h5>
                <h3 class="text-center titulo">{{$paginaplanes->titulo}}</h3>
                <h3 class="text-center subtitulo">{{$paginaplanes->subtitulo}}</h3>
            </div>
            <div class="row">
                <div class="col-lg-11 ml-auto text-center mt-5">
                    <p>{{$paginaplanes->descripcion}}</p>
                </div>
            </div>

            
            <!--Tipos de planes-->
            @foreach ($planes as $plan)
            
             <div class="tipos-planes mt-6 ">
                <div class="row">
                    <div class="col-lg-7 {{$plan->orientacion=="dr"?'order-2 text-right':''}} ">
                        <h5 class="titulo">{{$plan->titulo}}</h5>
                        <h2 class="subtitulo">{{$plan->subtitulo}}</h2>
                        <div class="{{$plan->orientacion=="dr"?'col-12':'col-11'}} mt-5">
                            <p class="{{$plan->orientacion=="dr"?'text-right':'text-center'}}">{{$plan->descripcion}}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{asset('storage').'/'.$plan->foto}}" class="img-fluid" />
                    </div>
                </div>
            </div>
            @endforeach
            
         

        </div>
    </section>
    <!-- Contact Section-->
    <section class="page-section contacto" id="contact">
        <div class="container">

            <div class="row">
                <div class="col-lg-7 border-right">
                    <div class="titulos">
                        <h5 class="text-center leyenda">{{$paginacontacto->leyenda}} </h5>
                        <h3 class="text-center titulo">{{$paginacontacto->titulo}}</h3>
                        <h3 class="text-center subtitulo">{{$paginacontacto->subtitulo}}</h3>
                    </div>
                    <div class="col-lg-9" style="margin: auto;">
                    <p class="text-center">{{$paginacontacto->descripcion}}</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                    <form class="mt-5" id="contactForm" name="sentMessage" novalidate="novalidate">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre Completo"
                                    required="required"
                                    data-validation-required-message="Por favor, introduzca su nombre." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <input class="form-control" id="email" name="email" type="email" placeholder="Email"
                                    required="required"
                                    data-validation-required-message="Por favor, introduzca su email." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <input class="form-control" id="telefono" name="telefono" type="tel" placeholder="Número de contacto"
                                    required="required"
                                    data-validation-required-message="Por favor, introduzca su número de teléfono." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-group text-right"><button class="btn btn-primary btn-lg" id="sendMessageButton" type="submit">Enviar</button></div>

                        <br />
                        <div id="success"></div>
                        <div class="form-group text-right">
                            <h2 class="titulo">Completa tu</h2>
                            <h1 class="subtitulo">RESERVA</h1>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center">

        <div class="container">
            <div class="col-lg-12 mb-5 mb-lg-0 img-background" style="background-image: url({{ asset('web/assets/img/isla.jpg') }});">
                <div class="col-lg-6 m-auto">
                    <h2>Lorem ipsum dolor sit amet, consetetur</h2>
                </div>

            </div>
            <div class="row mt-4">

                <div class="col-lg-12 mb-5">
                    <img src="{{ asset('web/assets/img/logo.jpg') }}" class="img-fluid" />
                </div>

                <div class="col-lg-4">
                    <h4 class="mb-4 titulo">Hablemos</h4>
                    <p class="mb-0">
                        The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz
                        graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick .Fox
                        nymphs +571 325 458 4521 Brent ak mercadeo@momentum.com
                    </p>
                </div>
                <div class="col-lg-4">
                    <h4 class="mb-4 titulo">Menu</h4>
                    <ul>
                        <li><a href="#destinos">Destinos</a></li>
                        <li><a href="#planes">Planes</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h4 class="mb-4 titulo">Nuestra Redes</h4>
                    <div class="col-lg-8 col-6 m-auto">
                        <div class="row">
                            <div class="col-lg-6 col-6">
                                <a href="#" class="icono">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <div class="col-lg-6 col-6">
                                <a href="#" class="icono">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-6">
                                <a href="#" class="icono">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                            <div class="col-lg-6 col-6">
                                <a href="#" class="icono">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
                class="fa fa-chevron-up"></i></a>
    </div>

    <!--Barra redes sociales flotante-->
    <div class="d-none d-sm-none  d-md-block ">
        <div class="social-bar">

            <a href="#" class="icon" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="icon" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="icon" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="icon" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    </div>


    <!-- Bootstrap core JS-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="{{ asset('web/assets/mail/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('web/assets/mail/contact_me.js') }}"></script>
  
    <!-- Core theme JS-->
    
    <script src="{{ asset('web/js/scripts.js') }}"></script>
    <script src="{{ asset('web/js/slider.js') }}"></script>
    <script>
        $(document).ready(function () {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                //margin: 10,

                //loop: true,

                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            })


            $(window).on('scroll', function () {
                var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();

                if (scrollBottom === 0) {
                    $(".social-bar").css("display", "none");
                } else {
                    $(".social-bar").css("display", "");
                }

            }).trigger('scroll');


        })
        var timelineSwiper = new Swiper('.timeline .swiper-container', {
            direction: 'vertical',
            loop: false,
            speed: 1600,
            pagination: '.swiper-pagination',
            paginationBulletRender: function (swiper, index, className) {
                var year = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-year');
                return '<span class="' + className + '">' + year + '</span>';
            },
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            breakpoints: {
                768: {
                    direction: 'horizontal',
                }
            }
        });

    </script>
</body>

</html>