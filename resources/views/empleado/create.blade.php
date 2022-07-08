Crear Empleados.
@if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}

@endif
<form action="{{ url('/empleado') }}" method="POST" enctype="multipart/form-data">
    @csrf 
@include('empleado.form', ['modo'=>'Crear'])
</form>