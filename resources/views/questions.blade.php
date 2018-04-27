@extends('layouts.second')

@section('content')
  <div class="container-fluid content_stl">
    <div class="container">
      <div class="row mb-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/" class="bread_a">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/questions" class="bread_a">Частые вопросы</a></li>
          </ol>
        </nav>
      </div>
      <div class="row mt-5 mb-5">
        <div class="col text-center">
          <span class="info_text">Частные вопросы</span>
        </div>
      </div>
      <div class="row mt-5 pb-5">
        <div class="col text-left ">
          <div class="row">
            <div class="col-11">
              <p class="quest_stl">Когда пройдут выборы Президента Российской Федерации?</p>
            </div>
            <div class="col-1">
              <i class="fas fa-plus"></i>
            </div>
            <hr class="hrstl">
            <div class="col-11">
              <p class="quest_stl">Какой документ может предоставить избиратель, чтобы проголосовать?</p>
            </div>
            <div class="col-1">
              <i class="fas fa-plus"></i>
            </div>
          </div>
        </div>
        <div class="col text-left ">
          <div class="row">
            <div class="col-11">
              <p class="quest_stl">Кто может проголосовать на выборах?</p>
            </div>
            <div class="col-1">
              <i class="fas fa-plus"></i>
            </div>
            <hr class="hrstl">
            <div class="col-11">
              <p class="quest_stl">Что делать, если избиратель испортил бюллетень для голосования и хочет получить новый?</p>
            </div>
            <div class="col-1">
              <i class="fas fa-plus"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5 pb-5">
        <div class="col text-center">
          <button type="button" class="btn btn_light">Все вопросы</button>
        </div>
      </div>
    </div>
  </div>
@endsection