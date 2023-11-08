@extends("ejemplo")
@section("contenido")
<form>
    <input type='text' name='filtrar' value="{{$filtrar}}"/><button name='boton' value='filtrar'>Filtar</button>
</form>

<ul>
@foreach($paises as $pais)
    <li>{{$pais->id}} {{$pais->nombre}}</li>
@endforeach()
</ul>
<div>
    @if($pagina>1)
    <a href='/?paises={{$pagina-1}}&filtrar={{$filtrar}}'><</a>
    @endif

@for($i=$paginainicial;$i<=$paginafinal;$i++) 
    <a href='/?paises={{$i}}&filtrar={{$filtrar}}'>{{$i}}</a>
@endfor
    @if($pagina<$paginas)
    <a href='/?paises={{$pagina+1}}&filtrar={{$filtrar}}'>></a>
    @endif
</div>
@endsection