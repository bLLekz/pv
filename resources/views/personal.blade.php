@extends('layouts.second')

@section('content')
    <div class="container lk_con">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="bread_a">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="/personal" class="bread_a">Личный кабинет</a></li>
                </ol>
            </nav>
            @if(Auth::user()->role == 1)
            <div class="col-md-12 mt-5 mb-5  text-center">
                <span class="lk_izb">Личный кабинет избирателя</span>
            </div>
            <div class="col-md-4 lk_menu">
                <div class="fx-4 text-left">
                    <ul class="list-group list-group-flush">
                        <li class="list-group"><a href="/personal" class="ul-lk">Личные данные</a></li>
                        <li class="list-group"><a href="/" class="ul-lk">Мой избирательный участок</a></li>
                        <li class="list-group"><a href="/" class="ul-lk">Уведомления <span class="badge badge-red">3</span></a></li>
                        <li class="list-group"><a href="/" class="ul-lk">Анкета</a></li>
                        <li class="list-group"><a href="/" class="btn btn-light req_cik ul-login">Обратиться в комиссию</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 lk_menu_list"></div>
            @else
                <div class="col-md-12 mt-5 mb-5  text-center">
                    <span class="lk_izb">Личный кабинет кандидата</span>
                </div>
                <div class="col-md-4 lk_menu">
                    <div class="fx-4 text-left">
                        <ul class="list-group list-group-flush">
                            <li class="list-group"><a href="/personal" class="ul-lk">Личные данные</a></li>
                            <li class="list-group"><a href="/" class="ul-lk">Мой избирательный участок</a></li>
                            <li class="list-group"><a href="/" class="ul-lk">Уведомления <span class="badge badge-red">3</span></a></li>
                            {{--<li class="list-group"><a href="/" class="ul-lk">Анкета</a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 lk_menu_list">qwe</div>
            @endif
        </div>
    </div>
@endsection