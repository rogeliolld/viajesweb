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
<h2>Slider</h2>
<a href="{{url('/admin/slider/create')}}" class="btn  btn-success">Agregar Slider</a>
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
        @foreach ($slider as $slide)
        <tr>
            
            <td>{{$loop->iteration}}</td>
            <td>
                <img src="{{asset('storage').'/'.$slide->foto}}" class="img-thumbnail img-fluid" width="200px"/>
            </td>
            <td>{{$slide->nombre}}</td>
            <td>
                <a class="btn btn-warning" href="{{url('/admin/slider/'.$slide->id.'/edit')}}">
                    Editar
                </a>
                <form method="post" action="{{url('/admin/slider/'.$slide->id)}}" style="display: inline-block">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                    <button  class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{{$slider->links()}}
</div>
@endsection