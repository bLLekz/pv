@extends('layouts.lk')

@section('content')
@if(Auth::user()->role == 1)
    <div class="lk_menu_list2 pb-5">
        <div class="row">
            <div class="col">
                <div class="text-left text_lk ml-4">
                    <p class="lk">Уведомления</p>
                </div>
                <ul class="list-group list-group-flush pt-1 text-left">
                    @foreach($msg as $m)
                        @foreach($name as $n)
                            <li class="list-group mess_hov">
                                <a href="/message/{{$n->id}}" class="li_mess">
                                    <div class="row mb-1 mt-3">
                                        <div class="col-1 text-right">
                                            <div class="mess_ico">
                                                <i class="far fa-comments fa_pos"></i>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <p>{{ $n->name }} ответил на ваше обращение</p>
                                            <p class="mess_more">Подробнее <i class="fas fa-caret-right"></i></p>
                                        </div>
                                        <div class="col-2 text-left d-flex align-items-end">
                                            <p class="mess_date ">{{ date('d.m.Y', strtotime($m->date)) }}</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@else
    <div class="lk_menu_list2 pb-5">
        <div class="row">
            <div class="col">
                <div class="text-left text_lk ml-4">
                    <p class="lk">Уведомления</p>
                </div>
                <ul class="list-group list-group-flush pt-1 text-left">
                    @foreach($msg as $m)
                        @foreach($name as $n)
                            <li class="list-group mess_hov">
                                <a href="/message/{{$n->id}}" class="li_mess">
                                    <div class="row mb-1 mt-3">
                                        <div class="col-1 text-right">
                                            <div class="mess_ico">
                                                <i class="far fa-comments fa_pos"></i>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <p>{{ $n->name }} Написал обращение</p>
                                            <p class="mess_more">Подробнее <i class="fas fa-caret-right"></i></p>
                                        </div>
                                        <div class="col-2 text-left d-flex align-items-end">
                                            <p class="mess_date ">{{ date('d.m.Y', strtotime($m->date)) }}</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
@endsection
