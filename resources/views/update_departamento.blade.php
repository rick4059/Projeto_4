@extends('layouts.navbar')

@section('content')
<div class="container">
    <h1 class="text-center">
        Introduza novo nome para o departamento:
    </h1>
    <div class="container">
        <div class="row">
            <div class="col-3">
                @php $departamentos = DB::select('SELECT * FROM departamentos WHERE id = ?', [$id]); @endphp
            </div>

            @foreach ($departamentos as $departamento)


            <div class="col-6">
                <form action="{{url('/departamentos/updateToDB')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nomeDepartamento" class="form-label">Nome:</label>
                        <input type="hidden" name="idDepartamento" value="{{$departamento->id}}">
                        <input type="text" id="nomeDepartamento" name="nomeDepartamento" class="form-control" value="{{$departamento->nome}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
            @endforeach
            <div class="col-3">

            </div>
        </div>
    </div>
</div>
@endsection
