@extends('layout')

<!-- Titulo da pagina -->
	@section('titulo-pagina')
		LOCALIZAÇÃO
	@endsection

<!-- Nome da pagina -->
	@section('header')
		Localização
	@endsection

<!-- Texto -->
	@section('Texto')
        A nossa empresa esta localizada na Escola D.Afonso Henriques<br> em Vila das Aves
<br><br>
        <a href="https://www.google.pt/maps/place/Escola+Secund%C3%A1ria+Dom+Afonso+Henriques/@41.3617243,-8.4036915,18z/data=!4m8!1m2!2m1!1sescola!3m4!1s0x0:0x64490ccdc607362e!8m2!3d41.3617299!4d-8.4021699">
        	GOOGLE MAPS
        </a>
    @endsection

<!-- Imagem -->
    @section('Imagem')
            <img width="500px" src="img/escola.jpg">
    @endsection
                
