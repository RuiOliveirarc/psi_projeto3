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
	<h2>@yield('header')</h2>
	
	<div style="background-color: gray" class="container">
            <div class="row">
                <div class="col-md-2">
                	<img src="img/logo.jpg">
				</div>
				<div style="" class="col-md-10">
                	<h1>Design Gráfico</h1>
                	<br>
                	<h4>Contacto-nos: 919119191</h4>
				</div>
			</div>
	</div>
<br>

@yield('conteudo')
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