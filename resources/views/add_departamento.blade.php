@extends('layouts.navbar')

@section('content')
<div class="container">
    <h1 class="text-center">
        Introduza o nome do departamento que quer utilizar:
    </h1>
    <form action="{{url('/departamentos/add')}}" method="POST">
        <div class="mb-3">
            <label for="NomeDepartamento" class="form-label">Nome</label>
            <input type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>
@endsection
