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

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
