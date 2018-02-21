@extends('layouts.app')

@section('content')
<div class="contaner-fluid child">
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
         <li><div class="mrml335"><a href="/questions" class="nav_main active_link">Частые вопросы</a></div></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
@endsection