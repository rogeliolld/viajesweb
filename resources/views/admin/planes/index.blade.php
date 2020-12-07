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
<h2>Planes</h2>
<a href="{{url('/admin/planes/create')}}" class="btn  btn-success">Agregar Planes</a>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Titulo</th>
            <th>Subtitulo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($planes as $plan)
        <tr>
            
            <td>{{$loop->iteration}}</td>
            <td>
                <img src="{{asset('storage').'/'.$plan->foto}}" class="img-thumbnail img-fluid" width="200px"/>
            </td>
            <td>{{$plan->nombre}}</td>
            <td>{{$plan->titulo}}</td>
            <td>{{$plan->subtitulo}}</td>
            <td>
                <a class="btn btn-warning" href="{{url('/admin/planes/'.$plan->id.'/edit')}}">
                    Editar
                </a>
                <form method="post" action="{{url('/admin/planes/'.$plan->id)}}" style="display: inline-block">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                    <button  class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{{$planes->links()}}
</div>
@endsection