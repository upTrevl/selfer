@extends('layouts.main')

@section('content')
<div class="profileContainer">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="profileBody">
                    <div class="row ">
                         <div class="col-4 mx-auto">
                            <div class="avaPlace p-0 pt-4">
                                <img src="/icons/user.png" width="150px" height="150px">
                                <input type="file" name="avatar">
                            </div>                
                        </div>                       
                    </div>
                    <div class="row">                          
                        <div class="col-12">
                            <hr>
                        </div>
                         <div class="col-3">
                            <div class="p-4">
                                Имя
                            </div>                        
                        </div>
                        <div class="col-9">
                            <div class="p-4">
                                <input type="text" name="email" placeholder="{{ Auth::user()->name }}">                            
                            </div>
                        </div>
                         <div class="col-3">
                            <div class="p-4">
                                Фамилия
                            </div>                        
                        </div>
                        <div class="col-9">
                            <div class="p-4">
                                <input type="text" name="email" placeholder="{{ Auth::user()->secondName }}">                            
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="p-4">
                                Email
                            </div>                        
                        </div>
                        <div class="col-9">
                            <div class="p-4">
                                <input type="text" name="email" placeholder="{{ Auth::user()->email }}">                            
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="p-4">
                                 Телефон
                            </div>                        
                        </div>
                        <div class="col-9">
                            <div class="p-4">
                                <input type="text" name="email" placeholder="{{ Auth::user()->phone}}">  
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="p-4">
                                Skype
                            </div>                        
                        </div>
                        <div class="col-9">
                            <div class="p-4">
                                <input type="text" name="email" placeholder="{{ Auth::user()->email }}">  
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text-center m-5">
                                <a href="\profileChange" class="buttonStyle"> Сохранить изменения </a>
                            </div>
                        </div>   
                    </div>
                </div>
            </div> 
        </div>
    </div>        
</div>        
 

@endsection
