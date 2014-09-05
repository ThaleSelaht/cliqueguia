@extends('layouts.master')

@section('content')
	  
	<!-- Video Slider -->
	<div class="container ">
		<div class="row">
			<div class="col-xs-12">
				<!-- <video id="24M2NZjJ1ig" class="sublime" width="640" height="360" data-uid="24M2NZjJ1ig" data-youtube-id="24M2NZjJ1ig" data-autoresize="fit" preload="none">
				</video> -->
				<!-- <iframe src="//player.vimeo.com/video/103728196" width="100%" height="312" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
				<ul class="bxslider">
				  <li>
				   <iframe src="//player.vimeo.com/video/105299352" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				  </li>
				  <li>
				    <iframe src="//player.vimeo.com/video/105299908" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
				  </li>

				  <li>
				    <iframe src="//player.vimeo.com/video/105299116" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				  </li>
				  <li>
				    <iframe src="//player.vimeo.com/video/105300153" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
				  </li>
				  
				</ul>
			</div>

		</div>
	</div>

	<!-- Fim Video Slider -->

	<!-- Header -->
	<div class="container-fluid">
		
		<div class="row">
			
			<div class="col-xs-12">
				<div class="bg-traco">
					
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="h-titulo">
									Últimos Videos 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-lg-4">
				<div class="bg-testevideos">
					<a href=""><img class="img-responsive img-thumbnail" src="https://i.vimeocdn.com/video/487532323_960.jpg" alt=""></a>
					<div class="h-nomeAnunc">
						Lorem Ipsum dolor sit amet
					</div>
					<div class="h-data"><img src="img/relogio.gif" alt=""> 02/05/2014 - 17:53</div>
					<a href="#" class="h-categoriaAnunc h-auto">Automotivos - Concessionárias</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-4">
				<div class="bg-testevideos">
					
					<a href=""><img class="img-responsive img-thumbnail" src="https://i.vimeocdn.com/video/486051541_960.jpg" alt=""></a> 
					<div class="h-nomeAnunc">
						Lorem Ipsum dolor sit amet
					</div>
					<div class="h-data"><img src="img/relogio.gif" alt=""> 02/05/2014 - 17:53</div>
					<a href="#" class="h-categoriaAnunc h-gastro">Gastronomia - Restaurantes</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-4">
				<div class="bg-testevideos">
					<a href=""><img class="img-responsive img-thumbnail" src="https://i.vimeocdn.com/video/487532323_960.jpg" alt=""></a> 
					<div class="h-nomeAnunc">
						Lorem Ipsum dolor sit amet
					</div>
					<div class="h-data"><img src="img/relogio.gif" alt=""> 02/05/2014 - 17:53</div>
					<a href="#" class="h-categoriaAnunc h-hospedagem">Hospedagem - Hotéis</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-4">
				<div class="bg-testevideos">
					<a href=""><img class="img-responsive img-thumbnail" src="https://i.vimeocdn.com/video/486051541_960.jpg" alt=""></a> 
					<div class="h-nomeAnunc">
						Lorem Ipsum dolor sit amet
					</div>
					<div class="h-data"><img src="img/relogio.gif" alt=""> 02/05/2014 - 17:53</div>
					<a href="#" class="h-categoriaAnunc h-beleza">Beleza e Saúde - Academias</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-4">
				<div class="bg-testevideos">
					<a href=""><img class="img-responsive img-thumbnail" src="https://i.vimeocdn.com/video/487532323_960.jpg" alt=""></a> 
					<div class="h-nomeAnunc">
						Lorem Ipsum dolor sit amet
					</div>
					<div class="h-data"><img src="img/relogio.gif" alt=""> 02/05/2014 - 17:53</div>
					<a href="#" class="h-categoriaAnunc h-eletro">Eletrônicos - Notebooks</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-4">
				<div class="bg-testevideos">
					<a href=""><img class="img-responsive img-thumbnail" src="https://i.vimeocdn.com/video/486051541_960.jpg" alt=""></a> 
					<div class="h-nomeAnunc">
						Lorem Ipsum dolor sit amet
					</div>
					<div class="h-data"><img src="img/relogio.gif" alt=""> 02/05/2014 - 17:53</div>
					<a href="#" class="h-categoriaAnunc h-hospedagem">Hospedagem - Hotéis</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-4">
				<div class="bg-testevideos">
					<a href=""><img class="img-responsive img-thumbnail" src="https://i.vimeocdn.com/video/487532323_960.jpg" alt=""></a> 
					<div class="h-nomeAnunc">
						Lorem Ipsum dolor sit amet
					</div>
					<div class="h-data"><img src="img/relogio.gif" alt=""> 02/05/2014 - 17:53</div>
					<a href="#" class="h-categoriaAnunc h-eletro">Eletrônicos - Notebooks</a>
				</div>
			</div>
		</div>
	</div>

@stop

<!-- <iframe src="//player.vimeo.com/video/103728196" width="500" height="312" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->