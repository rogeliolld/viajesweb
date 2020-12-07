    <h2>{{$modo=='crear'? 'Agregar':'Editar'}}pagina</h2>
     <div class="form-row">
          <div class="form-group col-md-6">
               <label class="control-label" for="nombre">{{'Nombre'}}</label>
               <input class="form-control {{$errors->has('nombre')?'is-invalid':''}}" type="text" name="nombre" id="nombre" value="{{isset($pagina->nombre)?$pagina->nombre:old('nombre')}}">
               {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
               
          </div>
               
          <div class="form-group col-md-6"> 
               <label class="control-label" for="leyenda">{{'Leyenda'}}</label>
               <input class="form-control" type="text" name="leyenda" id="leyenda" value="{{isset($pagina->leyenda)?$pagina->leyenda:old('leyenda')}}">
               
          </div>
     </div>

     <div class="form-row">
          <div class="form-group col-md-6">
               <label class="control-label" for="titulo">{{'Titulo'}}</label>
               <input class="form-control {{$errors->has('titulo')?'is-invalid':''}}" type="text" name="titulo" id="titulo" value="{{isset($pagina->titulo)?$pagina->titulo:old('titulo')}}">
               {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
          </div>
          <div class="form-group col-md-6">
               <label class="control-label" for="subtitulo">{{'Subtitulo'}}</label>
               <input class="form-control {{$errors->has('subtitulo')?'is-invalid':''}}" type="text" name="subtitulo" id="subtitulo" value="{{isset($pagina->subtitulo)?$pagina->subtitulo:old('subtitulo')}}">
               {!! $errors->first('subtitulo', '<div class="invalid-feedback">:message</div>') !!}
          </div>
     </div>

<div class="form-row">

    <div class="form-group col-md-12">
        <label class="control-label" for="descripcion">{{'Descripcion'}}</label>
           <textarea  class="form-control" name="descripcion" id="descripcion">{{isset($pagina->descripcion)?$pagina->descripcion:old('descripcion')}}</textarea>
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-4">
         <label class="control-label" for="icono1">{{'icono1'}}</label>
        <input class="form-control" type="text" name="icono1" id="icono1" value="{{isset($pagina->icono1)?$pagina->icono1:old('icono1')}}">
    </div>
    <div class="form-group col-md-4">
         <label class="control-label" for="icono2">{{'icono2'}}</label>
         <input class="form-control" type="text" name="icono2" id="icono2" value="{{isset($pagina->icono2)?$pagina->icono2:old('icono2')}}">
    </div>

    <div class="form-group">
         <label class="control-label" for="icono3">{{'icono3'}}</label>
         <input class="form-control" type="text" name="icono3" id="icono3" value="{{isset($pagina->icono3)?$pagina->icono3:old('icono3')}}">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
         <label class="control-label" for="iconodescripcion1">{{'Descripcion Icono 1'}}</label>
         <textarea class="form-control"  name="icondes1" id="iconodescripcion1"> {{isset($pagina->icondes1)?$pagina->icondes1:old('icondes1')}}
         </textarea>
    </div>
    <div class="form-group col-md-4">
         <label class="control-label" for="iconodescripcion2">{{'Descripcion Icono 2'}}</label>
         <textarea class="form-control" name="icondes2" id="iconodescripcion2"> {{isset($pagina->icondes2)?$pagina->icondes2:old('icondes2')}}
         </textarea>
    </div>
    <div class="form-group col-md-4">
         <label class="control-label" for="iconodescripcion3">{{'Descripcion Icono 3'}}</label>
         <textarea class="form-control"  name="icondes3" id="iconodescripcion3"> {{isset($pagina->icondes3)?$pagina->icondes3:old('icondes3')}}
         </textarea>
    </div>
</div>
    <input class="btn btn-success" type="submit" value=" {{$modo=='crear'? 'Agregar':'Editar'}}">
    <a class="btn btn-primary" href="{{url('/admin/paginas')}}">Regresar</a>
    