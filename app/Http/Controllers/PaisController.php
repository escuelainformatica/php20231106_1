<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Http\Requests\StorePaisRequest;
use App\Http\Requests\UpdatePaisRequest;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filtrar=$request->get('filtrar','');
   
        $conteo=Pais::where('nombre','like','%'.$filtrar.'%')->count();
        $paginas= ceil($conteo/10);
        // quiero mostrar solo 10 links
        // si estoy en la pagina 30, deberia mostrar desde el 25-35.
        $pagina=$request->get("paises",1);


        if($pagina<1) $pagina= 1;
        if($pagina>$paginas) $pagina=$paginas;
        $paginainicial=$pagina-5;
        if($paginainicial<1) $paginainicial= 1;
        $paginafinal=$pagina+5;
        if($paginafinal>$paginas) $paginafinal=$paginas;


        $paises=Pais::where('nombre','like','%'.$filtrar.'%')
            ->paginate($perPage = 10, $columns = ['*'], $pageName = 'paises');
        return view("pais.listar",[
            'filtrar'=>$filtrar,
            'paises'=>$paises,
            'pagina'=>$pagina,
            'paginas'=>$paginas,
            'paginainicial'=>$paginainicial,
            'paginafinal'=>$paginafinal
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pais.insertar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaisRequest $request)
    {
        $pais = Pais::create($request->all());
        $pais->save();
        //var_dump($pais);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pais $pais)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pais $pais)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaisRequest $request, Pais $pais)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pais $pais)
    {
        //
    }
}
