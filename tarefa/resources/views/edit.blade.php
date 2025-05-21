@extends('layouts.app')

@section('title')
    Lista Tarefas | Editar Tarefa
@endsection

@section('content')

    <form action="/update/{{ $tarefa->id }}" method="post" class="mt-4 p-4">
        @csrf

        <div class="form-group m-3">
            <label for="nome">Tarefa</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $tarefa->nome }}">
        </div>
        <div class="form-group m-3">
            <label for="completada">Completada? </label>
            <input type="checkbox" name="completada" id="completada" value="true" {{ $tarefa->completada ? 'checked' : '' }}>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Update">
        </div>
    </form>

@endsection