@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{url('/admin/destinos/'.$destino->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field('PATCH')}}
    @include('admin.destinos.form', ['modo'=>'editar'])
</form>
@endsection