@extends('layout')
@section('content')
    <div class="container">
    <h1 class="page-header">{{$title}} </h1>
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
        @include('query.partial.list-users')

        </tbody>

    </table>
    </div>


@endsection