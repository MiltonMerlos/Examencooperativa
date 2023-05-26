<div class="table-responsive">
    <table class="table" id="ventas-table">
        <thead>
        <tr>

            <th>Id</th>
        <th>Fecha Probable</th>
        <th>Fecha Contacto</th>
        <th>Acuerdo</th>
        <th>Estado Venta</th>
        <th>Producto Id</th>
        <th>Asociado Id</th>
        <th>Users Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ventas as $venta)
            <tr>
                <td>{{ $venta->id }}</td>
            <td>{{ $venta->fecha_probable }}</td>
            <td>{{ $venta->fecha_contacto }}</td>
            <td>{{ $venta->acuerdo }}</td>
            <td>{{ $venta->estado_venta }}</td>
            <td>{{ $venta->Tipoproducto->nombre .'/'.$venta->Tipoproducto->tipocategoria->nombre }}</td>
            <td>{{ $venta->Tipoasociado->nombre }}</td>
            <td>{{ $venta->Tipousers->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['ventas.destroy', $venta->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ventas.show', [$venta->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('ventas.edit', [$venta->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
