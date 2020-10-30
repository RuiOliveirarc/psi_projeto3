@extends('layout')

<!-- Titulo da pagina -->
	@section('titulo-pagina')
			Projecto
	@endsection

<!-- Nome da pagina -->
	@section('header')
		Home
	@endsection

<!-- Texto -->
	@section('conteudo')


    <div class="container">
        <div class="row">
            <div class="col-md-8">

<!--############################################## CARROCEL #################################################-->
                <div class="container">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/html.png" alt="Primeiro Slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/css.png" alt="Segundo Slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/js.png" alt="Terceiro Slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>                            
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
            </div>
<!--########################################################################################################-->


            <div class="col-md-4">

<!-- Texto -->
                <div class="overlay">
                    <div style="background-color: black" class="text">Trabalhamos com HTML, CSS, JS e PHP</div>
                </div>

            </div>
        </div>
    </div>


<br>

    <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="overlay">
                        <div style="background-color: black" class="text">Somos especialistas na criação de <br>logotipos e design grafico</div>
                    </div>
                </div>


                <div class="col-md-6">
                    <img width="500px" align="right" src="img/1.jpg">
                </div>
            </div>
    </div>


	@endsection