<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token --> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ПроВыборы</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <!-- FontAwesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel nav_stl">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav mr-auto">
                        
                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto word_stl">
                        <li><div class="mr15"><a class="nav-link head_nav_stl nav_head" href="{{ url('/') }}"><i class="fa fa-search mr8 ico_size"></i> Поиск</a></div></li>
                        <li><div class="mr15"><a class="nav-link head_nav_stl nav_head" href="{{ url('/') }}"><i class="fas fa-map-marker-alt mr8 ico_size"></i> Череповец <i class="fas fa-caret-down ml5"></i></a></div></li>
                        <li><div class="mr15"><a class="nav-link head_nav_stl nav_head" href="{{ url('/') }}"><i class="fas fa-language mr8 ico_size"></i>
                        Russian <i class="fas fa-caret-down ml5"></i></a></div></li>

                        <!-- Authentication Links --> 
                       <li class="nav-item dropdown"> 
                            <a class="nav-link dropdown-toggle drop_lk" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle mr8 ico_size"></i> Личный кабинет <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu drop_stl word_stl" aria-labelledby="navbarDropdown">
                                <div class="row justify-content-center text-center">
                                    <div class="col-10">
                                        <div class="row justify-content-end">
                                            <div class="col-4">
                                              <span class="text-center word_stl3 lk_in">Вход</span>
                                            </div>
                                            <div class="col-4  col align-self-start text-right">
                                               <a href="#" class="times_stl">&times</a>
                                            </div>
                                        </div>
                                    <div class="row justify-content-center mt10">
                                        <div class="col-md-8">
                                            <span class="fast_in">Быстрый вход</span>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="bor_f">
                                                <a href="/" class="soc_ico"><i class="fab fa-facebook-f"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="bor_vk">
                                                <a href="/" class="soc_ico"><i class="fab fa-vk"></i></a>
                                            </div>   
                                        </div>
                                    </div>
                                    <br>
                                    <input class="form-control login_inp" type="email" placeholder="E-mail">
                                    <input class="form-control login_inp mt10" type="password" placeholder="Пароль">
                                    <div class="fpass">
                                        <a href="/" class="foget_pass">Забыли пароль?</a>
                                    </div>
                                    <button class="btn btn-default form-control login_but">Войти</button>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <hr>
                                <a href="/" class="register_but">Зарегистрироваться <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </li>
                            <!--  -->
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
        <footer class="foot">
            <div class="container-fluid ">
                <div class="container">
                    <div class="row ">
                        <div class="col-md mt50 text-left ">
                            <div class="row">
                                <div class="col-md h100">
                                    <span  class="title_foot">
                                        23 00 78
                                    </span>
                                    <br>
                                    <span class="content_foot">
                                        Избирательная комиссия Вологодской области
                                    </span>
                                    </div>
                                <div class="w-100"></div>
                                <div class="col-md ">
                                    <span  class="title_foot">
                                        8 495 606 98 88
                                    </span>
                                    <br>
                                    <span class="content_foot">
                                        Центральная избирательная комиссия
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md mt50 text-left ">
                            <span  class="title_foot">
                            Информация о выборах
                            </span>
                                <nav class="navbar  ml-15">
                                    <ul class="navbar-nav mr-auto ">
                                        <li><a href="/info" class="content_foot">Информация о выборах</a></li>
                                        <li><a href="/consignment" class="content_foot">Политические партии</a></li>
                                        <li><a href="/where" class="content_foot">Где голосовать?</a></li>
                                        <li><a href="/" class="content_foot">Контакты</a></li>
                                        <li><a href="/" class="content_foot">Статистика прошедших выборов</a></li>
                                    </ul>
                                </nav>
                        </div>
                        <div class="col-md mt50 text-left ">
                            <span  class="title_foot">
                                Помощь и поддержка
                            </span>
                            <nav class="navbar ml-15">
                                <ul class="navbar-nav mr-auto">
                                    <li><a href="/" class="content_foot">Помощь в телеграмм</a></li>
                                    <li><a href="/" class="content_foot">Частые вопросы</a></li>
                                    <li><a href="/" class="content_foot">Обратиться в коммисию</a></li>
                                    <li><a href="/" class="content_foot">О защите персональных данных</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-4 mt50 text-left ">
                            <span  class="title_foot">
                                Полезные ссылки
                            </span>
                            <nav class="navbar ml-15">
                                <ul class="navbar-nav mr-auto">
                                    <li><a href="/" class="content_foot">Центральная избирательная комиссия Российской Федерации</a></li>
                                    <li><a href="/" class="content_foot">Ссылка 2</a></li>
                                    <li><a href="/" class="content_foot">Ссылка 3</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md text-left "></div>
                        <div class="w-100"></div>
                        <div class="fake_hr"></div>
                    </div>
                    <div class="row mt10">
                        <div class="col-md-3 text-left content_foot ">Provibori.ru 2017-2018 г.</div>
                        <div class="col-md-6 "></div>
                        <div class="col-md-3 text-right ">
                            <a href="/" class="soc_icon_foot"><i class="fab fa-facebook-f"></i></a>
                            <a href="/" class="soc_icon_foot"><i class="fab fa-vk"></i></a>
                            <a href="/" class="soc_icon_foot"><i class="fab fa-twitter"></i></a>
                            <a href="/" class="soc_icon_foot ok_hov"><i class="fab fa-odnoklassniki"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>

    </script>
</body>
</html>
