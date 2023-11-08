@extends("ejemplo")
@section("contenido")
<form method='post'>
    @csrf
    <input type='text' name='nombre'/><br>
    <input type='submit' name='boton' value='insertar'/><br>
</form>
@endsection()