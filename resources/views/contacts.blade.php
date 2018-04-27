@extends('layouts.second')

@section('content')
    <div class="container-fluid content_stl">
        <div class="container">
            <div class="row mb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="bread_a">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="/contacts" class="bread_a">Контакты</a></li>
                    </ol>
                </nav>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <span class="info_text">Контактная информация</span>
                    <br>
                    <div class="mt-3"></div>
                    <span class="info_text3">Избирательная комиссия Вологодской области</span>
                </div>
            </div>
            <div class="row mt-5 pb-5">
                <div class="col text-left">
                    <p class="info_text3">Ардес:</p>
                    <p class="info_text4">160000, Вологодская область, город Вологда, ул. Герцена, д. 2</p>
                    <br>
                    <p class="info_text3">Контактный телефон:</p>
                    <p class="info_text4">23-00-78</p>
                    <br>
                    <p class="info_text3">E-mail:</p>
                    <p class="info_text4">info@ikvo35.ru</p>
                </div>
                <div class="col">
                    <a href="https://yandex.ru/maps/?um=constructor%3A3096cb48f6b3ea47c344e419bedc179e6c463d8cdfd80b6f89a4f64cfd590f2c&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3A3096cb48f6b3ea47c344e419bedc179e6c463d8cdfd80b6f89a4f64cfd590f2c&amp;width=564&amp;height=319&amp;lang=ru_RU" alt="" style="border: 0;" /></a>
                </div>
            </div>
            <hr class="pb-5">
            <div class="row pb-5">
                <div class="col text-center">
                    <span class="info_text3">Центральная избирательная комиссия Российской Федерации</span>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col text-left">
                    <p class="info_text3">Ардес:</p>
                    <p class="info_text4">Большой Черкасский переулок, д. 9, Москва, 109012 <br>
                    Схема проедза: до станции метро "Китай-город", "Лубянка",<br>
                    "Площадь Революции".
                    </p>
                    <br>
                    <p class="info_text3">Телефон "Горячей линии":</p>
                    <p class="info_text4">8 (495) 606-98-88</p>
                    <br>
                    <p class="info_text3">График работы:</p>
                    <p class="info_text4">Понедельник - четверг: с 9:00 до 18:00,<br>
                    Пятница: с 9:00 до 17:00,<br>
                    Суббота - воскресенье: выходной</p>
                </div>
                <div class="col">
                    <a href="https://yandex.ru/maps/?um=constructor%3A90f918b780d17ab453f90f412d78e9d1d28a15a41e66ba6d286ecf6eb226cb04&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3A90f918b780d17ab453f90f412d78e9d1d28a15a41e66ba6d286ecf6eb226cb04&amp;width=564&amp;height=319&amp;lang=ru_RU" alt="" style="border: 0;" /></a>
                </div>
            </div>
        </div>
    </div>
@endsection