@extends('layouts.lk')

@section('content')
@if(Auth::user()->role == 1)
    <div class="lk_menu_list2 pb-3">
        <div class="row">
            <div class="col">
                <div class="text-left text_lk ml-4">
                    <p class="lk">Анкета</p>
                    <p class="form_text pb-5">Не знаете какого кандидата выбрать? Заполните анкету и найдите кандидата наиболее полно отвечающего вашим предпочтениям</p>
                    <p class="form_text">Ответьте на несколько вопросов, для определения ваших предпочтений:</p>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="lk_menu_list"></div>
@endif
@endsection
