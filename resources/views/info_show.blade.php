@extends('layouts.second')

@section('content')
    <div class="container-fluid content_stl">
        <div class="container">
            <div class="row mb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="bread_a">Главная</a></li>
                        <li class="breadcrumb-item"><a href="/info" class="bread_a">Информация о выборах</a></li>
                        <li class="breadcrumb-item active box" aria-current="page"><a href="/info/{{ $election->id }}" class="bread_a">{{ $election->name }}</a></li>
                    </ol>
                </nav>
            </div>
            <div class="row mt-5">
                <div class="col-md-8 offset-md-2 text-center">
                    <span class="info_text">{{ $election->name}}</span>
                </div>
                <div class="col-md-8 offset-md-2 text-center pt-5 pb-3">
                    <span class="info_header d-block">Наименование представительного органа муниципального образования:</span>
                    <span class="info_body d-block">{{ $election->place}}</span>
                </div>
                <div class="col-md-8 offset-md-2 text-center pb-5">
                    <span class="info_header d-block">Дата выборов:</span>
                    <span class="info_body d-block">{{ date('d M Y', strtotime($election->date)) }}, с {{ date('H:i', strtotime($election->time_from)) }} до {{ date('H:i', strtotime($election->time_to)) }} </span>
                </div>
                <div class="col-md-8 offset-md-2 text-center pb-4">
                    <span class="info_header2">Кандидаты в депутаты</span>
                </div>
            </div>
            <div class="row mt-5 pb-5">
                @foreach($user_fields as $uf)
                    <div class="col-md-6 mt-3 mb-3">
                        <div class="card bor_none">
                            <a class="part_morea" href="/candidat/{{$uf->user_id}}">
                                <div class="card-body">
                                    <div class="row mt-1">
                                        <div class="col-3">
                                            <img src="/img/none.jpg" class="igm_part mb-3">
                                            <p class="part_more" >Подробнее <i class="fas fa-caret-right"></i></p>
                                        </div>
                                        <div class="col-9">
                                            <p class="card-text">
                                                @foreach($users as $user)
                                                    @if($user->id == $uf->id)
                                                    {{$user->name}}
                                                        @endif
                                                @endforeach
                                            </p>
                                            <p class="card-text">Партия:
                                                @foreach($cons as $con)
                                                    @if($con->id == $uf->id)
                                                        {{$con->name}}
                                                    @endif
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection