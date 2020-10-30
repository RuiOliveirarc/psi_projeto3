<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('titulo-pagina')</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
<!-- Div do cabeçalho que aparece na parte superior de todas as paginas-->
	<div style="background-color: gray" class="container">
        <div class="row">

<!-- Logotipo -->
            <div class="col-md-2">
            	<img src="img/logo.jpg">
			</div>

<!-- Empresa e contacto -->
			<div style="" class="col-md-6">
            	<h1>Design Gráfico</h1>
				<h5>Rui Oliveira 12I-2</h5>
<br>
               	<h4>Contacte-nos: 919119191</h4>

			</div>

<!-- Div para aparecer o nome da pagina que estamos -->
			<div class="col-md-4">
<br>
<br>

<!-- Nome da pagina atual-->
				<h1>
					@yield('header')
				</h1>
			</div>
		</div>
	</div>


<br>
<br>
<br>
<br>


<!-- Div para as imagens e o texto de cada pagina -->
	<div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="overlay">
                    <div style="background-color: black" class="text">
                    	@yield('Texto')
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                @yield('Imagem')
            </div>
        </div>
    </div>



	@yield('conteudo')

<!-- Div do rodapé com os links para cade pagina -->
	<div id="rodape" class="menu-rodape">
		<div class="icon-bar">
  			<a class="active" href="/"><i class="fa fa-home"></i></a> <!--HOME-->
  			<a href="onde"><i class="fa fa-globe"></i></a><!--Onde estamos-->
  			<a href="empresa"><i class="fa fa-user"></i></a> <!--SOBRE NOS(EMPRESA)-->
  			<a href="noticias"><i class="fa fa-newspaper-o"></i></a> <!--NOTICIAS-->
  			<a href="contacto"><i class="fa fa-phone"></i></a> <!--CONTACTO-NOS-->
		</div>
	</div>





	<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>