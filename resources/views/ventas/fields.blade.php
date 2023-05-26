

<!-- Fecha Probable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_probable', 'Fecha Probable:') !!}
    {!! Form::text('fecha_probable', null, ['class' => 'form-control','id'=>'fecha_probable']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_probable').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Fecha Contacto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_contacto', 'Fecha Contacto:') !!}
    {!! Form::text('fecha_contacto', null, ['class' => 'form-control','id'=>'fecha_contacto']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_contacto').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Acuerdo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('acuerdo', 'Acuerdo:') !!}
    {!! Form::text('acuerdo', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Venta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_venta', 'Estado Venta:') !!}
    {!! Form::text('estado_venta', null, ['class' => 'form-control']) !!}
</div>

<!-- Producto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto_id', 'Producto:') !!}
    {!! Form::select('producto_id', $producto, old('producto_id', $ventas->producto_id ?? null), ['class' => 'form-control']) !!}
</div>

<!-- Asociado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('asociado_id', 'Asociado Id:') !!}
    {!! Form::select('asociado_id', $asociado, old('asociado_id', $ventas->asociado_id ?? null), ['class' => 'form-control']) !!}

</div>

<!-- Users Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('users_id', 'Users Id:') !!}
    {!! Form::select('users_id', $usuario, old('users_id', $ventas->users_id ?? null), ['class' => 'form-control']) !!}
</div>
