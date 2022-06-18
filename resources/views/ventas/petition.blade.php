@extends('layouts')

@section('title','Peticion')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				@include('errors.error-messages')
				@include('ventas.partials.info')

				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Peticion venta</h3>
					</div>
					<div class="panel-body">
						{!! Form::open(['route' => 'ventas.petition.process','method' => 'POST'])!!}
							<div class="form-group">
								{!!Form::label('producto_id','Id del producto')!!}
								{!!Form::number('producto_id',null,['class' => 'form-control'])!!}
							</div>
							<div class="form-group">
								{!!Form::label('cantidad_producto','Cantidad del producto')!!}
								{!!Form::number('cantidad_producto',null,['class' => 'form-control'])!!}
							</div>
							<div class="form-group">
								{!!Form::submit('Registrar',['class' => 'btn btn-success btn-block'])!!}
							</div>
						{!! Form::close()!!}
					</div>
				</div>
			</div>
		</div>
	</div>
@stop