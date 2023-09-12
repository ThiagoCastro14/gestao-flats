{{-- Extends da Index --}}
@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Fornecedores</h1>
    </div>
    <div>
        <form action="{{route('fornecedor.index')}}" method="get">
            <input type="text" name="pesquisar" placeholder="Digite o nome" />
            <button> Pesquisar </button>
            <a type="button" href="{{route('cadastrar.fornecedor')}}" class="btn btn-success float-end" >
                Incluir Fornecedor
            </a>
        </form>
        <div class="table-responsive mt-4">
            @if ($findFornecedor->isEmpty())
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
                @foreach ($findFornecedor as $fornecedor)
                    <tr>
                        <td>{{ $fornecedor->id }}</td>
                        <td>{{ $fornecedor->nome }}</td>
                        <td>{{ $fornecedor->email }}</td>
                        <td>{{ $fornecedor->endereco }}</td>
                        <td>{{ $fornecedor->telefone }}</td>
                        <td>
                            <a href="{{ route('atualizar.fornecedor', $fornecedor->id) }}" class="btn btn-light btn-sm">
                                Editar                            
                            </a>
                            <meta name='csrf-token' content="{{ csrf_token() }}" />
                            <a onclick="deleteRegistroPaginacao( '{{route('fornecedor.delete')}}', {{ $fornecedor->id }} )" class="btn btn-danger btn-sm">
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