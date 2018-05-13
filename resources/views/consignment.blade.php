@extends('layouts.second')

@section('content')
    <div class="container-fluid content_stl pb-5">
        <div class="container">
            <div class="row mb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="bread_a">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="/consignment" class="bread_a">Политические партии</a></li>
                    </ol>
                </nav>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col text-center">
                    <span class="info_text">Политические партии Российской Федерации</span>
                </div>
            </div>
            <div class="row mt-5 mb-3">
                <div class="col text-center">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text inp_ico"><i class="fas fa-search"></i></div>
                        </div>
                        <input type="text" class="form-control inp_parti" placeholder="Поиск по партиям">
                    </div>
                </div>
            </div>
            <div class="row mb-5 mt-4">
                @foreach($consignment as $part)
                <div class="col-md-6 mt-3 mb-3">
                    <div class="card bor_none">
                        <div class="card-body">
                            <div class="row mt-1 mb-1">
                                <div class="col-3">
                                    <img src="/img/none.jpg" class="igm_part mb-3">
                                    <a class="part_more" href="/consignment/{{$part->id}}">Подробнее <i class="fas fa-caret-right"></i></a>
                                </div>
                                <div class="col-9">
                                    <h5 class="card-title sty_title">{{$part->name}}</h5>
                                    <p class="card-text">{{$part->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row ">
                    <span class="btn btn-light  but_more_part ml-auto mr-auto">Еще партии</span>
            </div>
            <div id="result">

            </div>
        </div>
    </div>
@endsection