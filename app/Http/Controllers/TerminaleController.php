<?php

namespace App\Http\Controllers;

use App\Models\Terminale;
use App\Models\Estado; 
use Illuminate\Http\Request;

/**
 * Class TerminaleController
 * @package App\Http\Controllers
 */
class TerminaleController extends Controller
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
        $terminales = Terminale::paginate();

        return view('terminale.index', compact('terminales'))
            ->with('i', (request()->input('page', 1) - 1) * $terminales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $terminale = new Terminale();

        $estados = Estado::pluck('nombre','id');

        return view('terminale.create', compact('terminale','estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Terminale::$rules);

        $terminale = Terminale::create($request->all());

        return redirect()->route('terminales.index')
            ->with('success', 'Terminale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $terminale = Terminale::find($id);

        return view('terminale.show', compact('terminale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $terminale = Terminale::find($id);

        $estados = Estado::pluck('nombre','id');

        return view('terminale.edit', compact('terminale','estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Terminale $terminale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Terminale $terminale)
    {
        request()->validate(Terminale::$rules);

        $terminale->update($request->all());

        return redirect()->route('terminales.index')
            ->with('success', 'Terminale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $terminale = Terminale::find($id)->delete();

        return redirect()->route('terminales.index')
            ->with('success', 'Terminale deleted successfully');
    }
}
