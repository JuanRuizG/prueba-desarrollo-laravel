@extends('layouts')

@section('title','Crear Producto')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">

			@include('errors.error-messages')

			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Editar Producto</h3>
				</div>
				<div class="panel-body">
					{!!Form::model($producto,['route' => ['productos.update',$producto],'method'=>'PUT'])!!}
						@include('productos.partials.form',['btnText' => 'Actualizar'])
					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection