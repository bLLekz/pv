<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ПроВыборы - Сделай свой выбор правильно</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">
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
                    <li><div class="mr-3">
                            <a class="nav-link head_nav_stl nav_head" href="{{ url('/') }}">
                                <i class="fa fa-search mr8 ico_size"></i>
                                Поиск
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="mr-3">
                            <a class="nav-link head_nav_stl nav_head" href="{{ url('/') }}">
                                <i class="fas fa-map-marker-alt mr8 ico_size"></i>
                                Череповец <i class="fas fa-caret-down ml5"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="mr-3">
                            <a class="nav-link head_nav_stl nav_head" href="{{ url('/') }}">
                                <i class="fas fa-language mr8 ico_size"></i>

                                Russian <i class="fas fa-caret-down ml5"></i>
                            </a>
                        </div>
                    </li>

                    <!-- Authentication Links -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle drop_lk" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle mr8 ico_size"></i> Личный кабинет <span class="caret"></span>
                        </a>
                        @guest
                        <div class="dropdown-menu drop_stl word_stl change_form" aria-labelledby="navbarDropdown">
                            <div class="text-right">
                                <span class="times_stl">&times</span>
                            </div>
                            <form action="">
                                <div class="row justify-content-center text-center">
                                    <div class="col-10">
                                        <div class="row justify-content-end">
                                            <div class="col">
                                                <span class="text-center word_stl3 lk_in">Вход</span>
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
                                    </div>
                                </div>
                            </form>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="px-4 pt-3 pb-0">
                                    <div class="form-group">
                                        <input type="email" class="form-control login_inp" name="email"  required  placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control login_inp" name="password" required  placeholder="Пароль">
                                    </div>
                                </div>
                                <div class="row justify-content-center text-center">
                                    <div class="col-10">
                                        <div class="text-center mb-2">
                                            <a href="{{ route('password.request') }}" class="foget_pass">Забыли пароль?</a>
                                        </div>
                                        <button type="submit" class="btn btn-default form-control login_but mb-2">
                                            Войти
                                        </button>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="text-center">
                                    <span  class="register_but show_form">Зарегистрироваться <i class="fas fa-arrow-right"></i></span>
                                </div>
                            </form>
                            </div>
                            <div class="dropdown-menu drop_reg word_stl form_hide change_form" aria-labelledby="navbarDropdown">
                                <div class="text-right">
                                    <span class="times_stl">&times</span>
                                </div>
                                <form action="">
                                    <div class="row justify-content-center text-center">
                                        <div class="col-10">
                                            <div class="row justify-content-end">
                                                <div class="col">
                                                    <span class="text-center word_stl3 lk_in">Регистрация</span>
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
                                        </div>
                                    </div>
                                </form>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="px-4 pt-3 pb-0">
                                        <div class="form-group">
                                                <div class="form-check d-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="role" value="1" checked>
                                                        Я избиратель
                                                    </label>
                                                </div>
                                                <div class="form-check d-inline ml-2">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="role" value="2">
                                                        Я кандидат
                                                    </label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control login_inp" name="email"  required  placeholder="E-mail">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control login_inp" name="password" required  placeholder="Пароль">
                                        </div>
                                    </div>
                                    <div class="row justify-content-center text-center">
                                        <div class="col-10">
                                            <button type="submit" class="btn btn-default form-control login_but mb-2">
                                                Зарегистрироваться
                                            </button>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <span  class="register_but show_form"> Войти <i class="fas fa-arrow-right"></i></span>
                                    </div>
                                </form>
                            </div>
                        @else
                            @if(Auth::user()->role == 1)
                                <div class="dropdown-menu drop_stl2 word_stl" aria-labelledby="navbarDropdown">
                                    <div class="text-right">
                                        <span class="times_stl">&times</span>
                                    </div>
                                    @else
                                        <div class="dropdown-menu drop_stl3 word_stl" aria-labelledby="navbarDropdown">
                                            <div class="text-right">
                                                <span class="times_stl">&times</span>
                                            </div>
                                            @endif
                                            <form action="">
                                                <div class="fx-4 text-center">
                                                    @if (Auth::user()->name != '')
                                                        <span class="">Добро пожаловать,
                                                        <br>
                                                            {{$name_user}}!
                                                        </span>
                                                    @else
                                                        <span class="">Добро пожаловать!</span>
                                                    @endif
                                                </div>
                                                <div class="dropdown-divider"></div>
                                                <div class="fx-4 text-center">
                                                    <ul class="list-group list-group-flush">
                                                        @if(Auth::user()->role == 1)
                                                            <li class="list-group"><a href="/personal" class="ul-login">Личные данные</a></li>
                                                            <li class="list-group"><a href="/station" class="ul-login">Мой избирательный участок</a></li>
                                                            <li class="list-group"><a href="/message" class="ul-login">Уведомления <span class="badge badge-red">3</span></a></li>
                                                            <li class="list-group"><a href="/form" class="ul-login">Анкета</a></li>
                                                            <li class="list-group"><a href="/" data-toggle="modal" data-target="#myModal"  class="ul-login">Обратиться в комиссию</a></li>
                                                        @else
                                                            <li class="list-group"><a href="/personal" class="ul-login">Личные данные</a></li>
                                                            <li class="list-group"><a href="/station" class="ul-login">Сведения о карточке</a></li>
                                                            <li class="list-group"><a href="/message" class="ul-login">Уведомления <span class="badge badge-red">3</span></a></li>
                                                            {{--<li class="list-group"><a href="/" class="ul-login">Анкета</a></li>--}}
                                                        @endif
                                                    </ul>
                                                </div>
                                                <div class="dropdown-divider"></div>
                                                <div class="text-center">
                                                    <a class="logout_but" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        Выйти
                                                    </a>
                                                </div>
                                            </form>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                        @endguest
                    </li>
                    <!--  -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="contaner-fluid child">
        <div class="container">
            <div class="row  ">
                <div class="col-1 d-none d-lg-block d-xl-block">
                    <a href="/">
                        <img src="{{ asset('/img/emblem.svg') }}" class="logo">
                    </a>
                </div>
                <div class="col-3  text-left logo_poz d-none d-lg-block d-xl-block">
                    <a href="/" class="logo_hov">
                        <span class="logo1">ПроВыборы</span>
                        <br>
                        <span class="logo2">Сделай свой выбор правильно</span>
                    </a>
                </div>
                <nav class="navbar navbar-expand-md ml-auto mt15 col">
                    <ul class="navbar-nav  word_stl">
                        <li><div class="mrml335"><a href="/info" class="nav_main">Информация о выборах</a></div></li>
                        <li><div class="mrml335"><a href="/consignment" class="nav_main">Политические партии</a></div></li>
                        <li><div class="mrml335"><a href="/where" class="nav_main">Где голосовать?</a></div></li>
                        <li><div class="mrml335"><a href="/questions" class="nav_main">Частые вопросы</a></div></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <main class="">
        @yield('content')
    </main>

    <footer class="foot pb-3">
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
                                <span class="content_foot_text">
                                        Избирательная комиссия Вологодской области
                                    </span>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md ">
                                    <span  class="title_foot">
                                        8 495 606 98 88
                                    </span>
                                <br>
                                <span class="content_foot_text">
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
                                <li><a href="/contacts" class="content_foot">Контакты</a></li>
                                <li><a href="/stat" class="content_foot">Статистика прошедших выборов</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md mt50 text-left ">
                            <span  class="title_foot">
                                Помощь и поддержка
                            </span>
                        <nav class="navbar ml-15">
                            <ul class="navbar-nav mr-auto">
                                <li><a href="/help" class="content_foot">Помощь в телеграмм</a></li>
                                <li><a href="/questions" class="content_foot">Частые вопросы</a></li>
                                <li><a href="/" data-toggle="modal" data-target="#myModal" class="content_foot">Обратиться в комиссию</a></li>
                                <li><a href="/guard" class="content_foot">О защите персональных данных</a></li>
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
                                <li><a href="http://www.cikrf.ru/" class="content_foot">Центральная избирательная комиссия Российской Федерации</a></li>
                                <li><a href="/link2" class="content_foot">Ссылка 2</a></li>
                                <li><a href="/link3" class="content_foot">Ссылка 3</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md text-left "></div>
                    <div class="w-100"></div>
                    <div class="fake_hr"></div>
                </div>
                <div class="row mt10">
                    <div class="col-md-3 text-left content_foot_text ">Provibori.ru 2017-2018 г.</div>
                    <div class="col-md-6 "></div>
                    <div class="col-md-3 text-right ">
                        <a href="/" class="soc_icon_foot"><i class="fab fa-facebook-f"></i></a>
                        <a href="/" class="soc_icon_foot"><i class="fab fa-vk"></i></a>
                        <a href="/" class="soc_icon_foot twet_hov"><i class="fab fa-twitter"></i></a>
                        <a href="/" class="soc_icon_foot ok_hov"><i class="fab fa-odnoklassniki"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header nobor_lk">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 class="text-center req_cik_mod">
                    Написать обращение в Центральную
                    <br>
                    избирательную комиссию
                </h4>
                <input type="text" class="form-control inp_cik" placeholder="Ваше ФИО">
                <input type="text" class="form-control inp_cik" placeholder="Ваш e-mail">
                <textarea name="cik_area" class="form-control area_cik" id="cik_area_modal" cols="10" rows="10" placeholder="Текс обращения">

                    </textarea>
            </div>
            <div class="modal-footer nobor_lk_foot">
                <button type="button" class="btn btn-danger bnt_cik">Отправить</button>
            </div>
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>

</script>
</body>
</html>
