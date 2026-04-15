<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cartorio;

class CartorioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartorios = Cartorio::with('municipio')->get();
        return view('cartorios.index', compact('cartorios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $municipios = \App\Models\Municipio::all();
        return view('cartorios.create', compact('municipios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dadosValidados = $request->validate([
            'nome' => 'required|string|max:255',
            'cnpj' => 'required|string|max:20',
            'nome_tabeliao' => 'required|string|max:255',
            'municipio_id' => 'required|exists:municipios,id',
            'ativo' => 'boolean',
        ]);

        $dadosValidados['ativo'] = $request->has('ativo');  

        Cartorio::create($dadosValidados);

        return redirect()->route('cartorios.index')->with('sucesso', 'Cartório cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cartorio $cartorio)
    {
        $municipios = \App\Models\Municipio::all();
        return view('cartorios.edit', compact('cartorio', 'municipios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cartorio $cartorio)
    {
        $dadosValidados = $request->validate([
            'nome' => 'required|string|max:255',
            'cnpj' => 'required|string|max:20',
            'nome_tabeliao' => 'required|string|max:255',
            'municipio_id' => 'required|exists:municipios,id',
        ]);

        $dadosValidados['ativo'] = $request->has('ativo');  

        $cartorio->update($dadosValidados);

        return redirect()->route('cartorios.index')->with('sucesso', 'Cartório atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cartorio $cartorio)
    {
        $cartorio->delete();
        return redirect()->route('cartorios.index')->with('sucesso', 'Cartório excluído com sucesso!');
    }
}
