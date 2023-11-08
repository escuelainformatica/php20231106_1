@inject('menuservicio','\App\servicio\MenuServicio')

<hr>
<ul>
@foreach(links() as $link)
    <li><a href="{{$link}}">{{$link}}</a></li>
@endforeach
</ul>
<hr>
<ul>
@foreach($menuservicio->links() as $link)
    <li><a href="{{$link}}">{{$link}}</a></li>
@endforeach
</ul>

<hr>
<ul>
@foreach(\App\servicio\MenuServicio::linksEstatico() as $link)
    <li><a href="{{$link}}">{{$link}}</a></li>
@endforeach
</ul>
<hr>
@section("contenido")
@show()