@extends('layouts.app')

@section('content')
<div class="contaner-fluid c">
  <div class="container">
    <div class="row  ">
      <div class="col-md-1 ">
        <a href="/">
          <img src="{{ asset('/images/logo.png') }}" alt="">
        </a>
      </div>
      <div class="col-md-3  text-left logo_poz">
        <a href="/" class="logo_hov">
        <span class="logo1">ПроВыборы</span>
        <br>
        <span class="logo2">Сделай свой выбор правильно</span>
        </a>
      </div>
      <nav class="navbar navbar-expand-md ml-auto mt15 ">
        <ul class="navbar-nav  word_stl">
         <li><div class="mrml335"><a href="/info" class="nav_main">Информация о выборах</a></div></li>
         <li><div class="mrml335"><a href="/consignment" class="nav_main">Политические партии</a></div></li>
         <li><div class="mrml335"><a href="/where" class="nav_main">Где голосовать?</a></div></li>
         <li><div class="mrml335"><a href="/questions" class="nav_main">Частые вопросы</a></div></li>
        </ul>
      </nav>
    </div>
    <div class="row mt15">
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
    <div class="row mt40">
      <div class="col-md  text-left">
        <h3 class="big_text">Как пользоватся порталом</h3>
        <span class="big_text2">
          Чтобы получить информацию о выборах, 
          воспользуйтесь "Поиском по участкам". <br>
          Если Вы хотите узнать о каком-либо <br>
           кандидате, выберите "Поиск по кандидатам".
        </span>
        <br>
        <div class="mt15">
	        <a href="/" class="more_info ">Подробнее <i class="fas fa-caret-right ml5"></i></a>
	        </div>
      </div>
      <div class="col-md text-left">
        <h3 class="big_text">Вход в личный кабинет</h3>
        <span class="big_text2">
          Войдите в личный кабинет, чтобы получить
          возможность общаться с кандидатами.
        </span>
        <br>
        <div class="mt15">
	        <button type="button" class="btn btn-default but_set_in"><span class="but_log">Войти</span></button>
	        <button type="button" class="btn btn-default but_set_up"><span class="but_reg">Зарегистрироваться</span></button>
	    </div>
      </div>
      <div class="col-md days_stl text-left">
        <span class="big_days">
          117
        </span>
        <br>
        <span class="big_text2">
          Дней до выбора президента <br>
          Российской Федирации<br>
     	</span>
     	<div class="days_date">
          Выборы состоятся: 18 марта 2018 года
		</div>        
      </div>
    </div>
  </div>
</div>
@endsection
