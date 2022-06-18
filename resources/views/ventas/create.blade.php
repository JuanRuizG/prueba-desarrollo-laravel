@extends('layouts')

@section('title','Crear Venta')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">

			@include('errors.error-messages')

			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Crear Venta</h3>
				</div>
				<div class="panel-body">
					{!!Form::open(['route' => 'ventas.store','method'=>'POST'])!!}
						@include('ventas.partials.form',['btnText' => 'Guardar'])
					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection