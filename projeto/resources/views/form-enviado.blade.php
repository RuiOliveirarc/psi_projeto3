@extends('layout')

<!-- Titulo da pagina -->
	@section('titulo-pagina')
		Formulário submetido
	@endsection

<!-- Nome da pagina -->
	@section('header')
		Contacte-nos
	@endsection

<!-- Formulário -->
	@section('Texto')
		<b>Nome:   </b>{{$nome}} 
<br><br>
		<b>Morada:  </b>{{$morada}}
<br><br>
		<b>telemovel:  </b> {{$telemovel}}
<br><br>
		<a href="contacto">Voltar</a>
	@endsection


<!-- Imagem -->
	@section('Imagem')
		<img width="500px" src="img/tele.jpg">
	@endsection