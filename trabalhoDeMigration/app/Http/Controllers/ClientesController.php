<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
	public function create(Request $request){
    $cliente = new Cliente;
    $cliente->nome = $request->nome;
    $cliente->telefone = $request->telefone;
    $cliente->dataDeNascimento = $request->dataDeNascimento;
    $cliente->endereco = $request->endereco;
    $cliente->cpf = $request->cpf;
    $cliente->save();
    return response()->json([$cliente]);
	}

	public function show($id){
		$cliente = Cliente::findOrFail($id);
		return response()->json([$cliente]);
	}

	public function list(){
		return Cliente::all();
	}

	public function update(Request $request, $id){
		$cliente = Cliente::findOrFail($id);
		if($request->nome)
			$cliente->nome = $request->nome;
		if($request->telefone)
			$cliente->telefone = $request->telefone;
		if($request->dataDeNascimento)
			$cliente->dataDeNascimento = $request->dataDeNascimento;
		if($request->endereco)
			$cliente->endereco = $request->endereco;
		if($request->cpf)
			$cliente->cpf = $request->cpf;
		$cliente->save();
		return response()->json([$cliente]);
		
	}

	public function delete($id){
		Livros::destroy($id);
		return response()->json(['DELETADO']);
	}
}
