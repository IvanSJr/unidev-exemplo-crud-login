@extends('layout.template')
@section('main')

    @include('users.partials.search')
    <div class="row">
        <div class="col-md d-flex justify-content-between align-items-center">
            <h1>Listagem de Usuarios</h1>
            <a href="/user/create" class="btn btn-success btn-unidev">Cadastrar novo</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped mt-5">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome do Usuario</th>
                <th scope="col">Email</th>
                <th scope="col" width="150"></th>
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('product.edit', $user->id) }}">Editar</a>
                        <a class="btn btn-danger btn-sm" onclick="deleteInDatabase('{{ route('product.destroy', $user->id) }}')">Excluir</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
        </table>
    </div>
@endsection
