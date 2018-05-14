@extends('layouts.lk')

@section('content')
@if(Auth::user()->role == 1)
    <div class="lk_menu_list2 pb-5 pl-5 pr-5">
        <div class="text-left text_lk">
            <p class="lk">Мой избирательный участок</p>
            <p class="presonal_date">Для получения информации о месте голосования, воспользуйтесь поиском.</p>
            <p class="presonal_date">Для этого введите адрес места регистрации:</p>
            <div class="row">
                <div class="col-md-10">
                    <input type="text" class="form-control inpt_lk " id="search_inp_lk" placeholder="Начните вводить адрес места регистации, начания с области">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-danger btn_search_lk">Найти</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-left text_lk ">
            <p class="lk">Избирательный участок №870</p>
            <p class="presonal_date">Для адреса: Вологодская область, г. Череповец, ул. Ленина 155</p>
            <p class="pt-3">Адрес помещения для голосования:</p>
            <p class="presonal_date">Для адреса: Вологодская область, г. Череповец, ул. Ленина 155</p>
            <p class="pt-3">Контактный телефон:</p>
            <p class="presonal_date">8(8202)62-50-89</p>
            <p class="pt-3">Дополнительная информация:</p>
            <p class="presonal_date pb-3">Наличие пандуса/подъемника для инвалидов.</p>
            <a href="https://yandex.ru/maps/?um=constructor%3A1a17a7c314593b5a71dda36234cf2fb7d438c4c66ea0ceca4e63f0c7156fd9ad&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3A1a17a7c314593b5a71dda36234cf2fb7d438c4c66ea0ceca4e63f0c7156fd9ad&amp;width=600&amp;height=320&amp;lang=ru_RU" alt="" style="border: 0;" class="ml-auto mr-auto" /></a>
        </div>
    </div>
@else
    <div class="lk_menu_list ">
        <div class="text-left text_lk ">
            <p class="lk">Сведения для карточки</p>
        </div>
        <div class="text-left text_lk ">
            <p class="">Сведения об имуществе</p>
            <textarea name="cik_area" class="form-control area_cik text_inpt" id="cik_area_modal" cols="10" rows="10" placeholder="Текст"></textarea>
            <a href="/" class="text_doc d-block">Прикрепить документ</a>
            <p class="mt-5">Сведения об имуществе</p>
            <textarea name="cik_area" class="form-control area_cik text_inpt" id="cik_area_modal" cols="10" rows="10" placeholder="Текст"></textarea>
            <a href="/" class="text_doc d-block">Прикрепить документ</a>
            <p class="mt-5">Сведения об имуществе</p>
            <textarea name="cik_area" class="form-control area_cik text_inpt" id="cik_area_modal" cols="10" rows="10" placeholder="Текст"></textarea>
            <a href="/" class="text_doc d-block">Прикрепить документ</a>
            <hr>
            <div class="text-left text_lk pb-5">
                <p class="lk">Ссылки</p>
                <input type="text" class="form-control link_cand text_inpt" placeholder="Введите ссылку">
            </div>
            <button type="button" class="btn btn-danger bnt_save_lk">Сохранить</button>
        </div>
    </div>
@endif
@endsection
