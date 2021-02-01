<div class="row">
    <div class="col-md mb-5">

        <h3 class="mb-3" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Filtros de busca</h3>

        <div class="collapse show" id="collapseExample">
            <div class="card card-body">

                <form action="/user/search" class="row">

                    <input type="hidden" name="action" value="search">

                    <div class="col-md-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome do usuário" value="{{ request()->get('name') }}">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email do usuário" value="{{ request()->get('email') }}">
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                        <a class="btn btn-warning" href="{{ route('product.index') }}">Limpar</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
