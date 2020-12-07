@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{url('/admin/planes/'.$plan->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field('PATCH')}}
    @include('admin.planes.form', ['modo'=>'editar'])
</form>
@endsection