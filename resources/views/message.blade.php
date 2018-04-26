@extends('layouts.second')

@section('content')
    <div class="container lk_con">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="bread_a">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="/personal" class="bread_a">Личный кабинет</a></li>
                </ol>
            </nav>
            @if(Auth::user()->role == 1)
                <div class="col-md-12 mt-5 mb-5  text-center">
                    <span class="lk_izb">Личный кабинет избирателя</span>
                </div>
                <div class="col-md-4 "><!-- lk_menu -->
                    <div class="lk_menu">
                        <div class="fx-4 text-left">
                            <ul class="list-group list-group-flush pt-3">
                                <li class="list-group li_hov"><a href="http://provibori/personal" class="ul_lk">Личные данные</a></li>
                                <li class="list-group li_hov"><a href="/station" class="ul_lk">Мой избирательный участок</a></li>
                                <li class="list-group li_hov"><a href="/message" class="ul_lk">Уведомления <span class="badge badge-red">3</span></a></li>
                                <li class="list-group li_hov"><a href="/" class="ul_lk">Анкета</a></li>
                                <li class="list-group"><button data-toggle="modal" data-target="#myModal" class="btn req_cik ul-login">Обратиться в комиссию</button></li>
                                <li class="list-group">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 lk_menu_list"></div>
            @else
                <div class="col-md-12 mt-5 mb-5  text-center">
                    <span class="lk_izb">Личный кабинет кандидата</span>
                </div>
                <div class="col-md-4">
                    <div class="lk_menu2">
                        <div class="fx-4 text-left">
                            <ul class="list-group list-group-flush pt-3">
                                <li class="list-group li_hov"><a href="/personal" class="ul_lk">Личные данные</a></li>
                                <li class="list-group li_hov"><a href="/station" class="ul_lk">Сведения о карточке</a></li>
                                <li class="list-group li_hov"><a href="/message" class="ul_lk">Уведомления <span class="badge badge-red">3</span></a></li>
                                {{--<li class="list-group"><a href="/" class="ul-lk">Анкета</a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 lk_menu_list"></div>
            @endif
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header nobor_lk">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center req_cik_mod">
                        Написать обращение в Центральную
                        <br>
                        избирательную комиссию
                    </h4>
                    <input type="text" class="form-control inp_cik" placeholder="Ваше ФИО">
                    <input type="text" class="form-control inp_cik" placeholder="Ваш e-mail">
                    <textarea name="cik_area" class="form-control area_cik" id="cik_area_modal" cols="10" rows="10" placeholder="Текс обращения">

                    </textarea>
                </div>
                <div class="modal-footer nobor_lk_foot">
                    <button type="button" class="btn btn-danger bnt_cik">Отправить</button>
                </div>
            </div>
        </div>
    </div>
@endsection
