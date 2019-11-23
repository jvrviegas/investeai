<!DOCTYPE html>
<html lang="en">
<head>
    <title>Financial</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Invest project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/financial.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/financial_responsive.css')}}">
</head>
<body>

<div class="super_container">

    <!-- Home -->

    <div class="home">
        <div class="home_slider_container">

            <!-- Home Slider -->

            <div class="owl-carousel owl-theme home_slider">

                <!-- Slider Item -->
                <div class="owl-item">
                    <div class="slider_background" style="background-image:url({{asset('images/financial.jpg')}})"></div>
                    <div class="container fill_height">
                        <div class="row fill_height">
                            <div class="col fill_height">
                                <div class="home_slider_content">
                                    <h1>Invista seu dinheiro para o futuro</h1>
                                    <div class="home_slider_text">Aqui lhe informamos a melhor opção de investimento para que seu dinheiro renda mais.</div>
                                    <div class="link_button home_slider_button"><a href="#">Leia mais</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--<!-- Slider Item -->
                <div class="owl-item">
                    <div class="slider_background" style="background-image:url({{asset('images/financial.jpg')}})"></div>
                    <div class="container fill_height">
                        <div class="row fill_height">
                            <div class="col fill_height">
                                <div class="home_slider_content">
                                    <h1>Invest your money for the future</h1>
                                    <div class="home_slider_text">Donec vel ante rhoncus, posuere nulla quis, interdum nisi. Vestibulum laoreet lacinia diam, eget blandit sem gravida at.</div>
                                    <div class="link_button home_slider_button"><a href="#">read more</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item">
                    <div class="slider_background" style="background-image:url({{asset('images/financial.jpg')}})"></div>
                    <div class="container fill_height">
                        <div class="row fill_height">
                            <div class="col fill_height">
                                <div class="home_slider_content">
                                    <h1>Invest your money for the future</h1>
                                    <div class="home_slider_text">Donec vel ante rhoncus, posuere nulla quis, interdum nisi. Vestibulum laoreet lacinia diam, eget blandit sem gravida at.</div>
                                    <div class="link_button home_slider_button"><a href="#">read more</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item">
                    <div class="slider_background" style="background-image:url({{asset('images/financial.jpg')}})"></div>
                    <div class="container fill_height">
                        <div class="row fill_height">
                            <div class="col fill_height">
                                <div class="home_slider_content">
                                    <h1>Invest your money for the future</h1>
                                    <div class="home_slider_text">Donec vel ante rhoncus, posuere nulla quis, interdum nisi. Vestibulum laoreet lacinia diam, eget blandit sem gravida at.</div>
                                    <div class="link_button home_slider_button"><a href="#">read more</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}

            </div>

            {{--<div class="home_slider_nav home_slider_prev d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/arrow_l.png')}}" alt=""></div>
            <div class="home_slider_nav home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/arrow_r.png')}}" alt=""></div>--}}

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

    <!-- Features -->

    <div class="features">
        <div class="container">
            <div class="row">

                <!-- Features Title -->
                <div class="col-lg-3 features_col">
                    <div class="features_content">
                        <div class="features_title_container">
                            <div class="features_subtitle">dê uma olhada nas nossas</div>
                            <div class="features_title">Vantagens</div>
                            <div class="features_text">Muito mais que apenas um perfil de investidor, um </div>
                            <div class="link_button features_button"><a href="#">mais informações</a></div>
                        </div>
                    </div>
                </div>

                <!-- Features Item -->
                <div class="col-lg-3 features_col">
                    <div class="features_item">
                        <div class="features_image"><img src="{{asset('images/features_1.jpg')}}" alt=""></div>
                        <div class="features_item_content">
                            <div class="features_item_title"><a href="#">Nós cuidamos de você</a></div>
                            <div class="features_item_text">
                                <p>Aqui o seu dinheiro e esforço são valorizados, tenha as melhores indicações de investimento para o seu perfil.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features Item -->
                <div class="col-lg-3 features_col">
                    <div class="features_item">
                        <div class="features_image"><img src="{{asset('images/features_2.jpg')}}" alt=""></div>
                        <div class="features_item_content">
                            <div class="features_item_title"><a href="#">Nós cuidamos de você</a></div>
                            <div class="features_item_text">
                                <p>Aqui o seu dinheiro e esforço são valorizados, tenha as melhores indicações de investimento para o seu perfil.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features Item -->
                <div class="col-lg-3 features_col">
                    <div class="features_item">
                        <div class="features_image"><img src="{{asset('images/features_3.jpg')}}" alt=""></div>
                        <div class="features_item_content">
                            <div class="features_item_title"><a href="#">Nós cuidamos de você</a></div>
                            <div class="features_item_text">
                                <p>Aqui o seu dinheiro e esforço são valorizados, tenha as melhores indicações de investimento para o seu perfil.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA -->

    <div class="cta">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="cta_content text-center d-flex flex-row align-items-center justify-content-center">
                        <div class="cta_text"><a href="{{route('investorProfile')}}">Descubra seu perfil de investidor!</a></div>
                    </div>
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
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="{{asset('js/financial_custom.js')}}"></script>
</body>
</html>
