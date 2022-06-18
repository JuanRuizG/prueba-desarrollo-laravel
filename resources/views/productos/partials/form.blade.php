<div class="form-group {{$errors->has('nombre') ? 'has-error' : ''}}">
	{!!Form::label('nombre','Nombre Producto')!!}
	{!! Form::text('nombre',null,['class' => 'form-control']) !!}
	{!!$errors->first('nombre','<span class=help-block>:message</span>')!!}
</div>
<div class="form-group {{$errors->has('referencia') ? 'has-error' : ''}}">
	{!!Form::label('referencia','Referencia Producto')!!}
	{!! Form::text('referencia',null,['class' => 'form-control']) !!}
	{!!$errors->first('referencia','<span class=help-block>:message</span>')!!}
</div>
<div class="form-group {{$errors->has('precio') ? 'has-error' : ''}}">
	{!!Form::label('precio','Precio Producto')!!}
	{!! Form::number('precio',null,['class' => 'form-control']) !!}
	{!!$errors->first('precio','<span class=help-block>:message</span>')!!}
</div>
<div class="form-group {{$errors->has('peso') ? 'has-error' : ''}}">
	{!!Form::label('peso','Peso Producto')!!}
	{!! Form::number('peso',null,['class' => 'form-control']) !!}
	{!!$errors->first('peso','<span class=help-block>:message</span>')!!}
</div>
<div class="form-group {{$errors->has('categoria_id') ? 'has-error' : ''}}">
	{!!Form::label('categoria_id','Categoria Producto')!!}
	{!! Form::select('categoria_id',$categorias,null,['class' => 'form-control'])!!}
	{!!$errors->first('categoria_id','<span class=help-block>:message</span>')!!}
</div>
<div class="form-group {{$errors->has('stock') ? 'has-error' : ''}}">
	{!!Form::label('stock','Cantidad del Producto')!!}
	{!! Form::number('stock',null,['class' => 'form-control']) !!}
	{!!$errors->first('stock','<span class=help-block>:message</span>')!!}
</div>
<div class="form-group {{$errors->has('fecha_Creacion') ? 'has-error' : ''}}">
	{!!Form::label('fecha_Creacion','Fecha de creacion Producto')!!}
	{!! Form::date('fecha_Creacion',null,['class' => 'form-control']) !!}
	{!!$errors->first('fecha_Creacion','<span class=help-block>:message</span>')!!}
</div>
<div class="form-group">
	{!! Form::submit($btnText,['class' => 'btn btn-block btn-success'])!!}
</div>