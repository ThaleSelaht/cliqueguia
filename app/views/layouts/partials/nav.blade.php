<!-- <div class="container">

<nav class="nav wrap row"> -->
	

	<div class="container">
	  <div class="row">
        <div class="col-md-4">
        	<img class="img-responsive img-logo" src="img/clique-guia-logo.fw.png" alt="">  
        </div>

        <div class="col-md-8">

        	<!-- <div class="menu">

				<div class="row">
			      <div class="col-xs-8 col-sm-8">
			        <div class="">
			        	<ul class="nav navbar-nav">
				          <li class="active"><a href="#">Home</a></li>
				          <li><a href="#">Quem Somos</a></li>
				          <li><a href="#">Depoimentos</a></li>
				          <li><a href="#">Fale Conosco</a></li>
				        </ul>
			        </div>
			         
			      </div>
			      <div class="col-xs-4 col-sm-4">
			      	
			        <ul class="bandeiras">
			        	<li>Idioma: </li>
			        	<li><img src="img/brasil-flag.fw.png" alt=""></li>
			        	<li><img src="img/eua-flag.fw.png" alt=""></li>
			        	<li><img src="img/espanha-flag.fw.png" alt=""></li>
			        </ul>
			      </div>
			    </div>
			</div> -->


		<div class="navbar navbar-inverse" role="navigation">
	      <div class="container">
	        
	        <div class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
	            <li><a href="#">HOME</a></li>
	            <li><a href="#about">QUEM SOMOS</a></li>
	            <li><a href="#reviews">DEPOIMENTOS</a></li>
	            <li><a href="#contact">FALE CONOSCO</a></li>
	          </ul>
	        </div><!-- /.nav-collapse -->

	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <!-- <a class="navbar-brand" href="#">Project Name</a> -->
	            	<ul class="bandeiras navbar-brand">
			        	<li>Idioma - </li>
			        	<li><a href="#"><img src="img/brasil-flag.fw.png" alt=""></a></li>
			        	<li><a href="#"><img src="img/eua-flag.fw.png" alt=""></a></li>
			        	<li><a href="#"><img src="img/espanha-flag.fw.png" alt=""></a></li>
			        </ul>
	        </div><!--navbar-header-->

	      </div><!-- /.container -->
	    </div><!-- /.navbar -->

		 {{ Form::open() }}
		<div class="input-group">
				{{ Form::input('search', 'q', null, ['placeholder' => 'Busca...', 'class'=>'form-control']) }}
			<div class="input-group-btn">
				{{ Form::button('<span class="glyphicon glyphicon-search"></span>', array('class' => 'btn', 'type' => 'submit')) }}
	        	<!-- <button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button> -->
				
	        </div>
		</div>
		{{ Form::close() }}

        </div><!--col-8 coluna da direita-->			
        </div><!--row-->

    </div><!--container-->

   
	<!--<div class="input-group col-xs-6">
        <input type="text" class="form-control" placeholder="2 BHK Flat, Pune Real Estate, Pest Control..." id="query" name="query" value="">
        <div class="input-group-btn">
    		<button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
    	</div>
    </div>-->

	
<!-- </nav>

</div> -->