@extends('layouts')
@section('title','Ventas')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Listado de Ventas</h1>
			{{-- <a href="{{ route('ventas.create')}}" class="btn btn-primary pull-right">Crear Venta</a> --}}
			<a href="{{ route('ventas.petition')}}" class="btn btn-warning">Realizar Venta</a>
		</div>
		<hr>
		<div class="col-md-12">

			@include('ventas.partials.info')

			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Fecha Venta</th>
						<th>Monto</th>
						<th>Cantidad</th>
						<th>Producto</th>
						<th>Categoria</th>
						{{-- <th colspan="2"></th> --}}
					</tr>
				</thead>
				<tbody>
					@foreach($ventas as $venta)
						<tr>
							<td>{{$venta->id}}</td>
							<td>{{$venta->fecha_venta}}</td>
							<td>{{$venta->monto}}</td>
							<td>{{$venta->cantidad}}</td>
							<td>{{$venta->producto->nombre}}</td>
							<td>{{$venta->categoria->nombre}}</td>
							{{-- <td>
								<a href="{{ route('ventas.edit',$venta)}}" class="btn btn-info btn-md">Editar</a>
							</td>
							<td>
								{!! Form::open(['route' => ['ventas.destroy',$venta], 'method' => 'DELETE' ]) !!}
									<button class="btn btn-danger btn-md"> Eliminar</button>
								{!! Form::close() !!}
							</td> --}}
						</tr>
					@endforeach
				</tbody>
			</table>
			{!!$ventas->render()!!}
		</div>
	</div>
</div>



@stop