<li class="nav-item">
    <a href="{{ route('asociados.index') }}"
       class="nav-link {{ Request::is('asociados*') ? 'active' : '' }}">
        <p>Asociados</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('categorias.index') }}"
       class="nav-link {{ Request::is('categorias*') ? 'active' : '' }}">
        <p>Categorias</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('productos.index') }}"
       class="nav-link {{ Request::is('productos*') ? 'active' : '' }}">
        <p>Productos</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('ventas.index') }}"
       class="nav-link {{ Request::is('ventas*') ? 'active' : '' }}">
        <p>Ventas</p>
    </a>
</li>


