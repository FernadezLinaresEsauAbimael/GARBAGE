<?php

namespace App\Http\Controllers;

use App\Models\RutasHora;
use Illuminate\Http\Request;

/**
 * Class RutasHoraController
 * @package App\Http\Controllers
 */
class RutasHoraController extends Controller
{

    public function __construct() {
        $this->middleware('auth'); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rutasHoras = RutasHora::paginate();

        return view('rutas-hora.index', compact('rutasHoras'))
            ->with('i', (request()->input('page', 1) - 1) * $rutasHoras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rutasHora = new RutasHora();
        return view('rutas-hora.create', compact('rutasHora'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(RutasHora::$rules);

        $rutasHora = RutasHora::create($request->all());

        return redirect()->route('rutas-horas.index')
            ->with('success', 'RutasHora created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rutasHora = RutasHora::find($id);

        return view('rutas-hora.show', compact('rutasHora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rutasHora = RutasHora::find($id);

        return view('rutas-hora.edit', compact('rutasHora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  RutasHora $rutasHora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RutasHora $rutasHora)
    {
        request()->validate(RutasHora::$rules);

        $rutasHora->update($request->all());

        return redirect()->route('rutas-horas.index')
            ->with('success', 'RutasHora updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $rutasHora = RutasHora::find($id)->delete();

        return redirect()->route('rutas-horas.index')
            ->with('success', 'RutasHora deleted successfully');
    }
}
