<!DOCTYPE html>
<html lang="ru">
<html>
<head>	
	<title>laravel</title>		
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

    <script type="text/javascript" src="/js/wow.min.js"></script>
     <script type="text/javascript" src="/js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="/css/animate.css">

	
	<link  href="{{ asset ('css/bootstrap.css')}}" rel="stylesheet">	
	<link href="{{ asset ('css/regStyle.css')}}" rel="stylesheet">
	<script src="{{ asset ('js/bootstrap.js')}}"></script> 
</head>
<body>
<div class="registerBody"> 
	<div class="container-fluid">
		<div class="row">	
		 	<div class="col-8 ml-0 pl-0">
				<div class="logoShow text-center">
					<div class="animated wow zoomIn"> <span> SELFER</span> </div>	
				</div>			  	
		 	</div>
		 	<div class="col-4">
			 	@yield('content')	
		 	</div>	
			 	
		</div>
	</div>
</div>				

<script>
	jQuery(document).ready(function($) {
		$('.wow').attr('data-wow-duration', '5s' );
		
	});
</script>

</body>
</html>