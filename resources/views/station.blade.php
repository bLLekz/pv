@extends('layouts.second')

@section('content')
    <div class="container lk_con">
        <div class="row pb-5">
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
                <div class="col-md-8 mb-5">
                    <div class="lk_menu_list pb-5">
                        <div class="text-left text_lk ">
                            <p class="lk">Мой избирательный участок</p>
                            <p class="presonal_date">Для получения информации о месте голосования, воспользуйтесь поиском.</p>
                            <p class="presonal_date">Для этого введите адрес места регистрации:</p>
                            <input type="text" class="form-control inpt_lk" id="search_inp_lk" placeholder="Начните вводить адрес места регистации, начания с области">
                            <button class="btn btn-danger">Найти</button>
                        </div>
                        <hr>
                        <div class="text-left text_lk ">
                            <p class="lk">Избирательный участок №870</p>
                            <p class="presonal_date">Для адреса: Вологодская область, г. Череповец, ул. Ленина 155</p>
                            <p class="">Адрес помещения для голосования:</p>
                            <p class="">Контактный телефон:</p>
                            <p class="presonal_date">8(8202)62-50-89</p>
                            <p class="">Дополнительная информация:</p>
                            <p class="presonal_date">Наличие пандуса/подъемника для инвалидов.</p>
                            <a href="https://yandex.ru/maps/?um=constructor%3A1a17a7c314593b5a71dda36234cf2fb7d438c4c66ea0ceca4e63f0c7156fd9ad&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3A1a17a7c314593b5a71dda36234cf2fb7d438c4c66ea0ceca4e63f0c7156fd9ad&amp;width=600&amp;height=320&amp;lang=ru_RU" alt="" style="border: 0;" class="ml-auto mr-auto" /></a>
                        </div>
                    </div>
                </div>
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
                <div class="col-md-8 lk_menu_list">

                </div>
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
