<?php

namespace App\Http\Controllers;

use App\Estoque;
use Illuminate\Http\Request;

class estoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('estoqueIndex');
    }

    public function formEstoque()
    {

        return view('formEstoque');
    }

    public function consulta()
    {
        $select = Estoque::all();

        return view('consultaEstoque', compact('select'));
    }

    public function buscar(Request $request)
    {
        $dataForm = $request->except("_token");
        $busca = Estoque::where('nome', $dataForm)->get();

        return view('busca', compact('busca'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $dataForm = $request->except('_token');
        $insert = Estoque::create($dataForm);
        if ($insert == true) {
            return view('formEstoque');
        } else {
            echo "Error";
        }
    }

    public function editar()
    {

        return view('editEstoque');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Estoque $estoque, $id)
    { }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Estoque $estoque, Request $request)
    {
        $estoque->codigo = $request->codigo;
        $estoque->nome = $request->nome;
        $estoque->categoria = $request->categoria;
        $estoque->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
