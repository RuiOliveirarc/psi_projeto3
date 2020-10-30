@extends('layout')

<!-- Titulo da pagina -->
	@section('titulo-pagina')
			CONTACTO
	@endsection

<!-- Nome da pagina -->
	@section('header')
		Contacte-nos
	@endsection

<!-- FORMULARIO -->
	@section('Texto')
		<form method="post" action="{{route('processar.form')}}">
			@csrf
			<label for="nome">Nome</label>
			<input type="text" name="nome">
<br>

			<label for="morada">Morada</label>
			<input type="text" name="morada">
<br>

			<label for="automovel">Telemovel</label>
			<input type="text" name="telemovel">

<br>
			<button type="submit">Enviar</button>
		</form>
		
	@endsection

<!-- Imagem -->
	@section('Imagem')
		<img width="500px" src="img/tele.jpg">
	@endsection