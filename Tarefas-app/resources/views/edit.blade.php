@extends('layouts.app')

@section('title')
    Lista Tarefas | Criar Tarefas
@endsection

@section('content')
    <form action="update" method="post" class="mt-4 p-4">
        @csrf
        <div class="form-group m-3">
            <label for="nome">Tarefa</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="form-group m-3">
            <label for="completada">Completada</label>
            <input type="radio" class="form-control" name="completada" id="completada">
        </div>
        <div class="form-group m-3">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>
@endsection