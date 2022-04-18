@extends('layouts.navbar')

@section('content')
<div class="container">
    <h1 class="text-center">
        Introduza o nome do departamento que quer adicionar:
    </h1>
    <div class="container">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-6">
                <form action="{{url('/departamentos/addToDB')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nomeDepartamento" class="form-label">Nome:</label>
                        <input type="text" id="nomeDepartamento" name="nomeDepartamento" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </form>
            </div>
            <div class="col-3">

            </div>
        </div>
    </div>
</div>
@endsection
