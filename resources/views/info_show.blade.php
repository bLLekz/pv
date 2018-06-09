@extends('layouts.second')

@section('content')
    <div class="container-fluid content_stl">
        <div class="container">
            <div class="row mb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="bread_a">Главная</a></li>
                        <li class="breadcrumb-item active"><a href="/info" class="bread_a">Информация о выборах</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="/info/{{ $election->id }}" class="bread_a">{{ $election->name }}</a></li>
                    </ol>
                </nav>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <span class="info_text">{{ $election->name}}</span>
                    <br>
                    <div class="mt-3"></div>
                    <span class="info_text2">Для получения информации о выборах и кандидатах, воспользуйтесь поиском. <br> Для этого введите адрес места регистрации:</span>
                </div>
            </div>
            <div class="row mt-5 pb-5">

            </div>
        </div>
    </div>
@endsection