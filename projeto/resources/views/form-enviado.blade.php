@extends('layout')
	@section('titulo-pagina')
			Formulário submetido
	@endsection

	@section('header')
	@endsection

	@section('conteudo')
	<br>
		<b>Nome:   </b>{{$nome}} <br>
		<b>Morada:  </b>{{$morada}}<br>
		<b>telemovel:  </b> {{$telemovel}}
	@endsection