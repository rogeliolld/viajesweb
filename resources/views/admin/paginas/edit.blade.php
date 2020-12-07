@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{url('/admin/paginas/'.$pagina->id)}}" method="post">
    {{ csrf_field() }}
    {{method_field('PATCH')}}
    @include('admin.paginas.form', ['modo'=>'editar'])
</form>
@endsection