@extends('layouts.notfound')

@section('content')
    <header>
        <div class="container">
            <div class="row">
                <div class="col header-content">
                    <a href="/">
                        <img src="{{ asset('/img/emblem.svg') }}">
                    </a>
                    <h1 class="header-content_title">ПроВыборы<br><span>Страница не найдена 404!</span><br><a href="/">Вернуться на главную</a></h1>
                </div>
            </div>
            <div class="row">
                <div class="col header-content">

                </div>
            </div>
        </div>
    </header>
@endsection
