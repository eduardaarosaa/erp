@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Estoque</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-light" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Produtos</h5>
                                    <p class="card-text">Adicione produtos.</p>
                                    <button class="btn bg-secundario"><a href="{{route('formEstoque')}}" class="card-link">Adicionar</a></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-light" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Ver produtos</h5>
                                    <p class="card-text">Consulte todos os produtos adicionados no estoque.</p>
                                    <button class="btn bg-secundario"><a href="{{route('consulta')}}" class="card-link">Consultar</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection