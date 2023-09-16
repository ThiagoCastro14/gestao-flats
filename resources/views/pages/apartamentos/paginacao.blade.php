{{-- Extends da Index --}}
@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Apartamentos</h1>
    </div>
    <div>
        <form action="{{route('apartamento.index')}}" method="get">
            <input type="text" name="pesquisar" placeholder="Digite o nome" />
            <button> Pesquisar </button>
            <a type="button" href="{{route('cadastrar.apartamento')}}" class="btn btn-success float-end" >
                Incluir Apartamento
            </a> 
        </form>
        <div class="table-responsive mt-4">
            @if ($findApartamento->isEmpty())
                <p> Não existe dados</p>
            @else
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Descrição</th>
                  <th scope="col">Numero</th>
                  <th scope="col">Proprietario</th>
                  <th scope="col">Endereço</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($findApartamento as $apartamento)
                    <tr>
                        <td>{{ $apartamento->id }}</td>
                        <td>{{ $apartamento->descricao }}</td>
                        <td>{{ $apartamento->num_ap}}</td>
                        <td>{{ $apartamento->proprietario }}</td>
                        <td>{{ $apartamento->endereco }}</td>
                        <td>{{ $apartamento->telefone }}</td>
                        <td>
                            <a href="{{ route('atualizar.apartamento', $apartamento->id) }}" class="btn btn-light btn-sm">
                                Editar                            
                            </a>
                            <meta name='csrf-token' content="{{ csrf_token() }}" />
                            <a onclick="deleteRegistroPaginacao( '{{route('apartamento.delete')}}', {{ $apartamento->id }} )" class="btn btn-danger btn-sm">
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