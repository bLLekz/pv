@extends('layouts.lk')

@section('content')
    @if(Auth::user()->role == 1)
    <div class="lk_menu_list ">
        <div class="text-left text_lk ">
            <p class="lk">Личные данные</p>
            <img src="/img/none.jpg" class="pull-left igm_lk">
            <span class="load_ph">Загрузить фото</span>
            <br>
            <label for="fio_inp">ФИО</label>
            <input type="text" class="form-control inpt_lk" id="fio_inp" placeholder="Введите ФИО">
            <br>
            <label for="email_inp">E-mail</label>
            <input type="email" class="form-control inpt_lk" id="email_inp" placeholder="Введите E-mail">
            <br>
            <p class="change_pass">Изменить пароль</p>
            <br>
            <button type="button" class="btn btn-danger bnt_save_lk">Сохранить</button>
        </div>
        <hr>
        <div class="text-left text_lk ">
            <p class="lk">Идентификация</p>
            <p class="presonal_date">Подтвердите свою личность.</p>
            <p class="">Паспорт</p>
            <div class="row">
                <input type="text" class="form-control inpt_lk pasp_s" id="pasp_s_inp" placeholder="Серия">
                <input type="text" class="form-control inpt_lk pasp_n" id="pasp_n_inp" placeholder="Номер">
            </div>
            <br>
            <p class="">Дата рождения</p>
            <div class="row">
                <input type="text" class="form-control inpt_lk day_inp" id="day_inp" placeholder="ДД">
                <input type="text" class="form-control inpt_lk month_inp" id="month_inp" placeholder="ММ">
                <input type="text" class="form-control inpt_lk year_inp" id="year_inp" placeholder="ГГ">
            </div>
            <br>
            <p class="change_pass">Загрузить фото с паспортом</p>
            <br>
            <button type="button" class="btn btn-danger bnt_save_lk">Отправить</button>
        </div>
    </div>
    @else
        <div class="lk_menu_list2 pr-5 pl-4">
            <div class="text-left text_lk ">
                <div class="row">
                    <div class="col-md-5">
                        <p class="lk float-left pl-4">Личные данные</p>
                    </div>
                    <div class="col-md-7">
                        <div class="d-inline float-right">
                            <i class="far fa-check-circle check_ico d-inline"></i>
                            <span class="lk_check d-inline">Профиль подтвержден</span>
                        </div>
                    </div>
                </div>
                <img src="/img/none.jpg" class="pull-left igm_lk">
                <span class="load_ph">Загрузить фото</span>
                <br>
                <label for="fio_inp">ФИО</label>
                <input type="text" class="form-control inpt_lk" id="fio_inp" placeholder="Введите ФИО">
                <br>
                <label for="email_inp">E-mail</label>
                <input type="email" class="form-control inpt_lk" id="email_inp" placeholder="Введите E-mail">
                <br>
                <p class="change_pass">Изменить пароль</p>
                <br>
                <button type="button" class="btn btn-danger bnt_save_lk">Сохранить</button>
            </div>
        </div>
@endif
@endsection
