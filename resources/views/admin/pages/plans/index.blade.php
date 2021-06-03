@extends('adminlte::page')

@section('title', 'dashboard')

@section('content_header')
    <h1>Planos</h1>
@stop

@section('content')
    <p>Listagem</p>

    <div class="card">
        <div class="card-header">
            #filtros
        </div>

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td>Preço</td>
                        <td style="width: 10px">Acções</td>
                    </tr>
                </thead>
            @foreach ($plans as $plan)
                    <tr>
                        <td> {{ $plan->name }} </td>
                        <td> {{ $plan->price }} </td>
                        <td>
                            <a href="" class="btn btn-warning">Ver</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
        </div>

        <div class="card-footer">
            {!! $plans->links() !!}
        </div>
    </div>
@stop
