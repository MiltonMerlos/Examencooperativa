

<!-- Categoria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_id', 'Categoria:') !!}
    {!! Form::select('categoria_id', $categorias, old('categoria_id', $producto->categoria_id ?? null), ['class' => 'form-control']) !!}
</div>


<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Anio Vigencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anio_vigencia', 'Anio Vigencia:') !!}
    {!! Form::text('anio_vigencia', null, ['class' => 'form-control']) !!}
</div>
