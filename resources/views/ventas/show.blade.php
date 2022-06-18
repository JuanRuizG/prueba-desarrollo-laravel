@extends('layouts')

@section('title','Venta')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"> Ventas</h3>
				</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item"><b>Fecha</b> {{$venta->fecha_venta}}</li>
						<li class="list-group-item"><b> Producto </b> {{$venta->producto->nombre}}</li>
						<li class="list-group-item"><b>Categoria </b> {{$venta->categoria->nombre}}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection