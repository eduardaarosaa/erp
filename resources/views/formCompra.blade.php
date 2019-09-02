@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Realize uma compra</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">

                            <form action="{{route('create')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Código do produto</label>
                                    <input type="text" class="form-control" name="codigo" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o código do produto">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nome</label>
                                    <input type="text" class="form-control" name="nome" id="exampleInputPassword1" placeholder="Digite o nome do produto">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Quantidade</label>
                                    <input type="text" class="form-control" name="quantidade" id="exampleInputPassword1" placeholder="Digite a quantidade">
                                </div>

                                <button type="submit" class="btn btn-secundario">Comprar</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection