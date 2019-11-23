<!DOCTYPE html>
<html lang="en">
<head>
    <title>Services</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Invest project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/services.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/services_responsive.css')}}">
</head>
<body>

<div class="super_container">

    <!-- Home -->

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/services_background.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_content_inner">
                            <div class="home_title">Perfil de Investidor</div>
                            <div class="home_breadcrumbs">
                                <ul>
                                    <li><a href="{{route('index')}}">Página Inicial</a></li>
                                    <li>Perfil de Investidor</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="top_bar_container d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <div class="logo">
                                        <a href="#">
                                            <div class="logo_line_1">Investe<span>Aí</span></div>
                                            <div class="logo_line_2">O futuro do seu dinheiro está aqui!</div>
                                            <div class="logo_img"><img src="{{asset('images/investeai-logo.png')}}" alt=""></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="top_bar_content ml-auto">
                                    <div class="main_menu_contact">
                                        <div class="main_menu_phone"><img src="{{asset('images/phone-call.svg')}}" class="svg" alt=""><span>(98) 3133-4245</span></div>
                                        <div class="main_menu_email"><img src="{{asset('images/envelope.svg')}}" class="svg" alt=""><span>contato@investeai.com.br</span></div>
                                    </div>
                                    <div class="main_menu_social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="burger">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Menu -->
            <div class="main_menu">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="main_menu_container d-flex flex-row align-items-center justify-content-start">
                                <div class="main_menu_content">
                                    <ul class="main_menu_list">
                                        <li><a href="{{url('/')}}">Página Inicial
                                                <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
														<g>
                                                            <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	"/>
                                                        </g>
													</svg>
                                            </a></li>
                                        <li><a href="{{url('/investor_profile')}}">Perfil de Investidor
                                                <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
												<g>
                                                    <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	"/>
                                                </g>
											</svg>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu -->

            <div class="menu">
                <ul class="menu_list">
                    <li class="menu_item">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <a href="#">Página Inicial</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu_item">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <a href="{{url('/investor_profile')}}">Perfil de Investidor</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
    </div>

    <!-- Points -->

    <div class="points">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container">
                        <div class="section_subtitle">dê uma olhada nos</div>
                        <div class="section_title">Nossos Serviços</div>
                    </div>
                </div>
            </div>
            <div class="row points_container">

                <!-- Service -->
                <div class="col-lg-4 col-md-6 point_col">
                    <div class="point clearfix">
                        <div class="point_image"><img src="{{asset('images/services_1.png')}}" alt=""></div>
                        <div class="point_content">
                            <div class="point_title">As melhores opções de investimento</div>
                            <div class="point_text">
                                <p>Descubra onde seu dinheiro rende mais de acordo com seus objetivos.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="col-lg-4 col-md-6 point_col">
                    <div class="point clearfix">
                        <div class="point_image"><img src="{{asset('images/services_2.png')}}" alt=""></div>
                        <div class="point_content">
                            <div class="point_title">Descubra seu perfil de investidor</div>
                            <div class="point_text">
                                <p>Com o seu perfil traçado fica mais fácil saber onde investir.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="col-lg-4 col-md-6 point_col">
                    <div class="point clearfix">
                        <div class="point_image"><img src="{{asset('images/services_3.png')}}" alt=""></div>
                        <div class="point_content">
                            <div class="point_title">Análise de Riscos</div>
                            <div class="point_text">
                                <p>Fique por dentro de todos os riscos ao escolher seus investimentos.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{--<!-- Service -->
                <div class="col-lg-4 col-md-6 point_col">
                    <div class="point clearfix">
                        <div class="point_image"><img src="images/services_4.png" alt=""></div>
                        <div class="point_content">
                            <div class="point_title">Venture Capitals</div>
                            <div class="point_text">
                                <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="col-lg-4 col-md-6 point_col">
                    <div class="point clearfix">
                        <div class="point_image"><img src="images/services_5.png" alt=""></div>
                        <div class="point_content">
                            <div class="point_title">The Stock Market</div>
                            <div class="point_text">
                                <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="col-lg-4 col-md-6 point_col">
                    <div class="point clearfix">
                        <div class="point_image"><img src="images/services_6.png" alt=""></div>
                        <div class="point_content">
                            <div class="point_title">Mutual Funds</div>
                            <div class="point_text">
                                <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris.</p>
                            </div>
                        </div>
                    </div>
                </div>--}}

            </div>
        </div>
    </div>

    <!-- Services -->

    <div class="services">
        <div class="services_background parallax-window" data-parallax="scroll" data-image-src="images/services_background_2.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-row flex-wrap align-items-start justify-content-start">

                    <!-- Service -->
                    <div class="service">
                        <div class="service_icon"><img src="{{asset('images/service_1.svg')}}" class="svg" alt=""></div>
                        <div class="service_title">Título 1</div>
                        <div class="service_text">
                            <p>Descrição 1.</p>
                        </div>
                        <div class="service_link"><a href="#">Leia Mais</a></div>
                    </div>

                    <!-- Service -->
                    <div class="service">
                        <div class="service_icon"><img src="{{asset('images/service_2.svg')}}" class="svg" alt=""></div>
                        <div class="service_title">Título 2</div>
                        <div class="service_text">
                            <p>Descrição 2.</p>
                        </div>
                        <div class="service_link"><a href="#">Leia Mais</a></div>
                    </div>

                    <!-- Service -->
                    <div class="service">
                        <div class="service_icon"><img src="{{asset('images/service_3.svg')}}" class="svg" alt=""></div>
                        <div class="service_title">Título 3</div>
                        <div class="service_text">
                            <p>Descrição 3.</p>
                        </div>
                        <div class="service_link"><a href="#">Leia Mais</a></div>
                    </div>

                    {{--<!-- Service -->
                    <div class="service">
                        <div class="service_icon"><img src="images/service_4.svg" class="svg" alt=""></div>
                        <div class="service_title">Private Internet Banking</div>
                        <div class="service_text">
                            <p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
                        </div>
                        <div class="service_link"><a href="#">Read More</a></div>
                    </div>

                    <!-- Service -->
                    <div class="service">
                        <div class="service_icon"><img src="images/service_5.svg" class="svg" alt=""></div>
                        <div class="service_title">Best Business Consulting</div>
                        <div class="service_text">
                            <p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
                        </div>
                        <div class="service_link"><a href="#">Read More</a></div>
                    </div>

                    <!-- Service -->
                    <div class="service">
                        <div class="service_icon"><img src="images/service_6.svg" class="svg" alt=""></div>
                        <div class="service_title">Consumer Products Consulting</div>
                        <div class="service_text">
                            <p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
                        </div>
                        <div class="service_link"><a href="#">Read More</a></div>
                    </div>--}}

                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 order-md-1 order-2">
                        <div class="copyright_content d-flex flex-row align-items-center justify-content-start">
                            <div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | <a href="#" target="_blank">Investe Aí</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 order-md-2 order-1">
                    <nav class="footer_nav d-flex flex-row align-items-center justify-content-md-end">
                        <ul>
                            <li><a href="#">Página Inicial</a></li>
                            <li><a href="#">Perfil de Investidor</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('js/about_custom.js')}}"></script>
</body>
</html>
