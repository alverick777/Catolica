@extends('layouts.master')

@section('title')
	UC Principal	
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-2 col-sm-3">
			<img class="hidden-xs" id="logo-uc-principal" src="{{ asset('img/logo.png') }}" alt="">			
		</div>
		<div class="col-md-10 col-sm-9">
			@include('partials.carousel')
		</div>
	</div>	
	<br>
	<hr>	
	<div class="row">

		<div class="col-xs-12 col-md-3">
			<div class="cuadro">				
				<img class="img-responsive img-1" src="{{ asset('img/Aumento_Capital_600x300.jpg') }}" alt="">
				<h4>AUMENTO DE CAPITAL</h4>
			</div>	
		</div>

		<div class="col-xs-12 col-md-3">
			<div class="cuadro">				
				<img class="img-responsive img-1" src="{{ asset('img/feature-Plantel-Profesional-2016_2-600x300.jpg') }}" alt="">
				<h4>FUTBOL PROFESIONAL</h4>
			</div>	
		</div>

		<div class="col-xs-12 col-md-3">
			<div class="cuadro">				
				<img class="img-responsive img-1" src="{{ asset('img/el_Club_feature-600x300.jpg') }}" alt="">
				<h4>EL CLUB</h4>
			</div>	
		</div>

		<div class="col-xs-12 col-md-3">
			<div class="cuadro">				
				<img class="img-responsive img-1" src="{{ asset('img/Plantel-Sub-19-2016-600x300.jpg') }}" alt="">
				<h4>FUTBOL FORMATIVO</h4>
			</div>	
		</div>

		<div class="clearfix"></div>

		<div class="col-xs-12 col-md-3">
			<div class="cuadro">				
				<img class="img-responsive img-1" src="{{ asset('img/UC-femeninda-2016-600x300.jpg') }}" alt="">
				<h4>FUTBOL FEMENINO</h4>
			</div>	
		</div>

		<div class="col-xs-12 col-md-3">
			<div class="cuadro">				
				<img class="img-responsive img-1" src="{{ asset('img/escuela-futbol-uc1-600x300.jpg') }}" alt="">
				<h4>ESCUELAS DE FUTBOL</h4>
			</div>	
		</div>

		<div class="col-xs-12 col-md-3">
			<div class="cuadro">				
				<img class="img-responsive img-1" src="{{ asset('img/Torneo-Captacion-Lo-Espejo-600x300.jpg') }}" alt="">
				<h4>PRUEBA DE JUGADORES</h4>
			</div>	
		</div>

		<div class="col-xs-12 col-md-3">
			<div class="cuadro">				
				<img class="img-responsive img-1" src="{{ asset('img/CALUGA-TIENDAUC.jpg') }}" alt="">
				<h4>TIENDA UC</h4>
			</div>	
		</div>

		<div class="clearfix"></div>

		<div class="col-xs-12 col-md-3">
			<div class="cuadro">				
				<img class="img-responsive img-1" src="{{ asset('img/Abonos_Socios_Feature-2015-600x300.jpg') }}" alt="">
				<h4>ABONOS</h4>
			</div>	
		</div>

		<div class="col-xs-12 col-md-3">
			<div class="cuadro">				
				<img class="img-responsive img-1" src="{{ asset('img/Sangre-Cruzada-600x300.jpg') }}" alt="">
				<h4>SANGRE CRUZADA</h4>
			</div>	
		</div>

		<div class="col-xs-12 col-md-3">
			<div class="cuadro">				
				<img class="img-responsive img-1" src="{{ asset('img/portada-CopaUC-2015-600x300.jpg') }}" alt="">
				<h4>COPA UC</h4>
			</div>	
		</div>

		<div class="col-xs-12 col-md-3">
			<div class="cuadro">				
				<img class="img-responsive img-1" src="{{ asset('img/mundocruzado_feature-600x300.jpg') }}" alt="">
				<h4>MUNDO CRUZADO</h4>
			</div>	
		</div>
	
	</div>
	<hr>
	<h5 class="palmares-titulo text-center">PALMARES U CATOLICA</h5>
	<div class="row">	
		<div class="col-md-3 col-sm-6 text-center">			
			<div>
				<img src="{{ asset('img/copainteramericana.png') }}" alt="">
				<p class="titulopalmares">Copa Interamericana</p>
				<p class="year"><a href="">1994</a></p>								
			</div>
		</div>
		
		<div class="col-md-3 col-sm-6 text-center">
			<div>
				<img src="{{ asset('img/copa1.png') }}" alt="">
				<p class="titulopalmares">Primera División de Chile (11)</p>
				<p class="year">
					<a href="">1949</a>,
					<a href="">1954</a>, 
					<a href="">1961</a>, 
					<a href="">1966</a>, 
					<a href="">1984</a>, 
					<a href="">1987</a>, 
					<a href="">1997</a>, 
					<a href="">2002</a>, 
					<a href="">2005</a>, 
					<a href="">2010</a>, 
					<a href="">2016</a>
				</p>
			</div>
		</div>	

		<div class="col-md-3 col-sm-6 text-center">
			<div>
				<img src="{{ asset('img/copa2.png') }}" alt="">
				<p class="titulopalmares">Copa Chile (4)</p>
				<p class="year">
					<a href="">1983</a>, 
					<a href="">1991</a>, 
					<a href="">1995</a>, 
					<a href="">2011</a>
				</p>
			</div>
		</div>

		<div class="col-md-3 col-sm-6 text-center">
			<div>
				<img src="{{ asset('img/coparepublica.png') }}" alt="">
				<p class="titulopalmares">Copa de la República (1983)</p>
				<p class="year"><a href="">1983</a></p>
			</div>
		</div>		
				
	</div>		

	</div>
@endsection
<!-- <div class="col-md-3 col-sm-4">
			<img src="" alt="">
		</div>
		<div class="col-md-9 col-sm-8">
			<h3><a href="">LA FRANJA SE PREPARÓ PARA EL AMISTOSO ANTE SAN LUIS</a></h3>
			<p>Los Cruzados completaron una nueva jornada de entrenamiento en el Complejo Raimundo Tupper. Temprano por la mañana, el Plantel...</p>
			<a href="" class="btn btn-success btn-xs">Ver Mas»</a>
		</div>
		<div class="clearfix"></div>	
		<br>
		<div class="col-md-3 col-sm-4">
			<img src="" alt="">
		</div>
		<div class="col-md-9 col-sm-8">
			<h3><a href="">[PROGRAMACIÓN] SUB 14 BUSCARÁ EL TÍTULO EN LA ÚLTIMA FECHA</a></h3>
			<p>El Fútbol Infantil de La Franja tendrá importantes desafíos durante este fin de semana. Dentro de los duelos, destaca la...</p>
			<a href="" class="btn btn-success btn-xs">Ver Mas»</a>
		</div> -->
