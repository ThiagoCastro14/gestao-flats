<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestApartment;
use App\Models\Apartment;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ApartmentsController extends Controller
{
    public function __construct(Apartment $apartment)
    {
        $this->apartment = $apartment;
    }

    public function index (Request $request)
    {
        $pesquisar = $request->pesquisar;
        $findApartment = $this->apartment ->getApartmentsPesquisarIndex(search: $pesquisar ?? '');
       
        return view ('pages.apartments.paginacao', compact('findApartment'));
    }

    public function delete (Request $request)
    {
        $id = $request->id;
        $buscaRegistro = Apartment::find($id);
        $buscaRegistro->delete();

        return response()-> json(['success' => true]);
    }

    public function createApartment(FormRequestApartment $request)
    {
        if($request->method() == "POST"){
            // Cria os dados
            $data = $request->all();            
            Apartment::create($data);
            Toastr::success('Gravado com sucesso');
            return redirect()->route('apartment.index');
        }
        // Mostra os dados
        return view('pages.apartments.create');
    }

    public function updateApartment(Request $request, $id)
    {
        if($request->method() == "PUT"){
            // Atualiza os dados
            $data = $request->all();          
            $buscaRegistro = Apartment::find($id);
            $buscaRegistro->update($data);

            return redirect()->route('apartment.index');
        }
        // Mostra os dados
        $findApartment = Apartment::where('id', '=', $id)->first();
        return view('pages.apartments.update', compact('findApartment'));
    }
}
