@extends('layouts.MainTheme')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 m-5">
				<h2 align="center">Отзывы наших пользователей</h2>
			</div>				
			@foreach($comments as $comment)
				<div class="col-lg-4 d-flex  ">						
					<div class="row">						
						<div class="CommentBody d-flex ">
							<div class="col-lg-5 d-flex  align-self-end ">
								<div class="UserComment text-center">
									<img class="img-fluid" src="/images/user.png" height="100px" width="100px">
									<div class="TitleComment"> <small>Имя<br>Пользователя </small> </div>
								</div>
							</div>
							<div class="col-lg-7 ">						
								<div class="CommentContent">
									{{$comment->Content}}	
								</div>
							</div>							
						</div>				
					</div>
				</div>								
			@endforeach		
		</div>
	</div>
@endsection