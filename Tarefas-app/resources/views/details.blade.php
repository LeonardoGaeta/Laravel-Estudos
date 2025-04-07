@extends('layouts.app')

@section('title')
    Lista Tarefas | Detalhes Tarefas
@endsection

@section('content')
    <div class="card text-center mt-5">
        <div class="card-header">
            <p class="fw-bold">Detalhes Tarefa</p>
        </div>
        <div class="card-body">
            <h5 class="card-title">Nome Tarefa</h5>
            <p class="card-test">Descrição Tarefa</p>
            <a href="edit" class="btn btn-primary">Editar</a>
            <a href="delete" class="btn btn-danger">Apagar</a>
        </div>
    </div>
@endsection