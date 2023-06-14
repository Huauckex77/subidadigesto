<?php

namespace App\Http\Controllers;

use App\Models\Autoridade;
use Illuminate\Http\Request;

/**
 * Class AutoridadeController
 * @package App\Http\Controllers
 */
class AutoridadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autoridades = Autoridade::query()
        
        ->when(request('search'), function ($query){
return $query->where('codigo', 'like', '%'. request('search') . '%')
->orWhere('autoridad', 'like', '%'. request('search') . '%');
        })
->paginate(5)
->withQueryString();
        return view('autoridade.index', compact('autoridades'))
            ->with('i', (request()->input('page', 1) - 1) * $autoridades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autoridade = new Autoridade();
        return view('autoridade.create', compact('autoridade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Autoridade::$rules);

        $autoridade = Autoridade::create($request->all());

        return redirect()->route('autoridades.index')
            ->with('success', 'Autoridade created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $autoridade = Autoridade::find($id);

        return view('autoridade.show', compact('autoridade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autoridade = Autoridade::find($id);

        return view('autoridade.edit', compact('autoridade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Autoridade $autoridade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autoridade $autoridade)
    {
        request()->validate(Autoridade::$rules);

        $autoridade->update($request->all());

        return redirect()->route('autoridades.index')
            ->with('success', 'Autoridade updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $autoridade = Autoridade::find($id)->delete();

        return redirect()->route('autoridades.index')
            ->with('success', 'Autoridade deleted successfully');
    }
}
