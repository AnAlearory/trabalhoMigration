<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emprestimos;
use App\Http\Resources\EmprestimoResource;

class EmprestimoController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return EmprestimoResource::collection(Emprestimos::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $emprestimo = new Emprestimos;
        $emprestimo->dataDeInicio = $request->dataDeInicio;
        $emprestimo->dataDeTermino = $request->dataDeTermino;
        $emprestimo->status = $request->status;
        $emprestimo->cliente_id = $request->cliente_id;
        $emprestimo->livro_id = $request->livro_id;
        $emprestimo->save();
        return response()->json([$emprestimo]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $emprestimo = Emprestimos::findOrFail($id);
        return new EmprestimoResource($emprestimo);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $emprestimo = Emprestimos::findOrFail($id);
            if($request->dataDeInicio)
                $emprestimo->dataDeInicio = $request->dataDeInicio;
            if($request->dataDeTermino)
                $emprestimo->dataDeTermino = $request->dataDeTermino;
            if($request->status)
                $emprestimo->status = $request->status;
            if($request->cliente_id)
                $emprestimo->cliente_id = $request->cliente_id;
            if($request->livro_id)
                $emprestimo->livro_id = $request->livro_id;
            $emprestimo->save();
            return new EmprestimoResource($emprestimo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        Emprestimos::destroy($id);
            return response()->json(['DELETADO']);
    }
}
