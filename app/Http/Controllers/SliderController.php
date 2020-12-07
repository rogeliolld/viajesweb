<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['slider']=Slider::paginate(5);

        return view('admin.slider.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.slider.create');
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


        $datosSlider=request()->except("_token");
        
        if($request->hasFile('foto')){
            $datosSlider['foto']=$request->file('foto')->store('uploads/slider', 'public');
        }
        
        Slider::insert($datosSlider); 
        return redirect('admin/slider')->with('mensaje', 'Slider agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
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
        $datosSlider=request()->except(['_token', '_method']);
        

        if($request->hasFile('foto')){

            $slider = Slider::findOrFail($id);
            Storage::delete('public/'.$slider->foto);

            $datosSlider['foto']=$request->file('foto')->store('uploads/slider', 'public');
        }
        Slider::where('id', '=', $id)->update($datosSlider);
        $slider = Slider::findOrFail($id);
        return redirect('admin/slider')->with('mensaje', 'Slider Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $slider = Slider::findOrFail($id);

        if(Storage::delete('public/'.$slider->foto)){
            Slider::destroy($id);
        }

        return redirect('admin/slider')->with('mensaje', 'Slider Eliminado');
    }
}
