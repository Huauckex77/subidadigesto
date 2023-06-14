<?php

namespace App\Http\Controllers;

use App\Models\Tipoestado;
use Illuminate\Http\Request;

/**
 * Class TipoestadoController
 * @package App\Http\Controllers
 */
class TipoestadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoestados = Tipoestado::paginate();

        return view('tipoestado.index', compact('tipoestados'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoestados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoestado = new Tipoestado();
        return view('tipoestado.create', compact('tipoestado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipoestado::$rules);

        $tipoestado = Tipoestado::create($request->all());

        return redirect()->route('tipoestados.index')
            ->with('success', 'Tipoestado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoestado = Tipoestado::find($id);

        return view('tipoestado.show', compact('tipoestado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoestado = Tipoestado::find($id);

        return view('tipoestado.edit', compact('tipoestado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipoestado $tipoestado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipoestado $tipoestado)
    {
        request()->validate(Tipoestado::$rules);

        $tipoestado->update($request->all());

        return redirect()->route('tipoestados.index')
            ->with('success', 'Tipoestado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoestado = Tipoestado::find($id)->delete();

        return redirect()->route('tipoestados.index')
            ->with('success', 'Tipoestado deleted successfully');
    }
}
