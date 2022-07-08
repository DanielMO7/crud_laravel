Mostrar la lista de empleados

<a href="{{ url('empleado/create')}}">Registrar nuevo empleado.</a>


<table class="table table-light">
    <thead class="thead-light">
        <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->Apellido }}</td>
            <td>{{ $empleado->Correo }}</td>
            <td>
                
            <a href="{{ url('/empleado/'.$empleado->id.'/edit')}}">
            Editar  
            </a> 
            |
            <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>