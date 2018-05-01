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
    <div class="row mt-5">
      <div class="col text-center">
          <span class="info_text">Поиск информации о выборах</span>
          <br>
          <div class="mt-3"></div>
          <span class="info_text2">Для получения информации о выборах и кандидатах, воспользуйтесь поиском. <br> Для этого введите адрес места регистрации:</span>
      </div>
    </div>
      <div class="row mt-5 pb-5">
          <div class="col-md form-control inp_search">
              <div class="row">
                  <div class="col-md-2 mt15">
                      <select class="js-example-diacritics"  id="sel_search" name="select_search">
                          <option value="1"><span class="search_text">Поиск по участкам</span></option>
                          <option value="2"><span class="search_text">Поиск по кандидатам</span></option>
                      </select>
                  </div>
                  <div class="col-md-8 bor_search">
                      <input type="text" class="form-control inp_search2" id="inp_search" placeholder="Начните вводить адрес места регистрации, начиная с области">
                  </div>
                  <div class="col-md-2">
                      <button class="btn btn-danger form-control main_search" type="button">Начать поиск</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
@endsection