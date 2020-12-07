@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{url('/admin/slider/'.$slider->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field('PATCH')}}
    @include('admin.slider.form', ['modo'=>'editar'])
</form>
@endsection