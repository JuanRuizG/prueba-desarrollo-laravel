@extends('layouts')

@section('title','Editar Venta')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">

			@include('errors.error-messages')

			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Editar Venta</h3>
				</div>
				<div class="panel-body">
					{!!Form::model($venta,['route' => ['ventas.update',$venta],'method'=>'PUT'])!!}
						@include('ventas.partials.form',['btnText' => 'Actualizar'])
					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection