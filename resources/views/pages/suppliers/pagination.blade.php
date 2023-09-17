{{-- Extends da Index --}}
@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Supplieres</h1>
    </div>
    <div>
        <form action="{{route('supplier.index')}}" method="get">
            <input type="text" name="pesquisar" placeholder="Digite o nome" />
            <button> Pesquisar </button>
            <a type="button" href="{{route('create.supplier')}}" class="btn btn-success float-end" >
                Incluir Supplier
            </a>
        </form>
        <div class="table-responsive mt-4">
            @if ($findSupplier->isEmpty())
                <p> Não existe dados</p>
            @else
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Email</th>
                  <th scope="col">Endereço</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($findSupplier as $supplier)
                    <tr>
                        <td>{{ $supplier->id }}</td>
                        <td>{{ $supplier->nome }}</td>
                        <td>{{ $supplier->email }}</td>
                        <td>{{ $supplier->endereco }}</td>
                        <td>{{ $supplier->telefone }}</td>
                        <td>
                            <a href="{{ route('update.supplier', $supplier->id) }}" class="btn btn-light btn-sm">
                                Editar                            
                            </a>
                            <meta name='csrf-token' content="{{ csrf_token() }}" />
                            <a onclick="deleteRegisterPagination( '{{route('supplier.delete')}}', {{ $supplier->id }} )" class="btn btn-danger btn-sm">
                                Excluir
                            </a>
                        </td>
                    </tr>        
                
                @endforeach
                                     
              </tbody>
            </table>
            @endif
        </div>
    </div>
@endsection