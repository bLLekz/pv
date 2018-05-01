@extends('layouts.second')

@section('content')
    <div class="container-fluid content_stl">
        <div class="container">
            <div class="row mb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="bread_a">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="/password/reset" class="bread_a">Восстановление пароля</a></li>
                    </ol>
                </nav>
            </div>
            <div class="row mt-5 pb-5 text-left">
                <div class="col-12">
                    <p class="info_text">Восстановление пароля</p>
                    <p>На ваш e-mail будет отправлен текущий пароль</p>

                {{--<input type="email" class="form-control col-4" placeholder="E-mail">--}}
                {{--<button class="btn btn-danger">Отправить</button>--}}
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="row">
                        <div class="col-4">
                            <input id="email" type="email" placeholder="E-mail" class=" res_pass_inp form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-danger res_pass_btn ">
                                Отправить
                            </button>
                        </div>
                    </div>

                </form>

                </div>
            </div>
        </div>
    </div>
@endsection
