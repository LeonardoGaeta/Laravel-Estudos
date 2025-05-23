@extends('layouts.app')

@section('title')
    Lista Tarefas | Criar Tarefa
@endsection

@section('content')

    <form action="store-data" method="post" class="mt-4  p-4">
        @csrf

        <div class="form-group m-3">
            <label for="nome">Tarefa</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="form-group m-3">
            <button type="submit" class="btn btn-primary">Criar</button>
        </div>
    </form>

@endsection