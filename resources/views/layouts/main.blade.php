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

    <script type="text/javascript" src="/js/wow.min.js"></script>
    <script type="text/javascript" src="/js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="/css/animate.css">
	
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
			 		
			 	</div>	
			 	<div class="col-3 ">		
                    @if (Auth::guest())
                        <a class="buttonStyle" href="/login" >Войти</a>
                        <a class="buttonStyle" href="/register" >Зарегестрироваться</a> 
                    @else
                    <div class="ProfileUser">
                        <a href="#"  onclick="down()">
                            {{ Auth::user()->name }} <img src="/icons/line-menu.png" alt="Назад" width="35px" height="35px"> 
                        </a>                       
                        <div class="dropMenu animated wow slideInDown">
                            <ul  id="dropdown" style="display:none">
                               <li ><a href="\home"> <img src="/icons/man.png" width="35px" height="35px"> Профиль</a></li>
                               <li ><a href="#"><img src="/icons/list.png" width="35px" height="35px"> Мои задачи</a></li>
                               <li ><a href="#"><img src="/icons/coin.png" width="35px" height="35px"> Очки</a></li>
                               <li ><a href="{{ url('/logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                <img src="/icons/exit.png"width="35px" height="35px"> Выход
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>                           
                            </ul>                   

                         </div>    
                    </div>                                       

                    @endif

				</div>

			</div>
		</div>				
	</div>

	@yield('content')
	
	<footer>
		<h2>Футер тут хня всякая</h2>
	</footer>
    <script type="text/javascript">
        function down()
        {
          var a = document.getElementById('dropdown');
          if ( a.style.display == 'none' )
            a.style.display = 'block'
          else
            if ( a.style.display == 'block' )
            a.style.display = 'none';
        };
</script>
</body>
</html>