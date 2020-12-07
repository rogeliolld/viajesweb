<?php

namespace App\Http\Controllers;

use App\Paginas;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['paginas']=Paginas::paginate(5);

        return view('admin.paginas.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.paginas.create');
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
            'subtitulo' => 'required|string|max:100'
            
        ];
        $mensaje=["required"=> ':attribute es requerido'];
        $this->validate($request,$campos,$mensaje);
        //$datosPagina=request()->all();
        $datosPagina=request()->except("_token");
        Paginas::insert($datosPagina);
        
        return redirect('admin/paginas')->with('mensaje', 'Pagina agregada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paginas  $paginas
     * @return \Illuminate\Http\Response
     */
    public function show(Paginas $paginas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paginas  $paginas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        //
        $pagina = Paginas::findOrFail($id);
        return view('admin.paginas.edit', compact('pagina'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paginas  $paginas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $campos=[
            'nombre' => 'required|string|max:100',
            'titulo' => 'required|string|max:100',
            'subtitulo' => 'required|string|max:100'
            
        ];
        $mensaje=["required"=> ':attribute es requerido'];
        $this->validate($request,$campos,$mensaje);
        
        //
        $datosPagina=request()->except(['_token', '_method']);
        Paginas::where('id', '=', $id)->update($datosPagina);

        $pagina = Paginas::findOrFail($id);
        return redirect('admin/paginas')->with('mensaje', 'Pagina Editada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paginas  $paginas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Paginas::destroy($id);

        return redirect('admin/paginas')->with('mensaje', 'Pagina Eliminada');
    }
}
