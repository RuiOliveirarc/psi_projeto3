@extends('layout')
	@section('titulo-pagina')
			Projecto
	@endsection

	@section('header')

	@endsection

	@section('conteudo')
	<br>
	<h4>Contacto-nos</h4>
	<br>
	<form method="post" action="{{route('processar.form')}}">
			@csrf
			<label for="nome">Nome</label>
			<input type="text" name="nome">
			<br>

			<label for="morada">Morada</label>
			<input type="text" name="morada">
			<br>

			<label for="automovel">Telemovel</label>
				<input type="text" name="morada">

			<br>
			<button type="submit">Enviar</button>

		</form>
		
	@endsection