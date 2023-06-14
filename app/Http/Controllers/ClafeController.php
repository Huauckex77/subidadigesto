<?php

namespace App\Http\Controllers;

use App\Models\Clafe;
use Illuminate\Http\Request;

/**
 * Class ClafeController
 * @package App\Http\Controllers
 */
class ClafeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $claves = Clafe::paginate();

        return view('clafe.index', compact('claves'))
            ->with('i', (request()->input('page', 1) - 1) * $claves->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clafe = new Clafe();
        return view('clafe.create', compact('clafe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Clafe::$rules);

        $clafe = Clafe::create($request->all());

        return redirect()->route('claves.index')
            ->with('success', 'Clafe created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clafe = Clafe::find($id);

        return view('clafe.show', compact('clafe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clafe = Clafe::find($id);

        return view('clafe.edit', compact('clafe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Clafe $clafe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clafe $clafe)
    {
        request()->validate(Clafe::$rules);

        $clafe->update($request->all());

        return redirect()->route('claves.index')
            ->with('success', 'Clafe updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $clafe = Clafe::find($id)->delete();

        return redirect()->route('claves.index')
            ->with('success', 'Clafe deleted successfully');
    }
}
