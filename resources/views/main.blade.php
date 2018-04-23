<!DOCTYPE html>
<html>
<head>
	<title>{{$pagetitle}}</title>		
	<link  href="{{ asset ('css/bootstrap.css')}}" rel="stylesheet">	
	<link href="{{ asset ('css/main.css')}}" rel="stylesheet">
	<script src="{{ asset ('js/bootstrap.js')}}"></script> 
</head>
<body>
	<div class="header text-center"> 
		<div class="nav">
			<a href="/" >Главная</a>
			<a href="/comm" >Отзывы</a>		
			<a href="#">О нас</a>
		</div>
		<div class="login">
			<a class="buttonStyle" href="/login" >Войти</a>
            <a class="buttonStyle" href="/register" >Зарегестрироваться</a>	
		</div>
		<hr id="undernav">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="brandname">SELFER
					</div>
					<hr id="underbrandname">
					<div class="slogan">
						<p align="center" >	Не обязательно быть лучше всех,<br>  достаточно быть лучше, <br>чем ты был вчера.</p>
					</div>	
				</div>
				<div class="col-lg-12">
					<div class="downbutton">
						<a href="#"><img src=" {{ asset ('images/butondown.png')}}" class="swing"></a>
					</div>
				</div>
			</div>
		</div>		
		
	</div>
	<div class="content mb-5">
		<div class="container">
			<div class="row">
	 		   <div class="col-lg-6">	   					  
	   			  	<h1 class="display-2 bold">SELFER</h1><br>
	   			  	<p class="onas">Это сервис, который помогает тебе саморазвиваться  и получать за это клевые плюшки.</p>
	 			</div>
			</div>
		</div>	
	</div>
	<div class="why mb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="display-3" align="center">Зачем  <span>ТЕБЕ </span> это?!</h2>
					<p>Мы даем ТЕБЕ цели для саморазвития, выполняя которые, ты будешь самосовершенствоваться. А в качестве стимула ТЫ будешь получать баллы за достидение целей. Баллы можно потратить на скидку в магазинах города.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="whyselfer mb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2  class="display-3 mb-5" align="center">Почему <span >SELFER </span>?!</h2>
					<ol type="I">
					  <li>Бесплатно и доступно всем</li>
					  <li>Выгодно! ТЫ не только саморазвиваешься но и получаешь за это бонусы</li>
					  <li>Итересно и не требует много времени</li>					  
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="display-4 mb-5" align="center">Поддержка популярных платформ</h2>
			</div>
			<div class="col-lg-5 mx-auto">
				<img class="img-fluid" src="{{ asset ('images/Android.png')}} ">
			</div>
			<div class="col-lg-10 mx-auto">
				<img src="{{ asset ('images/google.png')}}"  class="img-fluid" >
				<img src="{{ asset ('images/WEB.png')}}" class="img-fluid" >
				<img src="{{ asset ('images/IOS.png')}}" class="img-fluid" >
			</div>
		</div>
	</div>
	<div class="JoinUs">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 align="center">Присоединяйся и совершенствуйся	 </h1> 
				</div>		
				<div class="col-lg-4 mx-auto">
					<input class="buttonStyle bigbtn" type="button" value="Зарегестрироваться"></input>	
				</div>			
			</div>
		</div>
	</div>
	<footer>
		
	</footer>
</body>
</html>