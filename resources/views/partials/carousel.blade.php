 <!-- The carousel -->
        <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#transition-timer-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#transition-timer-carousel" data-slide-to="1"></li>
				<li data-target="#transition-timer-carousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
                    <img src="{{ asset('img/Hinchada-UC-Quillota.jpg') }}" width="1200" height="400" />
                    <div class="carousel-caption">
                        <h1 class="carousel-caption-header">ENTRADAS AMISTOSO SAN LUIS VS UNIVERSIDAD CATÓLICA</h1>
                        <p class="carousel-caption-text hidden-sm hidden-xs">
                            La Franja participará en la celebración de la “Noche Canaria”, jugando un amistoso este sábado 2 de julio a las 18.00 horas.
                        </p>
                    </div>
                </div>
                
                <div class="item">
                    <img src="{{ asset('img/jeisson-entrenamiento.jpg') }}" />
                    <div class="carousel-caption">
                        <h1 class="carousel-caption-header">UNA NUEVA JORNADA DE ENTRENAMIENTO CRUZADO</h1>
                        <p class="carousel-caption-text hidden-sm hidden-xs">
                            Universidad Católica completó el tercer entrenamiento de la semana en el Complejo Raimundo Tupper. Mañana tendrán un partido de entrenamiento ante Cerro Porteño.
                        </p>
                    </div>
                </div>
                
                <div class="item">
                    <img src="{{ asset('img/pajaro.jpg') }}" />
                    <div class="carousel-caption">
                        <h1 class="carousel-caption-header">[CONCURSO] PARTIDO DE ENTRENAMIENTO ANTE CERRO PORTEÑO</h1>
                        <p class="carousel-caption-text hidden-sm hidden-xs">
                            En el marco de la pretemporada del Plantel Profesional, los Cruzados realizarán un nuevo partido de entrenamiento de carácter privado ante el club paraguayo Cerro Porteño. Revisa a continuación si eres uno de los ganadores para presenciar el encuentro.
                        </p>
                    </div>
                </div>
            </div>

			<!-- Controls -->
			<a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
				
			</a>
			<a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
				
			</a>
            
            <!-- Timer "progress bar" -->
            <hr class="transition-timer-carousel-progress-bar animate" />
		</div>