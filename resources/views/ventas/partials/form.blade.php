<div class="form-group {{$errors->has('fecha_venta') ? 'has-error' : ''}}">
	{!!Form::label('fecha_venta','Fecha Venta')!!}
	{!! Form::date('fecha_venta',null,['class' => 'form-control']) !!}
	{!!$errors->first('fecha_venta','<span class=help-block>:message</span>')!!}
</div>

<div class="form-group {{$errors->has('monto') ? 'has-error' : ''}}">
	{!!Form::label('monto','monto Venta')!!}
	{!! Form::number('monto',null,['class' => 'form-control']) !!}
	{!!$errors->first('monto','<span class=help-block>:message</span>')!!}
</div>
<div class="form-group {{$errors->has('cantidad') ? 'has-error' : ''}}">
	{!!Form::label('cantidad','Cantidad venta')!!}
	{!! Form::number('cantidad',null,['class' => 'form-control']) !!}
	{!!$errors->first('cantidad','<span class=help-block>:message</span>')!!}
</div>

<div class="form-group {{$errors->has('producto_id') ? 'has-error' : ''}}">
	{!!Form::label('producto_id','Producto')!!}
	{!! Form::select('producto_id',$productos,null,['class' => 'form-control'])!!}
	{!!$errors->first('producto_id','<span class=help-block>:message</span>')!!}
</div>


<div class="form-group {{$errors->has('categoria_id') ? 'has-error' : ''}}">
	{!!Form::label('categoria_id','Categoria')!!}
	{!! Form::select('categoria_id',$categorias,null,['class' => 'form-control'])!!}
	{!!$errors->first('categoria_id','<span class=help-block>:message</span>')!!}
</div>

<div class="form-group">
	{!! Form::submit($btnText,['class' => 'btn btn-block btn-success'])!!}
</div>