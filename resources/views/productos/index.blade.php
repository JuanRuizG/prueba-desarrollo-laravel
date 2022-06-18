@extends('layouts')
@section('title','Productos')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Listado de Productos</h1>
			<a href="{{ route('productos.create')}}" class="btn btn-primary pull-right">Crear Productos</a>
		</div>
		<hr>
		<div class="col-md-12">

			@include('productos.partials.info')

			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Referencia</th>
						<th>Precio</th>
						<th>Peso</th>
						<th>Categoria</th>
						<th>Stock</th>
						<th>Fecha Creacion</th>
						<th colspan="2">Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($productos as $producto)
						<tr>
							<td>{{$producto->id}}</td>
							<td>{{$producto->nombre}}</td>
							<td>{{$producto->referencia}}</td>
							<td>{{$producto->precio}}</td>
							<td>{{$producto->peso}}</td>
							<td>{{$producto->categoria->nombre}}</td>
							<td>{{$producto->stock}}</td>
							<td>{{$producto->fecha_Creacion}}</td>
							<td>
								<a href="{{ route('productos.edit',$producto)}}" class="btn btn-info btn-md">Editar</a>
							</td>
							<td>
								{!! Form::open(['route' => ['productos.destroy',$producto], 'method' => 'DELETE' ]) !!}
									<button class="btn btn-danger btn-md"> Eliminar</button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!!$productos->render()!!}
		</div>
	</div>
</div>



@stop