@extends('layouts.lk')

@section('content')
    @if(Auth::user()->role == 1)
    <div class="lk_menu_list ">
        <div class="text-left text_lk ">
            <form action="{{ URL::to('personal/update') }}" method="POST">
                {{ csrf_field() }}
                <p class="lk">Личные данные</p>
                @if(Auth::user()->photo != null )
                    <img src="/url" class="pull-left igm_lk">
                @else
                    <img src="/img/none.jpg" class="pull-left igm_lk">
                @endif
                <span class="load_ph">Загрузить фото</span>
                <br>
                <label for="fio_inp">ФИО</label>
                <input type="text" class="form-control inpt_lk" id="fio_inp" placeholder="Введите ФИО" value="{{Auth::user()->name}}">
                <br>
                <label for="email_inp">E-mail</label>
                <input type="email" class="form-control inpt_lk" id="email_inp" placeholder="Введите E-mail" value="{{Auth::user()->email}}">
                <div id="data_div"></div>
                <br>
                <p class="change_pass"  id="show_pass_div">Изменить пароль</p>
                <div class="hide_pass_div mt-5 mb-5" id="pass_div">
                    <input type="password" class="form-control inpt_lk mb-4 " id="password" placeholder="Введите Пароль">
                    <input type="password" class="form-control inpt_lk" id="password_re" placeholder="Повотрите Пароль">
                </div>
                <br>
                <button type="button" class="btn btn-danger bnt_save_lk" id="save_date_lk">Сохранить</button>
            </form>
        </div>
        <hr>
        <div class="text-left text_lk ">
            <p class="lk">Идентификация</p>
            <p class="presonal_date">Подтвердите свою личность.</p>
            <p class="">Паспорт</p>
            <div class="row">
                <input type="text" class="form-control inpt_lk pasp_s" id="pasp_s_inp" placeholder="Серия" value="{{Auth::user()->pasp_series}}">
                <input type="text" class="form-control inpt_lk pasp_n" id="pasp_n_inp" placeholder="Номер" value="{{Auth::user()->pasp_number}}">
            </div>
            <br>
            <p class="">Дата рождения</p>
            <div class="row">
                <select name="day" id="day_select" class="form-control inpt_lk day_select ">
                    @if(Auth::user()->date_day != null )
                        @for ($i = 1; $i < 32; $i++)
                            <option value="{{ $i }}" @if(Auth::user()->date_day ==  $i  ) selected @endif >{{ $i }}</option>
                        @endfor
                    @else
                        @for ($i = 1; $i < 32; $i++)
                            <option  value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    @endif
                </select>
                <select name="month" id="month_select" class="form-control inpt_lk day_select ">
                    @if(Auth::user()->date_month != null )
                        @for ($i = 1; $i < 13; $i++)
                            <option value="{{ $i }}" @if(Auth::user()->date_month ==  $i  ) selected @endif >{{ $i }}</option>
                        @endfor
                    @else
                        @for ($i = 1; $i < 13; $i++)
                            <option  value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    @endif
                </select>
                <select name="year"  id="year_select" class="form-control inpt_lk day_select ">
                    @if(Auth::user()->date_year != null )
                        @for ($i = 1900; $i < 2001; $i++)
                            <option value="{{ $i }}" @if(Auth::user()->date_year ==  $i  ) selected @endif >{{ $i }}</option>
                        @endfor
                    @else
                        @for ($i = 1900; $i < 2001; $i++)
                            <option  value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    @endif
                </select>
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
                <p class="change_pass"  id="show_pass_div">Изменить пароль</p>
                <div class="hide_pass_div mt-5 mb-5" id="pass_div">
                    <input type="password" class="form-control inpt_lk mb-4 " id="password" placeholder="Введите Пароль">
                    <input type="password" class="form-control inpt_lk" id="password_re" placeholder="Повотрите Пароль">
                </div>
                <br>
                <button type="button" class="btn btn-danger bnt_save_lk">Сохранить</button>
            </div>
        </div>
@endif
@endsection
