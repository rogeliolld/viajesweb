<?php

namespace App\Http\Controllers;

use App\Destinos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['destinos']=Destinos::paginate(5);

        return view('admin.destinos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.destinos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'nombre' => 'required|string|max:100',
            'foto'=>'required|max:10000|mimes:jpeg,jpg'
            
        ];
        $mensaje=["required"=> ':attribute es requerido'];
        $this->validate($request,$campos,$mensaje);


        $datosDestino=request()->except("_token");
        
        if($request->hasFile('foto')){
            $datosDestino['foto']=$request->file('foto')->store('uploads/destinos', 'public');
        }
        
        Destinos::insert($datosDestino); 
        return redirect('admin/destinos')->with('mensaje', 'El Destino se agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Destinos  $destinos
     * @return \Illuminate\Http\Response
     */
    public function show(Destinos $destinos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Destinos  $destinos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $destino = Destinos::findOrFail($id);
        return view('admin.destinos.edit', compact('destino'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Destinos  $destinos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $campos=[
            'nombre' => 'required|string|max:100',
            
            
        ];
       

        if($request->hasFile('foto')){
            $campos+=['foto'=>'required|max:10000|mimes:jpeg,jpg'];
        }

        
        $mensaje=["required"=> ':attribute es requerido'];
        $this->validate($request,$campos,$mensaje);
        //
        $datosDestino=request()->except(['_token', '_method']);
        

        if($request->hasFile('foto')){

            $destino = Destinos::findOrFail($id);
            Storage::delete('public/'.$destino->foto);

            $datosDestino['foto']=$request->file('foto')->store('uploads/destinos', 'public');
        }
        Destinos::where('id', '=', $id)->update($datosDestino);
        $destino = Destinos::findOrFail($id);
        return redirect('admin/destinos')->with('mensaje', 'Destino Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Destinos  $destinos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $destino = Destinos::findOrFail($id);

        if(Storage::delete('public/'.$destino->foto)){
            Destinos::destroy($id);
        }

        return redirect('admin/destinos')->with('mensaje', 'Destino Eliminado');
    }
}
