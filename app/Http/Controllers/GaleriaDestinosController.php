<?php

namespace App\Http\Controllers;

use App\GaleriaDestinos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriaDestinosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['galerias']=GaleriaDestinos::paginate(5);

        return view('admin.galeriadestinos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.galeriadestinos.create');
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
            'categoria' => 'required|string|max:100',
            'foto'=>'required|max:10000|mimes:jpeg,jpg'
            
        ];
        $mensaje=["required"=> ':attribute es requerido'];
        $this->validate($request,$campos,$mensaje);


        $datosGaleria=request()->except("_token");
        
        if($request->hasFile('foto')){
            $datosGaleria['foto']=$request->file('foto')->store('uploads/destinos/galeria', 'public');
        }
        
        GaleriaDestinos::insert($datosGaleria); 
        return redirect('admin/galeriadestinos')->with('mensaje', 'Foto agregada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GaleriaDestinos  $galeriaDestinos
     * @return \Illuminate\Http\Response
     */
    public function show(GaleriaDestinos $galeriaDestinos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GaleriaDestinos  $galeriaDestinos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeria = GaleriaDestinos::findOrFail($id);
        return view('admin.galeriadestinos.edit', compact('galeria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GaleriaDestinos  $galeriaDestinos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        $datosGaleria=request()->except(['_token', '_method']);
        

        if($request->hasFile('foto')){

            $datosGaleria = GaleriaDestinos::findOrFail($id);
            Storage::delete('public/'.$datosGaleria->foto);

            $datosGaleria['foto']=$request->file('foto')->store('uploads/destinos/galeria', 'public');
        }
        GaleriaDestinos::where('id', '=', $id)->update($datosGaleria);
        $datosGaleria = GaleriaDestinos::findOrFail($id);
        return redirect('admin/galeriadestinos')->with('mensaje', 'Galeria Editada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GaleriaDestinos  $galeriaDestinos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeria = GaleriaDestinos::findOrFail($id);

        if(Storage::delete('public/'.$galeria->foto)){
            GaleriaDestinos::destroy($id);
        }

        return redirect('admin/galeriadestinos')->with('mensaje', 'Galeria Eliminada');
    }
}
