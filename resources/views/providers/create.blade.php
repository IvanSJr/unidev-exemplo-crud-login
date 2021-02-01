@extends('layout.template')
@section('main')

<div class="row">
    <div class="col-md d-flex justify-content-between align-items-center">
        <h1>Cadastro de Fornecedores</h1>
        <a href="/provider" class="btn btn-primary">Voltar para a listagem</a>
    </div>
</div>
    @if(session()->has('success'))
    <div class="alert alert-success mt-5">
        <strong>Aviso!</strong><br>
        {{session()->get('success')}}
    </div>
    @endif
    @if(session()->has('error'))
    <div class="alert alert-danger mt-5">
        <strong>Aviso!</strong><br>
        {{ session()->get('error') }}
    </div>
    @endif

    @if(session()->has('errors'))
    <div class="alert alert-danger mt-5">
        <strong>Aviso!</strong><br>
        Alguns dados informados aparentam ter problemas: <br>
        <ul class="mt-2 mb-0">
            @foreach(session()->get('errors')->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/provider/store" method="POST">
        @csrf
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome do usuário</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ex.: Fulano de tal" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Email do usuário</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Ex.: fulanodetal@gmail.com" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="name" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ex.: digite sua senha" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="name" class="form-label">Confirme sua senha</label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Ex.: digite sua senha" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <button type="submit" class="btn btn-success">Registrar produto</button>
                </div>
            </div>
    </form>
@endsection
