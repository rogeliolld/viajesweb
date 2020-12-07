<h2>{{$modo=='crear'? 'Agregar ':'Editar '}}Foto Galeria</h2>
<div class="form-row">
     <div class="form-group col-md-6">
          <label class="control-label" for="nombre">{{'Nombre'}}</label>
          <input class="form-control {{$errors->has('nombre')?'is-invalid':''}}" type="text" name="nombre" id="nombre" value="{{isset($galeria->nombre)?$galeria->nombre:old('nombre')}}">
          {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
         
     </div>
     <div class="form-group col-md-5">
          <label class="control-label" for="categoria">{{'Destino'}}</label>
              <select class="form-control" name="categoria" id="categoria">
                  <option value="{{isset($galeria->orientacion)?$galeria->orientacion:'colombia'}}">Colombia</option>
                  <option value="{{isset($galeria->orientacion)?$galeria->orientacion:'chile'}}">Chile</option>
                  <option value="{{isset($galeria->orientacion)?$galeria->orientacion:'argentina'}}">Argentina</option>
                  <option value="{{isset($galeria->orientacion)?$galeria->orientacion:'eeuu'}}">EEUU</option>
                  <option value="{{isset($galeria->orientacion)?$galeria->orientacion:'brazil'}}">Brazil</option>
                  <option value="{{isset($galeria->orientacion)?$galeria->orientacion:'ecuador'}}">Ecuador</option>
              </select>
      </div>
          
    
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label class="control-label" for="icono1">{{'Imagen'}}</label>
         <input class="form-control {{$errors->has('foto')?'is-invalid':''}}"  type="file" name="foto" id="foto" value="">
         {!! $errors->first('foto', '<div class="invalid-feedback">:message</div>') !!}
         @if(isset($galeria->foto))
         <img src="{{asset('storage').'/'.$galeria->foto}}" class="img-thumbnail img-fluid" width="200px"/>
         @endif
    </div>
     
</div>

<div class="form-row">
<div class="form-group col-md-12">
   <label class="control-label" for="descripcion">{{'Descripcion'}}</label>
      <textarea  class="form-control" name="descripcion" id="descripcion">{{isset($galeria->descripcion)?$galeria->descripcion:old('descripcion')}}
   </textarea>
</div>
</div>



<input class="btn btn-success" type="submit" value=" {{$modo=='crear'? 'Agregar':'Editar'}}">
<a class="btn btn-primary" href="{{url('/admin/galeriadestinos')}}">Regresar</a>
