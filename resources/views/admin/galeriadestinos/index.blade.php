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
<h2>Galeria Sitios</h2>
<a href="{{url('/admin/galeriadestinos/create')}}" class="btn  btn-success">Agregar Foto</a>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($galerias as $galeria)
        <tr>
            
            <td>{{$loop->iteration}}</td>
            <td>
                <img src="{{asset('storage').'/'.$galeria->foto}}" class="img-thumbnail img-fluid" width="200px"/>
            </td>
            <td>{{$galeria->nombre}}</td>
            <td>{{$galeria->categoria}}</td>
            <td>
                <a class="btn btn-warning" href="{{url('/admin/galeriadestinos/'.$galeria->id.'/edit')}}">
                    Editar
                </a>
                <form method="post" action="{{url('/admin/galeriadestinos/'.$galeria->id)}}" style="display: inline-block">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                    <button  class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{{$galerias->links()}}
</div>
@endsection