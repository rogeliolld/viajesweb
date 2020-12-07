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
<h2>Destinos</h2>
<a href="{{url('/admin/destinos/create')}}" class="btn  btn-success">Agregar Destino</a>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($destinos as $destino)
        <tr>
            
            <td>{{$loop->iteration}}</td>
            <td>
                <img src="{{asset('storage').'/'.$destino->foto}}" class="img-thumbnail img-fluid" width="100px"/>
            </td>
            <td>{{$destino->nombre}}</td>
            <td>
                <a class="btn btn-warning" href="{{url('/admin/destinos/'.$destino->id.'/edit')}}">
                    Editar
                </a>
                <form method="post" action="{{url('/admin/destinos/'.$destino->id)}}" style="display: inline-block">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                    <button  class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{{$destinos->links()}}
</div>
@endsection