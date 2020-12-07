<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function principal()
    {
     
       $slider = DB::table('sliders')->get();
       $destinos = DB::table('destinos')->get();
       $planes = DB::table('planes')->get();

       $pagina1 = DB::table('paginas')->where('nombre', 'pagina1')->first();
       $pagina2 = DB::table('paginas')->where('nombre', 'pagina2')->first();
       $paginacontacto = DB::table('paginas')->where('nombre', 'paginacontacto')->first();
       $paginaplanes = DB::table('paginas')->where('nombre', 'paginaplanes')->first();
        
        return view('web.index', compact('pagina1','pagina2','slider', 
                                        'destinos', 'paginaplanes','planes', 'paginacontacto'));
    }

}
