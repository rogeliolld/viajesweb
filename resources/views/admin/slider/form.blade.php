<h2>{{$modo=='crear'? 'Agregar':'Editar'}}Slider</h2>
<div class="form-row">
     <div class="form-group col-md-6">
          <label class="control-label" for="nombre">{{'Nombre'}}</label>
          <input class="form-control {{$errors->has('nombre')?'is-invalid':''}}" type="text" name="nombre" id="nombre" value="{{isset($slider->nombre)?$slider->nombre:old('nombre')}}">
          {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
         
     </div>
          
     
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label class="control-label" for="icono1">{{'Imagen'}}</label>
         <input class="form-control {{$errors->has('foto')?'is-invalid':''}}"  type="file" name="foto" id="foto" value="">
         {!! $errors->first('foto', '<div class="invalid-feedback">:message</div>') !!}
         @if(isset($slider->foto))
         <img src="{{asset('storage').'/'.$slider->foto}}" class="img-thumbnail img-fluid" width="200px"/>
         @endif
    </div>
     
</div>





<input class="btn btn-success" type="submit" value=" {{$modo=='crear'? 'Agregar':'Editar'}}">
<a class="btn btn-primary" href="{{url('/admin/slider')}}">Regresar</a>
