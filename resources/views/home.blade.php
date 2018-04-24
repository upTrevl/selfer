@extends('layouts.main')

@section('content')
<div class="profileContainer">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
              <div class="profileBody">
                 <div class="row ">
                     <div class="col-lg-4">
                        <div class="avaPlace">
                            <img src="/icons/user.png" width="150px" height="150px">
                        </div>                        
                     </div>
                     <div class="col-lg-8 my-auto">
                        <div class="fioPlace">
                            {{ Auth::user()->name }} <br> 
                            @if(Auth::user()->secondName =="")
                                <small class="text-muted">фамилия не заданна</small><br>
                            @else
                             {{ Auth::user()->secondName }}
                            @endif
                            <img src="/icons/coinGold.png" width="23px" height="23px"> {{ Auth::user()->countCoins}}
                        </div>
                     </div>
                 </div>
                 <hr>
                <div class="row">
                    <div class="col-12">
                        <h3 align="center">Контактная информация</h3>
                    </div>
                    <div class="col-3">
                        <div class="p-4">
                            Email
                        </div>                        
                    </div>
                    <div class="col-9">
                        <div class="p-4">
                            {{ Auth::user()->email }}
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="p-4">
                            Телефон
                        </div>                        
                    </div>
                    <div class="col-9">
                        <div class="p-4">
                            <small class="text-muted"> не заданно</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="p-4">
                            Skype
                        </div>                        
                    </div>
                    <div class="col-9">
                        <div class="p-4">
                            <small class="text-muted"> не заданно</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-center m-5">
                            <a href="\profileChange" class="buttonStyle"> изменить </a>
                        </div>
                        
                    </div>
                </div>
              </div>               
            </div>
            <div class="col-lg-5">
                <div class="taskBody">
                    задачи
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
