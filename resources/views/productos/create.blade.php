@extends('layouts')

@section('title','Crear Producto')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">

			@include('errors.error-messages')

			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Crear Producto</h3>
				</div>
				<div class="panel-body">
					{!!Form::open(['route' => 'productos.store','method'=>'POST'])!!}
						@include('productos.partials.form',['btnText' => 'Guardar'])
					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection