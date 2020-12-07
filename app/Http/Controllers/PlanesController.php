<?php

namespace App\Http\Controllers;

use App\Planes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlanesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['planes']=Planes::paginate(5);

        return view('admin.planes.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.planes.create');
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
            'titulo' => 'required|string|max:100',
            'subtitulo' => 'required|string|max:100',
            'foto'=>'required|max:10000|mimes:jpeg,jpg'
            
        ];
        $mensaje=["required"=> ':attribute es requerido'];
        $this->validate($request,$campos,$mensaje);


        $datosPlan=request()->except("_token");
        
        if($request->hasFile('foto')){
            $datosPlan['foto']=$request->file('foto')->store('uploads/planes', 'public');
        }
        
        Planes::insert($datosPlan); 
        return redirect('admin/planes')->with('mensaje', 'Pagina agregada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Planes  $planes
     * @return \Illuminate\Http\Response
     */
    public function show(Planes $planes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Planes  $planes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $plan = Planes::findOrFail($id);
        return view('admin.planes.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Planes  $planes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'nombre' => 'required|string|max:100',
            'titulo' => 'required|string|max:100',
            'subtitulo' => 'required|string|max:100'
            
        ];
       

        if($request->hasFile('foto')){
            $campos+=['foto'=>'required|max:10000|mimes:jpeg,jpg'];
        }

        
        $mensaje=["required"=> ':attribute es requerido'];
        $this->validate($request,$campos,$mensaje);
        //
        $datosPlan=request()->except(['_token', '_method']);
        

        if($request->hasFile('foto')){

            $plan = Planes::findOrFail($id);
            Storage::delete('public/'.$plan->foto);

            $datosPlan['foto']=$request->file('foto')->store('uploads/planes', 'public');
        }
        Planes::where('id', '=', $id)->update($datosPlan);
        $plan = Planes::findOrFail($id);
        return redirect('admin/planes')->with('mensaje', 'Plan Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Planes  $planes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $plan = Planes::findOrFail($id);

        if(Storage::delete('public/'.$plan->foto)){
            Planes::destroy($id);
        }

        return redirect('admin/planes')->with('mensaje', 'Plan Eliminado');
    }
}
