@extends('layout.template')
@section('main')
<div class="row">
    <div class="col-md d-flex justify-content-between align-items-center">
        <h1>Listagem de Fornecedores</h1>
        <a href="/provider/create" class="btn btn-success btn-unidev">Cadastrar novo</a>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome do Fornecedor</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col" width="150"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($providers as $provider)
            <tr>
                <td>{{ $provider->id }}</td>
                <td>{{ $provider->name }}</td>
                <td>{{ $provider->email }}</td>
                <td>{{ $provider->phone }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('product.edit', $provider->id) }}">Editar</a>
                    <a class="btn btn-danger btn-sm" onclick="deleteInDatabase('{{ route('product.destroy', $provider->id) }}')">Excluir</a>
                </td>
            </tr>
            @endforeach
            </tbody>
    </table>
</div>

<div class="mt-5">
    {{$providers->links()}}
</div>
@endsection
