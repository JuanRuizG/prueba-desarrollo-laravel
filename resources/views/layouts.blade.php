<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Modulos</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Modulos</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="{{ request()->routeIs('productos.index') ? 'active' : ''}}">
						<a href="{{ route('productos.index')}}">Productos</a>
					</li>
					<li class="{{ request()->routeIs('ventas.index') ? 'active' : ''}}">
						<a href="{{ route('ventas.index')}}">Ventas</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>