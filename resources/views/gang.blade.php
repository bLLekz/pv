@extends('layouts.second')

@section('content')
    <div class="container-fluid content_stl pb-5">
        <div class="container">
            <div class="row pb-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="bread_a">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="/consignment" class="bread_a">Политические партии</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="/consignment/{{ $gang->id }}" class="bread_a">{{ $gang->name }}</a></li>
                    </ol>
                </nav>
            </div>
            <div class="row mt-5">
                <div class="col-md-8 ">
                    <div class="card bor_none pl-4 pr-4">
                        <img src="/img/none.jpg" class="igm_gang">
                        <div class="card-body">
                            <div class=" ml-auto mr-auto d-block">
                                <p class="gang_name pb-5">{{ $gang->name }}</p>
                                <p class="gang_desc pb-3">Общие сведения</p>
                                <div class="row">
                                    <div class="col-md-5 text-left">
                                        <p class="gang_text">Полное наименование:</p>
                                    </div>
                                    <div class="col-md-7  text-left">
                                        <p class="gang_text">{{ $gang->full_name }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 text-left">
                                        <p class="gang_text">Способ создание:</p>
                                    </div>
                                    <div class="col-md-7  text-left">
                                        <p class="gang_text">{{ $gang->how_create }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 text-left">
                                        <p class="gang_text">ОГРН и дата внесения в ЕГРЮЛ:</p>
                                    </div>
                                    <div class="col-md-7  text-left">
                                        <p class="gang_text">{{ $gang->ogrh }} от {{ $gang->date_in }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 text-left">
                                        <p class="gang_text">Руководящий орган:</p>
                                    </div>
                                    <div class="col-md-7  text-left">
                                        <p class="gang_text">{{ $gang->leader }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 text-left">
                                        <p class="gang_text">Лицо, имеющее право без доверенности дейсвовать от имени юредического лица:</p>
                                    </div>
                                    <div class="col-md-7  text-left">
                                        <p class="gang_text">{{ $gang->confidant }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 text-left">
                                        <p class="gang_text">Адрес(местонахождения):</p>
                                    </div>
                                    <div class="col-md-7  text-left">
                                        <p class="gang_text">{{ $gang->address }}</p>
                                    </div>
                                </div>
                                <hr>
                                    <p class="gang_desc pt-3 pb-3">Программа и устав политической партии "{{ $gang->name }}"</p>
                                    <a href="/" class="link_gang d-block">Программа партии "{{ $gang->name }}".doc</a>
                                    <a href="/" class="link_gang d-block pb-3">Устав партии "{{ $gang->name }}".doc</a>
                                <hr>
                                    <p class="gang_desc pt-3 pb-3">Ссылки</p>
                                    <div class="mt-1 mb-2"><a href="/" class="link_gang1"><i class="fab fa-vk fa_color mr-1"></i> vk.com/id1231231</a></div>
                                    <div class="mt-1 mb-2"><a href="/" class="link_gang1 ml-1"><i class="fab fa-facebook-f mr-2 fa_color"></i> facebook.com/12345</a></div>
                                    <div class="mt-1 mb-2 pb-3"><a href="/" class="link_gang1"><i class="far fa-list-alt fa_color mr-1"></i> www.kandidat.ru</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bor_none bg_blue">
                        <div class="card-body">
                            <div class="row mb-1 d-block">
                                <div class="mt-3 mb-3 pl_4 pr-5">
                                    <i class="far fa-comments"></i>
                                    <a href="/" class="menu_gang"> Задать вопрос</a>
                                    <i class="fas fa-angle-right float-right mt-1"></i>
                                </div>
                                <div class="mt-3 mb-3 pl_4 pr-5">
                                    <i class="far fa-list-alt"></i>
                                    <a href="/" class="menu_gang"> Сравнить предпочтения</a>
                                    <i class="fas fa-angle-right float-right mt-2"></i>
                                </div>
                                <button data-toggle="modal" data-target="#myModal" class="btn req_cik ul-login">Оценить партию</button>
                            </div>
                        </div>
                    </div>
                    <div class="card bor_none mt-3">
                        <div class="card-body">
                            <div class="row mb-1">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection