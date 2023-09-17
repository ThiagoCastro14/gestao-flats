<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestSupplier;
use App\Models\Componentes;
use App\Models\Supplier;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SupplieresController extends Controller
{
    public function __construct(SupplieresController $supplier)
    {
        $this->supplier = $supplier;
    }

    public function index (Request $request)
    {
        $pesquisar = $request->pesquisar;
        $findSupplier = $this->supplier ->getSupplieresPesquisarIndex(search: $pesquisar ?? '');
       
        return view ('pages.supplieres.paginacao', compact('findSupplier'));
    }

    public function delete (Request $request)
    {
        $id = $request->id;
        $buscaRegistro = Supplier::find($id);
        $buscaRegistro->delete();

        return response()-> json(['success' => true]);
    }

    public function cadastrarSupplier(FormRequestSupplier $request)
    {
        if($request->method() == "POST"){
            // Cria os dados
            $data = $request->all();            
            Supplier::create($data);
            Toastr::success('Gravado com sucesso');
            return redirect()->route('supplier.index');
        }
        // Mostra os dados
        return view('pages.supplieres.create');
    }

    public function atualizarSupplier(Request $request, $id)
    {
        if($request->method() == "PUT"){
            // Atualiza os dados
            $data = $request->all();          
            $buscaRegistro = Supplier::find($id);
            $buscaRegistro->update($data);

            return redirect()->route('supplier.index');
        }
        // Mostra os dados
        $findSupplier = Supplier::where('id', '=', $id)->first();
        return view('pages.supplieres.atualiza', compact('findSupplier'));
    }
}
