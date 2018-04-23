<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> 

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

	<title>laravel</title>		
	<link  href="{{ asset ('css/bootstrap.css')}}" rel="stylesheet">	
	<link href="{{ asset ('css/main.css')}}" rel="stylesheet">
	<script src="{{ asset ('js/bootstrap.js')}}"></script> 
</head>
<body>
	<div class="header"> 
		<div class="container-fluid">
			<div class="row">	
			 	<div class="col-3">
			 		<div class="SmallBrandname">
						SELFER 
					</div>
			 	</div>
			 	<div class="col-6 text-center">
			 		<div class="nav">			
						<a  href="/" >Главная</a>
						<a href="/comm" >Отзывы</a>		
						<a href="#">О нас</a>
					</div>
			 	</div>	
			 	<div class="col-3">
			 		<div class="login">
                      @if (Auth::guest())
                            <a class="buttonStyle" href="/login" >Войти</a>
                        	<a class="buttonStyle" href="/register" >Зарегестрироваться</a>	
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif                       
					</div>
				</div>
			</div>
		</div>				
	</div>
	@yield('content')
	
	<footer>
		<h2>Футер тут хня всякая</h2>
	</footer>
</body>
</html>