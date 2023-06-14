<?php

namespace App\Http\Controllers;

use App\Models\Tipoacceso;
use Illuminate\Http\Request;

/**
 * Class TipoaccesoController
 * @package App\Http\Controllers
 */
class TipoaccesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoaccesos = Tipoacceso::paginate();

        return view('tipoacceso.index', compact('tipoaccesos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoaccesos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoacceso = new Tipoacceso();
        return view('tipoacceso.create', compact('tipoacceso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipoacceso::$rules);

        $tipoacceso = Tipoacceso::create($request->all());

        return redirect()->route('tipoaccesos.index')
            ->with('success', 'Tipoacceso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoacceso = Tipoacceso::find($id);

        return view('tipoacceso.show', compact('tipoacceso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoacceso = Tipoacceso::find($id);

        return view('tipoacceso.edit', compact('tipoacceso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipoacceso $tipoacceso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipoacceso $tipoacceso)
    {
        request()->validate(Tipoacceso::$rules);

        $tipoacceso->update($request->all());

        return redirect()->route('tipoaccesos.index')
            ->with('success', 'Tipoacceso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoacceso = Tipoacceso::find($id)->delete();

        return redirect()->route('tipoaccesos.index')
            ->with('success', 'Tipoacceso deleted successfully');
    }
}
