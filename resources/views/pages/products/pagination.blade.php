{{-- Extends da Index --}}
@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
    </div>
    <div>
        <form action="{{route('product.index')}}" method="get">
            <input type="text" name="pesquisar" placeholder="Digite o nome" />
            <button> Pesquisar </button>
            <a type="button" href="{{route('create.product')}}" class="btn btn-success float-end" >
                Incluir Produto
            </a>
        </form>
        <div class="table-responsive mt-4">
            @if ($findProduct->isEmpty())
                <p> Não existe dados</p>
            @else
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Valor</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($findProduct as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->nome }}</td>
                        <td>{{ 'R$' . ' ' . number_format($product->valor, 2, ',', '.' ) }}</td>
                        <td>
                            <a href="{{ route('update.product', $product->id) }}" class="btn btn-light btn-sm">
                                Editar                            
                            </a>
                            <meta name='csrf-token' content="{{ csrf_token() }}" />
                            <a onclick="deleteRegisterPagination( '{{route('product.delete')}}', {{ $product->id }} )" class="btn btn-danger btn-sm">
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