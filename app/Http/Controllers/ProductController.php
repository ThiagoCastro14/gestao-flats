<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestProduct;
use App\Models\Componentes;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index (Request $request)
    {
        $pesquisar = $request->pesquisar;
        $findProduct = $this->product->getProductsPesquisarIndex(search: $pesquisar ?? '');
       
        return view ('pages.products.paginacao', compact('findProduct'));
    }

    public function delete (Request $request)
    {
        $id = $request->id;
        $buscaRegistro = Product::find($id);
        $buscaRegistro->delete();

        return response()-> json(['success' => true]);
    }

    public function cadastrarProduct(FormRequestProduct $request)
    {
        if($request->method() == "POST"){
            // Cria os dados
            $data = $request->all();
            $componentes = new Componentes();
            $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);
            Product::create($data);

            Toastr::success('Gravado com sucesso');
            return redirect()->route('product.index');
        }
        // Mostra os dados
        return view('pages.products.create');
    }

    public function atualizarProduct(FormRequestProduct $request, $id)
    {
        if($request->method() == "PUT"){
            // Atualiza os dados
            $data = $request->all();
            $componentes = new Componentes();
            $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);
            $buscaRegistro = Product::find($id);
            $buscaRegistro->update($data);

            return redirect()->route('product.index');
        }
        // Mostra os dados
        $findProduct = Product::where('id', '=', $id)->first();
        return view('pages.products.atualiza', compact('findProduct'));
    }
}
