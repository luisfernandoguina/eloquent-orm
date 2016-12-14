@extends('layout')
@section('content')
    <div class="container">
    <h1 class="page-header">Todos los usuarios </h1>
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Genero</th>
            <th>Biography</th>



        </tr>

        </thead>

        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->biography}}</td>
            </tr>

        @endforeach

        </tbody>

    </table>
    </div>


@endsection