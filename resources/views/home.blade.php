@extends('layouts.navbar')

@section('content')
    <div class="container">
        <h3 class="text-center">Email: {{\Illuminate\Support\Facades\Auth::user()->email}} </h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Assunto</th>
            </tr>
            </thead>
            <tbody>
                @foreach($mails as $mail)
                    <tr>
                        <td>{{$mail}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

