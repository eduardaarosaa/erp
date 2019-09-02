@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Consulte produtos</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-md-12">
                            <form action="#" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="busca" placeholder="Buscar">
                                </div>
                                <a href="#"><button class="btn btn-secundario" type="submit">Buscar</button></a>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Codigo</th>
                                        <th scope="col">Produto</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col">Editar</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($busca as $row)
                                    <tr>
                                        <th scope="row">{{$row->codigo}}
                                        </th>
                                        <td>{{$row->nome}}
                                        </td>
                                        <td>{{$row->categoria}}
                                        </td>
                                        <td>
                                            <a href="#">
                                                <button type=" button" class="btn btn-secundario">Editar</button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection