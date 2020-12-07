@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{url('/admin/galeriadestinos/'.$galeria->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field('PATCH')}}
    @include('admin.galeriadestinos.form', ['modo'=>'editar'])
</form>
@endsection