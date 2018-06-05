@extends('layouts.lk')

@section('content')
<div class="lk_menu_list2 pb-4" >
    <div class="text-left text_lk ml-4">
        <p class="lk">Сообщения</p>
    </div>
    <div class="row" >
        <div class="col-md mr-5 ml-5 prokrutka" id="scroll_div">
            <div id="msg_cont">
                @foreach($msg as $m)
                    @if($m->from_id == Auth::id())
                        <div class="d-flex mb-5 msg ">
                            <div class="align-items-stretch   d-inline-block">
                                @if(Auth::user()->photo != null )
                                    <img src="/url" class="rounded-circle msg_img">
                                @else
                                    <img src="/img/none.jpg" class="rounded-circle msg_img">
                                @endif
                            </div>
                            <div class="flex-column ml-3 msg_body">
                                <div class="align-items-stretch text-left">
                                    <p class="msg_name d-inline">Вы</p>
                                    <p class="msg_date d-inline pl-4">{{ date('d.m.Y H:i', strtotime($m->date)) }}</p>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div class="align-items-stretch body_text text-left pr-3 pl-3 mt-2 pt-2 pb-2  rounded">{{$m->body}}</div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="d-flex mb-5 msg flex-row-reverse">
                            <div class="align-items-stretch   d-inline-block">
                                @if(Auth::user()->photo != null )
                                    <img src="/url" class="rounded-circle msg_img">
                                @else
                                    <img src="/img/none.jpg" class="rounded-circle msg_img">
                                @endif
                            </div>
                            <div class="flex-column mr-3 msg_body">
                                <div class="align-items-stretch text-right">
                                    <p class="msg_date d-inline pr-4">{{ date('d.m.Y h:i', strtotime($m->date)) }}</p>
                                    <p class="msg_name d-inline">@foreach($name as $n){{$n->name}}@endforeach</p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <div class="align-items-stretch body_text2 text-right pr-3 pl-3 mt-2 pt-2 pb-2 rounded">{{$m->body}}</div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <hr>
    <div class="row pl-4 pr-4 pt-2">
        <input type="text" class="form-control col-md-10 border-0 inp_msg" id="inp_msg" name="input_body" placeholder="Начните вводить сообщение">
        <button class="btn btn-light col-md-2 rounded btn_msg" id="send_msg">Отправить</button>
    </div>
</div>
@endsection
