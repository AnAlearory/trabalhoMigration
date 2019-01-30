<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livros;

class LivrosController extends Controller
{
    public function create(Request $request){
    	$livro = new Livros;
    	$livro->titulo = $request->titulo;
    	$livro->autor = $request->autor;
    	$livro->editora = $request->editora;
    	$livro->versao = $request->versao;
    	$livro->anoDeLancamento = $request->anoDeLancamento;
    	$livro->qtdEstoque = $request->qtdEstoque;
    	$livro->qtdEmprestada = $request->qtdEmprestada;
    	$livro->save();
    	return response()->json([$livro]);
    }

    public function list(){
    	return Livros::All();
    }

    public function show($id){
        $livro = Livros::findOrFail($id);
        return response()->json([$livro]);
    }

    public function update(Request $request, $id){
    	$livro = Livros::findOrFail($id);
    	if($request->titulo)
			$livro->titulo = $request->titulo;
		if($request->autor)
			$livro->autor = $request->autor;
		if($request->editora)
			$livro->editora = $request->editora;
		if($request->versao)
			$livro->versao = $request->versao;
		if($request->anoDeLancamento)
			$livro->anoDeLancamento = $request->anoDeLancamento;
		if($request->qtdEstoque)
			$livro->qtdEstoque = $request->qtdEstoque;
		if($request->qtdEmprestada)
			$livro->qtdEmprestada = $request->qtdEmprestada;
		$livro->save();
		return response()->json([$livro]);
    }

    public function delete($id){
		Livros::destroy($id);
		return response()->json(['DELETADO']);
	}
}
