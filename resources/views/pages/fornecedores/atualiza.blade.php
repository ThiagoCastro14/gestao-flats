@extends('index')

@section('content')
    <form class="form"  method="POST" action="{{route('atualizar.fornecedor', $findFornecedor->id)}}">
        @csrf
        @method('PUT')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Editar Fornecedor</h1>
        </div>   
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" value=" {{ isset($findFornecedor->nome) ? $findFornecedor->nome : old('nome')}}" class="form-control @error('nome') is-invalid @enderror"  name="nome" disabled="nome">  
            @if($errors->has('nome'))
                <div class="invalid-feedback">{{$errors->first('nome')}}</div>            
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" value=" {{ isset($findFornecedor->email) ? $findFornecedor->email : old('email')}}" class="form-control @error('email') is-invalid @enderror"  name="email">  
            @if($errors->has('email'))
                <div class="invalid-feedback">{{$errors->first('email')}}</div>            
            @endif
        </div> 
        <div class="mb-3">
            <label class="form-label">Endereço</label>
            <input type="text" value=" {{ isset($findFornecedor->endereco) ? $findFornecedor->endereco : old('endereco')}}" class="form-control @error('endereco') is-invalid @enderror"  name="endereco">  
            @if($errors->has('endereco'))
                <div class="invalid-feedback">{{$errors->first('endereco')}}</div>            
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Telefone</label>
            <input type="text" value=" {{ isset($findFornecedor->telefone) ? $findFornecedor->telefone : old('telefone')}}" class="form-control @error('telefone') is-invalid @enderror"  name="telefone">  
            @if($errors->has('telefone'))
                <div class="invalid-feedback">{{$errors->first('telefone')}}</div>            
            @endif
        </div>     
            <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
@endsection