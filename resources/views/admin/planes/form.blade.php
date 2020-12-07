<h2>{{$modo=='crear'? 'Agregar':'Editar'}}Plan</h2>
<div class="form-row">
     <div class="form-group col-md-6">
          <label class="control-label" for="nombre">{{'Nombre'}}</label>
          <input class="form-control {{$errors->has('nombre')?'is-invalid':''}}" type="text" name="nombre" id="nombre" value="{{isset($plan->nombre)?$plan->nombre:old('nombre')}}">
          {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
         
     </div>
          
     <div class="form-group col-md-6">
        <label class="control-label" for="titulo">{{'Titulo'}}</label>
        <input class="form-control {{$errors->has('titulo')?'is-invalid':''}}" type="text" name="titulo" id="titulo" value="{{isset($plan->titulo)?$plan->titulo:old('titulo')}}">
        {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
   </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label class="control-label" for="icono1">{{'Imagen'}}</label>
         <input class="form-control {{$errors->has('foto')?'is-invalid':''}}"  type="file" name="foto" id="foto" value="">
         {!! $errors->first('foto', '<div class="invalid-feedback">:message</div>') !!}
         @if(isset($plan->foto))
         <img src="{{asset('storage').'/'.$plan->foto}}" class="img-thumbnail img-fluid" width="200px"/>
         @endif
    </div>
     <div class="form-group col-md-6">
          <label class="control-label" for="subtitulo">{{'Subtitulo'}}</label>
          <input class="form-control {{$errors->has('subtitulo')?'is-invalid':''}}" type="text" name="subtitulo" id="subtitulo" value="{{isset($plan->subtitulo)?$plan->subtitulo:old('subtitulo')}}">
          {!! $errors->first('subtitulo', '<div class="invalid-feedback">:message</div>') !!}
     </div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
    <label class="control-label" for="descripcion">{{'Orientacion'}}</label>
        <select class="form-control" name="orientacion" id="orientacion">
            <option value="{{isset($plan->orientacion)?$plan->orientacion:'iz'}}">Izquierda</option>
            <option value="{{isset($plan->orientacion)?$plan->orientacion:'dr'}}">Derecha</option>
        </select>
</div>
<div class="form-group col-md-12">
   <label class="control-label" for="descripcion">{{'Descripcion'}}</label>
      <textarea  class="form-control" name="descripcion" id="descripcion">{{isset($plan->descripcion)?$plan->descripcion:old('descripcion')}}
   </textarea>
</div>
</div>



<input class="btn btn-success" type="submit" value=" {{$modo=='crear'? 'Agregar':'Editar'}}">
<a class="btn btn-primary" href="{{url('/admin/planes')}}">Regresar</a>
