@extends('layouts.app')
@section('content')

<div class="container">
@if(Session::has('mensaje'))
<div class="alert alert-success" role="alert">
    {{
        Session::get('mensaje')
    }}
</div>

@endif
<h2>Paginas</h2>
<a href="{{url('/admin/paginas/create')}}" class="btn  btn-success">Agregar pagina</a>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Titulo</th>
            <th>Subtitulo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($paginas as $pagina)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$pagina->nombre}}</td>
            <td>{{$pagina->titulo}}</td>
            <td>{{$pagina->subtitulo}}</td>
            <td>
                <a class="btn btn-warning" href="{{url('/admin/paginas/'.$pagina->id.'/edit')}}">
                    Editar
                </a>
                <form method="post" action="{{url('/admin/paginas/'.$pagina->id)}}" style="display: inline-block">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                    <button  class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{{$paginas->links()}}
</div>
@endsection