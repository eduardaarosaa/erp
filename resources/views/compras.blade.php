@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Compras</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card bg-light" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Compra</h5>
                                    <p class="card-text">Realize compras dos produtos que estão em falta.</p>
                                    <button class="btn bg-secundario"><a href="{{route('formCompra')}}" class="card-link">Comprar</a></button>
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