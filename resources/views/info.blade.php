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
          <p class="">Информация о выборах</p>
        <ul class="nav nav-tabs justify-content-end" id="myTab" role="tablist">
            <li class="nav-item">
                <p class="nav-link active" id="upcoming-tab" data-toggle="tab" href="#upcoming" role="tab" aria-controls="home" aria-selected="true">Предстоящие</p>
            </li>
            <li class="nav-item">
                <p class="nav-link" id="previous-tab" data-toggle="tab" href="#previous" role="tab" aria-controls="profile" aria-selected="false">Прошедшие</p>
            </li>
        </ul>
        <div class="tab-content mt-5 pb-5">
            <div class="tab-pane active" id="upcoming" role="tabpanel" aria-labelledby="upcoming-tab">
                <div class="row">
                    <div class="col-md form-control">qwe</div>
                    <div class="col-md form-control">qwe</div>
                </div>
                <div class="row mt-5">
                    <div class="col-md form-control">qwe</div>
                    <div class="col-md form-control">qwe</div>
                </div>
            </div>
            <div class="tab-pane" id="previous" role="tabpanel" aria-labelledby="previous-tab">
                <div class="row">
                    <div class="col-md form-control">123</div>
                    <div class="col-md form-control">123</div>
                </div>
                <div class="row mt-5">
                    <div class="col-md form-control">123</div>
                    <div class="col-md form-control">123</div>
                </div>
            </div>
        </div>
      </div>
  </div>
@endsection