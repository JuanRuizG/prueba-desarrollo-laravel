@extends('layouts')

@section('title',$producto->nombre)

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">{{ $producto->nombre}}</h3>
				</div>
				<div class="panel-body">
					<b>Categoria </b> {{$producto->categoria->nombre}} <br>
					<b> Fecha de Creacion </b> {{$producto->fecha_Creacion}}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection