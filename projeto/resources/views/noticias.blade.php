@extends('layout')

<!-- Titulo da pagina -->
	@section('titulo-pagina')
			NOTICIAS
	@endsection

<!-- Nome da pagina -->
	@section('header')
	Notícias
	@endsection


<!-- Texto -->
	@section('Texto')
        <h3 align="center">
            Prémio PME Inovação COTEC-BPI
        </h3>
<br>
        Nas ultimas 24 horas,  a nossa empresa <br> foi premiada com o Prémio PME Inovação COTEC-BPI
<br>
<br>
        <i>
            Agradece-mos a todos os clientes por confiarem nos nossos serviços
        </i>
    @endsection

<!-- Imagem -->
    @section('Imagem')
        <img style="width: 500px" src="img/noticias.jpg">
    @endsection