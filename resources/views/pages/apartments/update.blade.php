@extends('index')

@section('content')
    <form class="form"  method="POST" action="{{route('update.apartment', $findApartment->id)}}">
        @csrf
        @method('PUT')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Editar Apartment</h1>
        </div>   
        <div class="mb-3">
            <label class="form-label">Descrição</label>
            <input type="text" value=" {{ isset($findApartment->descricao) ? $findApartment->descricao : old('descricao')}}" class="form-control @error('descricao') is-invalid @enderror"  name="descricao">  
            @if($errors->has('descricao'))
                <div class="invalid-feedback">{{$errors->first('descricao')}}</div>            
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Número</label>
            <input type="text" value=" {{ isset($findApartment->num_ap) ? $findApartment->num_ap : old('num_ap')}}" class="form-control @error('num_ap') is-invalid @enderror"  name="num_ap">  
            @if($errors->has('num_ap'))
                <div class="invalid-feedback">{{$errors->first('num_ap')}}</div>            
            @endif
        </div> 
        <div class="mb-3">
            <label class="form-label">Proprietário</label>
            <input type="text" value=" {{ isset($findApartment->proprietario) ? $findApartment->proprietario : old('proprietario')}}" class="form-control @error('proprietario') is-invalid @enderror"  name="proprietario">  
            @if($errors->has('proprietario'))
                <div class="invalid-feedback">{{$errors->first('proprietario')}}</div>            
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Endereço</label>
            <input type="text" value=" {{ isset($findApartment->endereco) ? $findApartment->endereco : old('endereco')}}" class="form-control @error('endereco') is-invalid @enderror"  name="endereco">  
            @if($errors->has('endereco'))
                <div class="invalid-feedback">{{$errors->first('endereco')}}</div>            
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Telefone</label>
            <input type="text" value=" {{ isset($findApartment->telefone) ? $findApartment->telefone : old('telefone')}}" class="form-control @error('telefone') is-invalid @enderror"  name="telefone">  
            @if($errors->has('telefone'))
                <div class="invalid-feedback">{{$errors->first('telefone')}}</div>            
            @endif
        </div>     
            <button type="submit" class="btn btn-success">Editar</button>
    </form>
@endsection