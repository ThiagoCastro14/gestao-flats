<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestFornecedor;
use App\Models\Componentes;
use App\Models\Fornecedor;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function __construct(Fornecedor $fornecedor)
    {
        $this->fornecedor = $fornecedor;
    }

    public function index (Request $request)
    {
        $pesquisar = $request->pesquisar;
        $findFornecedor = $this->fornecedor ->getFornecedoresPesquisarIndex(search: $pesquisar ?? '');
       
        return view ('pages.fornecedores.paginacao', compact('findFornecedor'));
    }

    public function delete (Request $request)
    {
        $id = $request->id;
        $buscaRegistro = Fornecedor::find($id);
        $buscaRegistro->delete();

        return response()-> json(['success' => true]);
    }

    public function cadastrarFornecedor(FormRequestFornecedor $request)
    {
        if($request->method() == "POST"){
            // Cria os dados
            $data = $request->all();            
            Fornecedor::create($data);
            Toastr::success('Gravado com sucesso');
            return redirect()->route('fornecedor.index');
        }
        // Mostra os dados
        return view('pages.fornecedores.create');
    }

    public function atualizarFornecedor(Request $request, $id)
    {
        if($request->method() == "PUT"){
            // Atualiza os dados
            $data = $request->all();          
            $buscaRegistro = Fornecedor::find($id);
            $buscaRegistro->update($data);

            return redirect()->route('fornecedor.index');
        }
        // Mostra os dados
        $findFornecedor = Fornecedor::where('id', '=', $id)->first();
        return view('pages.fornecedores.atualiza', compact('findFornecedor'));
    }
}
