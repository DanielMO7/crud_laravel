Formulario de datos

<h1>{{ $modo }} Empleado</h1>
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" id="Nombre"><br>
    <label for="Apellido">Apellido</label>
    <input type="text" name="Apellido" value="{{ isset($empleado->Apellido)?$empleado->Apellido:''}}" id=""><br>
    <label for="Correo">Correo</label>
    <input type="text" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:'' }}" id=""><br>

    <input type="submit" value="{{ $modo }} Datos"><br>
 
    <a href="{{ url('empleado/')}}">Regresar</a>