@extends('index')

@section('content')
    <form class="form"  method="POST" action="{{route('create.apartment')}}">
        @csrf
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Cadastrar Novo Apartamento</h1>
        </div>   
        <div class="mb-3">
            <label class="form-label">Descrição</label>
            <input type="text" value="{{ old('descricao')}}" class="form-control @error('descricao') is-invalid @enderror"  name="descricao">  
            @if($errors->has('descricao'))
                <div class="invalid-feedback">{{$errors->first('descricao')}}</div>            
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Número</label>
            <input type="text" value="{{ old('num_ap')}}" class="form-control @error('num_ap') is-invalid @enderror"  name="num_ap">  
            @if($errors->has('num_ap'))
                <div class="invalid-feedback">{{$errors->first('num_ap')}}</div>            
            @endif
        </div> 
        <div class="mb-3">
            <label class="form-label">Proprietario</label>
            <input type="text" value="{{ old('proprietario')}}" class="form-control @error('proprietario') is-invalid @enderror"  name="proprietario">  
            @if($errors->has('proprietario'))
                <div class="invalid-feedback">{{$errors->first('proprietario')}}</div>            
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Endereço</label>
            <input type="text" value="{{ old('endereco')}}" class="form-control @error('endereco') is-invalid @enderror"  name="endereco">  
            @if($errors->has('endereco'))
                <div class="invalid-feedback">{{$errors->first('endereco')}}</div>            
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Telefone</label>
            <input type="text" value="{{ old('telefone')}}" class="form-control @error('telefone') is-invalid @enderror"  name="telefone">  
            @if($errors->has('telefone'))
                <div class="invalid-feedback">{{$errors->first('telefone')}}</div>            
            @endif
        </div>     
            <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
@endsection