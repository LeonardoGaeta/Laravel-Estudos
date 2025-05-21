@extends('layouts.app')

@section('title')
    Lista Tarefas | Detalhes Tarefa
@endsection

@section('content')

    <div class="card text-center mt-5">
        <div class="card-header">
            <p class="fw-bold">Detalhes Tarefa</p>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $tarefa->nome }}</h5>
            <p class="card-text">Completada? {{ $tarefa->completada ? 'Sim' : 'Não' }}</p>
            <a href="/edit/{{ $tarefa->id }}" class="btn btn-primary">Editar</a>
            <a href="/delete/{{ $tarefa->id }}" class="btn btn-danger">Apagar</a>
        </div>
    </div>

@endsection
