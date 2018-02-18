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
      <div class="col-md-3  text-left mt15">
        <a href="/" class="logo_hov">
        <span class="logo1">ПроВыборы</span>
        <br>
        <span class="logo2">Сделай свой выбор правильно</span>
        </a>
      </div>
      <nav class="navbar navbar-expand-md ml-auto mt15 ">
        <ul class="navbar-nav  word_stl">
         <li><div class="mrml335"><a href="/" class="nav_main">Информация о выборах</a></div></li>
         <li><div class="mrml335"><a href="/" class="nav_main">Политические партии</a></div></li>
         <li><div class="mrml335"><a href="/" class="nav_main">Где голосовать?</a></div></li>
         <li><div class="mrml335"><a href="/" class="nav_main">Частые вопросы</a></div></li>
        </ul>
      </nav>
    </div>
    <div class="row mt15">
      <div class="col-md ">
        <input type="text" class="form-control inp_search">
      </div>
    </div>
    <div class="row mt40">
      <div class="col-md  text-left">
        <!-- <span class="big_text">
          Как пользоватся порталом
        </span> -->
        <h3 class="big_text">Как пользоватся порталом</h3>
        <span class="big_text2">
          Чтобы получить информацию о выборах, 
          воспользуйтесь "Поиском по участкам". <br>
          Если Вы хотите узнать о каком-либо кандидате, <br>
          выберите "Поиск по кандидатам".
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
	        <button type="button" class="btn btn-default but_set_in">Войти</button>
	        <button type="button" class="btn btn-default but_set_up">Зарегистрироваться</button>
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
