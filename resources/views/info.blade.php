@extends('layouts.second')

@section('content')
  <div class="container-fluid content_stl">
      <div class="container">
        <div class="row mb-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/" class="bread_a">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="/info" class="bread_a">Информация о выборах</a></li>
            </ol>
          </nav>
        </div>
          <p class="elect_info_text">Информация о выборах</p>
        <ul class="nav nav-tabs justify-content-end" id="myTab" role="tablist">
            <li class="nav-item">
                <p class="nav-link  border_tab active" id="upcoming-tab" data-toggle="tab" href="#upcoming" role="tab" aria-controls="home" aria-selected="true">Предстоящие</p>
            </li>
            <li class="nav-item">
                <p class="nav-link border_tab " id="previous-tab" data-toggle="tab" href="#previous" role="tab" aria-controls="profile" aria-selected="false">Прошедшие</p>
            </li>
        </ul>
        <hr class="hr_info">
        <div class="tab-content mt-5 pb-5">
            <div class="tab-pane active" id="upcoming" role="tabpanel" aria-labelledby="upcoming-tab">
                <div class="row">
                    @foreach($upcoming as $upc)
                        <div class="col-md-6 mt-3 mb-3">
                            <div class="card card_info bor_none d-flex box_shadow_info">
                                <a href="/info/{{$upc->id}}" class="href_info">
                                    <div class="card-body ">
                                        <div class="d-flex align-items-start info_text_height">
                                            <p class="text_elect">{{$upc->name}}</p>
                                        </div>
                                        <div class="d-flex align-items-end">
                                            <p class="d-inline mr-3  align-bottom">{{ date('d M Y', strtotime($upc->date)) }} </p> <p class="d-inline"> 3 кандидата</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane" id="previous" role="tabpanel" aria-labelledby="previous-tab">
                <div class="row">
                    @foreach($previous as $pre)
                        <div class="col-md-6 mt-3 mb-3">
                            <div class="card card_info bor_none d-flex box_shadow_info">
                                <a href="/info/{{$pre->id}}" class="href_info">
                                    <div class="card-body ">
                                        <div class="d-flex align-items-start info_text_height">
                                            <p class="text_elect">{{$pre->name}}</p>
                                        </div>
                                        <div class="d-flex align-items-end">
                                            <p class="d-inline mr-3  align-bottom">{{ date('d M Y', strtotime($pre->date)) }} </p> <p class="d-inline"> 10 кандидата</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
      </div>
  </div>
@endsection