<div class="table-responsive">
    <table class="table" id="asociados-table">
        <thead>
        <tr>
            <th>Id</th>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Direccion</th>
        <th>Email</th>
        <th>Telefono1</th>
        <th>Telefono2</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($asociados as $asociado)
            <tr>
                <td>{{ $asociado->id }}</td>
            <td>{{ $asociado->codigo }}</td>
            <td>{{ $asociado->nombre }}</td>
            <td>{{ $asociado->apellido }}</td>
            <td>{{ $asociado->direccion }}</td>
            <td>{{ $asociado->email }}</td>
            <td>{{ $asociado->telefono1 }}</td>
            <td>{{ $asociado->telefono2 }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['asociados.destroy', $asociado->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('asociados.show', [$asociado->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('asociados.edit', [$asociado->id]) }}"
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
