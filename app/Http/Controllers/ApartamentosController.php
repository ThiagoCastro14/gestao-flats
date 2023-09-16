<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestApartamento;
use App\Models\Apartamento;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ApartamentosController extends Controller
{
    public function __construct(Apartamento $apartamento)
    {
        $this->apartamento = $apartamento;
    }

    public function index (Request $request)
    {
        $pesquisar = $request->pesquisar;
        $findApartamento = $this->apartamento ->getApartamentosPesquisarIndex(search: $pesquisar ?? '');
       
        return view ('pages.apartamentos.paginacao', compact('findApartamento'));
    }

    public function delete (Request $request)
    {
        $id = $request->id;
        $buscaRegistro = Apartamento::find($id);
        $buscaRegistro->delete();

        return response()-> json(['success' => true]);
    }

    public function cadastrarApartamento(FormRequestApartamento $request)
    {
        if($request->method() == "POST"){
            // Cria os dados
            $data = $request->all();            
            Apartamento::create($data);
            Toastr::success('Gravado com sucesso');
            return redirect()->route('apartamento.index');
        }
        // Mostra os dados
        return view('pages.apartamentos.create');
    }

    public function atualizarApartamento(Request $request, $id)
    {
        if($request->method() == "PUT"){
            // Atualiza os dados
            $data = $request->all();          
            $buscaRegistro = Apartamento::find($id);
            $buscaRegistro->update($data);

            return redirect()->route('apartamento.index');
        }
        // Mostra os dados
        $findApartamento = Apartamento::where('id', '=', $id)->first();
        return view('pages.apartamentos.atualiza', compact('findApartamento'));
    }
}
