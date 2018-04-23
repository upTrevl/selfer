@extends('layouts.registerTheme')

@section('content')
<div class="regForm"> 
    <div class="panel panel-default">
        <div class="panel-heading">Регистрация нового пользователя</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                     
                     {{ csrf_field() }}
                     
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Имя</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                 @endif
                        </div>
                    </div>                       

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail </label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                             @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Пароль</label>

                        <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                       <label for="password-confirm" class="col-md-4 control-label">Подтвердите пароль</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-4 control-label">  
                        <a class="backBlack" href="\">
                            <img src="/icons/back.png" alt="Назад" width="25px" height="25px">  Назад
                        </a>
                    </div>                               
                    <div class="col-md-6">                                    
                        <button type="submit" class="buttonStyle">
                            Зарегестрироватьcя
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</div>

@endsection
